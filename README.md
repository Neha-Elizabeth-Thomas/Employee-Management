# Employee Management System

This is a PHP & MySQL-based **Employee Management System** that performs full **CRUD operations** on employees, departments, and projects. It showcases many-to-one and many-to-many relationships through intermediate tables.

## 🛠️ Tech Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL (via phpMyAdmin)
- **Local Server**: XAMPP

---

## 📘 Database Schema

The system uses a **relational schema** consisting of the following tables:

### 🔹 Tables

- **employee**: Stores employee details  
- **department**: Contains department information  
- **project**: Project records  
- **works_for**: Links employees to departments (many-to-one)  
- **works_on**: Links employees to projects (many-to-many)

---

## ✨ Features

- Add, edit, delete, and view **Employees**
- Assign employees to **Departments**
- Add and manage **Projects**
- Track which employees are working on which **Projects**
- Perform **CRUD operations** on all entities
- Relational integrity between tables

---

## 🚀 How to Run Locally (Using XAMPP)

### 🔸 1. Requirements

- XAMPP (Install from [https://www.apachefriends.org](https://www.apachefriends.org))
- Web browser (Chrome/Firefox recommended)

---

### 🔸 2. Steps to Set Up

#### ✅ Step 1: Move Project Folder

Place your project folder (e.g., `employee-management`) into the `htdocs` directory of XAMPP:

```

C:\xampp\htdocs\employee-management

````

---

#### ✅ Step 2: Start Apache and MySQL

- Open **XAMPP Control Panel**
- Start both **Apache** and **MySQL**

---

#### ✅ Step 3: Create the Database

1. Open browser → go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Click **New** → create a database (e.g., `ems`)
3. Import the provided `ems.sql` file:
   - Click **Import**
   - Choose `ems.sql` (in your project folder)
   - Click **Go**

---

#### ✅ Step 4: Configure `database.php`

Ensure `database.php` in your project contains the correct database credentials:

```php
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ems";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
````

---

#### ✅ Step 5: Run the App

Open your browser and visit:

```
http://localhost/employee-management/index.php
```

Start adding employees, departments, and projects!

---

## 📁 Suggested Folder Structure

```
employee-management/
├── index.php
├── employee/
│   ├── add.php
│   ├── edit.php
│   └── delete.php
├── department/
│   └── ...
├── project/
│   └── ...
├── database.php
├── ems.sql
└── assets/
    ├── css/
    └── js/
```

---

## 🤝 Contributions

Pull requests and suggestions are welcome. Help improve this system by:

* Adding search/filter
* Export to Excel/PDF
* Login/Authentication

---

## 🧑‍💻 Author

Developed as a part of academic coursework to understand database relationships and PHP-based web development.

---

## 📜 License

This project is open for educational and personal use.

```
