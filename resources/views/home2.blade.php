<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ama Express</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{url('frontend/css/styles.css')}}" rel="stylesheet" />
    <link href="{{url('frontend/css/custom.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-transparent scrolled">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo_nav" src="{{asset('frontend/img/logo.png')}}" alt=""
                    srcset=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kritik & Saran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header_img">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1533805994737-558461dcb28e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8aW5kb25lc2lhfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        class="d-block w-100" alt="..." style="height:750px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1442544213729-6a15f1611937?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW5kb25lc2lhfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        class="d-block w-100" alt="..." style="height:750px;" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1527965408463-82ae0731825c?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aW5kb25lc2lhfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        class="d-block w-100" alt="..." style="height:750px;"" class=" d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Responsive navbar-->

    <!-- Page content-->
    <div class="container">
        <section class="fiturFitur">
            <div class="row d-flex flex-column align-items-center">
                <div class="col fiturLacak">
                    <h2><i class="uil uil-search"></i>Lacak Paket</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <form action="">
                        <label for="">Nomor Resi</label>
                        <input type="text" class="form-control" placeholder="Masukan Nomor Resi"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <button type="button" class="btn btn-danger mt-3 btn__color2">Lacak</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <section class="profile-company" id="company">
        <div class="container">
            <div class="deskripsi-perusahaan">
                <div class="title-subtitle-contact">
                    <h1 class="company-title text-capitalize"><i class="uil uil-building"></i>perusahaan</h1>
                    <p class="company-subtitle">
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Profil</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Visi & Misi </a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Niali-Nilai
                                Perusahaan</a>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <h1 class="text-uppercase">Profil</h1>
                                <h4 class="text-uppercase">PT. Almanthinu Artha</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium nemo tempora ex
                                    alias. Exercitationem provident qui sunt suscipit quibusdam maxime illo porro
                                    architecto facere explicabo! Quaerat voluptatibus sunt ad eos provident aperiam, est
                                    temporibus obcaecati accusamus eius sed atque architecto reiciendis deserunt eum
                                    odio, perferendis accusantium neque iste. Exercitationem aut, aliquam rerum corrupti
                                    iure nam culpa eum sed, blanditiis, cupiditate ut ea praesentium a eveniet?
                                    Blanditiis inventore consectetur molestias dolor provident sit maiores, excepturi
                                    quia exercitationem facere, iusto sint vero amet beatae quaerat consequuntur
                                    similique voluptatem ducimus id rem. Ipsa, reprehenderit mollitia. Qui nisi commodi
                                    numquam totam neque alias officia?</p>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <h1 class="text-uppercase">Visi & Misi</h1>
                                <div class="visi-misi d-flex flex-column align-items-center">
                                    <h4 class="text-uppercase">Visi</h4>
                                    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Possimus ipsam ad
                                        numquam quaerat voluptatum quas, voluptas magnam! Minus alias voluptate,
                                        expedita rem odit laboriosam optio!</p>
                                    <h4 class="text-uppercase">Misi</h4>
                                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Tenetur itaque neque quo animi, dolores nobis sint placeat ut non error sit
                                        repellendus voluptas ducimus voluptatibus delectus repellat dolore distinctio
                                        molestiae.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <h1 class="text-uppercase">nilai-nilai perusahaan</h1>
                                <ol>
                                    <div class="item-nilai-perusahaan">
                                        <li>Lorem ipsum dolor sit amet.</li>
<<<<<<< HEAD
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit,
                                            omnis.</p>
=======
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, omnis. Lorem, ipsum.</p>
>>>>>>> ea86929c436deec4d3d3db108f8a77b56d0b75cd
                                    </div>
                                    <div class="item-nilai-perusahaan">
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit,
                                            omnis.</p>
                                    </div>
                                    <div class="item-nilai-perusahaan">
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit,
                                            omnis.</p>
                                    </div>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="service-company" id="service">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-3 pt-4">
                    <h1>Service</h1>
                    <p class="deskripsi-service-items">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                        repellendus vitae numquam alias
                        exercitationem totam omnis esse, facilis quod. Atque magnam quis alias odio laudantium.</p>
                    <div class="service-rating d-flex flex-row bd-highlight mb-3">
                        <p class="nilai-service">4.9</p>
                        <div class="nilai-rating">
                            <p class="jumlah-rating">20K Rating</p>
                            <div class="bintang-rating">
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                                <i class="uil uil-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <i class="uil uil-car-sideview service__icon"></i>
                    <div class="kumpulan-deskripsi-items">
                        <h2 class="subtitle-service-items">Local Delivery</h2>
                        <p class="deskripsi-service-items">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laborum ratione cum temporibus distinctio a libero aperiam, sed ullam unde commodi mollitia
                            obcaecati illum ab beatae?</p>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <i class="uil uil-truck service__icon"></i>
                    <div class="kumpulan-deskripsi-items">
                        <h2 class="subtitle-service-items">Country Delivery</h2>
                        <p class="deskripsi-service-items">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laborum ratione cum temporibus distinctio a libero aperiam, sed ullam unde commodi mollitia
                            obcaecati illum ab beatae?</p>
                    </div>
                </div>
                <div class="col-lg-3 text-center">
                    <i class="uil uil-plane service__icon"></i>
                    <div class="kumpulan-deskripsi-items">
                        <h2 class="subtitle-service-items">International Delivery</h2>
                        <p class="deskripsi-service-items">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Laborum ratione cum temporibus distinctio a libero aperiam, sed ullam unde commodi mollitia
                            obcaecati illum ab beatae?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partner-company" id="partner">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-9">
                    <div class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide text-center">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                            </div>
                            <div class="swiper-slide text-center">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                                <img class="img-partner" src="{{url('frontend/assets/tokopedia.png')}}" alt="">
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="col-lg-3 pt-4">
                    <h1>Partner</h1>
                    <p class="deskripsi-service-items">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                        repellendus vitae numquam alias
                        exercitationem totam omnis esse, facilis quod. Atque magnam quis alias odio laudantium.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>Get in touch</h4>
                                <h3>Write us a message</h3>
                            </div>
                            <form class="form" method="post" action="mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Nama Amda<span>*</span></label>
                                            <input name="name" type="text" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label>Email Anda<span>*</span></label>
                                            <input name="email" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <label>Pesan Anda<span>*</span></label>
                                            <textarea name="message" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn ">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="single-head">
                            <div class="single-info">
                                <i class="uil uil-phone-alt"></i>
                                <h4 class="title">No Telepon:</h4>
                                <ul>
                                    <li>+62 518452</li>
                                    <li>021 5215201</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="uil uil-envelope"></i>
                                <h4 class="title">Email:</h4>
                                <ul>
                                    <li><a href="#">info@company.com</a></li>
                                    <li><a href="#">support@company.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="uil uil-map-marker"></i>
                                <h4 class="title">Alamat:</h4>
                                <ul>
                                    <li>Banten, Indonesia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->

    <!-- Map Section -->
    <div class="map-section">
        <div id="myMap"></div>
    </div>
    <!--/ End Map Section -->
    <footer>
        <div class="container footer-company">
            <div class="row">
                <div class="col-lg-3 d-flex flex-column bd-highlight mb-3">
                    <a href=""><img src="{{url('frontend/assets/logo.png')}}" alt="" class="footer__logo"></a>
                    <p class="deskripsi-footer">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia architecto perferendis sit
                        libero
                        dolorum natus quod illo provident quidem quas ipsa deserunt similique, tempore molestiae.
                    </p>
                    <div class="social-customer">
                        <a href=""><i class="uil uil-instagram icon__social-footer"></i></a>
                        <a href=""><i class="uil uil-facebook-f icon__social-footer"></i></a>
                        <a href=""><i class="uil uil-twitter-alt icon__social-footer"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Lorem ipsum</h1>
                    <ul class="list-group">
                        <li class="list-group-item-footer">An item</li>
                        <li class="list-group-item-footer">A second item</li>
                        <li class="list-group-item-footer">A third item</li>
                        <li class="list-group-item-footer">A fourth item</li>
                        <li class="list-group-item-footer">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Lorem ipsum</h1>
                    <ul class="list-group">
                        <li class="list-group-item-footer">An item</li>
                        <li class="list-group-item-footer">A second item</li>
                        <li class="list-group-item-footer">A third item</li>
                        <li class="list-group-item-footer">A fourth item</li>
                        <li class="list-group-item-footer">And a fifth one</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h1 class="title-footer">Lorem ipsum</h1>
                    <ul class="list-group">
                        <li class="list-group-item-footer">An item</li>
                        <li class="list-group-item-footer">A second item</li>
                        <li class="list-group-item-footer">A third item</li>
                        <li class="list-group-item-footer">A fourth item</li>
                        <li class="list-group-item-footer">And a fifth one</li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="{{url('frontend/js/custom.js')}}"></script>

</html>
