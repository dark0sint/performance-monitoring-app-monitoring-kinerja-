# Aplikasi Grafik Data Pengawasan Kinerja Pegawai Unit Kabupaten

Aplikasi web sederhana untuk memantau dan memvisualisasikan kinerja pegawai di tingkat unit kabupaten. Aplikasi ini menggunakan teknologi hybrid: Golang untuk back-end API, Python untuk pemrosesan data, dan Laravel untuk front-end/tampilan web. Data kinerja ditampilkan dalam bentuk grafik interaktif menggunakan Chart.js.

## Fitur Utama
- **Dashboard Grafik**: Menampilkan grafik batang untuk produktivitas rata-rata per unit dan grafik garis untuk tren kinerja.
- **API Back-end**: Endpoint RESTful yang disediakan oleh Golang untuk mengambil data kinerja.
- **Pemrosesan Data**: Python menangani agregasi dan perhitungan metrik kinerja dari database.
- **Tampilan Web**: Laravel menyediakan UI responsif untuk akses mudah.
- **Database Dummy**: Menggunakan SQLite untuk simulasi data (dapat diganti dengan database nyata seperti MySQL).

## Teknologi yang Digunakan
- **Front-end/Tampilan**: Laravel (PHP) dengan Chart.js untuk grafik.
- **Back-end API**: Golang (dengan framework Gin).
- **Pemrosesan Data**: Python (dengan Flask).
- **Database**: SQLite (dummy data).
- **Lainnya**: HTTP untuk komunikasi antar service.

## Persyaratan Sistem
- PHP 8.1+ (untuk Laravel)
- Go 1.19+ (untuk Golang)
- Python 3.8+ (untuk Python)
- Composer (untuk Laravel)
- Node.js (untuk asset Laravel, jika diperlukan)
- SQLite (sudah terintegrasi)

## Instalasi
1. **Clone atau Download Proyek**:
