
# Proyek Absensi Karyawan

Proyek ini adalah aplikasi berbasis PHP untuk mencatat absensi karyawan. Aplikasi ini memungkinkan Anda untuk mengelola data absensi, termasuk waktu masuk dan keluar karyawan.

## Struktur Direktori

Berikut adalah struktur direktori dasar dalam proyek ini:

- `index.php` - Halaman utama yang menampilkan daftar absensi karyawan.
- `koneksi.php` - Skrip untuk menghubungkan ke database.
- `absensi.php` - Halaman untuk mencatat absensi karyawan.
- `update.php` - Halaman untuk memperbarui data absensi.
- `delete.php` - Skrip untuk menghapus data absensi.
- `db/` - Berisi skrip untuk koneksi database dan pengaturan lainnya.

## Persyaratan Sistem

Sebelum menjalankan proyek ini, pastikan server atau mesin lokal Anda memenuhi persyaratan berikut:

- PHP >= 7.3
- MySQL
- Server web seperti Apache atau Nginx

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek ini:

1. Clone repository ini ke mesin lokal Anda:

    ```bash
    git clone https://github.com/username/repository.git
    cd repository
    ```

2. Buat database baru di MySQL dengan nama `db_absensi` dan tabel `absensi`:

    ```sql
    -- Membuat database bernama db_absensi
    CREATE DATABASE db_absensi;

    -- Menggunakan database db_absensi
    USE db_absensi;

    -- Membuat tabel absensi
    CREATE TABLE absensi (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nik VARCHAR(20) NOT NULL,
        nama_lengkap VARCHAR(100) NOT NULL,
        jabatan VARCHAR(50) NOT NULL,
        jam_masuk TIME NOT NULL,
        jam_keluar TIME NOT NULL
    );
    ```

3. Konfigurasi koneksi database dengan mengedit file `koneksi.php`:

    ```php
    <?php
    $host = 'localhost';
    $user = 'username';
    $pass = 'password';
    $db   = 'db_absensi';

    $connection = mysqli_connect($host, $user, $pass, $db);

    if (!$connection) {
        die('Koneksi gagal: ' . mysqli_connect_error());
    }
    ?>
    ```

4. Jalankan proyek ini melalui server web Anda, misalnya dengan menggunakan XAMPP atau WAMP, dan akses melalui browser di `http://localhost/repository`.

## Penggunaan

1. **Mencatat Absensi:** Gunakan halaman `absensi.php` untuk mencatat waktu masuk dan keluar karyawan.
2. **Melihat Data Absensi:** Halaman `index.php` menampilkan semua data absensi karyawan.
3. **Memperbarui Data Absensi:** Gunakan halaman `update.php` untuk memperbarui data absensi yang ada.
4. **Menghapus Data Absensi:** Data dapat dihapus menggunakan tombol hapus di halaman `index.php`.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan lakukan fork dan kirimkan pull request dengan perubahan yang Anda usulkan.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
";

// Membuat dan menulis konten ke dalam file README.md
file_put_contents($filename, $content);
