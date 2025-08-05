# Dashboard Book Laravel

Aplikasi manajemen buku sederhana berbasis Laravel.

## 📦 Fitur

- Manajemen data buku (CRUD)
- Autentikasi pengguna
- Role-based access (admin, editor, user)
- Seeding data otomatis

## 🚀 Cara Menjalankan Proyek Secara Lokal

### 1. Clone Repository

```bash
git clone https://github.com/steven-adrnn/Dashboard_Laravel
cd Dashboard_Laravel
```


### 2. Install Dependency

Pastikan kamu sudah install **Composer** dan **PHP (>= 8.1)**

```bash
composer install
```

### 3. Copy File `.env`

```bash
cp .env.example .env
```
Sesuaikan dengan konfigurasi lokal kamu.

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Setup Database

#### Jika menggunakan SQLite:

- Buat file kosong bernama `database/database.sqlite`
- Pastikan `.env` berisi konfigurasi berikut:

```env
DB_CONNECTION=sqlite
DB_DATABASE=${PATH_TO_PROJECT}/database/database.sqlite
```

Gantilah `${PATH_TO_PROJECT}` dengan path absolut ke project-mu.

#### Jika menggunakan MySQL:

Pastikan `.env` berisi:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=namadb
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan Migrasi dan Seeder

```bash
php artisan migrate:fresh --seed
```

### 7. Jalankan Server

```bash
php artisan serve
```

Aplikasi akan berjalan di:

```
http://127.0.0.1:8000
```

## 👤 Default Akun Login

| Email             | Password     | Role   |
|-------------------|--------------|--------|
| admin@example.com | password123  | admin  |
| editor@example.com| password123  | editor |
| user@example.com  | password123  | user   |

## 📂 Struktur Folder Penting

- `app/Models/` → Model Eloquent
- `app/Http/Controllers/` → Controller logic
- `database/seeders/` → File seeder untuk data awal
- `resources/views/` → Blade templates
- `routes/web.php` → Web routes aplikasi