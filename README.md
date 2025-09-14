<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 📰 Laravel Multi-Guard Blog Management System

This project is a **role-based blog management system** built with **Laravel 12**, featuring **multiple authentication guards**, **middleware-based access control**, and a **comprehensive admin dashboard** for managing posts, categories, and users.

---

## 🚀 Features

### 🔐 Authentication & Authorization
- **Administrator Guard**
  - Full access to all modules
  - User management (create, edit, delete, assign roles)
- **Content Creator Guard**
  - Manage posts (create, edit, delete, publish)
  - Manage categories (create, edit, delete)
- **Regular User/Reader Guard**
  - Browse posts & categories
  - Comment and interact with content (if enabled)

### ⚡ Middleware
- Restricts access based on user role
- Ensures only authorized users can access specific resources
- Protects admin and content creator areas

### 📂 Controllers
- **PostController**
  - Create, edit, delete, and publish posts
- **CategoryController**
  - Create, edit, and delete categories

### 📊 Admin Dashboard
- **Statistics Overview**
  - Total posts
  - Total categories
  - Total users
  - Total comments
- **Quick Action Buttons**
  - Create post
  - Create category
  - Manage users
- **User Management**
  - Administrators can view, edit, and delete users
  - Assign roles (Admin, Creator, Reader)

---

## 🛠️ Tech Stack
- **Backend:** Laravel 12 (PHP 8+)
- **Frontend:** Blade Templates, Bootstrap/Tailwind (depending on your setup)
- **Database:** MySQL
- **Authentication:** Laravel Guards & Middleware
- **Icons/Charts:** (e.g., Chart.js for dashboard stats, optional)

---

## 📂 Project Structure (Highlights)

```
app/
 ├── Http/
 │   ├── Controllers/
 │   │   ├── Admin/
 │   │   │   ├── PostController.php
 │   │   │   ├── CategoryController.php
 │   │   │   └── UserController.php
 │   │   └── Auth/
 │   ├── Middleware/
 │   │   ├── AdminMiddleware.php
 │   │   ├── CreatorMiddleware.php
 │   │   └── UserMiddleware.php
 ├── Models/
 │   ├── Post.php
 │   ├── Category.php
 │   └── User.php
```

---

## ⚙️ Installation & Setup

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/blog-management-system.git
   cd blog-management-system
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install && npm run dev
   ```

3. Copy `.env.example` to `.env` and configure database:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. Run migrations & seeders:
   ```bash
   php artisan migrate --seed
   ```

5. Serve the project:
   ```bash
   php artisan serve
   ```

---

## 👥 Default Roles & Access
| Name         | Email                                       | Role             | Password |
| ------------ | ------------------------------------------- | ---------------- | -------- |
| Mahedi Hasan | [mahedi@gmail.com](mailto:mahedi@gmail.com) | admin            | 12345678 |
| Rabbil       | [rabbil@gmail.com](mailto:rabbil@gmail.com) | content\_creator | 12345678 |
| Test Reader  | [reader@gmail.com](mailto:reader@gmail.com) | reader           | 12345678 |



## 🤝 Contribution
Pull requests are welcome. For major changes, please open an issue first to discuss what you’d like to change.

---

## 📜 License
This project is licensed under the MIT License.

