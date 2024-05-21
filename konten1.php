<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <title>Konten1</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>

  <?php include("includes/navbar.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
      <!-- Content -->
      <div class="content1 clearfix">
        <!-- Main Content -->
        <div class="main-content single">
          <h1 class="post-title">Bagaimana Cara Install Kali Linux</h1>
          <div class="post-content">
            <p>
              Kali Linux adalah distribusi sistem operasi Linux yang dirancang
              khusus untuk tugas keamanan siber seperti pengujian penetrasi,
              peretasan etis, forensik digital, dll. Ini adalah sistem operasi
              yang kuat dan serbaguna yang juga menyediakan berbagai alat dan
              sumber daya untuk profesional keamanan. sebagai individu yang
              tertarik pada keamanan siber dan peretasan etis.
            </p>
            <h2>Apa itu Kali Linux?</h2>
            <p>
              Kali Linux adalah distribusi Linux sumber terbuka yang dirancang
              untuk tujuan keamanan siber. Ini adalah distribusi Linux berbasis
              Debian yang menyediakan berbagai alat dan sumber daya untuk
              peretas etis, dan profesional keamanan. Kali Linux dilengkapi
              dengan beragam alat pengujian keamanan.
            </p>
            <p>
              Selain itu, Kali Linux mengalami pengembangan dalam lingkungan
              yang sangat aman, di mana sejumlah individu tepercaya memiliki hak
              istimewa untuk berkontribusi, dan setiap paket diautentikasi
              melalui tanda tangan pengembang. Secara khusus, Kali memiliki
              fitur kernel khusus yang dimodifikasi untuk mendukung injeksi.
            </p>
            <h2>Metode Instalasi Kali Linux:</h2>
            <ol type="1">
              <li>
                Langsung di PC, Laptop – Memanfaatkan image Kali ISO, Kali Linux
                bisa langsung diinstall ke PC atau Laptop. Metode ini paling
                baik dilakukan jika Anda memiliki PC cadangan dan familiar
                dengan Kali Linux. Selain itu, jika Anda merencanakan atau
                melakukan pengujian titik akses apa pun, disarankan untuk
                menginstal Kali Linux langsung ke laptop berkemampuan Wi-Fi.
              </li>
              <li>
                Tervirtualisasi (VMware, Hyper-V, Oracle VirtualBox, Citrix) –
                Kali Linux mendukung sebagian besar hypervisor yang dikenal dan
                dapat dengan mudah digunakan yang paling populer. Gambar
                pra-konfigurasi tersedia untuk Unduh dari
                <a href="https://www.kali.org/">https://www.kali.org/</a>, atau
                sebuah ISO dapat digunakan untuk menginstal sistem operasi ke
                dalam hypervisor pilihan secara manual.
              </li>
              <li>
                Cloud (Amazon AWS, Microsoft Azure) – Mengingat popularitas Kali
                Linux, AWS dan Azure menyediakan image untuk Kali Linux.
              </li>
              <li>
                Disk Boot USB – Memanfaatkan ISO Kali Linux, disk boot dapat
                dibuat untuk menjalankan Kali Linux di mesin tanpa benar-benar
                menginstalnya atau untuk tujuan Forensik.
              </li>
              <li>
                Windows 10 (Aplikasi) – Kali Linux sekarang dapat berjalan
                secara native di Windows 10, melalui Command Line. Belum semua
                fitur berfungsi karena masih dalam mode beta.
              </li>
              <li>
                Mac (Dual atau Single boot) – Kali Linux dapat diinstal di Mac,
                sebagai sistem operasi sekunder atau sebagai sistem operasi
                utama. Paralel atau Fungsionalitas boot Mac dapat digunakan
                untuk mengonfigurasi ini mempersiapkan.
              </li>
            </ol>
            <h2>Install Kali Linux menggunakan Virtualbox</h2>
            <p>
              Berikut langkah demi langkah proses cara install Kali Linux
              menggunakan Virtualbox dan cara menggunakan Kali Linux:
            </p>
            <p>
              Cara termudah dan bisa dibilang paling banyak digunakan adalah
              menginstal Kali Linux dan menjalankannya dari VirtualBox milik
              Oracle.
            </p>
            <img src="img/virtualbox.png" alt="gambar virtualbox" />
            <p>
              Metode ini memungkinkan Anda untuk terus menggunakan perangkat
              keras yang ada sambil bereksperimen dengan Kali Linux yang
              diperkaya fitur di a lingkungan yang benar-benar terisolasi. Yang
              terbaik dari semuanya, semuanya gratis. Kali Linux dan Oracle
              VirtualBox gratis untuk digunakan. Kali ini Tutorial Linux
              mengasumsikan Anda telah menginstal Oracle VirtualBox di sistem
              Anda dan telah mengaktifkan Virtualisasi 64-bit melalui Bios.
            </p>
            <ol>
              <li>
                Go to
                <a href="https://www.kali.org/downloads/"
                  >https://www.kali.org/downloads/</a
                >
                <p>
                  Ini akan mengunduh gambar OVA, yang dapat diimpor ke
                  VirtualBox
                </p>
              </li>
              <li>
                Buka Aplikasi Oracle VirtualBox, dan dari File, Menu pilih
                Import Appliance
                <p>File Menu -> Import Appliance</p>
                <img src="img/virtualbox2.png" alt="virtualbox2" />
              </li>
              <li>
                Pada layar berikut “Peralatan untuk Diimpor” Telusuri ke lokasi
                file OVA yang diunduh dan klik Buka
                <img src="img/virtualbox3.png" alt="virtualbox3" />
              </li>
              <li>
                Setelah Anda mengklik Buka, Anda akan dibawa kembali ke
                “Peralatan untuk Diimpor” cukup klik Berikutnya
                <img src="img/virtualbox4.png" alt="virtualbox4" />
              </li>
              <li>
                Layar berikut “Pengaturan Peralatan” menampilkan ringkasan
                pengaturan sistem, membiarkan pengaturan default baik-baik saja.
                Seperti yang ditunjukkan pada gambar di bawah, catat di mana
                Mesin Virtual berada setelah itu lalu klik Impor untuk pada
                langkah berikut.
                <img src="img/virtualbox5.png" alt="virtualbox5" />
              </li>
              <li>
                VirtualBox sekarang akan Mengimpor alat Kali Linux OVA. Proses
                ini dapat memakan waktu antara 5 hingga 10 menit untuk
                diselesaikan.
                <img src="img/virtualbox6.png" alt="virtualbox6" />
              </li>
              <li>
                Selamat Kali Linux telah berhasil diinstall di VirtualBox. Anda
                sekarang akan melihat VM Kali Linux di Konsol VirtualBox.
                Selanjutnya, kita akan melihat Kali Linux dan beberapa langkah
                awal yang harus dilakukan.
                <img src="img/virtualbox7.png" alt="virtualbox7" />
              </li>
              <li>
                Klik pada VM Kali Linux di dalam Dasbor VirtualBox dan klik
                Mulai, ini akan mem-boot Sistem Operasi Kali Linux.
                <img src="img/virtualbox8.png" alt="virtualbox8" />
              </li>
              <li>
                Pada layar login, masukkan “Root” sebagai nama pengguna dan klik
                Berikutnya.
                <img src="img/virtualbox9.png" alt="virtualbox9" />
              </li>
              <li>
                Seperti disebutkan sebelumnya, masukkan “toor” sebagai kata
                sandi dan Sign In. You will now be present with the Kali Linux
                GUI Desktop. Congratulations you have successfully logged into
                Kali Linux.
                <img src="img/virtualbox10.png" alt="virtualbox10" />
              </li>
            </ol>
            <h2>Kesimpulan</h2>
            <p>
              Singkatnya, Kali Linux adalah sistem operasi luar biasa yang
              banyak digunakan oleh berbagai profesional mulai dari
              Administrator Keamanan, hingga Peretas Black Hat. Mengingat
              utilitasnya yang kuat, stabilitas, dan kemudahan penggunaannya,
              ini adalah sistem operasi yang harus diketahui oleh semua orang di
              industri TI dan penggemar komputer. Memanfaatkan hanya dua
              aplikasi yang dibahas dalam tutorial ini akan sangat membantu
              perusahaan dalam mengamankan infrastruktur Teknologi Informasi
              mereka. Nmap dan Metasploit tersedia di platform lain, namun
              kemudahan penggunaannya dan konfigurasi pra-instal di Kali Linux
              menjadikan Kali sistem operasi pilihan saat mengevaluasi dan
              menguji keamanan jaringan. Seperti yang dinyatakan sebelumnya,
              berhati-hatilah saat menggunakan Kali Linux, karena Kali Linux
              hanya boleh digunakan di lingkungan jaringan yang Anda kendalikan
              dan atau izin pengujiannya Anda miliki. Seperti beberapa utilitas,
              sebenarnya dapat menyebabkan kerusakan atau hilangnya data.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
