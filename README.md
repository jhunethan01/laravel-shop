# Laravel Livewire Project

This is a Laravel project that showcases the use of Livewire for building modern, reactive, dynamic interfaces.

## Requirements

- PHP >= 7.3
- Composer
- Laravel >= 7.0
- Livewire
- MySQL (or any DBMS supported by Laravel)

## Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/yourrepository.git
```

2. Navigate into the directory
```bash
cd laravel-shop
```

3. Install the dependancies
```bash 
composer install
```

4. Copy the example env file and make the required configuration changes in the .env file
```bash 
cp .env.example .env
```

5. Generate a new application key
```bash 
php artisan key:generate
```

6. Run the database migrations (Set the database connection in .env before migrating)
```bash 
php artisan migrate
```

7. Seed the database
```bash
php artisan db:seed
```

## Running Locally
To serve the application locally, you can use the serve Artisan command:
```bash 
php artisan serve
``` 
Then, access the application in your browser at http://localhost:8000

## License
This project is open-sourced software licensed under the MIT License. 
```
# File: .gitignore
/vendor
/node_modules
/public/storage
/storage/*.key
/.phpunit.result.cache
/.phpunit-watcher.yml
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
.env
.env.backup
.phpunit.result.cache
.phpunit-watcher.yml
.DS_Store
Thumbs.db
.cache
.idea
*.iml
*.log
*.swp
*.swo
*.sql
*.sqlite
*.sqlite3
*.log
*.gz
*.zip
*.rar
*.7z
*.tar
*.tgz
*.bak
*.sql
```