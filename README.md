## 10 April 2026

Perintah untuk menjalakan laravel 
    `php artisan serve`

Laravel mengggunakan konsep MVC : model, view, controller
    sebuah konsep untuk memisahkan antara logika program, pengelolaan database dan
    tampilan html terpisah

Alurnya : 
    mengetikan alamat/url --> routing --> controller --> model --> view

untuk membuat controller perintahnya
    `php artisan make:controller NamaController`

## 17 April 
1. Konfigurasi koneksi aplikasi laravel dengan database di file `.env`
2. Cek koneksi db menggunakan perintah status
    `php artisan migrate:status`
3. membuatr / menambahkan tabel baru
    `php artisan make:migration create_namatabel_table`
    contoh untuk tabel mahassiwa
    `php artisan make:migration create_mahasiswa_table`
    kolo mahassiwa : mahasiswa_id, nim, nama_lengkap, kelas
4. eksekusi / menjalankan migrate
    `php artisan migrate`
5. membatalkan eksekusi migration menggunakan rollback
    `php artisan migrate:rollback --step=[nomor urut]`
    contoh : 
        `php artisan migrate:rollback --step=1`

========== Menambahkan data test menggunakan seeder ==========
1. membuat seeder
    `php artisan make:seeder namaSeeder`
    contoh untuk seeder matakuliah
    `php artisan make:seeder MatakuliahSeeder`
2. buat class model
    `php artisan make:model Matakuliah`
3. jalankan seeder berdasarkan class
    `php artisan db:seed --class=NamaClass`
    contoh : 
    `php artisan db:seed --class=MatakuliahSeeder`

Latihan : 
buat tabel matakuliah
    - matakuliah_id
    - kode_mk
    - nama_mk
    - sks
    