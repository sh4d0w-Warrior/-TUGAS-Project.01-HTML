<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <title>Konten2</title>

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
    
  <?php include("include/navbar.php"); ?>

    <!-- Page Wrapper -->
    <div class="page-wrapper2">
      <!-- Content -->
      <div class="content2 clearfix">
        <!-- Main Content -->
        <div class="main-content single">
          <h1 class="post-title">Apa itu IDS dalam cyber security?</h1>
          <div class="post-content">
            <p>
              Masalah yang biasa muncul pada sebuah sistem atau jaringan adalah
              adanya aktivitas mencurigakan, akses ilegal, dan peretasan.
              Sebagai respons dari masalah tersebut, muncullah konsep IDS.
              Pengertian IDS Security adalah sistem yang mampu mendeteksi
              aktivitas mencurigakan pada sebuah jaringan.
            </p>
            <p>
              IDS sendiri merupakan singkatan dari Intrusion Detection System.
              Dari sana, Kamu pasti sudah bisa menebak bahwa IDS adalah basis
              pertahanan dan keamanan untuk menangkal ancaman, terutama dalam
              bentuk intrusion alias akses ilegal yang bisa mengakibatkan
              munculnya berbagai masalah pada jaringan.
            </p>
            <p>
              Mempelajari IDS ini sangat penting dan akan memberikan manfaat
              yang besar untuk para pembuat dan perencana jaringan. Sebagai
              basis pertahanan jaringan, peran IDS krusial dan kadangkala tidak
              mendapatkan banyak pengakuan karena biasanya masalah keamanan
              memang kadang tidak banyak mendapat perhatian.
            </p>
            <h2>Pengertian IDS Security</h2>
            <p>
              IDS (Intrusion Detection System) adalah sebuah sistem yang
              melakukan pengawasan terhadap traffic jaringan dan pengawasan
              terhadap kegiatan-kegiatan yang mencurigakan di dalam sebuah
              sistem jaringan.
            </p>
            <p>
              Jika ditemukan kegiatan-kegiatan yang mencurigakan berhubungan
              dengan traffic jaringan maka IDS akan memberikan peringatan kepada
              sistem atau administrator jaringan. Dalam banyak kasus IDS juga
              merespon terhadap traffic yang tidak normal/ anomali melalui aksi
              pemblokiran seorang user atau alamat IP (Internet Protocol) sumber
              dari usaha pengaksesan jaringan.
            </p>
            <p>
              IDS muncul dengan beberapa jenis dan pendekatan yang berbeda yang
              intinya berfungsi untuk mendeteksi traffic yang mencurigakan di
              dalam sebuah jaringan. Beberapa jenis IDS adalah : yang berbasis
              jaringan (NIDS) dan berbasis host (HIDS). Ada IDS yang bekerja
              dengan cara mendeteksi berdasarkan pada pencarian ciri-ciri khusus
              dari percobaan yang sering dilakukan.
            </p>
            <p>
              Cara ini hampir sama dengan cara kerja perangkat lunak antivirus
              dalam mendeteksi dan melindungi sistem terhadap ancaman, kemudian
              ada juga IDS yang bekerja dengan cara mendeteksi berdasarkan pada
              perbandingan pola traffic normal yang ada dan kemudian mencari
              ketidaknormalan traffic yang ada.
            </p>
            <p>
              Ada IDS yang fungsinya hanya sebagai pengawas dan pemberi
              peringatan ketika terjadi serangan dan ada juga IDS yang bekerja
              tidak hanya sebagai pengawas dan pemberi peringatan melainkan juga
              dapat melakukan sebuah kegiatan yang merespon adanya percobaan
              serangan terhadap sistem jaringan dan komputer.
            </p>
            <p>
              IDS akan mengidentifikasi ancaman, memberi peringatan dan laporan,
              dan membuat jaringan aman dari upaya jahat tersebut sehingga
              membuat peran IDS saat ini semakin penting.
            </p>

            <h2>Jenis-jenis IDS (Intrusion Detection System)</h2>
            <p>
              Memahami jenis-jenis IDS akan membuatmu lebih bijak dalam memilih
              jenis mana yang akan digunakan pada jaringan yang akan dibuat,
              karena beda tipe beda juga kelebihan dan kekurangannya.
            </p>
            <ol type="1">
              <li>
                NIDS (Network Intrusion Detection System)
                <p>
                  IDS jenis ini ditempatkan di sebuah tempat/ titik yang
                  strategis atau sebuah titik di dalam sebuah jaringan untuk
                  melakukan pengawasan terhadap traffic yang menuju dan berasal
                  dari semua alat-alat (devices) dalam jaringan. Idealnya semua
                  traffic yang berasal dari luar dan dalam jaringan akan di
                  scan, namun cara ini dapat menyebabkan bottleneck yang
                  mengganggu kecepatan akses di seluruh jaringan.
                </p>
              </li>
              <li>
                HIDS (Host Intrusion Detection System)
                <p>
                  IDS jenis ini berjalan pada host yang berdiri sendiri atau
                  perlengkapan dalam sebuah jaringan. Sebuah HIDS melakukan
                  pengawasan terhadap paket-paket yang berasal dari dalam maupun
                  dari luar hanya pada satu alat saja dan kemudian memberi
                  peringatan kepada user atau administrator sistem jaringan akan
                  adanya kegiatan-kegiatan yang mencurigakan yang terdeteksi
                  oleh HIDS.
                </p>
              </li>
              <li>
                Signature Based
                <p>
                  IDS yang berbasis pada signature akan melakukan pengawasan
                  terhadap paket-paket dalam jaringan dan melakukan perbandingan
                  terhadap paket-paket tersebut dengan basis data signature yang
                  dimiliki oleh sistem IDS ini atau atribut yang dimiliki oleh
                  percobaan serangan yang pernah diketahui.
                </p>
                <p>
                  Cara ini hampir sama dengan cara kerja aplikasi antivirus
                  dalam melakukan deteksi terhadap malware, intinya adalah akan
                  terjadi keterlambatan antara terdeteksinya sebuah serangan di
                  internet dengan signature yang digunakan untuk melakukan
                  deteksi yang diimplementasikan di dalam basis data IDS yang
                  digunakan.
                </p>
                <p>
                  Jadi bisa saja basis data signature yang digunakan dalam
                  sistem IDS ini tidak mampu mendeteksi adanya sebuah percobaan
                  serangan terhadap jaringan karena informasi jenis serangan ini
                  tidak terdapat dalam basis data signature sistem IDS ini.
                  Selama waktu keterlambatan tersebut sistem IDS tidak dapat
                  mendeteksi adanya jenis serangan baru.
                </p>
              </li>
              <li>
                Anomaly Based
                <p>
                  IDS jenis ini akan mengawasi traffic dalam jaringan dan
                  melakukan perbandingan traffic yang terjadi dengan rata-rata
                  traffic yang ada (stabil). Sistem akan melakukan identifikasi
                  apa yang dimaksud dengan jaringan “normal” dalam jaringan
                  tersebut, berapa banyak bandwidth yang biasanya digunakan di
                  jaringan tersebut, protokol apa yang digunakan, port-port dan
                  alat-alat apa saja yang biasanya saling berhubungan satu sama
                  lain didalam jaringan tersebut, dan memberi peringatan kepada
                  administrator ketika dideteksi ada yang tidak normal, atau
                  secara signifikan berbeda dari kebiasaan yang ada.
                </p>
              </li>
              <li>
                Passive IDS
                <p>
                  IDS jenis ini hanya berfungsi sebagai pendeteksi dan pemberi
                  peringatan. Ketika traffic yang mencurigakan atau membahayakan
                  terdeteksi oleh IDS maka IDS akan membangkitkan sistem pemberi
                  peringatan yang dimiliki dan dikirimkan ke administrator atau
                  user dan selanjutnya terserah kepada administrator apa
                  tindakan yang akan dilakukan terhadap hasil laporan IDS.
                </p>
              </li>
              <li>
                Reactive IDS
                <p>
                  IDS jenis ini tidak hanya melakukan deteksi terhadap traffic
                  yang mencurigakan dan membahayakan kemudian memberi peringatan
                  kepada administrator tetapi juga mengambil tindakan proaktif
                  untuk merespon terhadap serangan yang ada.
                </p>
                <p>
                  Biasanya dengan melakukan pemblokiran terhadap traffic
                  jaringan selanjutnya dari alamat IP sumber atau user jika
                  alamat IP sumber atau user tersebut mencoba melakukan serangan
                  lagi terhadap sistem jaringan di waktu selanjutnya.
                </p>
              </li>
            </ol>
            <h2>Komponen IDS</h2>
            <img src="img/IDS.png" alt="IDS" />
            <p>
              Sama seperti sistem lainnya pada jaringan, IDS juga memiliki
              komponen-komponen penyusun. IDS memiliki komponen-komponen dimana
              tanpa komponen tersebut, sistem ini tidak akan mampu bekerja
              semestinya. Komponen yang ada pada IDS tidak banyak dan tidak
              terlalu kompleks untuk dipelajari.
            </p>
            <p>
              Berikut adalah komponen apa saja yang ada pada IDS dan fungsi dari
              masing-masing komponen tersebut.
            </p>
            <ol type="1">
              <li>
                Teknologi Deteksi
                <p>
                  Teknologi deteksi yang ada pada IDS ini bergantung pada 3
                  komponen. Berikut ketiga komponen tersebut.
                  <ol type="a">
                    <li>Sensor
                      <p>Sensor adalah teknologi yang bertugas melakukan pemantauan dan pengawasan lalu lintas. Tanpa sensor, IDS tidak akan mampu melakukan fungsi pengawasan. Sensor sering juga disebut dengan sebutan engine atau probe.</p>
                    </li>
                    <li>Agen
                      <p>Komponen ini adalah software yang diinstal pada komputer untuk mengawasi file, sekaligus bertugas melakukan pelaporan jika terjadi sesuatu yang tidak biasa.</p>
                    </li>
                    <li>Kolektor
                      <p>Kolektor memiliki peran yang mirip dengan agen. Bedanya, kolektor ini tidak mampu membuat keputusan. Kolektor hanya mampu membuat laporan saja.</p>
                    </li>
                  </ol>
                </p>
              </li>
              <li>Analisis Data
                <p>Aktivitas analisis data mayoritas data di sini dilakukan oleh lapisan yang kadang disimpan pada pusat data atau server, analisis ini dilakukan dengan menggunakan pusat data yang sudah diberikan kebijakan dalam mendeteksi. Di sana, identitas penyerang, deskripsi, dan hal penting lainya tersedia dan jadi parameter.</p>
              </li>
              <li>GUI atau Manajemen Konfigurasi
                <p>Dimana-mana selalu ada semacam konsol yang berfungsi sebagai alat kontrol dan komunikasi antara pengguna dengan mesin. Pada IDS pun tersedia dimana perangkat ini merupakan interface atau antarmuka operator IDS, di sini operator bisa mengeksekusi perintah maupun melakukan konfigurasi.</p>
                <p>Masing-masing komponen bertugas sesuai dengan desain dan fungsinya masing-masing, selama beroperasi komponen-komponen ini saling terintegrasi dalam suatu sistem yang utuh. Memahami bagaimana komponen IDS bekerja akan memudahkanmu memahami cara kerja dari IDS itu sendiri.</p>
              </li>
            </ol>
            <h2>Cara Kerja IDS</h2>
            <img src="img/IDS2.png" alt="IDS2">
            <p>
              Setelah memahami pengertian IDS Security beserta komponen-komponen yang ada di dalamnya, saatnya Kamu memahami cara kerja IDS. Pada umumnya, cara kerja Intrusion Detection System tidak berbeda jauh dengan cara kerja antivirus. Sistem akan mendeteksi, menemukan, dan memberi ancaman.
            </p>
            <p>IDS sendiri memiliki beberapa metode cara kerja yang bisa Kamu pelajari di sini.</p>
            <ol>
              <li>
                Seperti Antivirus
                <p>IDS bekerja layaknya program antivirus dimana di sini, sistem akan mendeteksi ancaman dan sesuatu yang bermasalah. IDS bekerja dengan mengawasi lalu lintas dan mencocokkan apa yang ada di sana dengan pusat data ancaman, pusat data tersebut menyimpan data jenis serangan dan penyusupan.</p>
                <p>Jika terdapat kecocokan, maka IDS akan mengidentifikasi bahwa terdapat ancaman di sana. Pendeteksian seperti ini memang bisa bergantung pada pusat data ancaman itu sendiri. Agar selalu tajam dalam mendeteksi ancaman, pusat data tersebut harus mendapatkan pembaharuan secara berkala.</p>        
              </li>
              <li>
                Mendeteksi Anomali
                <p>Sistem mungkin kedatangan sesuatu yang tidak biasa tetapi tidak terdeteksi secara langsung, IDS bisa melakukan pemantauan anomali pada lalu lintas yang sedang berlangsung. Sistem kemudian menggunakan statistik dan analisis pola untuk membaca ketidaknormalan aktivitas lalu lintas yang terjadi.</p>
                <p>IDS akhirnya bisa mendeteksi serangan yang sama sekali belum terbaca dan tersedia di pusat data. Meskipun tampak fleksibel, metode ini memiliki kekurangan. Kekurangannya adalah kejadian false positive yang sering merepotkan operator. Jadi repot jika jumlah pesan false positive muncul dalam jumlah banyak.</p>
              </li>
              <li>
                Pemantauan Berkas Sistem
                <p>Metode lain cara kerja IDS adalah pemantauan berkas sistem operasi. Di sini, sistem akan melihat dan mendeteksi apakah terdapat upaya untuk mengubah berkas pada OS, terutama pada log. Adanya upaya tersebut tentu sesuatu yang mencurigakan dan sangat layak untuk dilaporkan dan ditindaklanjuti lebih jauh.</p>
                <p>Metode-metode cara kerja IDS di atas umumnya dilakukan tergantung jenis IDS yang digunakan, masing-masing metode memiliki kelebihan dan kekurangan. Setiap metode sebenarnya menutupi kekurangan yang ada, kombinasi kerja dari metode-metode yang ada akan menciptakan sistem pertahanan yang solid.</p>
              </li>
            </ol>
            <h2>Contoh IDS</h2>
            <img src="img/IDS3.png" alt="IDS3">
            <p>Berikut adalah contoh 3 program IDS yang perlu Kamu ketahui.
              <ol type="1">
                <li>Snort
                  <p>Snort adalah program IDS yang biasanya ada pada OS Linux, snort merujuk pada deteksi akses ilegal yang sifatnya ringan. Snort sendiri biasanya diperuntukkan untuk jaringan yang kecil.</p>
                </li>
                <li>Hostsentry
                  <p>Program IDS satu ini mampu mendeteksi anomali dan perilaku-perilaku tidak bisa. Selain soal perilaku, Hostsentry juga mampu mendeteksi anomali waktu dan anomali lokal.</p>
                </li>
                <li>Tcplogd
                  <p>Program IDS ini mampu mendeteksi pemindaian senyap, pemindaian ini dilakukan tanpa harus membuat sesi khusus. Pemindaian ini memutuskan koneksi tcp sebelum klien menerima balasan dari server, pemindaian senyap umumnya tidak terdeteksi oleh log umum.</p>
                </li>
              </ol>
            </p>
            <h2>Kesimpulan</h2>
            <p>
              Program-program IDS di atas dibuat dan didesain untuk membuat pengguna bisa lebih aman ketika menghidupkan jaringan, program ini juga disesuaikan dengan kebutuhan dari operator. Pengguna bisa menggunakan program-program yang dinilai paling ampuh mendeteksi ancaman di jaringan.
            </p>
            <p>
              Aspek keamanan pada sebuah jaringan adalah hal yang tidak dapat diremehkan, meremehkan hal ini adalah sebuah kesalahan fatal. Banyak orang lebih silau terhadap efisiensi dan performa tetapi abai terhadap masalah ini, wajib hukumnya dimanfaatkan dengan baik dan jangan sampai diabaikan.
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
