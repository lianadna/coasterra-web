# Econest - Ecology & Environment Laravel Template

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Tailwind_CSS-4.0-38B2AC?style=for-the-badge&logo=tailwind-css" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge" alt="License">
</p>

## 📋 Table of Contents

- [About](#-about)
- [Features](#-features)
- [Requirements](#-requirements)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Usage](#-usage)
- [Deployment](#-deployment)
- [API Documentation](#-api-documentation)
- [Contributing](#-contributing)
- [License](#-license)
- [Support](#-support)

## 🌟 About

Econest is a modern, responsive ecology and environment Laravel template built with Laravel 12.x. It provides a comprehensive platform for environmental organizations and ecology-focused projects to showcase initiatives, manage donations, coordinate volunteer programs, and present events and camping activities. The template features multiple homepage variants and a clean, professional design focused on user experience and accessibility.

## ✨ Features

- **🏠 Multiple Homepage Variants** - 5 different homepage layouts
- **💰 Donation Management** - Secure donation processing system
- **🤝 Volunteer Management** - Volunteer registration and management
- **🏕️ Camping Programs** - Event and camping activity management
- **📝 Blog System** - Content management with multiple blog layouts
- **📱 Responsive Design** - Mobile-first approach with Tailwind CSS
- **🔒 Security Features** - CSRF protection, secure sessions, input validation
- **📊 Admin Dashboard** - Comprehensive admin panel for content management
- **🌐 Multi-language Support** - Ready for internationalization
- **📧 Contact Forms** - Built-in contact and inquiry forms
- **🎨 Modern UI/UX** - Clean, professional design with smooth animations

## 🛠️ Requirements

- **PHP**: 8.2 or higher
- **Composer**: Latest stable version
- **Node.js**: 18.x or higher
- **NPM**: Latest stable version
- **Database**: SQLite, MySQL 8.0+, or PostgreSQL 12+
- **Web Server**: Apache, Nginx, or Laravel's built-in server

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/your-username/econest.git
cd econest
```

### 2. Install PHP Dependencies
```bash
composer install --no-dev --optimize-autoloader
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration
```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database Setup
```bash
# For SQLite (default)
touch database/database.sqlite

# For MySQL/PostgreSQL, update your .env file:
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=econest
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Run migrations
php artisan migrate
```

### 6. Build Assets
```bash
# Development build
npm run dev

# Production build
npm run build
```

### 7. Generate Application Key
```bash
php artisan key:generate
```

## ⚙️ Configuration

### Environment Variables
Create a `.env` file and configure the following variables:

```env
APP_NAME="Econest"
APP_ENV=production
APP_KEY=base64:YOUR_GENERATED_KEY
APP_DEBUG=false
APP_URL=https://yourdomain.com

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=error

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_DATABASE=econest
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=true
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=strict

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Security Configuration
```env
# Enable HTTPS in production
SESSION_SECURE_COOKIE=true
SANCTUM_STATEFUL_DOMAINS=yourdomain.com

# Rate limiting
RATE_LIMITER_STORE=database
```

## 🎯 Usage

### Development Server
```bash
# Start Laravel development server
php artisan serve

# Start with queue worker and Vite dev server
composer run dev
```

### Available Routes
- `/` - Homepage (5 variants: /index2, /index3, /index4, /index5)
- `/about` - About page
- `/services` - Services page
- `/contact` - Contact page
- `/blog-grid` - Blog grid layout
- `/blog-standard` - Blog standard layout
- `/blog-details` - Individual blog post
- `/donations` - Donation page
- `/volunteer` - Volunteer page
- `/camping` - Camping programs
- `/project` - Projects page

### Admin Panel
Access the admin panel at `/admin` (requires authentication)

## 🚀 Deployment

### Production Deployment Checklist

1. **Environment Setup**
   ```bash
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://yourdomain.com
   ```

2. **Database Configuration**
   - Set up production database
   - Run migrations: `php artisan migrate --force`
   - Seed data if needed: `php artisan db:seed --force`

3. **Asset Compilation**
   ```bash
   npm run build
   ```

4. **Caching**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   php artisan event:cache
   ```

5. **Queue Configuration**
   ```bash
   # Start queue worker
   php artisan queue:work --tries=3 --timeout=90

   # For production, use Supervisor or similar
   ```

6. **Web Server Configuration**
   - Point document root to `public/` directory
   - Configure URL rewriting
   - Set proper file permissions

### Docker Deployment
```dockerfile
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev

# Install PHP extensions
RUN docker-php-ext-install pdo_sqlite mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 755 storage bootstrap/cache

CMD ["php-fpm"]
```

## 📚 API Documentation

### Authentication
- Uses Laravel Sanctum for API authentication
- CSRF protection enabled for web routes
- Session-based authentication for web interface
