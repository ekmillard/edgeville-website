
# Edgeville Website

This repository contains the source code for the **Edgeville** website, developed using the Laravel framework. It features a user-friendly content management system (CMS) powered by **Laravel Nova** for backend management.

## Requirements

- PHP >= 8.0
- Laravel >= 9.x
- Composer
- MySQL (or any other compatible database)
- Node.js & NPM (for front-end asset management)

## Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/username/edgeville.git
   cd edgeville
   ```

2. **Install dependencies**:

   Run the following command to install PHP dependencies via Composer:

   ```bash
   composer install
   ```

   Then, install JavaScript dependencies:

   ```bash
   npm install
   ```

3. **Create and configure the environment file**:

   Copy the `.env.example` file to `.env`:

   ```bash
   cp .env.example .env
   ```

   Update your `.env` file with the appropriate database credentials and other configuration values.

4. **Generate the application key**:

   ```bash
   php artisan key:generate
   ```

5. **Migrate the database**:

   Run the migrations to set up the database schema:

   ```bash
   php artisan migrate
   ```

6. **Compile the front-end assets**:

   Compile the CSS and JavaScript assets:

   ```bash
   npm run dev
   ```

   For production builds, use:

   ```bash
   npm run prod
   ```

7. **Run the application**:

   Start the Laravel development server:

   ```bash
   php artisan serve
   ```

   The website should now be accessible at `http://localhost:8000`.

## Admin Panel (Laravel Nova)

The Edgeville website comes with a powerful admin panel built using **Laravel Nova**. To access the backend:

1. Navigate to `/admin` on your website (e.g., `http://localhost:8000/admin`).
2. Log in using the credentials created in your database (you can create users via seeding or manually).
   
   For seeding:

   ```bash
   php artisan db:seed
   ```

   You can modify the seeder to include the admin credentials.

## Deployment

For production deployment, make sure to:

1. **Run database migrations**:

   ```bash
   php artisan migrate --force
   ```

2. **Optimize configuration**:

   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Compile production assets**:

   ```bash
   npm run prod
   ```

4. **Set appropriate file permissions** for directories like `storage` and `bootstrap/cache`:

   ```bash
   sudo chmod -R 775 storage bootstrap/cache
   ```

## Troubleshooting

- **Missing dependencies**: Make sure that both Composer and NPM dependencies are installed.
- **Database issues**: Double-check your `.env` file for correct database credentials.
- **Cache issues**: If encountering issues after deployment, try clearing caches:

  ```bash
  php artisan config:clear
  php artisan cache:clear
  php artisan view:clear
  ```

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.
