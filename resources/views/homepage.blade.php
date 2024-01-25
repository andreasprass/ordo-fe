<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Graha Wisata Kita</title>

    {{-- CSS --}}
    <link href="{{ asset('assets/css/homepage.css') }}" rel="stylesheet" >
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <header>
        <nav class="nav">
            <div class="container">
                <div class="navigation">
                    <div class="navigation-head">
                        <img src="{{ asset('assets/img/logo.svg') }}">
                    </div>
                    <div class="navigation-list">
                        <a href="" class="link">Homepage</a>
                        <a href="" class="link">Tentang</a>
                        <a href="" class="link">Daftar Hotel</a>
                        <a href="" class="link">Bantuan</a>
                    </div>
                    <button class="rounded">
                        <img src="{{ asset('assets/img/indonesia-flag.png') }}" alt="">
                        &nbsp Indonesia (ID) 
                        <i class="bi bi-caret-down-fill"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    {{-- Start Hero --}}
    <section class="hero" style="background-image: url({{ asset('assets/img/hero-vector.png') }})">
        <div class="container d-flex">
            <div class="scroll "><p>Scroll</p><i class="bi bi-arrow-right"></i></div>
            <div class="hero-inner"  >
                <div class="hero-text" data-aos="fade-left">
                    <div class="theme">
                        <div class="yellow-line"></div><h6>HOTEL OPERATOR</h6>
                    </div>
                    <h1 class="headline">Membantu Menjalankan Operasi Bisnis Pariwisata Anda</h1>
                    <p>GWA membantu mengoperasikan keseluruhan layanan hotel, menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</p>
                    <button class="rounded-pill">Konsultasikan Bisnis Saya</button>
                </div>
                <div class="hero-image" data-aos="fade-in">
                    <img src="{{ asset('assets/img/building.png') }}">
                </div>
            </div>
        </div>
    </section>
    {{-- End Hero --}}

    {{-- Start Workflow --}}
    <section class="workflow">
        <div class="container">
            <div class="workflow-header">
                <div class="theme">
                    <div class="yellow-line"></div><h6>OUR WORKFLOW</h6>
                </div>
                <di>
                    <h2 class="">Proses Kerja Kami dalam Meningkatkan Kualitas Properti</h2>
                </di>
            </div>
        </div>
        <div class="content">
            <div class="workflow-box">
                <div class="line">
                    <img src="{{ asset('assets/img/workflow-line.svg') }}">
                </div>
                <div class="container">
                    <div class="workflow-col" id="flow-1">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon-tantangan1.svg') }}">
                        </div>
                        <div class="text">
                            <h6>Tantangan</h6>
                            <p>Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="flow-2">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon-rumusan2.svg') }}">
                        </div>
                        <div class="text">
                            <h6>Rumusan</h6>
                            <p>Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="flow-3">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon-goals3.svg') }}">
                        </div>
                        <div class="text">
                            <h6>Goals</h6>
                            <p>Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</p>
                        </div>
                    </div>
                    <div class="workflow-col" id="flow-4">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icon-ideas4.svg') }}">
                        </div>
                        <div class="text">
                            <h6>Ideas</h6>
                            <p>Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Workflow --}}

    {{-- Service Start --}}
    <section class="services d-flex">
        
        <div class="container">
            <div class="theme" data-aos="fade-right">
                <div class="yellow-line"></div><h6>OUR SERVICES</h6>
            </div>
            <div data-aos="fade-right">
                <h2>Apa Saja yang Bisa Kami Bantu ?</h2>
            </div>
            <div class="card-box" data-aos="fade-up">
                <div class="card-item">
                    <div class="card-head">
                        <img src="{{ asset('assets/img/service1.svg') }}" alt="">
                        <div class="number ms-auto">01</div>
                    </div>
                    <h4>Revenue Management Service</h4>
                    <button class="rounded-pill">Saya Tertarik <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="card-item ">
                    <div class="card-head ">
                        <img src="{{ asset('assets/img/service2.svg') }}" alt="">
                        <div class="number ms-auto">02</div>
                    </div>
                    <h4 class="w-75">Full Manage Service</h4>
                    <button class="rounded-pill">Saya Tertarik <i class="bi bi-arrow-right"></i></button>
                </div>
                <div class="card-item">
                    <div class="card-head">
                        <img src="{{ asset('assets/img/service3.svg') }}" alt="">
                        <div class="number ms-auto">03</div>
                    </div>
                    <h4>Asset Monetize Service</h4>
                    <button class="rounded-pill">Saya Tertarik <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    {{-- Service End --}}

    {{-- Latest Project Start --}}
    <section class="latest-project">
        <div class="container">
            <div class="latest-project-box">
                <di class="theme" data-aos="fade-up">
                    <div class="yellow-line"></div><h6>OUR LATEST PROJECT</h6><div class="yellow-line ms-3"></div>
                </di>
                <div data-aos="fade-up">
                    <h2>Project Terbaru Kami</h2>
                </div>
                <div class="latest-project-slide">
                    <img src="{{ asset('assets/img/latest-project.png') }}" alt="">
                    <div class="slide-wrapper">
                        <div>
                            <button class="slide-nav-button" id="slide-left"><i class="bi bi-chevron-left"></i></button>
                        </div>
                        <div class="text">
                            <h4 class="fw-medium">1/4 Operational Project</h4>
                            <h1 class="fw-bold">Town House Oak</h1>
                            <h4 class="fw-light">Brand Tertinggi di OYO</h4>
                        </div>
                        <div class="d-flex ms-auto lihat-detail align-self-end">
                            <button class="slide-nav-button bg-dark text-light" id="slide-right"><i class="bi bi-chevron-right"></i></button>
                            <h5>Lihat Detail</h5>
                        </div>
                        <div>
                            <button class="slide-nav-button" id="slide-right"><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    {{-- Latest Project End --}}

    {{-- Testimonial Start --}}
    <section class="testimonials">
        <div class="container">
            <div class="testimonial-desc">
                <div class="testimonial-head" data-aos="fade-left">
                    <div class="theme">
                        <div class="yellow-line"></div><h6>OUR TESTIMONIALS</h6>
                    </div>
                    <h2>Yang Klien Kami Katakan</h2>
                </div>
                <div class="testimonial-text" data-aos="fade-right">
                    <img src="{{ asset('assets/img/quote-testimonial.png') }}" alt="">
                    <p class="text-wrap">GWA Group membantu hotel saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya</p>
                </div>
                <div class="testimonial-credit" data-aos="fade-left">
                    <img src="{{ asset('assets/img/logo-testimonial.png') }}" alt="">
                    <div class="testimonial-name">
                        <h3>Chaim Desmond</h3>
                        <p>CEO of Yellow Hotel</p>
                    </div>
                </div>
            </div>
            <div class="blue-button rounded-pill">
                <div class="me-auto"><i class="bi bi-chevron-left"></i></div><div><i class="bi bi-chevron-right"></i></div>
            </div>
            <div class="testimonial-image" data-aos="fade-in">
                <img src="{{ asset('assets/img/testimonial.png') }}" alt="">
            </div>
        </div>
    </section>
    {{-- Testimonial End --}}

    {{-- Contact Us start--}}
    <section class="contact" style="background-image: url({{ asset('assets/img/ellips2.svg') }})">
        <div class="container">
            <div class="contact-desc">
                <div class="theme" data-aos="fade-left">
                    <div class="yellow-line"></div><h6>HUBUNGI KAMI</h6>
                </div>
                <div data-aos="fade-left">
                    <h3>Ingin Mendiskusikan Bisnis Pariwisata Anda</h3>
                </div>
                <div>
                    <hr class="w-25">
                </div>
                <div data-aos="fade-left">
                    <p class="text-wrap">Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !</p>
                </div>
            </div>
            <div class="contact-form" data-aos="fade-up">
                <form>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label>Nama Perusahaan</label>
                        <input type="text" placeholder="Masukkan Nama Perusahaan">
                    </div>
                    <div class="form-group">
                        <label>Nomor Whatsapp Aktif</label>
                        <input type="text" placeholder="Masukkan Nomor Whatsapp">
                    </div>
                    <button class="konsultasi-button">Jadwalkan Konsultasi <i class="bi bi-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </section>
    {{-- Contact Us end --}}

    {{-- Footer Start --}}
    <footer style="background-image: url({{ asset('assets/img/vector-footer.svg') }})">
        <div class="container">
            <div class="logo-footer">
                <img src="{{ asset('assets/img/logo.svg') }}" alt="">
            </div>
            <div class="links">
                <div class="halaman-utama">
                    <h4>Halaman Utama</h4>
                    <a href="">Homepage</a>
                </div>
                <div class="perusahaan">
                    <h4>Perusahaan</h4>
                    <a href="">Tentang Kami</a>
                    <a href="">Daftar Hotel</a>
                </div>
                <div class="temukan-kami">
                    <h4>Temukan Kami</h4>
                    <a href="">Bantuan</a>
                    <a href="">Hubungi Kami</a>
                </div>
                <div class="social-media">
                    <h4>Social Media</h4>
                    <div class="icons">
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-youtube"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div><hr></div>
            <div class="syarat-dan-bahasa">
                <div class="syarat-ketentuan">
                    <a href="">Pemberitahuan Privasi</a>
                    <a href="">Syarat dan Ketentuan</a>
                </div>
                <div class="language">
                    <img src="{{ asset('assets/img/language-square.svg') }}" alt="">
                    <button class="bahasa-button">Bahasa Indonesia <i class="bi bi-chevron-down"></i></button>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk.</p>
            </div>
        </div>
    </footer>
    {{-- Footer End --}}

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>