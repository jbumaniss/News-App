

# PHP/Laravel/MySql/Alpine.js/jQuery created news app.

## Fully functional application for posting and commenting with administration section.

## This app is only for demonstration purposes only!

## Public Main Page

---

![Screenshot](mainPage.png)



## Login 

---

![Screenshot](loginPage.png)


---

## Comments

![Screenshot](comments.png)

---

## Single Post 

![Screenshot](postPage.png)

---

## Admin Management and more ...

![Screenshot](adminComments.png)

---


# How To Set up:



## Requirements:

### Mysql or any other database for information storing.
### PHP installed on your machine

### 1. Clone or download to your chosen directory

### 2. Open with your chosen editor.

### 3. Rename .env.example file from your core directory to .env.

### 4. Next fill the renamed .env file from your core directory with your credentials:
#### DB_HOST=your_mysql_ip_address, DB_DATABASE=your_databases_name, DB_USERNAME=your_mysql_database_username
#### DB_PASSWORD=your_mysql_database_password if is set if none leave empty.

## Execute commands specified in terminal successfully:

### 5. Generate app key

```
composer install
```

#### if fails try this 

```
composer install --ignore-platform-reqs
```

### 6. Generate app key

```
php artisan key:generate
```

### 7. Migrate database migrations to fill your database with all the necessary tables and columns:

```
php artisan migrate
```

### 8. Populate database user table and category table

```
php artisan db:seed
```

###  9. Default images are located in public/images:
#### newsicon.png for icon
#### no-image.jpg for alternative image if no image exists

### 10. Run the App command:

````
php artisan serve
````

### 11. Register in register page to login and use app

### 12. To use administration mode need to set in your database users table isAdmin field with digit:1 if user is admin
### or login in demo admin account login 

#### login
````
john@smith.com
````
#### password
````
123456
````

## Enjoy!

---
