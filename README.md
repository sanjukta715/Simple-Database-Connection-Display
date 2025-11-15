Simple Database Connection & Display (PHP + MySQL)

## Objective
Connect PHP to a MySQL database and display static table data on a webpage.

## Requirements
- PHP 7+ or 8+
- MySQL Server / XAMPP
- Browser

## Steps to Run

### 1. Import Database
1. Open phpMyAdmin.
2. Create a new database or use the included `users.sql` file.
3. Go to **Import → Choose File → users.sql**.

### 2. Configure Database Connection
Edit `db_connect.php` if needed:

```php
$user = "root";
$pass = "";
$dbname = "experiment1_db";
