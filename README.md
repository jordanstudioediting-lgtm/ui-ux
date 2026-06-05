<div align="center">

**TUGAS UI / UX**

**FAKULTAS SAINS TEKNOLOGI**

**PRODI S1 TEKNIK INFORMATIKA**

<br/>

`[LOGO UNIVERSITAS BUDDHI DHARMA]`

<br/>

**ANALISIS DAN PERANCANGAN UI/UX APLIKASI GASTRACK: SISTEM INTERNAL SINKRONISASI STOK REAL-TIME PADA DISTRIBUSI LPG DARI AGEN KE PANGKALAN**

<br/>

**KELOMPOK :** [diisi]

<br/>

**Disusun Oleh:**

20241000112 — Haldrian Sunata  
20241000078 — Aristo Marcelino  
20241000065 — Ryushen Nakayoan

<br/>

**Dosen Pengampu:**  
Santa Margita, S.Kom, M.Kom

<br/>

**UNIVERSITAS BUDDHI DHARMA**

**2026**

</div>

---

# DAFTAR ISI

```
DAFTAR ISI ........................................................ 2
DAFTAR GAMBAR .................................................... 3
DAFTAR TABEL ..................................................... 4

BAB I    PENDAHULUAN ............................................. 5
  1.1    Latar Belakang ......................................... 5
  1.2    Rumusan Masalah ........................................ 7
  1.3    Tujuan Penelitian ...................................... 7
  1.4    Manfaat Penelitian ..................................... 8
  1.5    Batasan Masalah ........................................ 8

BAB II   LANDASAN TEORI ......................................... 10
  2.1    Konsep UI/UX Design ................................... 10
  2.2    Prinsip Desain Antarmuka Pengguna ..................... 12
  2.3    User-Centered Design (UCD) ............................ 14
  2.4    Wireframing, Prototyping, dan Mockup .................. 16
  2.5    Tools Perancangan UI/UX — draw.io ..................... 18
  2.6    Rantai Distribusi LPG di Indonesia .................... 19
  2.7    Digitalisasi UMKM dan Sistem Informasi Manajemen Stok . 21

BAB III  PERANCANGAN APLIKASI GASTRACK .......................... 24
  3.1    User Interface Form Login ............................. 24
  3.2    User Interface Dashboard Pangkalan .................... 28
  3.3    User Interface Manajemen Stok ......................... 33
  3.4    User Interface Transaksi Baru ......................... 38
  3.5    User Interface Riwayat Transaksi ...................... 44
  3.6    User Interface Manajemen Kiriman ...................... 48
  3.7    User Interface Laporan Keuangan ....................... 52
  3.8    Struktur Data dan Relasi Entitas ...................... 56

BAB IV   KESIMPULAN, SARAN, DAN PENGEMBANGAN ................... 60
  4.1    Kesimpulan ............................................ 60
  4.2    Saran ................................................. 61
  4.3    Pengembangan ke Depan ................................. 62

DAFTAR PUSTAKA .................................................. 64
```

---

# DAFTAR GAMBAR

```
Gambar 3.1   Form Login ......................................... 24
Gambar 3.2   Dashboard Pangkalan ................................ 28
Gambar 3.3   Manajemen Stok ..................................... 33
Gambar 3.4   Transaksi Baru ..................................... 38
Gambar 3.5   Riwayat Transaksi .................................. 44
Gambar 3.6   Manajemen Kiriman .................................. 48
Gambar 3.7   Laporan Keuangan ................................... 52
Gambar 3.8   Entity Relationship Diagram (ERD) GasTrack ......... 58
```

---

# DAFTAR TABEL

```
Tabel 3.1    Acceptance Criteria Pada Form Login ................ 25
Tabel 3.2    Function Specification Pada Form Login ............. 27
Tabel 3.3    Acceptance Criteria Pada Dashboard Pangkalan ....... 30
Tabel 3.4    Function Specification Pada Dashboard Pangkalan .... 32
Tabel 3.5    Acceptance Criteria Pada Manajemen Stok ............ 35
Tabel 3.6    Function Specification Pada Manajemen Stok ......... 37
Tabel 3.7    Acceptance Criteria Pada Transaksi Baru ............ 40
Tabel 3.8    Function Specification Pada Transaksi Baru ......... 42
Tabel 3.9    Acceptance Criteria Pada Riwayat Transaksi ......... 45
Tabel 3.10   Function Specification Pada Riwayat Transaksi ...... 47
Tabel 3.11   Acceptance Criteria Pada Manajemen Kiriman ......... 49
Tabel 3.12   Function Specification Pada Manajemen Kiriman ...... 51
Tabel 3.13   Acceptance Criteria Pada Laporan Keuangan .......... 53
Tabel 3.14   Function Specification Pada Laporan Keuangan ....... 55
Tabel 3.15   Daftar Entitas dan Atribut Sistem GasTrack ......... 56
```

---

# BAB I  
# PENDAHULUAN

## 1.1 Latar Belakang

Gas Liquefied Petroleum Gas (LPG) merupakan kebutuhan pokok masyarakat Indonesia, baik untuk rumah tangga maupun pelaku Usaha Mikro, Kecil, dan Menengah (UMKM). Pemerintah melalui PT Pertamina (Persero) menyalurkan LPG, khususnya LPG bersubsidi 3 kg (yang dikenal masyarakat dengan sebutan "gas melon"), melalui rantai distribusi berjenjang yang dimulai dari Stasiun Pengisian Bulk Elpiji (SPBE), kemudian disalurkan ke Agen LPG, lalu diteruskan ke Pangkalan resmi, dan akhirnya sampai ke konsumen akhir atau ke pengecer/sub-pangkalan (Kementerian ESDM, 2025).

Sejak Februari 2025, pemerintah melakukan penataan ulang rantai pasok LPG 3 kg dengan menambahkan satu tingkatan baru, yaitu Sub-Pangkalan, yang sebelumnya berstatus pengecer atau warung. Tujuan dari penataan ini adalah untuk memastikan subsidi tepat sasaran dan distribusi LPG lebih terstruktur (Tempo, 2025). Skala industri ini sangat besar; sebagai gambaran, di wilayah Banten, Jawa Barat, dan Jakarta saja terdapat lebih dari 47.495 pangkalan LPG bersubsidi yang dikelola oleh Pertamina Patra Niaga (Tempo, 2024).

Untuk mendukung digitalisasi proses transaksi di level Pangkalan, Pertamina telah meluncurkan aplikasi **Merchant Apps Pangkalan (MAP) / MyPertamina Merchant** yang wajib digunakan oleh seluruh Pangkalan resmi sejak tahun 2024. Berdasarkan dokumentasi resmi MAP pada Google Play Store dan situs `merchant.mypertamina.id`, fitur-fitur utama yang tersedia mencakup pencatatan transaksi konsumen akhir menggunakan Nomor Induk Kependudukan (NIK), Product Stock Management, Online Order Management, Sales Reports and History, Customer Management, serta role internal Pangkalan (owner, admin, cashier). Selain MAP, terdapat pula aplikasi **BRIMOLA** dari Bank BRI yang menangani aspek pemesanan dan pembayaran finansial dari Pangkalan kepada Agen, serta sistem **SIMELON** sebagai backend Pertamina untuk pengelolaan alokasi kuota ke Agen (BRI, 2024). Keberadaan ketiga sistem ini merupakan langkah besar bagi digitalisasi sektor distribusi LPG di Indonesia.

Berdasarkan informasi publik yang tersedia (dokumentasi PlayStore, situs resmi MAP, dan pemberitaan media), aplikasi MAP berfokus pada operasional internal masing-masing Pangkalan dan transaksi dengan konsumen akhir. Belum ditemukan dokumentasi publik mengenai fitur dashboard agregat bagi Agen untuk memantau kondisi stok seluruh Pangkalan mitranya secara real-time melalui MAP. Aspek B2B Agen-Pangkalan yang sudah terdigitalisasi lebih banyak berorientasi pada aspek finansial (pemesanan + pembayaran via BRIMOLA) dan alokasi kuota (via SIMELON). Sementara itu, koordinasi operasional yang menyangkut **sinkronisasi stok real-time** dan **manajemen restok berbasis kondisi stok aktual di Pangkalan** masih berpotensi untuk dieksplorasi lebih lanjut. Pada praktik di lapangan, Agen sering mengirimkan tabung gas ke Pangkalan berdasarkan jadwal rutin, panggilan telepon dari pemilik Pangkalan, atau perkiraan dari pengalaman supir, tanpa visibilitas yang akurat terhadap kondisi stok terkini di setiap Pangkalan mitranya. Akibatnya, dapat terjadi dua skenario tidak efisien: (1) Pangkalan mengalami kehabisan stok sebelum jadwal kiriman berikutnya tiba, atau (2) Agen mengirim tabung secara berlebihan ke Pangkalan yang stoknya masih cukup.

Berangkat dari celah tersebut, tim merancang aplikasi **GasTrack** sebagai **eksplorasi rancangan UI/UX** untuk sistem informasi internal yang menghubungkan satu Agen dengan jaringan Pangkalan mitranya, dengan fokus pada **sinkronisasi stok operasional real-time**. GasTrack tidak diposisikan sebagai pengganti aplikasi resmi yang sudah ada, melainkan sebagai studi akademis yang mengeksplorasi area yang masih dapat dikembangkan: koordinasi operasional B2B Agen-Pangkalan dengan fokus stok dan restok, sebagai pelengkap dari MAP (yang menangani aspek transaksi konsumen) dan BRIMOLA (yang menangani aspek finansial). Dengan GasTrack, setiap transaksi penjualan yang terjadi di Pangkalan secara otomatis mengurangi catatan stok yang juga dapat dipantau oleh Agen, sehingga keputusan restok dapat dilakukan berdasarkan data nyata, bukan perkiraan.

Penelitian ini berfokus pada perancangan UI/UX (User Interface dan User Experience) aplikasi GasTrack untuk modul Pangkalan. Pemilihan modul Pangkalan sebagai fokus disebabkan karena Pangkalan merupakan titik di mana seluruh transaksi operasional terjadi dan menjadi sumber data utama yang akan dimanfaatkan oleh modul Agen. Perancangan yang baik pada modul Pangkalan akan menjadi fondasi keberhasilan keseluruhan sistem GasTrack.

## 1.2 Rumusan Masalah

Berdasarkan latar belakang yang telah diuraikan, tim merumuskan beberapa permasalahan sebagai berikut:

1. Bagaimana merancang antarmuka pengguna (User Interface) aplikasi GasTrack untuk modul Pangkalan yang memudahkan pemilik Pangkalan dalam mencatat transaksi jual beli LPG kepada konsumen akhir?
2. Bagaimana merancang pengalaman pengguna (User Experience) yang memungkinkan pemilik Pangkalan memantau kondisi stok tabung secara real-time dengan informasi yang jelas dan tindak lanjut yang cepat?
3. Bagaimana merancang antarmuka manajemen kiriman (restok) dari Agen ke Pangkalan sehingga proses penerimaan tabung dan penyelesaian pembayaran dapat dijalankan secara digital dan terdokumentasi?
4. Bagaimana menyusun rancangan UI/UX yang konsisten secara visual dan fungsional di seluruh halaman aplikasi sehingga dapat dipahami oleh pengguna dengan latar belakang non-teknis?

## 1.3 Tujuan Penelitian

Penelitian ini bertujuan untuk:

1. Menghasilkan rancangan UI/UX aplikasi GasTrack pada modul Pangkalan yang mencakup tujuh halaman utama: Form Login, Dashboard Pangkalan, Manajemen Stok, Transaksi Baru, Riwayat Transaksi, Manajemen Kiriman, dan Laporan Keuangan.
2. Menyusun spesifikasi fungsional dan acceptance criteria untuk setiap halaman sebagai panduan implementasi pengembangan aplikasi.
3. Memetakan struktur data dan relasi entitas yang mendukung alur transaksi, stok, dan kiriman pada aplikasi GasTrack.
4. Menerapkan prinsip-prinsip dasar UI/UX (antara lain Visibility of System Status, Recognition over Recall, dan Konsistensi) pada rancangan setiap halaman aplikasi GasTrack, sehingga aplikasi dapat dipahami dan dioperasikan oleh pengguna dengan latar belakang non-teknis tanpa pelatihan yang ekstensif.

## 1.4 Manfaat Penelitian

Penelitian ini diharapkan memberikan manfaat sebagai berikut:

**Manfaat Akademis:**

1. Memberikan studi kasus konkret penerapan prinsip UI/UX Design dan User-Centered Design pada konteks distribusi energi bersubsidi di Indonesia.
2. Menjadi referensi bagi penelitian lanjutan tentang perancangan sistem informasi internal pada rantai distribusi B2B.

**Manfaat Praktis:**

1. Memberikan blueprint rancangan UI/UX yang dapat dikembangkan lebih lanjut menjadi aplikasi fungsional oleh Agen LPG atau pihak ketiga yang ingin membantu efisiensi distribusi LPG kepada Pangkalan mitranya.
2. Membantu pemilik Pangkalan memvisualisasikan bagaimana proses kerja harian mereka dapat didigitalisasi tanpa harus tergantung pada catatan manual atau komunikasi verbal dengan Agen.

## 1.5 Batasan Masalah

Untuk menjaga fokus penelitian, tim menetapkan batasan-batasan berikut:

1. **Scope antarmuka.** Perancangan UI/UX hanya mencakup modul Pangkalan. Modul Agen dan modul pihak lain dalam rantai distribusi LPG (SPBE, Sub-Pangkalan, Konsumen) tidak dirancang dalam penelitian ini.
2. **Tingkat fidelitas.** Hasil rancangan berupa **mid-fidelity mockup statis** menggunakan perangkat lunak draw.io. Rancangan tidak dibuat dalam bentuk prototype interaktif maupun aplikasi fungsional.
3. **Pemilihan tool.** Penggunaan draw.io ditetapkan oleh dosen pengampu sebagai bagian dari ketentuan tugas kelompok, di mana setiap kelompok menggunakan perangkat lunak desain yang berbeda.
4. **Multi-device dan demonstrasi pada tampilan desktop.** Aplikasi GasTrack diniatkan sebagai aplikasi berbasis web yang dapat diakses lintas-device (PC, tablet, dan mobile) sehingga lebih fleksibel digunakan oleh pemilik Pangkalan dengan beragam perangkat. Pada paper ini, demonstrasi rancangan UI ditampilkan dalam orientasi **tampilan desktop/PC** untuk memudahkan visualisasi seluruh komponen secara komprehensif dalam satu layar. Penyesuaian tampilan responsive untuk perangkat mobile dan tablet menjadi bagian dari pengembangan ke depan.
5. **Asumsi varian produk.** Rancangan UI menampilkan tiga varian gas sebagai contoh: LPG 3 kg (subsidi), Bright Gas 5.5 kg, dan LPG 12 kg. Pada implementasi aktual, jumlah dan jenis varian yang dikelola dapat bervariasi tergantung kebijakan masing-masing Pangkalan — sebagian Pangkalan hanya mengelola LPG 3 kg, sebagian lagi mengelola berbagai varian. Sistem dirancang fleksibel untuk mengakomodasi konfigurasi ini.
6. **Asumsi pengaturan harga.** Diasumsikan bahwa Pangkalan dapat mengatur harga jual default secara mandiri, dengan harga dasar yang diberikan oleh Agen. Fitur pengaturan harga ini telah dirancang dalam bentuk drawer "Atur Harga Default" pada halaman Transaksi Baru.
7. **Data dummy.** Seluruh nilai angka, nama pelanggan, nama Agen, ID transaksi, dan ID invoice yang ditampilkan pada rancangan UI merupakan data dummy yang dibuat untuk keperluan demonstrasi visual dan tidak mencerminkan data aktual.

---

# BAB II  
# LANDASAN TEORI

## 2.1 Konsep UI/UX Design

User Interface (UI) dan User Experience (UX) merupakan dua konsep yang saling berkaitan namun memiliki cakupan yang berbeda. **User Interface** secara harfiah berarti "antarmuka pengguna", yaitu titik temu antara pengguna dengan sebuah sistem digital. UI mencakup seluruh elemen visual dan interaktif yang dilihat dan dimanipulasi oleh pengguna, antara lain tata letak (layout), warna, tipografi, ikon, tombol, formulir, dan komponen visual lainnya (Galitz, 2007).

**User Experience**, di sisi lain, merupakan konsep yang lebih luas dan menyentuh keseluruhan pengalaman pengguna ketika berinteraksi dengan sebuah produk atau sistem. Norman dan Nielsen (2016) menyatakan bahwa UX mencakup semua aspek interaksi pengguna akhir dengan perusahaan, layanan, dan produknya. UX tidak hanya tentang apa yang dilihat pengguna, tetapi juga tentang bagaimana perasaan pengguna sebelum, selama, dan setelah berinteraksi dengan sistem — apakah pengguna merasa puas, terbantu, frustrasi, atau bingung.

Garrett (2010) memetakan elemen UX ke dalam lima lapisan dari yang paling abstrak hingga paling konkret, yaitu Strategy, Scope, Structure, Skeleton, dan Surface. UI menempati lapisan Surface (permukaan visual), sementara UX mencakup keseluruhan lima lapisan tersebut. Oleh karena itu dapat disimpulkan bahwa **UI adalah bagian dari UX**, dan UI yang baik adalah salah satu syarat (namun bukan satu-satunya) bagi terciptanya UX yang baik.

Dalam konteks perancangan aplikasi GasTrack, pendekatan UI/UX dilakukan secara terintegrasi: keputusan visual (UI) seperti pemilihan tema warna gelap dengan aksen hijau, ukuran tombol yang besar, dan tata letak sidebar yang konsisten, diambil berdasarkan pertimbangan pengalaman pengguna (UX) — yaitu pemilik Pangkalan yang sering bekerja di kondisi pencahayaan beragam, memerlukan eksekusi transaksi yang cepat, dan tidak memiliki latar belakang teknis yang tinggi.

### Perbedaan Utama UI dan UX

| Aspek | User Interface (UI) | User Experience (UX) |
|---|---|---|
| Fokus | Tampilan visual dan elemen interaktif | Keseluruhan pengalaman dan kepuasan pengguna |
| Cakupan | Pixel, warna, tipografi, layout, komponen | Strategi produk, arsitektur informasi, alur kerja, emosi |
| Pertanyaan kunci | "Apakah ini terlihat baik dan mudah digunakan?" | "Apakah pengguna mencapai tujuannya dengan mudah dan puas?" |
| Output | Mockup, design system, gaya visual | User journey, persona, wireframe, hasil usability testing |
| Profesi | UI Designer | UX Designer, UX Researcher |

## 2.2 Prinsip Desain Antarmuka Pengguna

Untuk menghasilkan antarmuka yang baik, terdapat sejumlah prinsip dasar yang umum digunakan oleh perancang UI/UX. Tim menerapkan tiga prinsip utama yang relevan dengan konteks aplikasi GasTrack, yaitu Visibility of System Status, Recognition over Recall, dan Konsistensi.

### 2.2.1 Visibility of System Status

Prinsip ini merupakan salah satu dari sepuluh heuristik usabilitas yang dirumuskan oleh Nielsen (1994). Prinsip ini menyatakan bahwa sistem harus selalu memberi tahu pengguna tentang apa yang sedang terjadi melalui umpan balik yang sesuai dalam waktu yang wajar. Pengguna tidak boleh dibiarkan menebak-nebak status dari sistem.

Dalam aplikasi GasTrack, prinsip ini diimplementasikan melalui beberapa elemen visual, antara lain:

a. **Badge status stok** ("Aman", "Menipis", "Kritis") pada setiap kartu varian gas di halaman Manajemen Stok, sehingga pemilik Pangkalan langsung mengetahui kondisi stok tanpa harus menghitung manual.

b. **Banner peringatan stok kritis** pada Dashboard Pangkalan yang muncul ketika salah satu varian gas berada di bawah ambang batas tertentu, dengan teks yang menginformasikan bahwa sistem telah memberi notifikasi otomatis ke Agen mitra.

c. **Badge status kiriman** ("Dijadwalkan", "Diterima", "Lunas") yang berwarna sesuai tahapan pada halaman Manajemen Kiriman, sehingga pemilik Pangkalan dapat melihat sekilas tahapan setiap kiriman yang sedang berjalan.

d. **Progress bar berwarna** yang menunjukkan persentase ketersediaan stok secara cepat dan intuitif.

### 2.2.2 Recognition over Recall

Prinsip ini juga termasuk dalam sepuluh heuristik Nielsen (1994). Prinsip ini menyarankan agar perancang meminimalkan beban memori pengguna dengan membuat objek, aksi, dan opsi terlihat (visible) sehingga pengguna cukup mengenali (recognize) daripada mengingat (recall) dari memori.

Penerapan dalam GasTrack mencakup:

a. **Penggunaan ikon yang konsisten** di sidebar navigasi (ikon dashboard, ikon transaksi, ikon kiriman, dan lain-lain), dilengkapi dengan label teks sehingga pengguna mengenali fungsi dari ikon tersebut.

b. **Pemilihan tipe transaksi berbentuk kartu visual** (Isi Ulang, Pelanggan Beli Tabung, Pelanggan Jual Tabung) pada halaman Transaksi Baru, yang memungkinkan pengguna langsung mengenali pilihan tanpa harus mengingat istilah teknis.

c. **Penggunaan warna kategorial yang konsisten** untuk membedakan varian produk: hijau untuk LPG 3 kg, biru untuk LPG 12 kg, dan merah muda untuk Bright Gas 5.5 kg. Pengguna mengenali varian dari warna badge dan progress bar sebelum membaca teksnya.

### 2.2.3 Konsistensi

Konsistensi dalam desain antarmuka berarti bahwa elemen visual dan pola interaksi yang sama harus berperilaku dan tampil dengan cara yang sama di seluruh sistem (Shneiderman et al., 2016). Konsistensi membantu pengguna mempelajari sistem lebih cepat karena ekspektasi mereka terhadap antarmuka tidak berubah-ubah.

Dalam GasTrack, konsistensi diwujudkan melalui:

a. **Sidebar navigasi yang identik** di seluruh halaman utama, dengan posisi dan komposisi menu yang sama.

b. **Palet warna global** yang digunakan di seluruh aplikasi, termasuk warna primer (hijau aksen), warna latar (dark grey/black), warna teks (putih dan abu), serta warna status (hijau untuk sukses, kuning/oranye untuk perhatian, merah untuk kritis).

c. **Pola tata letak kartu (card)** dengan ukuran sudut membulat (border-radius) dan padding internal yang seragam.

d. **Format penulisan ID transaksi** yang konsisten (`#TRX-XXXX`) dan ID invoice (`INV/GT/YYYY/XXXX`).

## 2.3 User-Centered Design (UCD)

User-Centered Design (UCD) adalah suatu pendekatan perancangan yang menempatkan pengguna akhir sebagai fokus utama dalam setiap tahapan pengembangan pro
```
Gambar 3.1   Form Login ......................................... 24
Gambar 3.2   Dashboard Pangkalan ................................ 28
Gambar 3.3   Manajemen Stok ..................................... 33
Gambar 3.4   Transaksi Baru ..................................... 38
Gambar 3.5   Riwayat Transaksi .................................. 44
Gambar 3.6   Manajemen Kiriman .................................. 48
Gambar 3.7   Laporan Keuangan ................................... 52
Gambar 3.8   Entity Relationship Diagram (ERD) GasTrack ......... 58
```

---

# DAFTAR TABEL

```
Tabel 3.1    Acceptance Criteria Pada Form Login ................ 25
Tabel 3.2    Function Specification Pada Form Login ............. 27
Tabel 3.3    Acceptance Criteria Pada Dashboard Pangkalan ....... 30
Tabel 3.4    Function Specification Pada Dashboard Pangkalan .... 32
Tabel 3.5    Acceptance Criteria Pada Manajemen Stok ............ 35
Tabel 3.6    Function Specification Pada Manajemen Stok ......... 37
Tabel 3.7    Acceptance Criteria Pada Transaksi Baru ............ 40
Tabel 3.8    Function Specification Pada Transaksi Baru ......... 42
Tabel 3.9    Acceptance Criteria Pada Riwayat Transaksi ......... 45
Tabel 3.10   Function Specification Pada Riwayat Transaksi ...... 47
Tabel 3.11   Acceptance Criteria Pada Manajemen Kiriman ......... 49
Tabel 3.12   Function Specification Pada Manajemen Kiriman ...... 51
Tabel 3.13   Acceptance Criteria Pada Laporan Keuangan .......... 53
Tabel 3.14   Function Specification Pada Laporan Keuangan ....... 55
Tabel 3.15   Daftar Entitas dan Atribut Sistem GasTrack ......... 56
```

---

# BAB I  
# PENDAHULUAN

## 1.1 Latar Belakang

Gas Liquefied Petroleum Gas (LPG) merupakan kebutuhan pokok masyarakat Indonesia, baik untuk rumah tangga maupun pelaku Usaha Mikro, Kecil, dan Menengah (UMKM). Pemerintah melalui PT Pertamina (Persero) menyalurkan LPG, khususnya LPG bersubsidi 3 kg (yang dikenal masyarakat dengan sebutan "gas melon"), melalui rantai distribusi berjenjang yang dimulai dari Stasiun Pengisian Bulk Elpiji (SPBE), kemudian disalurkan ke Agen LPG, lalu diteruskan ke Pangkalan resmi, dan akhirnya sampai ke konsumen akhir atau ke pengecer/sub-pangkalan (Kementerian ESDM, 2025).

Sejak Februari 2025, pemerintah melakukan penataan ulang rantai pasok LPG 3 kg dengan menambahkan satu tingkatan baru, yaitu Sub-Pangkalan, yang sebelumnya berstatus pengecer atau warung. Tujuan dari penataan ini adalah untuk memastikan subsidi tepat sasaran dan distribusi LPG lebih terstruktur (Tempo, 2025). Skala industri ini sangat besar; sebagai gambaran, di wilayah Banten, Jawa Barat, dan Jakarta saja terdapat lebih dari 47.495 pangkalan LPG bersubsidi yang dikelola oleh Pertamina Patra Niaga (Tempo, 2024).

Untuk mendukung digitalisasi proses transaksi di level Pangkalan, Pertamina telah meluncurkan aplikasi **Merchant Apps Pangkalan (MAP) / MyPertamina Merchant** yang wajib digunakan oleh seluruh Pangkalan resmi sejak tahun 2024. Aplikasi tersebut berfokus pada pencatatan transaksi konsumen akhir menggunakan Nomor Induk Kependudukan (NIK), monitoring stok yang terkait dengan kuota subsidi, serta pelaporan penjualan kepada Pertamina (PT Pertamina, 2024). Keberadaan MAP merupakan langkah besar bagi digitalisasi sektor distribusi LPG di Indonesia.

Namun, berdasarkan pengamatan dan analisis tim terhadap praktik distribusi di lapangan, ditemukan bahwa MAP memiliki fokus utama pada hubungan **business-to-consumer (B2C)** antara Pangkalan dengan konsumen akhir, terutama untuk keperluan verifikasi penerima subsidi. Sementara itu, koordinasi **business-to-business (B2B)** antara Agen dengan Pangkalan-pangkalan mitranya — khususnya dalam aspek **restok tabung dan sinkronisasi stok real-time** — masih dijalankan secara semi-manual. Agen umumnya mengirimkan tabung gas ke Pangkalan berdasarkan jadwal rutin, panggilan telepon dari pemilik Pangkalan, atau perkiraan dari pengalaman supir, tanpa memiliki visibilitas yang akurat terhadap kondisi stok terkini di setiap Pangkalan mitranya. Akibatnya, sering terjadi dua skenario tidak efisien: (1) Pangkalan mengalami kehabisan stok sebelum jadwal kiriman berikutnya tiba, atau (2) Agen mengirim tabung secara berlebihan ke Pangkalan yang stoknya masih cukup.

Berangkat dari masalah tersebut, tim merancang aplikasi **GasTrack** sebagai sistem informasi internal yang menghubungkan satu Agen dengan jaringan Pangkalan mitranya. Berbeda dengan MAP yang menekankan pada transaksi B2C dan kepatuhan regulasi subsidi, GasTrack diposisikan sebagai **alat koordinasi internal B2B** yang memberikan visibilitas stok real-time kepada Agen serta menyediakan operasional digital terintegrasi untuk Pangkalan. Dengan GasTrack, setiap transaksi penjualan yang terjadi di Pangkalan secara otomatis mengurangi catatan stok yang juga dapat dipantau oleh Agen, sehingga keputusan restok dapat dilakukan berdasarkan data nyata, bukan perkiraan.

Penelitian ini berfokus pada perancangan UI/UX (User Interface dan User Experience) aplikasi GasTrack untuk modul Pangkalan. Pemilihan modul Pangkalan sebagai fokus disebabkan karena Pangkalan merupakan titik di mana seluruh transaksi operasional terjadi dan menjadi sumber data utama yang akan dimanfaatkan oleh modul Agen. Perancangan yang baik pada modul Pangkalan akan menjadi fondasi keberhasilan keseluruhan sistem GasTrack.

## 1.2 Rumusan Masalah

Berdasarkan latar belakang yang telah diuraikan, tim merumuskan beberapa permasalahan sebagai berikut:

1. Bagaimana merancang antarmuka pengguna (User Interface) aplikasi GasTrack untuk modul Pangkalan yang memudahkan pemilik Pangkalan dalam mencatat transaksi jual beli LPG kepada konsumen akhir?
2. Bagaimana merancang pengalaman pengguna (User Experience) yang memungkinkan pemilik Pangkalan memantau kondisi stok tabung secara real-time dengan informasi yang jelas dan tindak lanjut yang cepat?
3. Bagaimana merancang antarmuka manajemen kiriman (restok) dari Agen ke Pangkalan sehingga proses penerimaan tabung dan penyelesaian pembayaran dapat dijalankan secara digital dan terdokumentasi?
4. Bagaimana menyusun rancangan UI/UX yang konsisten secara visual dan fungsional di seluruh halaman aplikasi sehingga dapat dipahami oleh pengguna dengan latar belakang non-teknis?

## 1.3 Tujuan Penelitian

Penelitian ini bertujuan untuk:

1. Menghasilkan rancangan UI/UX aplikasi GasTrack pada modul Pangkalan yang mencakup tujuh halaman utama: Form Login, Dashboard Pangkalan, Manajemen Stok, Transaksi Baru, Riwayat Transaksi, Manajemen Kiriman, dan Laporan Keuangan.
2. Menyusun spesifikasi fungsional dan acceptance criteria untuk setiap halaman sebagai panduan implementasi pengembangan aplikasi.
3. Memetakan struktur data dan relasi entitas yang mendukung alur transaksi, stok, dan kiriman pada aplikasi GasTrack.
4. Memberikan alternatif rancangan visual berbasis tema gelap (dark mode) yang sesuai dengan karakter pengguna pemilik Pangkalan yang umumnya beroperasi dari pagi hingga malam.

## 1.4 Manfaat Penelitian

Penelitian ini diharapkan memberikan manfaat sebagai berikut:

**Manfaat Akademis:**

1. Memberikan studi kasus konkret penerapan prinsip UI/UX Design dan User-Centered Design pada konteks distribusi energi bersubsidi di Indonesia.
2. Menjadi referensi bagi penelitian lanjutan tentang perancangan sistem informasi internal pada rantai distribusi B2B.

**Manfaat Praktis:**

1. Memberikan blueprint rancangan UI/UX yang dapat dikembangkan lebih lanjut menjadi aplikasi fungsional oleh Agen LPG atau pihak ketiga yang ingin membantu efisiensi distribusi LPG kepada Pangkalan mitranya.
2. Membantu pemilik Pangkalan memvisualisasikan bagaimana proses kerja harian mereka dapat didigitalisasi tanpa harus tergantung pada catatan manual atau komunikasi verbal dengan Agen.

## 1.5 Batasan Masalah

Untuk menjaga fokus penelitian, tim menetapkan batasan-batasan berikut:

1. **Scope antarmuka.** Perancangan UI/UX hanya mencakup modul Pangkalan. Modul Agen dan modul pihak lain dalam rantai distribusi LPG (SPBE, Sub-Pangkalan, Konsumen) tidak dirancang dalam penelitian ini.
2. **Tingkat fidelitas.** Hasil rancangan berupa **mid-fidelity mockup statis** menggunakan perangkat lunak draw.io. Rancangan tidak dibuat dalam bentuk prototype interaktif maupun aplikasi fungsional.
3. **Pemilihan tool.** Penggunaan draw.io ditetapkan oleh dosen pengampu sebagai bagian dari ketentuan tugas kelompok, di mana setiap kelompok menggunakan perangkat lunak desain yang berbeda.
4. **Tiga varian produk.** Aplikasi dirancang untuk mengelola tiga varian gas: LPG 3 kg (subsidi), Bright Gas 5.5 kg, dan LPG 12 kg. Varian lain di luar tiga jenis tersebut tidak dimasukkan dalam scope.
5. **Asumsi pengaturan harga.** Diasumsikan bahwa Pangkalan dapat mengatur harga jual default secara mandiri, dengan harga dasar yang diberikan oleh Agen. Halaman pengaturan harga belum dirancang dalam tugas ini dan akan disebutkan sebagai pengembangan ke depan.
6. **Asumsi kondisi tabung pada transaksi.** Pada transaksi "Pelanggan Beli Tabung" dan "Pelanggan Jual Tabung", kondisi tabung (isi atau kosong) akan ditangani melalui pilihan radio button yang ditambahkan pada halaman Transaksi Baru sebagai pengembangan minor dari rancangan saat ini.
7. **Data dummy.** Seluruh nilai angka, nama pelanggan, nama Agen, ID transaksi, dan ID invoice yang ditampilkan pada rancangan UI merupakan data dummy yang dibuat untuk keperluan demonstrasi visual dan tidak mencerminkan data aktual.

---

# BAB II  
# LANDASAN TEORI

## 2.1 Konsep UI/UX Design

User Interface (UI) dan User Experience (UX) merupakan dua konsep yang saling berkaitan namun memiliki cakupan yang berbeda. **User Interface** secara harfiah berarti "antarmuka pengguna", yaitu titik temu antara pengguna dengan sebuah sistem digital. UI mencakup seluruh elemen visual dan interaktif yang dilihat dan dimanipulasi oleh pengguna, antara lain tata letak (layout), warna, tipografi, ikon, tombol, formulir, dan komponen visual lainnya (Galitz, 2007).

**User Experience**, di sisi lain, merupakan konsep yang lebih luas dan menyentuh keseluruhan pengalaman pengguna ketika berinteraksi dengan sebuah produk atau sistem. Norman dan Nielsen (2016) menyatakan bahwa UX mencakup semua aspek interaksi pengguna akhir dengan perusahaan, layanan, dan produknya. UX tidak hanya tentang apa yang dilihat pengguna, tetapi juga tentang bagaimana perasaan pengguna sebelum, selama, dan setelah berinteraksi dengan sistem — apakah pengguna merasa puas, terbantu, frustrasi, atau bingung.

Garrett (2010) memetakan elemen UX ke dalam lima lapisan dari yang paling abstrak hingga paling konkret, yaitu Strategy, Scope, Structure, Skeleton, dan Surface. UI menempati lapisan Surface (permukaan visual), sementara UX mencakup keseluruhan lima lapisan tersebut. Oleh karena itu dapat disimpulkan bahwa **UI adalah bagian dari UX**, dan UI yang baik adalah salah satu syarat (namun bukan satu-satunya) bagi terciptanya UX yang baik.

Dalam konteks perancangan aplikasi GasTrack, pendekatan UI/UX dilakukan secara terintegrasi: keputusan visual (UI) seperti pemilihan tema warna gelap dengan aksen hijau, ukuran tombol yang besar, dan tata letak sidebar yang konsisten, diambil berdasarkan pertimbangan pengalaman pengguna (UX) — yaitu pemilik Pangkalan yang sering bekerja di kondisi pencahayaan beragam, memerlukan eksekusi transaksi yang cepat, dan tidak memiliki latar belakang teknis yang tinggi.

### Perbedaan Utama UI dan UX

| Aspek | User Interface (UI) | User Experience (UX) |
|---|---|---|
| Fokus | Tampilan visual dan elemen interaktif | Keseluruhan pengalaman dan kepuasan pengguna |
| Cakupan | Pixel, warna, tipografi, layout, komponen | Strategi produk, arsitektur informasi, alur kerja, emosi |
| Pertanyaan kunci | "Apakah ini terlihat baik dan mudah digunakan?" | "Apakah pengguna mencapai tujuannya dengan mudah dan puas?" |
| Output | Mockup, design system, gaya visual | User journey, persona, wireframe, hasil usability testing |
| Profesi | UI Designer | UX Designer, UX Researcher |

## 2.2 Prinsip Desain Antarmuka Pengguna

Untuk menghasilkan antarmuka yang baik, terdapat sejumlah prinsip dasar yang umum digunakan oleh perancang UI/UX. Tim menerapkan tiga prinsip utama yang relevan dengan konteks aplikasi GasTrack, yaitu Visibility of System Status, Recognition over Recall, dan Konsistensi.

### 2.2.1 Visibility of System Status

Prinsip ini merupakan salah satu dari sepuluh heuristik usabilitas yang dirumuskan oleh Nielsen (1994). Prinsip ini menyatakan bahwa sistem harus selalu memberi tahu pengguna tentang apa yang sedang terjadi melalui umpan balik yang sesuai dalam waktu yang wajar. Pengguna tidak boleh dibiarkan menebak-nebak status dari sistem.

Dalam aplikasi GasTrack, prinsip ini diimplementasikan melalui beberapa elemen visual, antara lain:

a. **Badge status stok** ("Aman", "Menipis", "Kritis") pada setiap kartu varian gas di halaman Manajemen Stok, sehingga pemilik Pangkalan langsung mengetahui kondisi stok tanpa harus menghitung manual.

b. **Banner peringatan stok kritis** pada Dashboard Pangkalan yang muncul ketika salah satu varian gas berada di bawah ambang batas tertentu.

c. **Indikator status transaksi** (titik berwarna hijau untuk "Selesai", merah/oranye untuk "Pending") pada tabel transaksi terkini.

d. **Progress bar berwarna** yang menunjukkan persentase ketersediaan stok secara cepat dan intuitif.

### 2.2.2 Recognition over Recall

Prinsip ini juga termasuk dalam sepuluh heuristik Nielsen (1994). Prinsip ini menyarankan agar perancang meminimalkan beban memori pengguna dengan membuat objek, aksi, dan opsi terlihat (visible) sehingga pengguna cukup mengenali (recognize) daripada mengingat (recall) dari memori.

Penerapan dalam GasTrack mencakup:

a. **Penggunaan ikon yang konsisten** di sidebar navigasi (ikon dashboard, ikon transaksi, ikon kiriman, dan lain-lain), dilengkapi dengan label teks sehingga pengguna mengenali fungsi dari ikon tersebut.

b. **Pemilihan tipe transaksi berbentuk kartu visual** (Isi Ulang, Pelanggan Beli Tabung, Pelanggan Jual Tabung) pada halaman Transaksi Baru, yang memungkinkan pengguna langsung mengenali pilihan tanpa harus mengingat istilah teknis.

c. **Penggunaan warna kategorial yang konsisten** untuk membedakan varian produk: hijau untuk LPG 3 kg, biru untuk LPG 12 kg, dan merah muda untuk Bright Gas 5.5 kg. Pengguna mengenali varian dari warna dot/badge sebelum membaca teksnya.

### 2.2.3 Konsistensi

Konsistensi dalam desain antarmuka berarti bahwa elemen visual dan pola interaksi yang sama harus berperilaku dan tampil dengan cara yang sama di seluruh sistem (Shneiderman et al., 2016). Konsistensi membantu pengguna mempelajari sistem lebih cepat karena ekspektasi mereka terhadap antarmuka tidak berubah-ubah.

Dalam GasTrack, konsistensi diwujudkan melalui:

a. **Sidebar navigasi yang identik** di seluruh halaman utama, dengan posisi dan komposisi menu yang sama.

b. **Palet warna global** yang digunakan di seluruh aplikasi, termasuk warna primer (hijau aksen), warna latar (dark grey/black), warna teks (putih dan abu), serta warna status (hijau untuk sukses, kuning/oranye untuk perhatian, merah untuk kritis).

c. **Pola tata letak kartu (card)** dengan ukuran sudut membulat (border-radius) dan padding internal yang seragam.

d. **Format penulisan ID transaksi** yang konsisten (`#TRX-XXXX`) dan ID invoice (`INV/GT/YYYY/XXXX`).

## 2.3 User-Centered Design (UCD)

User-Centered Design (UCD) adalah suatu pendekatan perancangan yang menempatkan pengguna akhir sebagai fokus utama dalam setiap tahapan pengembangan produk. Pendekatan ini diformalkan dalam standar internasional **ISO 9241-210:2019** yang berjudul "Ergonomics of human-system interaction — Part 210: Human-centred design for interactive systems" (ISO, 2019).

UCD menekankan pada empat aktivitas utama yang dilakukan secara iteratif, yaitu:

1. **Memahami dan menetapkan konteks penggunaan** — siapa pengguna, apa tujuan mereka, dan dalam situasi seperti apa mereka menggunakan sistem.
2. **Menentukan kebutuhan pengguna** — apa yang dibutuhkan pengguna agar dapat mencapai tujuannya.
3. **Menghasilkan solusi rancangan** — membuat sketsa, wireframe, mockup, hingga prototype.
4. **Mengevaluasi rancangan** — melakukan pengujian, mengumpulkan umpan balik, dan kembali ke tahap awal jika diperlukan.

Pada perancangan GasTrack, prinsip UCD diterapkan melalui identifikasi profil pengguna utama, yaitu **pemilik atau operator Pangkalan LPG** yang memiliki karakteristik sebagai berikut:

a. Umumnya berusia 30-60 tahun, dengan tingkat literasi digital yang bervariasi (dari pemula hingga menengah).

b. Bekerja sambil melayani pelanggan secara langsung, sehingga membutuhkan interaksi yang cepat dan tidak memerlukan banyak langkah.

c. Tidak memiliki latar belakang teknis IT, sehingga terminologi dalam aplikasi harus menggunakan bahasa awam (misalnya "Pelanggan Beli Tabung" alih-alih "Outbound Cylinder Sale").

d. Beroperasi di lingkungan fisik berupa kios atau warung dengan pencahayaan beragam, sehingga tampilan layar harus tetap mudah dibaca baik di kondisi terang maupun redup.

Pemahaman atas konteks pengguna inilah yang melatarbelakangi keputusan rancangan, antara lain pemilihan tema gelap dengan kontras tinggi, ukuran tombol Call-to-Action (CTA) yang besar dan dominan, serta penempatan banner peringatan stok kritis pada posisi paling atas Dashboard agar tidak terlewat.

## 2.4 Wireframing, Prototyping, dan Mockup

Dalam alur perancangan UI/UX, terdapat tiga bentuk artefak yang umum dihasilkan secara bertahap dengan tingkat detail dan interaktivitas yang berbeda, yaitu wireframe, mockup, dan prototype.

### 2.4.1 Wireframe

Wireframe adalah representasi visual rancangan antarmuka pada tingkat fidelitas terendah, biasanya berupa sketsa kerangka kasar yang hanya menunjukkan tata letak elemen utama tanpa detail visual (Babich, 2020). Wireframe umumnya hanya menggunakan kotak, garis, dan teks placeholder berwarna hitam-putih atau abu-abu. Tujuan utama wireframe adalah mengkomunikasikan struktur halaman dan hierarki informasi, bukan estetika.

### 2.4.2 Mockup

Mockup adalah representasi visual yang lebih detail dan menunjukkan tampilan akhir antarmuka secara statis. Pada mockup, elemen warna, tipografi, ikon, dan komponen visual sudah ditampilkan dalam bentuk yang menyerupai produk akhir (high-fidelity mockup) atau pada tingkat menengah (mid-fidelity mockup). Mockup memberikan gambaran yang akurat tentang "wajah" aplikasi, namun belum memiliki interaktivitas.

### 2.4.3 Prototype

Prototype adalah rancangan yang sudah dapat dijalankan secara interaktif. Pengguna dapat mengklik tombol, berpindah antar halaman, dan merasakan alur penggunaan aplikasi tanpa harus menulis kode. Prototype biasanya digunakan untuk usability testing sebelum aplikasi benar-benar dibangun.

### 2.4.4 Penerapan pada GasTrack

Pada perancangan GasTrack, tim menghasilkan **mid-fidelity mockup statis** sebagai output utama, tanpa melewati tahap wireframe rangka kasar secara terpisah dan tanpa menghasilkan prototype interaktif. Mid-fidelity mockup dipilih karena dapat memberikan gambaran yang cukup jelas tentang tampilan akhir aplikasi, sekaligus menjadi panduan yang dapat dimengerti oleh pemegang kepentingan non-teknis. Pemilihan tingkat fidelitas ini juga mempertimbangkan batasan tools perancangan yang digunakan, yaitu draw.io, yang tidak dirancang khusus sebagai aplikasi UI/UX design dedicated.

## 2.5 Tools Perancangan UI/UX — draw.io

draw.io (saat ini juga dikenal dengan nama **diagrams.net**) adalah perangkat lunak open-source berbasis web yang umumnya digunakan untuk membuat berbagai jenis diagram, seperti flowchart, organizational chart, network diagram, Entity Relationship Diagram (ERD), dan UML diagram. Aplikasi ini dapat diakses secara gratis melalui peramban web atau diunduh sebagai aplikasi desktop, dan menyediakan integrasi penyimpanan dengan Google Drive, OneDrive, Dropbox, serta GitHub.

Meskipun draw.io bukan tool yang secara spesifik dirancang untuk UI/UX design (berbeda dengan Figma, Sketch, atau Adobe XD), draw.io tetap dapat digunakan untuk menghasilkan mockup antarmuka pengguna dengan memanfaatkan **shape library** yang tersedia, termasuk library "Mockups" yang menyediakan komponen UI seperti tombol, formulir, ikon, dan area teks. draw.io juga mendukung pemanfaatan gambar eksternal yang dapat di-import sebagai aset desain.

**Kelebihan draw.io** untuk perancangan UI/UX antara lain:

a. Gratis dan tidak memerlukan registrasi akun.

b. Berbasis web sehingga dapat diakses dari berbagai perangkat dan sistem operasi.

c. Mendukung kolaborasi melalui integrasi penyimpanan cloud.

d. Memiliki shape library yang luas, termasuk untuk mockup.

**Keterbatasan draw.io** untuk perancangan UI/UX:

a. Tidak memiliki fitur design system, component library terstruktur, maupun auto-layout seperti yang dimiliki oleh tools UI/UX dedicated.

b. Tidak mendukung pembuatan prototype interaktif.

c. Gaya visual default lebih cenderung ke arah diagram dibandingkan ke mockup berfidelitas tinggi.

d. Tidak memiliki fitur kolaborasi real-time multi-pengguna pada satu kanvas sebagaimana yang dimiliki Figma.

Pemilihan draw.io pada perancangan GasTrack ditetapkan oleh dosen pengampu sebagai bagian dari skema tugas kelompok, di mana setiap kelompok mendapatkan perangkat lunak desain yang berbeda. Pendekatan ini bertujuan agar setiap kelompok memperoleh pengalaman langsung dengan tools yang berbeda dan dapat membandingkan karakteristiknya.

## 2.6 Rantai Distribusi LPG di Indonesia

Pemahaman terhadap rantai distribusi LPG di Indonesia menjadi konteks penting dalam perancangan GasTrack, karena aplikasi ini diposisikan pada titik tertentu di dalam rantai tersebut. Rantai distribusi LPG di Indonesia, khususnya untuk LPG bersubsidi 3 kg, mengalami penataan ulang oleh pemerintah melalui Kementerian ESDM dan PT Pertamina (Persero) pada awal tahun 2025.

### 2.6.1 Rantai Distribusi Versi Tradisional (Sebelum Februari 2025)

Sebelum dilakukan penataan ulang, rantai distribusi LPG terdiri dari tiga tingkatan utama setelah depot Pertamina, yaitu:

```
SPBE → Agen → Pangkalan → Konsumen Akhir
```

**SPBE (Stasiun Pengisian Bulk Elpiji)** adalah fasilitas tempat pengisian gas LPG ke dalam tabung-tabung dari sumber bulk Pertamina.

**Agen LPG** adalah distributor wilayah yang mendapatkan pasokan LPG dalam jumlah besar dari SPBE atau depot Pertamina. Agen memiliki fasilitas penyimpanan dan kendaraan distribusi, serta memasok ke pangkalan-pangkalan di wilayahnya (Merdeka, 2025).

**Pangkalan** adalah penyalur tingkat akhir yang menerima pasokan dari Agen dan menjual langsung ke konsumen akhir. Pangkalan resmi memiliki izin operasi dari Pertamina.

**Konsumen akhir** mencakup rumah tangga, UMKM, dan sektor pertanian. Pada praktik di lapangan, konsumen seringkali tidak membeli langsung dari Pangkalan, melainkan dari pengecer atau warung kelontong yang membeli dalam jumlah kecil dari Pangkalan untuk dijual kembali. Praktik ini sebenarnya melanggar ketentuan distribusi LPG bersubsidi karena dapat menyebabkan harga jual ke konsumen akhir melampaui Harga Eceran Tertinggi (HET).

### 2.6.2 Rantai Distribusi Versi Baru (Sejak Februari 2025)

Untuk mengatasi permasalahan pengecer informal dan memastikan subsidi tepat sasaran, pemerintah menerbitkan kebijakan yang mengubah status pengecer/warung menjadi **Sub-Pangkalan resmi** yang harus terdaftar dalam sistem (Tirto, 2025). Dengan demikian, rantai distribusi terbaru menjadi:

```
SPBE → Agen → Pangkalan → Sub-Pangkalan → Konsumen Akhir
```

Sub-Pangkalan wajib mendaftarkan diri melalui aplikasi **Merchant Apps Pangkalan (MAP)** yang dapat diakses melalui situs `merchant.mypertamina.id` atau melalui aplikasi mobile (Tribun, 2025). Penataan ini juga didukung oleh sistem pemantauan digital yang melacak kebutuhan dan suplai harian di berbagai wilayah (Portonews, 2025).

### 2.6.3 Posisi GasTrack dalam Rantai Distribusi

Aplikasi GasTrack berfokus pada hubungan **Agen ↔ Pangkalan**, yaitu pada segmen rantai yang ditandai berikut:

```
SPBE → Agen ⇄ [GASTRACK] ⇄ Pangkalan → (Sub-Pangkalan) → Konsumen Akhir
```

Pada segmen ini, koordinasi restok, monitoring stok, dan penyelesaian pembayaran antara Agen dengan setiap Pangkalan mitranya menjadi fokus utama GasTrack. Aplikasi MAP Pertamina yang telah ada lebih banyak mengelola hubungan **Pangkalan ↔ Konsumen** (verifikasi NIK, pencatatan penerima subsidi), sehingga GasTrack tidak menggantikan MAP melainkan melengkapinya pada area yang berbeda.

## 2.7 Digitalisasi UMKM dan Sistem Informasi Manajemen Stok

Pangkalan LPG umumnya merupakan unit usaha yang masuk dalam kategori UMKM. Digitalisasi pada UMKM didefinisikan sebagai proses adopsi teknologi digital — termasuk perangkat lunak, internet, dan layanan cloud — untuk meningkatkan efisiensi operasional, memperluas akses pasar, dan meningkatkan kemampuan pengambilan keputusan berbasis data (Kementerian Koperasi dan UKM RI, 2022).

Salah satu bentuk digitalisasi yang paling berdampak pada UMKM dagang seperti Pangkalan LPG adalah penerapan **Sistem Informasi Manajemen Stok** (Stock Management Information System). Sistem ini berfungsi mencatat seluruh pergerakan barang masuk dan keluar dari gudang/toko, menghitung stok terkini secara otomatis, serta menghasilkan laporan untuk pengambilan keputusan operasional.

### 2.7.1 Konsep Dasar Sistem Informasi Manajemen Stok

Sistem informasi manajemen stok pada dasarnya merepresentasikan kondisi fisik barang ke dalam bentuk data digital. Beberapa konsep dasar yang relevan antara lain:

a. **Entity (Entitas)** — objek nyata atau konsep yang dapat dibedakan dan disimpan datanya, misalnya Produk, Transaksi, Pelanggan.

b. **Attribute (Atribut)** — karakteristik yang dimiliki sebuah entitas, misalnya entitas Produk memiliki atribut nama, harga, dan stok.

c. **Relationship (Relasi)** — keterkaitan antara dua atau lebih entitas, misalnya satu Transaksi terkait dengan satu Pelanggan dan beberapa Produk.

d. **Stok masuk dan stok keluar** — setiap aksi yang mempengaruhi jumlah stok dicatat sebagai pergerakan dengan tipe tertentu (penambahan dari kiriman, pengurangan dari penjualan).

e. **Real-time update** — perubahan stok yang terjadi melalui transaksi langsung mempengaruhi angka stok terkini, tanpa perlu rekonsiliasi manual di akhir hari.

### 2.7.2 Penerapan pada GasTrack

Pada aplikasi GasTrack, prinsip-prinsip manajemen stok diterapkan dengan menghubungkan dua sumber utama pergerakan stok, yaitu:

1. **Halaman Transaksi (mengurangi/menambah stok berdasarkan jenis transaksi):**
   - Isi Ulang: Tabung Isi berkurang, Tabung Kosong bertambah dalam jumlah yang sama.
   - Pelanggan Beli Tabung: Tabung Isi atau Tabung Kosong berkurang (sesuai pilihan kondisi tabung yang dijual).
   - Pelanggan Jual Tabung: Tabung Isi atau Tabung Kosong bertambah (sesuai pilihan kondisi tabung yang diterima).

2. **Halaman Kiriman (menambah stok ketika menerima kiriman dari Agen):**
   - Kiriman dari Agen: Tabung Isi bertambah, Tabung Kosong berkurang dalam jumlah yang sama (tabung kosong dibawa pulang Agen sebagai pengembalian).

Dengan model ini, stok yang ditampilkan pada Dashboard, Manajemen Stok, dan Transaksi Baru selalu mencerminkan kondisi terkini secara real-time, tanpa memerlukan input manual terpisah dari pengguna.

### 2.7.3 Manfaat Digitalisasi Stok bagi Pangkalan

Penerapan sistem informasi manajemen stok pada Pangkalan LPG memberikan beberapa manfaat utama:

a. **Eliminasi pencatatan ganda** antara buku stok manual dengan buku transaksi.

b. **Visibilitas real-time** bagi pemilik Pangkalan dan, dalam konteks GasTrack, juga bagi Agen.

c. **Pemicu peringatan otomatis** ketika stok mencapai ambang batas tertentu.

d. **Data historis terstruktur** yang memudahkan pembuatan laporan keuangan dan analisis tren.

e. **Dasar pengambilan keputusan** restok yang lebih akurat berdasarkan data nyata, bukan perkiraan.

---

# BAB III  
# PERANCANGAN APLIKASI GASTRACK

Bab ini menyajikan rancangan tujuh halaman utama aplikasi GasTrack pada modul Pangkalan, beserta acceptance criteria dan function specification untuk masing-masing halaman. Pada akhir bab disertakan struktur data dan Entity Relationship Diagram yang mendasari keseluruhan rancangan.

Untuk konsistensi penyajian, seluruh halaman dirancang menggunakan skema warna gelap (dark mode) dengan aksen hijau (`#4CAF50`) sebagai warna utama dan tata letak dua kolom: sidebar navigasi di sebelah kiri (lebar tetap) dan area konten di sebelah kanan.

---

## 3.1 User Interface Form Login

`[Gambar 3.1 — Form Login]`

**Gambar 3.1 Form Login**

Halaman Form Login merupakan halaman pertama yang muncul ketika pengguna membuka aplikasi GasTrack. Halaman ini berfungsi sebagai pintu masuk ke sistem dengan memverifikasi identitas pengguna sebagai Pangkalan resmi yang terdaftar sebagai mitra dari salah satu Agen LPG. Pada halaman ini terdapat dua kolom input utama, yaitu Username dan Kata Sandi, serta tombol "Masuk Sekarang" sebagai aksi utama. Username yang digunakan adalah identitas unik yang diberikan oleh Agen kepada Pangkalan mitra, bukan email atau nomor telepon. Kata Sandi ditampilkan dalam bentuk karakter tersembunyi (masking) untuk menjaga kerahasiaan data. Di bagian atas form terdapat logo dan nama brand GasTrack dengan warna hijau aksen yang menonjol. Halaman ini juga menyediakan checkbox "Ingat saya" untuk menyimpan sesi login, dan link "Lupa sandi?" untuk pemulihan akses. Pada bagian bawah halaman terdapat informasi hak cipta dan versi sistem.

### 3.1.1 Acceptance Criteria — Form Login

**Tabel 3.1 Acceptance Criteria Pada Form Login**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Tombol Masuk Sekarang | Jika | Pengguna memasukkan username yang tidak terdaftar pada sistem |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Muncul pesan error "Username tidak ditemukan" |
| AC-02 | Tombol Masuk Sekarang | Jika | Pengguna memasukkan username dan kata sandi yang tidak sesuai |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Muncul pesan error "Username atau Kata Sandi salah" |
| AC-03 | Tombol Masuk Sekarang | Jika | Pengguna mengosongkan salah satu atau kedua kolom input |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Muncul pesan error "Username dan Kata Sandi wajib diisi" di bawah field yang kosong |
| AC-04 | Tombol Masuk Sekarang | Jika | Status akun Pangkalan dinonaktifkan oleh Agen |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Muncul pesan error "Akun Anda telah dinonaktifkan. Silakan hubungi Agen Anda" |
| AC-05 | Tombol Masuk Sekarang | Jika | Username dan kata sandi sesuai serta akun aktif |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Pengguna diarahkan ke halaman Dashboard Pangkalan |
| AC-06 | Link Lupa Sandi | Jika | Pengguna mengklik link "Lupa sandi?" |
|  |  | Sewaktu | Klik link |
|  |  | Maka | Pengguna diarahkan ke halaman atau modal pemulihan kata sandi |
| AC-07 | Checkbox Ingat Saya | Jika | Checkbox "Ingat saya" dicentang dan login berhasil |
|  |  | Sewaktu | Klik tombol Masuk Sekarang |
|  |  | Maka | Sesi login disimpan dan pengguna tidak perlu login ulang pada kunjungan berikutnya selama sesi belum habis |

### 3.1.2 Function Specification — Form Login

**Tabel 3.2 Function Specification Pada Form Login**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Form Login** |  |  |  |  |  |  |  |
| Username | Text | 50 | M | No | No | Input username unik Pangkalan yang diberikan oleh Agen. Contoh nilai: `pangkalan_sumber_rejeki` | Tidak boleh kosong; hanya menerima huruf, angka, garis bawah; minimal 6 karakter |
| Kata Sandi | Password | 50 | M | No | No | Input kata sandi pengguna. Harus dimasking (•••) | Tidak boleh kosong; minimal 6 karakter |
| Checkbox Ingat Saya | Checkbox | — | O | No | No | Default unchecked. Bila dicentang, sesi disimpan dalam local storage |  |
| Link Lupa Sandi | Link | — | O | No | No | Mengarahkan ke alur pemulihan kata sandi |  |
| Tombol Masuk Sekarang | Button | — | — | No | No | Aksi utama untuk submit form login |  |

---

## 3.2 User Interface Dashboard Pangkalan

`[Gambar 3.2 — Dashboard Pangkalan]`

**Gambar 3.2 Dashboard Pangkalan**

Halaman Dashboard Pangkalan merupakan halaman yang muncul setelah pengguna berhasil login. Halaman ini berfungsi sebagai pusat informasi ringkas mengenai kondisi operasional Pangkalan pada hari berjalan. Dashboard menampilkan empat informasi utama dalam bentuk kartu statistik: jumlah stok LPG 3 kg, jumlah stok Bright Gas 5.5 kg, total transaksi hari ini, dan total pendapatan hari ini. Pada Dashboard hanya ditampilkan dua varian gas dari tiga varian yang dikelola, karena varian LPG 12 kg memiliki frekuensi transaksi yang lebih rendah; data lengkap untuk seluruh varian tetap tersedia pada halaman Manajemen Stok. Di bagian atas halaman terdapat banner peringatan stok kritis yang akan muncul ketika salah satu varian gas berada di bawah ambang batas, dilengkapi dengan tombol "Pesan Sekarang" yang menghubungkan langsung ke halaman pemesanan kepada Agen. Pada bagian bawah halaman terdapat tabel ringkas Transaksi Terkini yang menampilkan tiga transaksi terakhir, masing-masing dengan informasi nama pelanggan, tipe gas, status transaksi, waktu, dan total nilai transaksi.

### 3.2.1 Acceptance Criteria — Dashboard Pangkalan

**Tabel 3.3 Acceptance Criteria Pada Dashboard Pangkalan**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Banner Peringatan Stok | Jika | Salah satu varian gas memiliki persentase ketersediaan kurang dari 20% |
|  |  | Sewaktu | Halaman Dashboard dimuat |
|  |  | Maka | Banner peringatan dengan ikon segitiga oranye muncul di bagian atas halaman beserta tombol "Pesan Sekarang" |
| AC-02 | Banner Peringatan Stok | Jika | Seluruh varian gas memiliki persentase ketersediaan di atas 20% |
|  |  | Sewaktu | Halaman Dashboard dimuat |
|  |  | Maka | Banner peringatan tidak ditampilkan |
| AC-03 | Tombol Pesan Sekarang | Jika | Pengguna mengklik tombol "Pesan Sekarang" pada banner |
|  |  | Sewaktu | Klik tombol |
|  |  | Maka | Pengguna diarahkan ke halaman Manajemen Kiriman atau modal pemesanan baru ke Agen |
| AC-04 | Kartu Statistik Stok | Jika | Halaman dimuat |
|  |  | Sewaktu | — |
|  |  | Maka | Setiap kartu stok menampilkan jumlah tabung isi terkini, kapasitas maksimal, persentase, dan progress bar dengan warna sesuai status |
| AC-05 | Tabel Transaksi Terkini | Jika | Tabel dimuat |
|  |  | Sewaktu | — |
|  |  | Maka | Maksimal 3 transaksi terakhir hari ini ditampilkan, diurutkan dari yang paling baru |

### 3.2.2 Function Specification — Dashboard Pangkalan

**Tabel 3.4 Function Specification Pada Dashboard Pangkalan**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Banner Peringatan Stok Kritis** |  |  |  |  |  |  |  |
| Judul Peringatan | Text | — | — | Conditional | No | "Peringatan: Stok Kritis" |  |
| Deskripsi | Text | — | — | Conditional | No | Penjelasan kondisi stok |  |
| Tombol Pesan Sekarang | Button | — | — | Conditional | No | Navigasi ke halaman Manajemen Kiriman |  |
| **Kartu Statistik (4 kartu)** |  |  |  |  |  |  |  |
| Stok Gas Melon (LPG 3kg) | Integer | — | — | No | No | Contoh: 142 / 250 unit |  |
| Bright Gas (5.5kg) | Integer | — | — | No | No | Contoh: 18 / 120 unit |  |
| Transaksi Hari Ini | Integer | — | — | No | No | Contoh: 156 |  |
| Pendapatan Hari Ini | Currency | — | — | No | No | Contoh: Rp 4.250.000 |  |
| **Tabel Transaksi Terkini** |  |  |  |  |  |  |  |
| Pelanggan | Text | 100 | — | No | No | Avatar inisial + nama pelanggan |  |
| Tipe Gas | Badge | — | — | No | No | Badge berwarna sesuai varian |  |
| Status | Enum | — | — | No | No | Selesai / Pending dengan dot indikator |  |
| Waktu | Time | — | — | No | No | Format `HH:MM WIB` |  |
| Total | Currency | — | — | No | No | Format `Rp XX.XXX` |  |

---

## 3.3 User Interface Manajemen Stok

`[Gambar 3.3 — Manajemen Stok]`

**Gambar 3.3 Manajemen Stok**

Halaman Manajemen Stok berfungsi sebagai pusat informasi detail mengenai kondisi stok seluruh varian gas yang dikelola oleh Pangkalan. Berbeda dengan Dashboard yang hanya menampilkan dua varian utama, halaman ini menampilkan ketiga varian secara lengkap, masing-masing dalam bentuk kartu yang berisi nama varian, badge status, jumlah tabung isi terkini, persentase ketersediaan, progress bar, serta jumlah tabung masuk dan keluar pada bulan berjalan. Di bagian bawah kartu terdapat tabel Riwayat Pergerakan Stok yang mencatat setiap aktivitas yang mempengaruhi stok tabung, baik yang berasal dari transaksi dengan pelanggan maupun kiriman dari Agen. Tabel ini dilengkapi dengan tiga kontrol filter di sudut kanan atas: filter Tipe Gerakan (dropdown), filter rentang tanggal, dan tombol filter lanjutan. Setiap baris pada tabel mencatat timestamp kejadian, ID sumber referensi (ID transaksi atau ID kiriman), tipe gerakan, varian tabung, jumlah perubahan tabung isi, dan jumlah perubahan tabung kosong.

### 3.3.1 Acceptance Criteria — Manajemen Stok

**Tabel 3.5 Acceptance Criteria Pada Manajemen Stok**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Kartu Status Stok | Jika | Persentase ketersediaan suatu varian > 50% |
|  |  | Sewaktu | Halaman dimuat |
|  |  | Maka | Badge status menampilkan "Aman" dengan warna hijau dan progress bar berwarna hijau |
| AC-02 | Kartu Status Stok | Jika | Persentase ketersediaan suatu varian antara 10% dan 50% |
|  |  | Sewaktu | Halaman dimuat |
|  |  | Maka | Badge status menampilkan "Menipis" dengan warna oranye/pink dan progress bar berwarna sesuai |
| AC-03 | Kartu Status Stok | Jika | Persentase ketersediaan suatu varian < 10% |
|  |  | Sewaktu | Halaman dimuat |
|  |  | Maka | Badge status menampilkan "Kritis" dengan warna merah dan progress bar berwarna merah/biru |
| AC-04 | Filter Tipe Gerakan | Jika | Pengguna memilih salah satu opsi pada dropdown |
|  |  | Sewaktu | Klik opsi pada dropdown |
|  |  | Maka | Tabel Riwayat Pergerakan Stok difilter sesuai tipe gerakan yang dipilih |
| AC-05 | Filter Tanggal | Jika | Pengguna memilih tanggal pada date picker |
|  |  | Sewaktu | Klik tanggal |
|  |  | Maka | Tabel Riwayat Pergerakan Stok difilter sesuai tanggal yang dipilih |
| AC-06 | Pagination | Jika | Jumlah total entri melebihi kapasitas satu halaman |
|  |  | Sewaktu | Klik tombol navigasi |
|  |  | Maka | Tabel menampilkan halaman selanjutnya/sebelumnya beserta indikator "Menampilkan X dari Y entri" |

### 3.3.2 Function Specification — Manajemen Stok

**Tabel 3.6 Function Specification Pada Manajemen Stok**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Kartu Stok (3 kartu: LPG 3kg, Bright Gas 5.5kg, LPG 12kg)** |  |  |  |  |  |  |  |
| Nama Varian | Text | 30 | — | No | No | Contoh: "LPG 3kg" |  |
| Badge Status | Enum | — | — | No | No | Aman / Menipis / Kritis |  |
| Jumlah Tabung Isi | Integer | — | — | No | No | Contoh: 142 |  |
| Persentase Ketersediaan | Decimal | — | — | No | No | Contoh: 57% |  |
| Tabung Masuk (Bulan Ini) | Integer | — | — | No | No | Contoh: +450 |  |
| Tabung Keluar (Bulan Ini) | Integer | — | — | No | No | Contoh: -308 |  |
| **Filter Tabel Riwayat Pergerakan Stok** |  |  |  |  |  |  |  |
| Tipe Gerakan | Dropdown | — | O | No | No | Opsi: Semua, Isi Ulang, Beli Tabung, Jual Tabung, Kiriman Agen |  |
| Tanggal | Date | — | O | No | No | Format `mm/dd/yyyy` |  |
| Tombol Filter Lanjutan | Button | — | O | No | No | Membuka panel filter tambahan |  |
| **Tabel Riwayat Pergerakan Stok** |  |  |  |  |  |  |  |
| Timestamp | DateTime | — | — | No | No | Format: tanggal bold + waktu WIB di baris bawah |  |
| Sumber | Text | 20 | — | No | No | Contoh: `TRX-1234`, `KRM-0821` |  |
| Tipe Gerakan | Enum | — | — | No | No | Isi Ulang / Beli Tabung / Jual Tabung / Kiriman Agen |  |
| Tipe/Varian | Text | 30 | — | No | No | Dot warna + nama varian (LPG 3kg, BG 5.5kg, LPG 12kg) |  |
| Tabung Isi | Integer | — | — | No | No | Prefix +/-, contoh: `-5 Tabung` |  |
| Tabung Kosong | Integer | — | — | No | No | Prefix +/-, kosongkan dengan `-` jika tidak ada |  |
| Pagination | Component | — | — | No | No | Indikator "Menampilkan X dari Y entri" + tombol `<` dan `>` |  |

---

## 3.4 User Interface Transaksi Baru

`[Gambar 3.4 — Transaksi Baru]`

**Gambar 3.4 Transaksi Baru**

Halaman Transaksi Baru adalah halaman utama tempat pemilik Pangkalan mencatat setiap transaksi jual beli yang terjadi dengan pelanggan. Halaman ini dirancang sebagai form multi-step yang dibagi ke dalam tiga zona utama: area input form (sebelah kiri-tengah), panel keranjang ringkasan (sebelah kanan), dan panel tambah pelanggan baru yang muncul sebagai drawer di sisi paling kanan ketika ikon plus diklik. Pengguna pertama-tama memilih nama pelanggan dari dropdown, kemudian memilih varian gas yang akan ditransaksikan (LPG 3kg, Bright Gas 5.5kg, atau LPG 12kg), lalu memilih tipe transaksi (Isi Ulang, Pelanggan Beli Tabung, atau Pelanggan Jual Tabung). Setelah tipe transaksi dipilih, pengguna menentukan jumlah unit, dapat mengisi catatan tambahan, dan secara opsional dapat menggunakan fitur override harga untuk transaksi dengan negosiasi khusus. Tombol "Tambah" akan memasukkan item ke dalam keranjang yang ditampilkan di panel kanan. Panel keranjang menampilkan ringkasan transaksi termasuk total harga, dan menyediakan tombol "Simpan Transaksi" untuk finalisasi serta tombol "Batalkan" untuk membatalkan. Panel tambah pelanggan menyediakan input nama pelanggan baru dan dropdown jenis pengguna (Pribadi atau Retailer/UMKM).

### 3.4.1 Acceptance Criteria — Transaksi Baru

**Tabel 3.7 Acceptance Criteria Pada Transaksi Baru**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Tombol Tambah | Jika | Pengguna belum memilih varian gas dan tipe transaksi |
|  |  | Sewaktu | Klik tombol Tambah |
|  |  | Maka | Muncul pesan error "Pilih varian gas dan tipe transaksi terlebih dahulu" |
| AC-02 | Tombol Tambah | Jika | Jumlah unit yang diinput melebihi stok yang tersedia untuk varian tersebut |
|  |  | Sewaktu | Klik tombol Tambah |
|  |  | Maka | Muncul pesan error "Stok tidak mencukupi. Sisa stok: X tabung" |
| AC-03 | Tombol Tambah | Jika | Seluruh field wajib telah terisi dan stok mencukupi |
|  |  | Sewaktu | Klik tombol Tambah |
|  |  | Maka | Item ditambahkan ke panel Keranjang dan total harga diperbarui |
| AC-04 | Tombol Simpan Transaksi | Jika | Keranjang berisi minimal satu item dan pelanggan telah dipilih |
|  |  | Sewaktu | Klik tombol Simpan Transaksi |
|  |  | Maka | Transaksi disimpan, stok diperbarui, halaman direset, dan muncul notifikasi sukses |
| AC-05 | Tombol Plus Tambah Pelanggan | Jika | Pengguna mengklik tombol `+` di sebelah dropdown Nama Pelanggan |
|  |  | Sewaktu | Klik tombol |
|  |  | Maka | Panel "Tambah Pelanggan Baru" muncul di sisi kanan halaman |
| AC-06 | Tombol Tambah Pelanggan (di panel) | Jika | Nama pelanggan dan jenis pengguna telah terisi |
|  |  | Sewaktu | Klik tombol Tambah |
|  |  | Maka | Pelanggan baru disimpan, panel ditutup, dan dropdown pelanggan otomatis terisi dengan nama baru |
| AC-07 | Field Override Harga | Jika | Pengguna mengisi field Override Harga dengan nilai berbeda dari harga default |
|  |  | Sewaktu | Klik tombol Tambah |
|  |  | Maka | Item ditambahkan ke keranjang dengan harga override, dan ditandai dengan ikon/label khusus |

### 3.4.2 Function Specification — Transaksi Baru

**Tabel 3.8 Function Specification Pada Transaksi Baru**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Form Transaksi (Area Kiri)** |  |  |  |  |  |  |  |
| Nama Pelanggan | Dropdown | — | M | No | No | Menampilkan daftar pelanggan terdaftar | Wajib dipilih sebelum Simpan |
| Tombol Tambah Pelanggan | Button | — | O | No | No | Ikon `+` warna hijau, membuka drawer pelanggan baru |  |
| Pilihan Varian Gas | Radio Card | — | M | No | No | Opsi: LPG 3kg, Bright Gas 5.5kg, LPG 12kg. Default: LPG 3kg | Wajib dipilih |
| Pilihan Tipe Transaksi | Radio Card | — | M | No | No | Opsi: Isi Ulang, Pelanggan Beli Tabung, Pelanggan Jual Tabung. Default: Isi Ulang | Wajib dipilih |
| Pilihan Kondisi Tabung | Radio | — | Conditional | Conditional | No | Hanya muncul jika tipe = Beli Tabung atau Jual Tabung. Opsi: Isi, Kosong | Wajib dipilih jika muncul |
| Jumlah | Integer | 4 | M | No | No | Jumlah unit, minimal 1 | Numerik > 0, tidak melebihi stok |
| Override Harga | Currency | 10 | O | No | No | Nilai numerik untuk menggantikan harga default | Numerik > 0 |
| Catatan Tambahan | Textarea | 250 | O | No | No | Catatan transaksi opsional |  |
| Tombol Tambah | Button | — | — | No | Conditional | Disabled jika field wajib belum terisi |  |
| **Panel Keranjang (Area Kanan)** |  |  |  |  |  |  |  |
| Daftar Item | List | — | — | No | No | Setiap item: jenis, produk, kuantitas, harga satuan |  |
| Total | Currency | — | — | No | No | Akumulasi seluruh item di keranjang |  |
| Tombol Simpan Transaksi | Button | — | — | No | Conditional | Disabled jika keranjang kosong |  |
| Tombol Batalkan | Button | — | — | No | No | Mengosongkan keranjang dan mereset form |  |
| **Panel Tambah Pelanggan Baru (Drawer)** |  |  |  |  |  |  |  |
| Nama Pelanggan | Text | 100 | M | No | No | Input nama pelanggan baru | Tidak boleh kosong, minimal 3 karakter |
| Jenis Pengguna | Dropdown | — | M | No | No | Opsi: Pribadi, Retailer/UMKM | Wajib dipilih |
| Tombol Tambah (Panel) | Button | — | — | No | Conditional | Disabled jika field wajib belum terisi |  |

---

## 3.5 User Interface Riwayat Transaksi

`[Gambar 3.5 — Riwayat Transaksi]`

**Gambar 3.5 Riwayat Transaksi**

Halaman Riwayat Transaksi menyediakan akses terhadap seluruh transaksi yang pernah dicatat oleh Pangkalan, dikelompokkan berdasarkan tanggal kejadian (Hari Ini, Kemarin, dan seterusnya). Halaman ini dilengkapi dengan search bar di sudut kiri atas untuk mencari berdasarkan ID transaksi atau nama pelanggan, serta tombol Ekspor CSV di sudut kanan atas untuk mengunduh data dalam format spreadsheet. Di bawah baris search dan ekspor terdapat tiga kontrol filter sejajar: filter Jenis Transaksi, filter Varian Tabung, dan filter rentang tanggal. Setiap grup tanggal menampilkan tabel transaksi dengan kolom ID & Waktu, Pelanggan (beserta jenis dan ID pelanggan), Tipe Transaksi, Varian Tabung, Jumlah, Status, dan Total Transaksi. Pada bagian bawah halaman terdapat kontrol pagination bernomor halaman untuk navigasi antar halaman jika jumlah data melebihi kapasitas satu halaman.

### 3.5.1 Acceptance Criteria — Riwayat Transaksi

**Tabel 3.9 Acceptance Criteria Pada Riwayat Transaksi**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Search Bar | Jika | Pengguna mengetik kata kunci pada search bar |
|  |  | Sewaktu | Pengetikan selesai (dengan debounce) |
|  |  | Maka | Tabel difilter menampilkan transaksi yang mengandung kata kunci pada ID atau nama pelanggan |
| AC-02 | Filter Jenis Transaksi | Jika | Pengguna memilih opsi pada dropdown Jenis Transaksi |
|  |  | Sewaktu | Klik opsi |
|  |  | Maka | Tabel difilter menampilkan transaksi sesuai jenis yang dipilih |
| AC-03 | Filter Rentang Tanggal | Jika | Pengguna memilih rentang tanggal pada date range picker |
|  |  | Sewaktu | Klik Apply |
|  |  | Maka | Tabel difilter menampilkan transaksi dalam rentang tanggal yang dipilih |
| AC-04 | Tombol Ekspor CSV | Jika | Pengguna mengklik tombol Ekspor CSV |
|  |  | Sewaktu | Klik tombol |
|  |  | Maka | File CSV berisi seluruh data transaksi yang sedang terfilter di-download |
| AC-05 | Pagination | Jika | Jumlah transaksi melebihi kapasitas satu halaman |
|  |  | Sewaktu | Klik nomor halaman atau tombol navigasi |
|  |  | Maka | Tabel menampilkan halaman yang dipilih beserta indikator "Menampilkan X dari Y transaksi" |

### 3.5.2 Function Specification — Riwayat Transaksi

**Tabel 3.10 Function Specification Pada Riwayat Transaksi**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Kontrol Filter** |  |  |  |  |  |  |  |
| Search Bar | Text | 100 | O | No | No | Placeholder: "Cari ID Transaksi atau pelanggan" |  |
| Filter Jenis Transaksi | Dropdown | — | O | No | No | Opsi: Semua Jenis Transaksi, Isi Ulang, Beli Tabung, Jual Tabung |  |
| Filter Varian Tabung | Dropdown | — | O | No | No | Opsi: Semua Varian, LPG 3kg, Bright Gas 5.5kg, LPG 12kg |  |
| Filter Rentang Tanggal | Date Range | — | O | No | No | Format: `DD MMM YYYY - DD MMM YYYY`. Contoh: `01 Aug 2026 - 15 Aug 2026` |  |
| Tombol Ekspor CSV | Button | — | O | No | No | Mengunduh data terfilter dalam format CSV |  |
| **Tabel Transaksi (per grup tanggal)** |  |  |  |  |  |  |  |
| Label Grup Tanggal | Text | — | — | No | No | Contoh: "HARI INI - 15 AGUSTUS 2026" |  |
| ID & Waktu | Composite | — | — | No | No | ID `#TRX-XXXX` (bold) + waktu `HH:MM WIB` (abu) |  |
| Pelanggan | Composite | 100 | — | No | No | Nama pelanggan (bold) + jenis & ID (abu). Contoh: "Warung Makan Bu Endang" + "Retailer | ID: CUST-012" |  |
| Tipe Transaksi | Enum | — | — | No | No | Isi Ulang / Beli Tabung / Jual Tabung |  |
| Varian Tabung | Text | 30 | — | No | No | Nama varian |  |
| Jumlah | Integer | — | — | No | No | Jumlah unit |  |
| Status | Enum | — | — | No | No | Selesai / Pending |  |
| Total Transaksi | Currency | — | — | No | No | Format `Rp XXX.XXX` |  |
| **Pagination** |  |  |  |  |  |  |  |
| Info Jumlah Entri | Text | — | — | No | No | Format: "Menampilkan X dari Y transaksi" |  |
| Nomor Halaman | Button | — | — | No | No | Tombol nomor halaman, halaman aktif berwarna hijau |  |

---

## 3.6 User Interface Manajemen Kiriman

`[Gambar 3.6 — Manajemen Kiriman]`

**Gambar 3.6 Manajemen Kiriman**

Halaman Manajemen Kiriman digunakan oleh pemilik Pangkalan untuk memantau dan mengelola setiap kiriman tabung gas yang dijadwalkan, dalam proses, atau telah selesai dengan Agen mitra. Halaman ini menggunakan tata letak dua kolom: daftar kartu kiriman di sebelah kiri-tengah (lebar mayoritas) dan panel Form Pembayaran di sebelah kanan yang muncul ketika salah satu kartu kiriman dipilih. Pada bagian atas halaman terdapat empat tab filter berbentuk pill: Semua, Dijadwalkan, Diterima, dan Lunas, yang berfungsi untuk memfilter kartu kiriman berdasarkan status. Setiap kartu kiriman menampilkan informasi nama Agen, ID invoice, status (dengan badge berwarna sesuai status), informasi detail jenis tabung, jumlah, jadwal/waktu, total tagihan, dan tombol aksi yang berubah sesuai status (Konfirmasi Terima untuk status Dijadwalkan, Bayar Sekarang untuk status Diterima). Panel Form Pembayaran menyediakan pilihan metode pembayaran (Tunai atau Transfer Bank), detail rekening tujuan transfer, area unggah bukti transfer, dan tombol Konfirmasi Pembayaran untuk menyelesaikan transaksi.

### 3.6.1 Acceptance Criteria — Manajemen Kiriman

**Tabel 3.11 Acceptance Criteria Pada Manajemen Kiriman**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Tab Filter Status | Jika | Pengguna mengklik salah satu tab status |
|  |  | Sewaktu | Klik tab |
|  |  | Maka | Daftar kartu kiriman difilter menampilkan hanya kiriman dengan status yang dipilih |
| AC-02 | Tombol Konfirmasi Terima | Jika | Status kartu kiriman = "Dijadwalkan" dan kiriman fisik telah tiba |
|  |  | Sewaktu | Klik tombol Konfirmasi Terima |
|  |  | Maka | Status kartu berubah menjadi "Diterima", stok tabung isi bertambah dan tabung kosong berkurang sesuai jumlah |
| AC-03 | Tombol Bayar Sekarang | Jika | Status kartu kiriman = "Diterima" |
|  |  | Sewaktu | Klik tombol Bayar Sekarang |
|  |  | Maka | Panel Form Pembayaran muncul di sisi kanan halaman dengan detail invoice yang terkait |
| AC-04 | Pilihan Metode Pembayaran | Jika | Pengguna memilih "Transfer Bank" |
|  |  | Sewaktu | Klik kartu Transfer Bank |
|  |  | Maka | Detail rekening bank Agen ditampilkan dan area unggah bukti transfer diaktifkan |
| AC-05 | Tombol Konfirmasi Pembayaran | Jika | Pengguna telah memilih metode pembayaran (dan mengunggah bukti jika Transfer Bank) |
|  |  | Sewaktu | Klik tombol Konfirmasi Pembayaran |
|  |  | Maka | Status kiriman berubah menjadi "Lunas", panel form ditutup, dan muncul notifikasi sukses |

### 3.6.2 Function Specification — Manajemen Kiriman

**Tabel 3.12 Function Specification Pada Manajemen Kiriman**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Tab Filter Status** |  |  |  |  |  |  |  |
| Tab | Pill Button | — | — | No | No | Opsi: Semua, Dijadwalkan, Diterima, Lunas. Default aktif: Semua |  |
| **Kartu Kiriman** |  |  |  |  |  |  |  |
| Nama Agen | Text | 100 | — | No | No | Contoh: "Agen Milyana Sumber" |  |
| ID Invoice | Text | 30 | — | No | No | Format: `INV/GT/YYYY/XXXX` |  |
| Badge Status | Enum | — | — | No | No | Dijadwalkan / Diterima / Lunas |  |
| Total Tagihan | Currency | — | — | No | No | Format `Rp XX.XXX.XXX` |  |
| Jenis Tabung | Text | 30 | — | No | No | Dot warna + nama varian |  |
| Jumlah Tabung | Integer | — | — | No | No | Format: `N Tabung` |  |
| Jadwal Keberangkatan / Waktu Diterima | DateTime | — | — | No | No | Format: `DD MMM, HH:MM` |  |
| Tombol Aksi | Button | — | Conditional | Conditional | No | Konfirmasi Terima (Dijadwalkan) / Bayar Sekarang (Diterima) / tidak ada (Lunas) |  |
| **Panel Form Pembayaran (Drawer Kanan)** |  |  |  |  |  |  |  |
| Metode Pembayaran | Radio Card | — | M | No | No | Opsi: Tunai (Cash), Transfer Bank | Wajib dipilih |
| Jumlah Bayar | Currency | — | — | No | Yes | Auto-fill dari Total Tagihan, tidak dapat diubah |  |
| Detail Rekening Bank | Composite | — | — | Conditional | Yes | Hanya muncul jika metode = Transfer Bank. Berisi nama bank, nomor rekening, atas nama |  |
| Unggah Bukti Transfer | File | — | Conditional | Conditional | No | Hanya muncul/wajib jika metode = Transfer Bank. Format: JPG, PNG, PDF, maks 5MB | Wajib jika muncul; validasi format & ukuran |
| Status Konfirmasi | Enum | — | — | No | Yes | Otomatis / Manual |  |
| Tombol Konfirmasi Pembayaran | Button | — | — | No | Conditional | Disabled jika field wajib belum terisi |  |

---

## 3.7 User Interface Laporan Keuangan

`[Gambar 3.7 — Laporan Keuangan]`

**Gambar 3.7 Laporan Keuangan**

Halaman Laporan Keuangan menyajikan ringkasan keuangan Pangkalan dalam periode waktu yang dapat dipilih oleh pengguna. Pada bagian atas halaman terdapat tiga tombol filter periode (7 hari, 30 hari, dan Kustom dengan date picker) serta tombol Ekspor CSV untuk mengunduh laporan. Di bawah baris filter terdapat empat kartu metrik utama yang menampilkan Total Pendapatan, Total Pengeluaran, Laba Bersih, dan Total Transaksi dalam periode yang dipilih. Bagian bawah halaman dibagi menjadi dua panel visualisasi sejajar: panel kiri menampilkan grafik Tren Pendapatan Harian dalam bentuk kombinasi bar chart dan line chart yang menunjukkan tren pendapatan dan pengeluaran per hari dalam seminggu (Senin sampai Minggu), sementara panel kanan menampilkan Proporsi Volume Tabung per varian dalam bentuk progress bar persentase, serta seksi Metode Pembayaran yang menampilkan distribusi metode pembayaran yang digunakan oleh pelanggan.

### 3.7.1 Acceptance Criteria — Laporan Keuangan

**Tabel 3.13 Acceptance Criteria Pada Laporan Keuangan**

| Code | Controller | Condition | Note |
|---|---|---|---|
| AC-01 | Tombol Filter Periode | Jika | Pengguna memilih salah satu opsi periode (7 hari / 30 hari / Kustom) |
|  |  | Sewaktu | Klik tombol |
|  |  | Maka | Seluruh kartu metrik dan grafik diperbarui sesuai periode yang dipilih |
| AC-02 | Filter Kustom | Jika | Pengguna memilih opsi "Kustom" |
|  |  | Sewaktu | Klik tombol Kustom |
|  |  | Maka | Date range picker muncul untuk memilih rentang tanggal kustom |
| AC-03 | Tombol Ekspor CSV | Jika | Pengguna mengklik tombol Ekspor CSV |
|  |  | Sewaktu | Klik tombol |
|  |  | Maka | File CSV berisi data laporan dalam periode yang sedang dipilih di-download |
| AC-04 | Grafik Tren Pendapatan | Jika | Pengguna mengarahkan kursor (hover) ke salah satu titik data pada grafik |
|  |  | Sewaktu | Hover pada titik |
|  |  | Maka | Tooltip menampilkan nilai detail (tanggal, pendapatan, pengeluaran) |
| AC-05 | Panel Proporsi Volume | Jika | Halaman dimuat |
|  |  | Sewaktu | — |
|  |  | Maka | Setiap baris varian menampilkan nama varian, persentase volume, dan progress bar berwarna sesuai varian |

### 3.7.2 Function Specification — Laporan Keuangan

**Tabel 3.14 Function Specification Pada Laporan Keuangan**

| Field Name | Type | Length | MCO | Hide | Disable | Details | Validation |
|---|---|---|---|---|---|---|---|
| **Filter Periode** |  |  |  |  |  |  |  |
| Tombol 7 Hari | Toggle Button | — | — | No | No | Default aktif |  |
| Tombol 30 Hari | Toggle Button | — | — | No | No |  |  |
| Tombol Kustom | Toggle Button | — | — | No | No | Membuka date range picker |  |
| Date Range Picker | Date Range | — | Conditional | Conditional | No | Muncul jika Tombol Kustom aktif | Tanggal awal ≤ tanggal akhir |
| Tombol Ekspor CSV | Button | — | O | No | No | Mengunduh data periode dalam format CSV |  |
| **Kartu Metrik Ringkasan (4 kartu)** |  |  |  |  |  |  |  |
| Total Pendapatan | Currency | — | — | No | No | Contoh: Rp 57.000.000 |  |
| Total Pengeluaran | Currency | — | — | No | No | Contoh: Rp 300.000 |  |
| Laba Bersih | Currency | — | — | No | No | Hasil pengurangan Pendapatan - Pengeluaran |  |
| Total Transaksi | Integer | — | — | No | No | Contoh: 3000 |  |
| **Panel Grafik Tren Pendapatan Harian** |  |  |  |  |  |  |  |
| Bar Chart Pendapatan | Chart | — | — | No | No | Batang biru per hari |  |
| Bar Chart Pengeluaran | Chart | — | — | No | No | Batang abu per hari |  |
| Line Chart Tren Solid | Chart | — | — | No | No | Garis hijau solid (tren pendapatan rata-rata) |  |
| Line Chart Tren Dashed | Chart | — | — | No | No | Garis hijau putus-putus (proyeksi atau referensi) |  |
| Label Sumbu X | Text | — | — | No | No | SEN, SEL, RAB, KAM, JUM, SAB, MIN |  |
| **Panel Proporsi Volume Tabung** |  |  |  |  |  |  |  |
| Baris Varian | Composite | — | — | No | No | Nama varian + persentase + progress bar |  |
| LPG 3kg (Subsidi) | Decimal | — | — | No | No | Persentase volume; warna progress bar: abu/putih |  |
| LPG 12kg | Decimal | — | — | No | No | Persentase volume; warna progress bar: biru |  |
| Bright Gas 5.5kg | Decimal | — | — | No | No | Persentase volume; warna progress bar: pink |  |
| **Panel Metode Pembayaran** |  |  |  |  |  |  |  |
| Baris Metode | Composite | — | — | No | No | Nama metode + persentase + distribusi visual |  |

---

## 3.8 Struktur Data dan Relasi Entitas

Untuk mendukung seluruh fungsi pada tujuh halaman yang telah dirancang, tim menyusun struktur data konseptual yang mendefinisikan entitas-entitas utama beserta relasinya. Struktur ini dimaksudkan sebagai panduan logis bagi tahap implementasi database, bukan sebagai skema DBMS yang final.

### 3.8.1 Daftar Entitas dan Atribut

**Tabel 3.15 Daftar Entitas dan Atribut Sistem GasTrack**

| Entitas | Atribut Utama | Keterangan |
|---|---|---|
| **Pangkalan** | `id_pangkalan` (PK), `nama_pangkalan`, `nama_pemilik`, `username`, `password_hash`, `id_agen` (FK), `alamat`, `nomor_kontak`, `status_akun` | Data Pangkalan sebagai pengguna utama aplikasi |
| **Agen** | `id_agen` (PK), `nama_agen`, `alamat`, `nomor_kontak`, `bank`, `nomor_rekening`, `atas_nama` | Data Agen mitra yang menyalurkan kiriman ke Pangkalan |
| **Pelanggan** | `id_pelanggan` (PK), `id_pangkalan` (FK), `nama_pelanggan`, `jenis_pengguna` (Enum: Pribadi/Retailer), `tanggal_daftar` | Pelanggan yang terdaftar pada Pangkalan tertentu |
| **Produk** | `id_produk` (PK), `nama_varian` (Enum: LPG 3kg/Bright Gas 5.5kg/LPG 12kg), `harga_default_isi_ulang`, `harga_default_beli_tabung`, `harga_default_jual_tabung_kosong` | Master data varian gas |
| **Stok** | `id_stok` (PK), `id_pangkalan` (FK), `id_produk` (FK), `jumlah_tabung_isi`, `jumlah_tabung_kosong`, `kapasitas_max`, `last_updated` | Stok terkini per Pangkalan per varian |
| **Pergerakan_Stok** | `id_pergerakan` (PK), `id_pangkalan` (FK), `id_produk` (FK), `timestamp`, `id_sumber` (FK), `tipe_sumber` (Enum: Transaksi/Kiriman), `tipe_gerakan` (Enum: Isi Ulang/Beli Tabung/Jual Tabung/Kiriman Agen), `delta_tabung_isi`, `delta_tabung_kosong` | Log historis seluruh perubahan stok |
| **Transaksi** | `id_transaksi` (PK), `id_pangkalan` (FK), `id_pelanggan` (FK), `timestamp`, `status` (Enum: Selesai/Pending), `total`, `catatan` | Header transaksi dengan pelanggan |
| **Detail_Transaksi** | `id_detail` (PK), `id_transaksi` (FK), `id_produk` (FK), `tipe_transaksi` (Enum), `kondisi_tabung` (Enum: Isi/Kosong), `jumlah`, `harga_satuan`, `harga_override` (nullable), `subtotal` | Item dalam satu transaksi |
| **Kiriman** | `id_kiriman` (PK), `id_pangkalan` (FK), `id_agen` (FK), `id_invoice`, `tanggal_dibuat`, `jadwal_keberangkatan`, `waktu_diterima` (nullable), `status` (Enum: Dijadwalkan/Diterima/Lunas), `total_tagihan` | Data kiriman dari Agen ke Pangkalan |
| **Detail_Kiriman** | `id_detail_kiriman` (PK), `id_kiriman` (FK), `id_produk` (FK), `jumlah_tabung`, `harga_satuan`, `subtotal` | Item dalam satu kiriman |
| **Pembayaran** | `id_pembayaran` (PK), `id_kiriman` (FK), `metode` (Enum: Tunai/Transfer Bank), `jumlah_bayar`, `bukti_transfer_url` (nullable), `timestamp_konfirmasi`, `status_konfirmasi` (Enum: Otomatis/Manual) | Catatan pembayaran kiriman |

### 3.8.2 Entity Relationship Diagram (ERD)

`[Gambar 3.8 — Entity Relationship Diagram (ERD) GasTrack]`

**Gambar 3.8 Entity Relationship Diagram (ERD) GasTrack**

Diagram ERD menggambarkan relasi antar entitas pada sistem GasTrack dengan ringkasan sebagai berikut:

a. Satu **Agen** memiliki banyak **Pangkalan** mitra (1:N).

b. Satu **Pangkalan** memiliki banyak **Pelanggan** (1:N).

c. Satu **Pangkalan** memiliki banyak record **Stok** (satu record per varian Produk) (1:N).

d. Satu **Pangkalan** menerima banyak **Kiriman** dari Agen (1:N).

e. Satu **Pangkalan** mencatat banyak **Transaksi** dengan pelanggan (1:N).

f. Satu **Transaksi** memiliki banyak **Detail_Transaksi** (1:N), dan satu **Detail_Transaksi** terkait dengan satu **Produk** (N:1).

g. Satu **Kiriman** memiliki banyak **Detail_Kiriman** (1:N), dan satu **Kiriman** terkait dengan satu **Pembayaran** (1:1).

h. Setiap **Transaksi** dan **Kiriman** yang terjadi akan menghasilkan record pada **Pergerakan_Stok** sebagai jejak audit historis perubahan stok.

Dengan struktur data dan relasi ini, aplikasi GasTrack mampu menjaga konsistensi stok secara real-time, menyediakan jejak audit yang lengkap, serta memungkinkan pelaporan keuangan yang akurat berdasarkan data transaksi yang tercatat.

---

# BAB IV  
# KESIMPULAN, SARAN, DAN PENGEMBANGAN

## 4.1 Kesimpulan

Berdasarkan analisis kebutuhan dan perancangan UI/UX aplikasi GasTrack yang telah dilakukan, dapat ditarik beberapa kesimpulan sebagai berikut:

1. **Posisi GasTrack dalam ekosistem distribusi LPG.** Aplikasi GasTrack dirancang sebagai sistem internal B2B yang menghubungkan satu Agen dengan jaringan Pangkalan mitranya. Aplikasi ini tidak menggantikan aplikasi resmi Pertamina (Merchant Apps Pangkalan / MAP) yang sudah ada, melainkan melengkapinya pada area yang berbeda. MAP berfokus pada hubungan Pangkalan-Konsumen (B2C, verifikasi NIK, pencatatan subsidi), sementara GasTrack berfokus pada hubungan Agen-Pangkalan (B2B, sinkronisasi stok real-time, koordinasi restok).

2. **Cakupan rancangan.** Tim berhasil menghasilkan rancangan UI/UX untuk tujuh halaman utama pada modul Pangkalan, yaitu Form Login, Dashboard Pangkalan, Manajemen Stok, Transaksi Baru, Riwayat Transaksi, Manajemen Kiriman, dan Laporan Keuangan. Setiap halaman telah dilengkapi dengan deskripsi naratif, acceptance criteria, dan function specification yang dapat digunakan sebagai panduan implementasi.

3. **Penerapan prinsip UI/UX.** Rancangan GasTrack menerapkan beberapa prinsip dasar UI/UX, antara lain Visibility of System Status (melalui badge status stok, banner peringatan kritis, dan indikator status transaksi), Recognition over Recall (melalui ikon konsisten, kartu pilihan visual, dan pengkodean warna kategorial), dan Konsistensi (melalui sidebar identik, palet warna global, dan pola tata letak yang seragam di seluruh halaman).

4. **Pendekatan User-Centered Design.** Perancangan dilakukan dengan memahami karakter pengguna utama, yaitu pemilik atau operator Pangkalan LPG yang umumnya memiliki literasi digital bervariasi dan membutuhkan interaksi yang cepat. Hal ini melatarbelakangi keputusan rancangan seperti pemilihan tema gelap, tombol CTA berukuran besar, dan terminologi yang menggunakan bahasa awam.

5. **Struktur data terintegrasi.** Rancangan telah didukung oleh struktur data konseptual berupa sebelas entitas utama dan Entity Relationship Diagram yang memastikan bahwa setiap transaksi dan kiriman dapat mempengaruhi stok secara real-time, dengan jejak audit historis tersimpan pada entitas Pergerakan_Stok.

6. **Penggunaan tools dengan keterbatasan tertentu.** Penggunaan draw.io sebagai tools perancangan, yang ditetapkan oleh dosen pengampu, memberikan pengalaman langsung dengan tools yang bukan dedicated UI/UX design tool. Hasil rancangan berupa mid-fidelity mockup statis dapat dihasilkan dengan baik, meskipun dengan keterbatasan dalam hal prototype interaktif dan fitur design system.

## 4.2 Saran

Berdasarkan pengalaman selama perancangan, tim memberikan beberapa saran berikut:

1. **Untuk tim pengembang yang akan mengimplementasikan GasTrack.** Disarankan untuk mengikuti acceptance criteria dan function specification yang telah disusun pada Bab III sebagai dasar pengembangan, sambil tetap melakukan validasi langsung dengan pemilik Pangkalan sesungguhnya melalui usability testing pada tahap implementasi.

2. **Untuk perancangan UI/UX serupa di masa depan.** Apabila memungkinkan, sebaiknya digunakan tools UI/UX design dedicated seperti Figma atau Adobe XD agar dapat menghasilkan prototype interaktif yang dapat diuji langsung dengan pengguna sebelum pengembangan dimulai. Hal ini akan mempercepat siklus iterasi rancangan dan mengurangi risiko rework pada tahap pengembangan.

3. **Untuk pengayaan rancangan.** Disarankan untuk menambahkan tahap evaluasi formal melalui usability testing dengan pengguna aktual, baik dalam bentuk think-aloud test, A/B testing pada elemen kritis (misalnya posisi tombol CTA), maupun heuristic evaluation oleh tim independen, agar kualitas rancangan dapat divalidasi secara objektif.

4. **Untuk konteks akademik.** Studi kasus rancangan UI/UX pada sektor distribusi energi seperti LPG menarik untuk dilanjutkan dengan riset lapangan yang lebih mendalam, misalnya wawancara langsung dengan pemilik Pangkalan dan Agen, observasi proses kerja harian, serta analisis kompetitif dengan aplikasi sejenis (MAP Pertamina dan aplikasi internal Agen lainnya).

## 4.3 Pengembangan ke Depan

Beberapa pengembangan yang dapat ditambahkan pada iterasi mendatang aplikasi GasTrack:

1. **Modul Agen sebagai pelengkap modul Pangkalan.** Pada penelitian ini scope dibatasi pada modul Pangkalan. Pengembangan paling penting adalah merancang dan mengimplementasikan modul Agen, yang akan menampilkan dashboard agregat stok seluruh Pangkalan mitra, peta sebaran kondisi stok kritis, alat penjadwalan kiriman, serta manajemen invoice dan pembayaran dari sisi Agen.

2. **Halaman Pengaturan Harga Default.** Pada rancangan saat ini, harga default untuk masing-masing varian dan tipe transaksi diasumsikan sudah tersedia, namun halaman pengaturan harga belum dibuat. Pengembangan dapat berupa penambahan ikon "Pengaturan" pada halaman Transaksi Baru yang membuka modal pengaturan harga default oleh Pangkalan, dengan harga dasar yang diberikan oleh Agen sebagai referensi.

3. **Pilihan Kondisi Tabung pada Transaksi Beli/Jual Tabung.** Pada rancangan saat ini, tipe transaksi "Pelanggan Beli Tabung" dan "Pelanggan Jual Tabung" belum membedakan kondisi tabung yang ditransaksikan (isi atau kosong). Pengembangan berupa penambahan radio button kondisi tabung pada halaman Transaksi Baru akan memungkinkan pencatatan stok yang lebih akurat sesuai dengan empat skenario logika stok yang telah dijelaskan pada Bab II.

4. **Integrasi notifikasi push dan email.** Penambahan notifikasi otomatis ketika stok mencapai ambang batas kritis, ketika ada kiriman baru dari Agen, atau ketika pembayaran berhasil dikonfirmasi, akan meningkatkan responsivitas operasional Pangkalan.

5. **Modul Laporan yang lebih kaya.** Pengembangan halaman Laporan Keuangan dapat mencakup analisis lebih dalam seperti perbandingan periode, prediksi stok berdasarkan tren historis, perhitungan margin keuntungan per varian, serta laporan khusus pelanggan terbanyak.

6. **Fitur Multi-User dalam Satu Pangkalan.** Pangkalan dengan skala operasional besar dapat memiliki lebih dari satu karyawan yang menggunakan aplikasi. Pengembangan fitur role-based access control (misalnya Pemilik, Kasir, Operator Stok) akan memungkinkan pembagian tugas dan jejak audit yang lebih jelas.

7. **Integrasi dengan MAP Pertamina (opsional).** Apabila memungkinkan secara regulasi dan teknis, integrasi data antara GasTrack dengan MAP Pertamina akan menghilangkan kebutuhan input ganda dan memberikan pengalaman yang lebih mulus bagi pemilik Pangkalan.

8. **Versi mobile native.** Rancangan saat ini berorientasi pada layar desktop/tablet. Pengembangan versi mobile native (Android/iOS) akan memberikan akses yang lebih fleksibel bagi pemilik Pangkalan yang mobile.

---

# DAFTAR PUSTAKA

Babich, N. (2020). *The UX Design Handbook: Wireframes, Mockups, and Prototypes*. Adobe XD Ideas.

Galitz, W. O. (2007). *The Essential Guide to User Interface Design: An Introduction to GUI Design Principles and Techniques* (3rd ed.). Wiley.

Garrett, J. J. (2010). *The Elements of User Experience: User-Centered Design for the Web and Beyond* (2nd ed.). New Riders.

International Organization for Standardization. (2019). *ISO 9241-210:2019 Ergonomics of human-system interaction — Part 210: Human-centred design for interactive systems*. ISO.

Kementerian Energi dan Sumber Daya Mineral. (2025). *KESDM dan Pertamina Sosialisasikan Penataan Rantai Pasok LPG 3 Kg*. Diakses dari https://www.esdm.go.id

Kementerian Koperasi dan Usaha Kecil dan Menengah RI. (2022). *Strategi Nasional Pengembangan Ekonomi Digital UMKM*. Jakarta: KemenKopUKM.

Krug, S. (2014). *Don't Make Me Think, Revisited: A Common Sense Approach to Web Usability* (3rd ed.). New Riders.

Merdeka.com. (2025). *Perbedaan antara Pangkalan dan Agen Gas LPG*. Diakses dari https://www.merdeka.com/uang/perbedaan-antara-pangkalan-dan-agen-gas-lpg

Nielsen, J. (1994). *10 Usability Heuristics for User Interface Design*. Nielsen Norman Group. Diakses dari https://www.nngroup.com/articles/ten-usability-heuristics/

Norman, D. A. (2013). *The Design of Everyday Things* (Revised and Expanded ed.). Basic Books.

Norman, D., & Nielsen, J. (2016). *The Definition of User Experience (UX)*. Nielsen Norman Group. Diakses dari https://www.nngroup.com/articles/definition-user-experience/

Portonews. (2025). *Presiden Instruksikan Aktivasi Pengecer LPG 3 Kg, Pertamina Gerak Cepat Pastikan Suplai*. Diakses dari https://www.portonews.com

PT Pertamina (Persero). (2024). *MyPertamina Merchant — Aplikasi Pencatatan Transaksi LPG 3 Kg untuk Pangkalan*. Diakses dari https://subsiditepatlpg.mypertamina.id

Shneiderman, B., Plaisant, C., Cohen, M., Jacobs, S., Elmqvist, N., & Diakopoulos, N. (2016). *Designing the User Interface: Strategies for Effective Human-Computer Interaction* (6th ed.). Pearson.

Tempo.co. (2024). *47.495 Pangkalan LPG Subsidi Milik Pertamina untuk Layani Banten, Jawa Barat dan Jakarta*. Diakses dari https://www.tempo.co/arsip/47-495-pangkalan-lpg-subsidi-milik-pertamina

Tempo.co. (2025). *KESDM dan Pertamina Sosialisasikan Penataan Rantai Pasok LPG 3 Kg*. Diakses dari https://www.tempo.co/info-tempo/kesdm-dan-pertamina-sosialisasikan-penataan-rantai-pasok-lpg-3-kg

Tirto.id. (2025). *KESDM & Pertamina Sosialisasikan Penataan Rantai Pasok LPG 3 Kg*. Diakses dari https://tirto.id/kesdm-pertamina-sosialisasikan-penataan-rantai-pasok-lpg-3-kg-g7Zn

Tribunnews. (2025). *Syarat dan Cara Daftar Sub Pangkalan Gas LPG 3 Kg Lewat Aplikasi MAP Pertamina*. Diakses dari https://www.tribunnews.com/bisnis/2025/02/05/syarat-dan-cara-daftar-sub-pangkalan-gas-lpg-3-kg-lewat-aplikasi-map-pertamina

---

*— Akhir Dokumen Paper —*
