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
