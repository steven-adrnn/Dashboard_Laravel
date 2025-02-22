# Dokumentasi Proyek

## Deskripsi Proyek
Proyek ini adalah aplikasi web yang dibangun menggunakan Laravel yang memungkinkan pengguna untuk mengelola koleksi buku. Pengguna dapat menambah, mengedit, menghapus, dan melihat buku dalam sistem. Aplikasi ini memiliki kontrol akses berbasis peran, yang memungkinkan tingkat akses yang berbeda untuk peran admin, editor, dan viewer.

## Teknologi yang Digunakan
- **Backend**: Laravel
- **Database**: SQLite
- **Frontend**: Blade Templates
- **Autentikasi**: Laravel Sanctum
- **Alat Pengembangan**: Composer, PHP, SQLite

## Dokumentasi API
### API Overview
API ini memungkinkan pengguna untuk berinteraksi dengan sistem manajemen buku. Pengguna dapat melakukan operasi CRUD (Create, Read, Update, Delete) pada koleksi buku.

### Endpoint
1. **GET /dashboard**
   - **Deskripsi**: Mengambil daftar semua buku.
   - **Request Headers**: 
     - `Authorization: Bearer {token}` (untuk autentikasi)
   - **Response**:
     - **200 OK**: Mengembalikan daftar buku dalam format JSON.
   - **Contoh Penggunaan**:
     ```javascript
     fetch('http://localhost:8000/dashboard', {
         method: 'GET',
         headers: {
             'Authorization': 'Bearer YOUR_ACCESS_TOKEN'
         }
     })
     .then(response => response.json())
     .then(data => console.log(data));
     ```

2. **GET /dashboard/create**
   - **Deskripsi**: Menampilkan formulir untuk membuat buku baru.
   - **Response**:
     - **200 OK**: Mengembalikan tampilan formulir.

3. **POST /dashboard**
   - **Deskripsi**: Menyimpan buku baru ke dalam database.
   - **Request Headers**: 
     - `Authorization: Bearer {token}`
   - **Request Body**:
     - **Format**: JSON
   - **Contoh Penggunaan**:
     ```javascript
     fetch('http://localhost:8000/dashboard', {
         method: 'POST',
         headers: {
             'Content-Type': 'application/json',
             'Authorization': 'Bearer YOUR_ACCESS_TOKEN'
         },
         body: JSON.stringify({
             judul: 'Judul Buku',
             penulis: 'Nama Penulis',
             tahun_terbit: 2022,
             deskripsi: 'Deskripsi buku.'
         })
     })
     .then(response => response.json())
     .then(data => console.log(data));
     ```

4. **GET /dashboard/edit/{id}**
   - **Deskripsi**: Menampilkan formulir untuk mengedit buku yang ada.
   - **Response**:
     - **200 OK**: Mengembalikan tampilan formulir dengan data buku.

5. **PUT /dashboard/{id}**
   - **Deskripsi**: Memperbarui buku yang ada.
   - **Request Headers**: 
     - `Authorization: Bearer {token}`
   - **Request Body**:
     - **Format**: JSON
   - **Contoh Penggunaan**:
     ```javascript
     fetch('http://localhost:8000/dashboard/1', {
         method: 'PUT',
         headers: {
             'Content-Type': 'application/json',
             'Authorization': 'Bearer YOUR_ACCESS_TOKEN'
         },
         body: JSON.stringify({
             judul: 'Judul Buku Diperbarui',
             penulis: 'Nama Penulis Diperbarui',
             tahun_terbit: 2023,
             deskripsi: 'Deskripsi buku yang diperbarui.'
         })
     })
     .then(response => response.json())
     .then(data => console.log(data));
     ```

6. **DELETE /dashboard/{id}**
   - **Deskripsi**: Menghapus buku.
   - **Request Headers**: 
     - `Authorization: Bearer {token}`
   - **Contoh Penggunaan**:
     ```javascript
     fetch('http://localhost:8000/dashboard/1', {
         method: 'DELETE',
         headers: {
             'Authorization': 'Bearer YOUR_ACCESS_TOKEN'
         }
     })
     .then(response => response.json())
     .then(data => console.log(data));
     ```

## Instruksi Pengaturan Lokal
1. **Kloning Repositori**:
   ```bash
   git clone https://github.com/steven-adrnn/NOXIO
   cd NOXIO
   ```

2. **Instal Dependensi**:
   Pastikan Anda telah menginstal PHP dan Composer, kemudian jalankan:
   ```bash
   composer install
   ```

3. **Siapkan Lingkungan**:
   Salin file `.env.example` ke `.env` dan konfigurasikan pengaturan database Anda.

4. **Jalankan Migrasi**:
   ```bash
   php artisan migrate
   ```

5. **Isi Database**:
   ```bash
   php artisan db:seed
   ```

6. **Mulai Server Lokal**:
   ```bash
   php artisan serve
   ```

Sekarang Anda dapat mengakses aplikasi di `http://localhost:8000`.
