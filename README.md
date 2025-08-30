<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# 🎓 Student Project Title Submission Tracker

A simple **Laravel application** for managing student project submissions.  
Students can submit their **Name, ID, Project Title, and Supervisor**, and the system stores them in a MySQL database.

---

## 🚀 Features
- Submit new project details  
- View all submissions  
- Edit existing records  
- Delete submissions  
- Clean UI with Blade templates  

---

## 📂 Project Structure (important files)
```
crud/                     # Laravel project root
│
├── app/
│   └── Models/Student.php          # Student Eloquent model
│
├── app/Http/Controllers/
│   └── StudentController.php       # CRUD logic
│
├── database/migrations/
│   └── 2025_08_30_000000_create_students_table.php   # students table migration
│
├── resources/views/
│   ├── welcome.blade.php           # Home page with links
│   └── students/
│       ├── index.blade.php         # List all students
│       ├── create.blade.php        # Form to submit new project
│       └── edit.blade.php          # Form to edit submission
│
├── routes/
│   └── web.php                     # Routes for CRUD
│
└── .env                            # Database connection (set to XAMPP MySQL)
```

---

## ⚙️ Installation & Setup

### 1️⃣ Clone project
```bash
git clone https://github.com/YOUR_USERNAME/crud.git
cd crud
```

### 2️⃣ Install dependencies
```bash
composer install
npm install && npm run dev
```

### 3️⃣ Setup `.env`
Update database settings for XAMPP (phpMyAdmin):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate key
```bash
php artisan key:generate
```

### 5️⃣ Run migrations
```bash
php artisan migrate
```

### 6️⃣ Start server
```bash
php artisan serve
```

Visit: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## 🖥️ Routes
| Route | Method | Description |
|-------|--------|-------------|
| `/` | GET | Show all submissions |
| `/students/create` | GET | Show form to submit project |
| `/students` | POST | Save new submission |
| `/students/{id}/edit` | GET | Show edit form |
| `/students/{id}` | PUT | Update submission |
| `/students/{id}` | DELETE | Delete submission |

---

## 📑 Example SQL Table (`students`)
| id | student_name | student_id | project_title | supervisor | created_at | updated_at |
|----|--------------|------------|---------------|------------|------------|------------|

---

## 👨‍💻 Technologies
- Laravel 10  
- MySQL (XAMPP)  
- Blade Templates (HTML + CSS)  
