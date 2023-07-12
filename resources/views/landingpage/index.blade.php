<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Informasi Masjidd</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
 
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/logo-simasjid.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff" href="#services">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff" href="#portfolio">Galeri</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff" href="#kegiatan">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff" href="#team">Pengurus</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:#ffffff" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Sistem Informasi!</div>
            <div class="masthead-heading text-uppercase">BKM MASJID AT THOHIR-DEPOK</div>
            <a class="btn btn-secondary btn-xl text-uppercase" style="background-color:skyblue" href="#deskripsi">LEBIH
                BANYAK</a>
        </div>
    </header>
 
    <!-- deskripsi -->
    <section class="page-section" id="deskripsi">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 fw-bolder">SIMASJID</h1>
                <p id="about" class="lead fw-normal text-dark-50 mb-0">Hai sobat muslim, selamat datang di SIMASJID
                    Aplikasi Sistem Informasi Masjid ini adalah sebuah aplikasi digital yang dapat mengakses informasi
                    dari masjid at thohir. Dalam aplikasi ini, terdapat pula sezione lengkap tentang masjid,struktur
                    organisasi, dan
                    informasi kontak yang berguna. Galeri foto yang memungkinkan pengguna untuk melihat momen-momen
                    berharga dan kegiatan yang telah dilakukan di masjid. Dengan aplikasi Sistem Informasi Masjid ini,
                    pengurus masjid dapat meningkatkan transparansi, efisiensi, dan keterlibatan jamaah dalam kegiatan
                    masjid, Memberikan kemudahan akses informasi dan memperkuat komunikasi antara pengurus masjid dan
                    jamaah. </p>
            </div>
        </div>
    </section>
 
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Beranda</h2>
                <h3 class="section-subheading text-muted">Berikut adalah Informasi yang bisa anda dapatkan di layanan
                    kami.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
 
                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <img src="assets/img/donation.png" class="fa-stack-1x fa-inverse" width="80" alt="">
                        {{-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> --}}
 
                    </span>
                    <h4 class="my-3">Donasi</h4>
                    <p class="text-muted">Berikut adalah informasi donasi yang kami terima</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <img src="assets/img/inventaris.png" class="fa-stack-1x fa-inverse" width="80" alt="">
                    </span>
                    <h4 class="my-3">Inventaris</h4>
                    <p class="text-muted">Berikut adalah inventaris yang tersedia di masjid kami</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x bg-blue"></i>
                        <img src="assets/img/pengurus.png" class="fa-stack-1x fa-inverse" width="80" alt="">
                    </span>
                    <h4 class="my-3">Pengurus</h4>
                    <p class="text-muted">Berikut adalah informasi kepengurusan masjid kami.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Galeri</h2>
                <h3 class="section-subheading text-muted">Berikut Adalah Dokumentasi dari Beberapa Acara yang Sudah di Selenggarakan</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp1.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Suasana Malam yang Meriah Saat Khazanah Fest</div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp2.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Suasana Saat Diadakan Tabligh Akbar</div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp3.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Suasana Saat Selesai Melaksanakan Sholat Berjamaah
                            </div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp4.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Keindahan At Thohir di Malam Hari</div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp5.jpeg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Suasana Berdoa Bersama Saat Peresmian Masjid</div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/pp6.jpg" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Sambutan Bapak Joko widodo Saat Peresmian Masjid
                            </div>
                            <div class="portfolio-caption-subheading text-muted">Masjid At Thohir-Depok</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- About-->
    <section class="page-section" id="kegiatan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kegiatan</h2>
                <h3 class="section-subheading text-muted">Beberapa kegiatan yang sudah pernah di laksanakan di masjid
                    at thohir.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/kt1.jpeg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>02 Mei 2022</h4>
                            <h4 class="subheading">Sholat Ied Pertamakali</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Berikut adalah poteret saat bapak Eric Thohir petaman kali
                                melaksanakan sholat ied di masjid yanhg ia dirikan yaitu masjid AT THOHIR yang berada di
                                Depok</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/kt2.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>10-19 Maret 2023</h4>
                            <h4 class="subheading">Pameran Artefak Rasulullah</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Kegaiatan menggelar At
                                Thohir Islamic Fair dan pemeran berbagai artefak peninggalan Rasulullah SAW mulai
                                10/3/2023 kegiatan ini berlangsung
                                hingga 19 Maret ini.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/kt3.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>11 April 2023</h4>
                            <h4 class="subheading">Peluncuran Amal Box Digital</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted"> Moment saat Ketua umum Ikatan Cendekiawan Muslim Indonesia (ICMI),
                                Prof. Arif
                                Satria dan ketua umum Masyarakat Ekonomi Syariah (MES) secara resmi meluncurkan platform
                                digital Amalbox. Yakni sebuah platform yang memungkinkan masyarakat Indonesia beramal
                                termasuk untuk memberikan bantuan kemanusian. Peluncuran Amalbox dilakukan bersamaan
                                dengan peringatan Khazanah Fest di Masjid At Thohir, Tapos, Depok pada Selasa
                                (11/04/2023).</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/kt4.jpg" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>1 Juni 2022</h4>
                            <h4 class="subheading">Kegitan Sosial Santunan Anak Yatim</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Indonesia Moeda memberikan perhatian lebih lagi kepada anak-anak
                                yatim. Bertempat di masjid yang baru saja diresmikan oleh Presiden Joko Widodo, Masjid
                                At-Thohir Depok, di selengarakan acara berdoa bersama untuk kehidupan bersama sebagai
                                satu
                                bangsa Indonesia hingga menghibur anak-anak yatim melalui penyerahan berbagai bantuan
                                dari Indonesia Moeda, seperti santunan dan sembako</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image" style="background-color:rgb(47, 107, 130)">
                        <h4>
                            Tampilkan
                            <br />
                            Lebih
                            <br />
                            Banyak!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Pengurus Masjid AT Thohir</h2>
                <h3 class="section-subheading text-muted">Berikut adalah pengurus dari masjid AT Thohir</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/p1.jpg" alt="..." />
                        <h4>Ahmad Fthoni</h4>
                        <p class="text-muted">Ketua</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/p2.jpg" alt="..." />
                        <h4>Muhamad Shidiq</h4>
                        <p class="text-muted">Wakil Ketua</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/p3.jpg" alt="..." />
                        <h4>Faris Ahmad</h4>
                        <p class="text-muted">Sekertaris</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Berikut Merupakan Pengurus Inti Dari Masjid AT Thohir</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kontak</h2>
                <h3 class="section-subheading text-muted">Anda bisa mengirimkan saran,kritkan,maupun pengajuan di sini.
                </h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Nama *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Nama wajib di isi.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Email wajib di isi.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email tidak valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Nomor Handphone *" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Nomor handphone wajib di
                                isi.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Pesan Anda *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Pesan Wajib di isi.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Pesan berhasil di kirim!</div>
                        <br />
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Kesalahan dalam mengirim pesan!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" style="background-color:rgb(47, 107, 130)" id="submitButton" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">SIMASJID</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Sistem Informasi Masjid</a>
                    <a class="link-dark text-decoration-none" href="#!">AT THOHIR-DEPOK</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Khazanah Fest</h2>
                                <p class="item-intro text-muted">Suasana Malam Saat Khazanah Fest berlangsung di Masjid
                                    AT Thohir.
                                </p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp1.jpg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Tabligh Akbar</h2>
                                <p class="item-intro text-muted">Berikut adalah moment bapak eric thohir sedang
                                    melakukan sambutan saat tabligh akbar di laksanakan di masjid at thohir.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp2.jpg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Sholat Ied</h2>
                                <p class="item-intro text-muted">Berikut adalah moment dimana para jamaah selesai
                                    melaksanakan solat ied untuk pertamakalinya di masjid at thohir.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp3.jpg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">AT Thohit Saat Malam Hari</h2>
                                <p class="item-intro text-muted">Berikut adalah susana masjid at thohir pada malam hari
                                    yang sanagat indah dengan lampu" yang berwarna warni yang semakin menambah keindahan
                                    nya.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp4.jpg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Moment Doa Bersama</h2>
                                <p class="item-intro text-muted">Berikut adlah moment doa bersama saat peresmian masjid
                                    at thohir oleh bapak joko widodo.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp5.jpeg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Peresmian Masjid</h2>
                                <p class="item-intro text-muted">Berikut ini adalah moment dimana bapak presiden Joko
                                    Widodo sedang memberikan sambutan nya pada saat meresmikan masjid at thohir.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/pp6.jpg" alt="..." />
                                <button class="btn btn-primary btn-xl text-uppercase" style="background-color:rgb(47, 107, 130)" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
 
</html>