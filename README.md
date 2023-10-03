# My PHP Project

This is a full-stack PHP project without any framework. It follows the MVC architecture and uses a MySQL database to store data.

## Project Structure

The project has the following file structure:

```
my-php-project
├── public
│   ├── index.php
│   └── assets
│       ├── css
│       └── js
├── src
│   ├── config.php
│   ├── db.php
│   ├── controllers
│   │   └── HomeController.php
│   ├── models
│   │   └── HomeModel.php
│   └── views
│       └── home.php
├── vendor
├── .htaccess
├── composer.json
├── composer.lock
├── README.md
└── .gitignore
```

The `public` directory contains the entry point of the application (`index.php`) and the assets directory for CSS and JavaScript files.

The `src` directory contains the core logic of the application. It has the `config.php` file for configuration settings, `db.php` file for database connection, `controllers` directory for handling requests, `models` directory for interacting with the database, and `views` directory for rendering HTML templates.

The `vendor` directory contains the dependencies installed via Composer.

The `.htaccess` file contains the configuration settings for the Apache web server, such as URL rewriting rules.

The `composer.json` file is the configuration file for Composer. It lists the dependencies for the project.

The `composer.lock` file contains the exact versions of the dependencies installed via Composer.

## Installation

To install the project, follow these steps:

1. Clone the repository: `git clone https://github.com/your-username/my-php-project.git`
2. Install dependencies: `composer install`
3. Configure the database credentials in `src/config.php`
4. Import the database schema from `database/schema.sql`
5. Start the PHP development server: `php -S localhost:8000 -t public`

## Usage

Once the installation is complete, you can access the application by visiting `http://localhost:8000` in your web browser.

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.