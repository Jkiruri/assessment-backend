# Backend

This is the backend setup for the Project Name, built using Laravel.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.0
- Composer
- Laravel Installer
- Node.js and npm (for frontend assets)
- A web server (e.g., Apache, Nginx) or Laravel's built-in server
- A database (e.g., MySQL, PostgreSQL, SQLite)

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Jkiruri/assessment-backend
    cd project-name
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Set up the environment file:**

    Copy the `.env.example` file to `.env`:

    ```bash
    cp .env.example .env
    ```

    Then, update the `.env` file with your database and other configurations.

4. **Generate an application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run database migrations:**

    ```bash
    php artisan migrate
    ```



6. **Compile frontend assets:**

    ```bash
    npm run dev
    ```

7. **Start the development server:**

    ```bash
    php artisan serve
    ```

    Alternatively, configure your web server (Apache, Nginx) to serve the application.