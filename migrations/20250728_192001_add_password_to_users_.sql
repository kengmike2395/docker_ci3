-- Migration: 20250728_192001_add_password_to_users_.sql
-- Created: Mon, Jul 28, 2025  7:20:01 PM

ALTER TABLE users2 ADD COLUMN password VARCHAR(255);
