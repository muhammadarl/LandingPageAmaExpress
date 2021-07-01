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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,600;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <header class="header_img">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <a href=""><img src="{{url('frontend/img/logo.png')}}" alt="" class="nav__logo"></a>
                </div>
                <div class="col-lg-3 flex-icon">
                    <div class="button__icon">
                        <i class="uil uil-phone icon-customer"></i>
                    </div>
                    <div class="no-desc">
                        <p>have Any Question?</p>
                        <p class="no-desc-no">0819-9876-209</p>
                    </div>
                </div>
                <div class="col-lg-3 flex-icon">
                    <div class="button__icon">
                        <i class="uil uil-phone icon-customer"></i>
                    </div>
                    <div class="no-desc">
                        <p>have Any Question?</p>
                        <p class="no-desc-no">0819-9876-209</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar__color navbar-dark">
                <div class="social-customer">
                    <a href=""><i class="uil uil-instagram icon__social"></i></a>
                    <a href=""><i class="uil uil-facebook-f icon__social"></i></a>
                    <a href=""><i class="uil uil-twitter-alt icon__social"></i></a>
                </div>
                <button class="navbar-toggler navbar-toggler-color" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active nav__color" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item"><a class="nav-link nav__color" aria-current="page"
                                href="#company">Company</a>
                        </li>
                        <li class="nav-item"><a class="nav-link nav__color" href="#service">Services</a></li>
                        <li class="nav-item"><a class="nav-link nav__color" href="#partner">Partner</a></li>
                        <li class="nav-item"><a class="nav-link nav__color" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <section class="header-article text-center">
            <h1>Lorem ipsum dolor sit amet, consectetur</h1>
            <h2 class="header-article-subtitle">Lorem ipsum dolor sit amet.</h2>
        </section>
    </header>
    <!-- Responsive navbar-->

    <!-- Page content-->
    <div class="container">
        <section class="fiturLacak-fiturHitung">
            <div class="row fiturFitur">
                <div class="col-lg-6 fiturHitung">
                    <h2><i class="uil uil-calculator"></i>Hitung Ongkos Kirim</h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Asal</label><br>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="col-lg-6">
                                <label for="">Tujuan</label><br>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="">Berat</label><br>
                                <input type="text" class="form-control" placeholder="KG"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="col-lg-3">
                                <label for="">Panjang</label><br>
                                <input type="text" class="form-control" placeholder="CM"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="col-lg-3">
                                <label for="">Lebar</label><br>
                                <input type="text" class="form-control" placeholder="CM"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="col-lg-3">
                                <label for="">Tinggi</label><br>
                                <input type="text" class="form-control" placeholder="CM"
                                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger mt-3 btn__color">Hitung</button>
                    </form>
                </div>
                <div class="col-lg-6 fiturLacak">
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
    <section class="about-company" id="company">
        <div class="container">
            <div class="deskripsi-about-us">
                <div class="title-subtitle-contact text-center">
                    <h1 class="company-title">Company</h1>
                    <p class="company-subtitle">
                        Lorem ipsum dolor sit amet.
                    </p>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus culpa sunt soluta sint
                        consectetur commodi et voluptates sequi consequatur? Possimus cum voluptate dolore asperiores
                        rem minus ipsa ducimus fugiat accusamus expedita nemo magnam eveniet, dolor, repellendus nihil
                        laboriosam quis eius maxime libero facilis reprehenderit itaque quam aspernatur aut! Possimus,
                        repellendus?
                    </p>
                </div>
                <div class="row text-center ">
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1492168732976-2676c584c675?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Handled With Care</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1492168732976-2676c584c675?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Handled With Care</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.unsplash.com/photo-1492168732976-2676c584c675?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Handled With Care</p>
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
    <section class="contact-company" id="contact">
        <div class="title-subtitle-contact text-center">
            <h1 class="contact-title">Get In Touch</h1>
            <p class="contact-subtitle">
                Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>
                            <button type="submit" class="btn btn-send btn__color2">Send</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{url('frontend/js/scripts.js')}}"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
</body>

</html>
