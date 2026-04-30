# 2 April 2026
Materi : 
Sebelum menggunakan migrate / database pastikan konfigurasi .env sudah disesuaikan di komputer masing2

Migration Laravel : 
Fitur di laravel untuk mengolah database

Perintah untuk menggunakan migration di laravel menggunakan kata kunci migrate

1. Perintah untuk mengecek status migration app
    php artisan migrate:status
2. Untuk eksekusi migration (membuat tabel / update tabel database)
    php artisan migrate
3. Membuat tabel baru
    php artisan make:migration create_namatabel_tabel
    contoh : 
    membuat tabel mahasiswa : mahasiswa_id, nim, nama_lengkap, kelas
    ```php artisan create_mahasiswa_table```

    Latihan : 
    Buat tabel matakuliah : matakuliah_id, kode_mk, nama_mk, sks

4. mengembalikan / undo eksekusi tabel (rollback)
    `php artisan migrate:rollback --step=x`

5. update tabel yang sudah ada datanya
    untuk kasus ini kita membuat migrattion baru namun dengan nama yang diaawli update_
    contoh : 
    ```php artisan make:migration update_matakuliah_table```

## Capaian
Migration
    - create table
    - status
    - rollback

Selanjutnya
    - update kolom
    - relasi tabel
    - seeder

## ======================================================
## 9 april
1. perintah untuk membuat seeder (untuk membuat dummy data)
    `php artisan make:seeder namaSeeder`

    untuk eksekusi seeder berdasarkan kelas
    `php artisan db:seed --class=NamaClass`

Latihan
- Buat model Matakuliah
- buat seeder MatakuliahSeeder
- buat MatakuliahController beserta function index
- buat routing /matakuliah
    datanya menampilkan dari database

## 16 April
CRUD
- siapkan migrasi
- buat model
- buat controller

1. Cek versi
    `php artisan --version`

2. Buat LoginController
    `php artisan make:controller LoginController`

3. Buat User Seeder 
    `php artisan make:seeder UserSeeder`
   eksekusi seeder
   `php artisan db:seed --class UserSeeder`