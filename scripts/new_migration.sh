#!/bin/sh

# Exit immediately if any command fails
set -e

# Check if a name was passed
if [ -z "$1" ]; then
  echo "❌ Error: Please provide a name for the migration file."
  echo "Usage: ./scripts/new_migration.sh add_users_table"
  exit 1
fi

# Set the migrations directory
MIGRATIONS_DIR="./migrations"
mkdir -p "$MIGRATIONS_DIR"

# Generate timestamp and format the filename
TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
CLEAN_NAME=$(echo "$1" | tr '[:space:]' '_' | tr '-' '_')
FILENAME="${TIMESTAMP}_${CLEAN_NAME}.sql"
FILEPATH="${MIGRATIONS_DIR}/${FILENAME}"

# Create the file with a standard header
{
  echo "-- Migration: $FILENAME"
  echo "-- Created: $(date)"
  echo ""
} > "$FILEPATH"

echo "✅ Created migration file: $FILEPATH"

# Try to open it in VS Code
if command -v code >/dev/null 2>&1; then
  code "$FILEPATH"
else
  echo "⚠️ VS Code ('code') command not found. Please install or add to PATH."
fi
