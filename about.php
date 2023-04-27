<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>

    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="bagian.css">
</head>

<body>


    <header>

        <div class="container-fluid">

            <div class="navb-logo">
            <figure>
            <img src="del.jpg" style=" width:80px; height:80px; padding-left:2%;">
            <a style="font-size:2.5rem; font-family: 'Times New Roman', Times, serif;"><figcaption>Penilaian TA</figcaption></a>
            </figure>
            </div>

            <div class="navb-items d-none d-xl-flex">

                <div class="item">
                    <a href="index.php">HOME</a>
                </div>

            <!-- Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <img src="/img/logo-variant.png" alt="Logo">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>

                        <div class="modal-body">
                            
                            <div class="modal-line">
                                <i class="fa-solid fa-house"></i><a href="/">HOME</a>
                            </div>

                        <div class="mobile-modal-footer">
                            
                            <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <div class="contoh">
    <h1>&nbsp;D3 TEKNOLOGI KOMPUTER</h1>
    <br>
    &ensp;<img src="download.png">
    <h5>Program Studi Teknik Komputer adalah salah satu program studi yang diselenggarakan Institut Teknologi Del yang terletak di daerah pedesaan Tobasa, yang membuka peluang bagi siswa berprestasi untuk &nbsp;mengenyam pendidikan dengan mutu yang tidak kalah dengan pendidikan bermutu bagus yang diselenggarakan di kota besar.<h5>
    <br><br>
    <h1>Sejarah Jurusan</h1>
    <h5>Perjalanan penyelenggaraan pendidikan di Politeknik Informatika Del khususnya Program Studi D III Teknik Komputer telah berlangsung selama 13 tahun sejak berdiri pada tahun 2001 sesuai SK No. 222/D/O/2001 tertanggal 28 September 2001. Lokasi penyelenggaraan pendidikan yang berada di remote area menjadikan Politeknik Informatika Del sebagai sebuah institusi yang unik dan berbeda, berkarakter, menjunjung tinggi kedisiplinan namun tetap berbudaya dan ceria. Pada awal berdirinya program studi DIII Teknik Komputer, kompetensi lulusan diprioritaskan pada Teknologi Jaringan Komputer. Konsentrasi TJK ini sangat mudah diserap oleh masyarakat karena mahasiswa/alumni memiliki kemampuan di bidang jaringan komputer tersebut.</h5>
    <br><br>
    <h1>Kompetensi Lulusan</h1>
    <h5>Kompetensi lulusan yang diharapkan dari Ahli Madya Teknik Komputer adalah yang mampu kerja dalam standar pekerjaan di sektor industri teknologi informatika dengan kualifikasi:<br>
    <ol type="1">
        <li>Memiliki kemampuan dan keahlian untuk merancang, membangun dan memelihara Jaringan Komputer dengan mengikuti fase pembangunan jaringan komputer yang benar melalui penerapan metodologi pembangunan sistem dan tools pendukung serta memiliki keinginan untuk selalu mengembangkan diri dengan meningkatkan keterampilan dan pengetahuan di bidang Jaringan Komputer.</li>
        <li>Memiliki inisiatif serta kreativitas dalam mengkaji ataupun menyelesaikan setiap kasus serta mengemasnya menjadi informasi yang komunikatif.</li>
        <li>Memiliki etika dan etos kerja tim serta kewirausahaan sesuai tuntutan serta kebutuhan potensial pasar global.</li>
    </ol>
    </h4><br><br>
    <h1>Visi dan Misi D3 Teknologi Komputer</h1>
    <h2>Visi</h2>
    <h4>Menjadikan Prodi D-III Teknik Komputer sebagai batu loncatan menuju masa depan Teknologi Komputer yang mengintegrasikan dunia pendidikan dengan kebutuhan usaha akan tenaga profesional informatika yang mampu bersaing secara global.</h4>
    <h2>Misi</h2>
    <h4>Misi dari prodi ini adalah mencetak dan membina Sumber Daya Manusia yang mampu bekerja pada industri teknologi komputer yang mempunyai sikap pemimpin, penuh kreativitas, berdisiplin tinggi, dan mampu memberikan solusi di bidang teknologi komputer dan membuat terobosan dalam dunia pendidikan dengan menciptakan lingkungan pendidikan yang sehat dengan dukungan tenaga pengajar yang ahli dan profesional.</h4>
    <br>
    <h1>Tujuan</h1>
    <h5>Tujuan dari Program Studi D3 Teknologi Komputer, adalah :<br>
    <ol type="1">    
    <li>Pendidikan<br>
    Menghasilkan lulusan yang memiliki kemampuan dan keahlian untuk merancang, membangun dan memelihara Jaringan Komputer dengan mengikuti fase pembangunan jaringan komputer yang benar melalui penerapan metodologi pembangunan sistem dan kakas pendukung serta lulusan yang memiliki keinginan untuk selalu mengembangkan diri dengan meningkatkan keterampilan dan pengetahuan di bidang Jaringan Komputer.</li>
    <li>Penelitian<br>
    Menghasilkan penelitian yang berkualitas dan berguna bagi kemajuan dan pengembangan ilmu serta pembelajaran di bidang ilmu teknik komputer.</li>
    <li>Pengabdian Masyarakat</li>
    <ol type="a">   
    <li class="kontribusi">Memberikan kontribusi secara langsung dengan membantu memecahkan masalah di masyarakat dalam bidang teknologi informasi dan komunikasi.</li>
    <li class="kesempatan">Memberikan kesempatan kepada anak desa yang kurang mampu secara ekonomi namun memiliki kemampuan akademik untuk mengejar cita-citanya di bidang teknologi komputer.</li>
    <li class="informasi">Menyajikan informasi akademik secara cepat, tepat waktu dan akurat kepada sivitas akademik dan pemangku kepentingan lainnya.</li>      
    </ol>    
    </h5>
        <br>
    <div class="center">
    <u><h3>Informasi Tambahan</h3></u>

    <details>
    <summary>Read More</summary>
    <h1>Cloud Computing</h1>
    <h5>Cloud computing adalah teknologi yang memungkinkan pengguna untuk menyimpan, mengelola, dan memproses data dan aplikasi melalui internet, daripada melalui perangkat keras dan infrastruktur yang dimiliki sendiri. Istilah "cloud" merujuk pada internet, dan "computing" mengacu pada pengolahan data dan aplikasi. Dalam cloud computing, penyedia layanan cloud menyediakan infrastruktur IT, seperti server, jaringan, dan perangkat penyimpanan, dan menyediakan layanan melalui internet. Pengguna dapat memanfaatkan layanan ini untuk menyimpan data mereka, menjalankan aplikasi bisnis, dan mengakses sumber daya IT lainnya tanpa harus mengelola infrastruktur dan perangkat keras sendiri.
Keuntungan dari cloud computing termasuk fleksibilitas dan skalabilitas, di mana pengguna dapat menyesuaikan sumber daya IT mereka dengan cepat dan efisien sesuai dengan kebutuhan mereka saat ini. Selain itu, cloud computing juga dapat membantu organisasi menghemat biaya, karena mereka hanya membayar untuk sumber daya yang mereka gunakan.</h5>
    <h1>Internet of Things (IoT)</h1>
    <h5>IoT atau Internet of Things adalah konsep di mana perangkat elektronik yang terhubung dengan internet saling berinteraksi satu sama lain dan dengan lingkungan sekitarnya. IoT membawa teknologi ke tingkat yang lebih tinggi dengan memungkinkan berbagai perangkat, seperti sensor, perangkat pintar, dan perangkat wearable, untuk mengumpulkan dan berbagi data secara otomatis melalui jaringan internet. Dalam lingkungan IoT, perangkat dapat diatur dan dioperasikan jarak jauh, serta dapat berkomunikasi satu sama lain tanpa campur tangan manusia. Data yang dikumpulkan oleh perangkat IoT dapat digunakan untuk membuat keputusan yang lebih cerdas dan memberikan solusi baru untuk masalah bisnis dan sosial. Contoh penggunaan IoT meliputi smart home, smart city, smart healthcare, dan smart manufacturing. Dalam smart home, misalnya, perangkat seperti thermostat, lampu, dan kamera dapat terhubung dengan jaringan Wi-Fi dan diatur dari jarak jauh menggunakan smartphone atau perangkat lainnya. Hal ini memungkinkan pengguna untuk mengontrol lingkungan rumah mereka secara lebih efisien dan cerdas. Secara keseluruhan, IoT memiliki potensi untuk mengubah cara kita hidup, bekerja, dan berinteraksi dengan dunia di sekitar kita.</h5>
    <h1>Jaringan Komputer</h1>
    <h5>Jaringan komputer adalah kumpulan perangkat komputer yang terhubung satu sama lain melalui media komunikasi seperti kabel, gelombang radio, atau infrastruktur nirkabel lainnya. Tujuan dari jaringan komputer adalah untuk memungkinkan perangkat komputer untuk berkomunikasi dan berbagi sumber daya, seperti file, printer, dan koneksi internet. Jaringan komputer dapat diklasifikasikan berdasarkan ukuran dan jenis topologi jaringan. Berdasarkan ukuran, jaringan komputer dapat dibagi menjadi dua jenis, yaitu Local Area Network (LAN) dan Wide Area Network (WAN). LAN adalah jaringan komputer yang mencakup area geografis yang terbatas, seperti kantor atau gedung, sedangkan WAN mencakup area yang lebih besar, seperti kota, negara, atau bahkan benua. Topologi jaringan mengacu pada cara perangkat dalam jaringan diatur dan terhubung satu sama lain. Beberapa jenis topologi jaringan yang umum digunakan termasuk topologi bintang, topologi bus, topologi cincin, dan topologi mesh. Jaringan komputer memainkan peran penting dalam memfasilitasi pertukaran informasi dan sumber daya antara perangkat, baik di dalam suatu organisasi maupun di antara organisasi yang berbeda. Jaringan komputer juga memungkinkan pengguna untuk terhubung ke internet dan mendapatkan akses ke berbagai layanan dan sumber daya online.</h5>
</details>
    </div>

    <section class="section-1">
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    "></script>

    <footer>
        <h3><center>Penilaian TA @2022-2023</center></h3>
    </footer>
</body>

</html>