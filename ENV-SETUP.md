# VetSync Environment Setup

## Environment Variables Guide

Create a `.env` file in the project root with these variables:

### Local Development (Laragon)

```env
# Application Settings
APP_NAME=VetSync
APP_ENV=local
APP_URL=http://vetsync.test
APP_DEBUG=true
TIMEZONE=Asia/Manila

# Database Configuration (MySQL)
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=vetsync
DB_USERNAME=root
DB_PASSWORD=

# Session Configuration
SESSION_NAME=VETSYNC_SESSION
SESSION_LIFETIME=120

# Email Configuration (Gmail SMTP)
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USERNAME=Vetsync.01@gmail.com
SMTP_PASSWORD=spcb gkth opmn yvvb
SMTP_FROM_EMAIL=Vetsync.01@gmail.com
SMTP_FROM_NAME=VetSync Veterinary Clinic

# SMS Configuration (Twilio - Disabled for local)
TWILIO_ENABLED=false
TWILIO_ACCOUNT_SID=
TWILIO_AUTH_TOKEN=
TWILIO_FROM_NUMBER=
```

### Production (Render + Supabase)

```env
# Application Settings
APP_NAME=VetSync
APP_ENV=production
APP_URL=https://your-app.onrender.com
APP_DEBUG=false
TIMEZONE=Asia/Manila

# Database Configuration (PostgreSQL/Supabase)
DB_HOST=db.xxxxxxxxxxxxx.supabase.co
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=your-supabase-password

# Session Configuration
SESSION_NAME=VETSYNC_SESSION
SESSION_LIFETIME=120

# Email Configuration (Gmail SMTP)
SMTP_HOST=smtp.gmail.com
SMTP_PORT=587
SMTP_USERNAME=Vetsync.01@gmail.com
SMTP_PASSWORD=spcb gkth opmn yvvb
SMTP_FROM_EMAIL=Vetsync.01@gmail.com
SMTP_FROM_NAME=VetSync Veterinary Clinic

# SMS Configuration (Twilio)
TWILIO_ENABLED=false
TWILIO_ACCOUNT_SID=your-account-sid
TWILIO_AUTH_TOKEN=your-auth-token
TWILIO_FROM_NUMBER=+1234567890

# Firebase Configuration
FIREBASE_CREDENTIALS=your-firebase-json-credentials

# Google OAuth
GOOGLE_CLIENT_ID=your-client-id
GOOGLE_CLIENT_SECRET=your-client-secret
```

## Notes

- The `.env` file is in `.gitignore` and should NEVER be committed to Git
- All config files now use the `env()` helper function with fallback defaults
- For local development, most values have sensible defaults if not set
- For production, you MUST set environment variables in Render dashboard



