#!/bin/sh

set -e

GREEN='\033[0;32m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m' # No color

echo "${YELLOW}🔄 Running migrations...${NC}"

# Wait for MySQL to be ready
until mysqladmin ping -h $MYSQL_HOST -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" --ssl=0 --silent; do
  echo "${YELLOW}⏳ Waiting for database connection...${NC}"
  sleep 2
done

# Ensure migrations_log table exists
mysql -h $MYSQL_HOST -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" --ssl=0 "$MYSQL_DATABASE" <<-EOSQL
  CREATE TABLE IF NOT EXISTS migrations_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    filename VARCHAR(255) NOT NULL UNIQUE,
    applied_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  );
EOSQL

# Sort files and loop through
FILES=$(find ./migrations -name '*.sql' | sort)

for file in $FILES; do
  filename=$(basename "$file")
  applied=$(mysql -h $MYSQL_HOST -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" --ssl=0 "$MYSQL_DATABASE" -sse \
    "SELECT COUNT(*) FROM migrations_log WHERE filename = '$filename'")

  if [ "$applied" -eq 0 ]; then
    echo "${GREEN}🚀 Applying $filename...${NC}"
    if mysql -h $MYSQL_HOST -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" --ssl=0 "$MYSQL_DATABASE" < "$file"; then
      mysql -h $MYSQL_HOST -u"$MYSQL_USER" -p"$MYSQL_PASSWORD" --ssl=0 "$MYSQL_DATABASE" -e \
        "INSERT INTO migrations_log (filename) VALUES ('$filename');"
    else
      echo "${RED}❌ Failed to apply $filename. Aborting.${NC}"
      exit 1
    fi
  else
    echo "${YELLOW}✅ Skipped $filename (already applied)${NC}"
  fi
done

echo "${GREEN}🎉 All migrations completed.${NC}"
