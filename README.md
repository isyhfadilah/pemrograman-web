# Pemrograman Web

Kumpulan *learning path* dan latihan dari mata kuliah **Pemrograman Web**. Repository ini berisi dokumentasi dan implementasi konsep dasar hingga menengah dalam pengembangan web, mulai dari *front-end* hingga *back-end*, yang dipelajari secara bertahap selama perkuliahan.

## Getting Started

Instruksi berikut akan membantu kamu menjalankan dan memahami isi project ini di lingkungan lokal untuk keperluan pembelajaran dan eksplorasi kode.

### Prerequisites

Hal-hal yang perlu disiapkan sebelum menggunakan repository ini:

* Web browser (Chrome, Firefox, Edge, dll)
* Text editor atau IDE (VS Code direkomendasikan)
* PHP (untuk folder PHP & MySQLi)
* Web server lokal seperti:

  * XAMPP / Laragon / WAMP
* MySQL (untuk materi MySQLi)

### Installing

Langkah-langkah untuk menjalankan project secara lokal:

1. Clone repository ini

   ```bash
   git clone https://github.com/isyhfadilah/pemrograman-web.git
   ```

2. Masuk ke direktori project

   ```bash
   cd pemrograman-web
   ```

3. Buka file HTML secara langsung di browser **atau**

4. Jalankan melalui web server lokal (disarankan untuk PHP & MySQLi)

   * Pindahkan folder ke direktori `htdocs` (jika menggunakan XAMPP)
   * Akses melalui browser: `http://localhost/pemrograman-web`

## Running the tests

Repository ini tidak menggunakan *automated testing*. Pengujian dilakukan secara manual dengan:

* Membuka file HTML di browser
* Menguji interaksi JavaScript melalui DOM
* Menjalankan file PHP melalui server lokal
* Menghubungkan PHP dengan database MySQL untuk materi MySQLi

### Break down into end to end tests

Pengujian dilakukan berdasarkan tujuan pembelajaran masing-masing materi, seperti:

* Apakah struktur HTML sudah sesuai
* Apakah layout CSS (Flexbox, Layouting) bekerja dengan benar
* Apakah manipulasi DOM JavaScript berjalan sesuai skenario
* Apakah proses CRUD PHP & MySQLi berjalan dengan baik

### And coding style tests

Penulisan kode mengikuti praktik dasar yang dipelajari di perkuliahan:

* Struktur folder yang jelas
* Penamaan variabel yang deskriptif
* Indentasi konsisten
* Pemisahan logika HTML, CSS, JavaScript, dan PHP

## Deployment

Repository ini ditujukan untuk pembelajaran lokal dan **belum dideploy ke production environment**.

Namun, secara konsep:

* Materi HTML, CSS, dan JavaScript dapat di-*deploy* menggunakan GitHub Pages
* Materi PHP & MySQLi membutuhkan server yang mendukung PHP dan database (contoh: hosting shared / VPS)

## Built With

Teknologi dan tools yang digunakan dalam repository ini:

* **HTML** – Struktur halaman web
* **CSS** – Styling dan layouting
* **Flexbox** – Pengaturan layout modern
* **JavaScript** – Interaksi dan manipulasi DOM
* **PHP** – Pemrograman sisi server
* **MySQLi** – Koneksi dan pengolahan database MySQL
* **Bootstrap** – Komponen UI siap pakai

## Contributing

Repository ini bersifat personal untuk pembelajaran. Namun, saran dan masukan sangat terbuka.

Jika ingin berkontribusi:

1. Fork repository ini
2. Buat branch baru (`feature/nama-fitur`)
3. Commit perubahan
4. Ajukan Pull Request

## Versioning

Versioning belum diterapkan secara formal. Perubahan dicatat melalui riwayat commit Git.

## License

Project ini menggunakan lisensi bebas untuk tujuan pembelajaran.

## Acknowledgments

* Dosen mata kuliah Pemrograman Web 
* Referensi dokumentasi resmi:

  * MDN Web Docs
  * PHP Documentation
  * W3Schools
