# News App

This application, built using PHP with Laravel framework and MySql, along with Alpine.js and jQuery, serves as a platform for posting and commenting with an integrated administration section. It's designed for demonstration purposes only.

## Features

### Public Main Page
![Public Main Page Screenshot](mainPage.png)

### Login Page
![Login Page Screenshot](loginPage.png)

### Comments Section
![Comments Section Screenshot](comments.png)

### Single Post View
![Single Post Screenshot](postPage.png)

### Admin Management Interface
![Admin Management Screenshot](adminComments.png)

## Requirements

- Git
- Code Editor (e.g., PHPStorm or any other)
- MySql (or any compatible database for data storage)
- PHP
- PHP Extensions for Laravel

## Installation Guide

### Setting Up

1. **Clone the Repository**: 

       Clone or download the repository to your desired directory.

3. **Open Terminal in Directory**: 

        Ensure the terminal is opened at the root of the chosen directory.

5. **Code Editor Setup**: 

        Open the directory with your preferred code editor.

7. **Environment Configuration**: 

        Rename `.env.example` file at the root to `.env`. Then, update the `.env` file with your database credentials:
   
    DB_HOST=your_mysql_ip_address

    DB_DATABASE=your_databases_name

    DB_USERNAME=your_mysql_username

    DB_PASSWORD=your_mysql_password

9. **Install Dependencies**: 

    Run `composer install`. If there are any requirement issues, use `composer install --ignore-platform-reqs`.

10. **Generate Application Key**:

    php artisan key:generate

11. **Database Migration**: 

    Execute `php artisan migrate` to create necessary tables and columns in your database.

12. **Database Seeding**: 

    Populate the database with initial data using `php artisan db:seed`.

13. **Run the Application**:

    php artisan serv
    
    Then, navigate to the address indicated in the terminal (default: `http://127.0.0.1:8000`).

15. **Accessing the Application**:

 - **Register**: To create posts, register on the registration page.
 - **Demo Admin Account**: For admin access, use the following credentials:

    ```
   Email: john@smith.com
   Password: 123456
   ```

    Alternatively, set admin mode in the users table by changing the `isAdmin` field.

### Default Resources

- Favicon and Navigation Icon: `public/images/newsicon.png`
- Placeholder Image for Missing Images: `public/images/no-image.jpg`

## Usage

Enjoy the functionality of the News App, including creating posts, commenting, and managing content through the admin panel.

---

**Note**: This application is intended for demonstration purposes and not for production use.
