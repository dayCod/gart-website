# Gart Studio Website
Welcome to Gart Studio Project! We specialize in creating stunning photo products that turn your cherished moments into timeless treasures. Our website is designed to showcase our photography services and provide an exceptional user experience for our clients.

## System Requirements
```bash
PHP : ^8.0
Support MySQL and PostgreSQL
Laravel Framework: v10.*
Composer Version: 2.5.*
```

## Installations
To set up the Gart Studio Project website locally, follow these steps:

### 1. Clone the Repository
```bash
https://github.com/dayCod/gart-website.git
```

### 2. Navigate to the Project Directory:
```bash
cd gart-website
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Copy & Create Environment Files
```bash
cp .env.example .env
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Setup Database 
```php
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

### 7. Migrate and Seed Table to Existing Database
```bash
php artisan migrate --seed
```

### 8. Run the Application Server
```bash
php artisan serve 
```
if want to customize the port:
```bash
php artisan serve --port={8001/8002/...}
```

### 9. Login Credential
```bash
email: admin@gart.com
password: gartstudioproject
```

Enjoy exploring the Gart Studio Project website and creating beautiful photo products! If you have any questions or need assistance, please don't hesitate to contact us.

