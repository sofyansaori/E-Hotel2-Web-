<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>E-HOTEL</title>
        <link rel="icon" href="../frontend/images/hotel.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>    
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" id = "header">
            <div class = "head-top">
                <div class = "image">
                    <img src="../frontend/images/logohotel.png" height="50">
                </div>
                <div class = "site-nav">
                    <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
                </div>
            </div>

            <div class = "head-bottom flex">
                <h2>TEMPAT PENGINAPAN YANG BAGUS DAN NYAMAN</h2>
                <p><b>Hotel Murah Di Bondowoso. Hotel Wisata Asri merupakan salah satu Daftar Hotel Murah Di Bondowoso. Hotel Ini Berada di Jalan Sumber Pandan, Grujugan, Bondowoso dengan nomor telpon 0332-433479 433480. Halaman Hotel Wisata Asri Bondowoso ini berisi informasi seputar Hotel Wisata Asri Bondowoso seperti Alamat Hotel, No Tlp, Peta Lokasi Hotel Wisata Asri, serta Harga/Tarif Hotel Wisata Asri Bondowoso.</b></p>
                <button type = "button" class = "head-btn">Mulai Review</button>
            </div>
        </header>
        <!-- end of header -->

        <!-- side navbar -->
        <div class = "sidenav" id = "sidenav">
            <span class = "cancel-btn" id = "cancel-btn">
                <i class = "fas fa-times"></i>
            </span>

            <ul class = "navbar">
                <li><a href = "#header">home</a></li>
                <li><a href = "#services">services</a></li>
                <li><a href = "#rooms">rooms</a></li>
                <li><a href = "#customers">customers</a></li>
            </ul>
            <button class = "btn log-in"><a href="../auth/login.php"><p>log in</p></a></button>
        </div>
        <!-- end of side navbar -->

        <!-- fullscreen modal -->
        <div id = "modal"></div>
        <!-- end of fullscreen modal -->

        <!-- body content  -->
        <section class = "services sec-width" id = "services">
            <div class = "title">
                <h2>Layanan Asri</h2>
            </div>
            <div class = "services-container">
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-utensils"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Layanan Makanan/Antar Makanan</h2>
                        <p>Di Hotel kami menyediakan layanan pesanan makanan dan antar jemput makanan untuk para tamu.</p>
                        <button type = "button" class = "btn">Layanan</button>
                        
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-swimming-pool"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Tempat Refreshing</h2>
                        <p>Di hotel kami juga menyediakan sarana refreshing bagi tamu seperti pemandangan yang indah dan kolam renang</p>
                        <button type = "button" class = "btn">Layanan</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-broom"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Layanan Kebersihan</h2>
                        <p>Hotel kami juga menyediakan layanan kebersihan tempat / kamar yang di berikan kepada tamu hotel</p>
                        <button type = "button" class = "btn">Layanan</button>
                    </div>
                </article>
                <!-- end of single service -->
                <!-- single service -->
                <article class = "service">
                    <div class = "service-icon">
                        <span>
                            <i class = "fas fa-door-closed"></i>
                        </span>
                    </div>
                    <div class = "service-content">
                        <h2>Layanan Keamanan</h2>
                        <p>Hotel Kami juga menyediakan layanan penitipan barang dan juga tourgate untuk memandu tamu mereview hotel</p>
                        <button type = "button" class = "btn">Layanan</button>
                    </div>
                </article>
                <!-- end of single service -->
            </div>
        </section>

        <section class = "rooms sec-width" id = "rooms">
            <div class = "title">
                <h2>Kamar Hotel</h2>
            </div>
            <div class = "rooms-container">
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img1.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Deluxe Room</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Wifi Kamar / Ac
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Kamar Mandi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Kasur / Tv
                            </li>
                        </ul>
                        <p>Kami Menyediakan tipe kamar ini dengan fasilitas yang memumpuni dengan harga yang ekonomis</p>
                        <p class = "rate">
                            <span>Rp.150.000 /</span> Per Malam
                        </p>  
                         <button type = "button" class = "btn" onclick="myFunction()">Booking</button>
                         <script>
                                function myFunction() {
                                alert("Untuk Booking kamar silahkan mendaftar di aplikasi hotel Asri");
                                }
                        </script>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img2.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Luxury Room</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Tv / Sofa Meja
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Tempat Tidur
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Kamar Mandi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Wifi Kamar / Ac
                            </li>
                        </ul>
                        <p>Tipe kamar ini cocok untuk para tamu keluarga karena memiliki fasilitas yang lengkap dan mewah  </p>
                        <p class = "rate">
                            <span>Rp.450.000 /</span> Per Malam
                        </p>
                        <button type = "button" class = "btn" onclick="myFunction()">Booking</button>
                         <script>
                                function myFunction() {
                                alert("Untuk Booking kamar silahkan mendaftar di aplikasi hotel Asri");
                                }
                        </script>
                    </div>
                </article>
                <!-- end of single room -->
                <!-- single room -->
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Standard Room</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Ac / Kamar Mandi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Tv / Kursi
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Tempat Tidur
                            </li>
                        </ul>
                        <p>Jenis kamar hotel Standart Room biasanya hampir sama dengan Single Room. Jensi kamar hotel ini cocok untuk wisatawan tunggal atau pasangan.</p>
                        <p class = "rate">
                            <span>Rp.100.000 /</span> Per Malam
                        </p>  
                        <button type = "button" class = "btn" onclick="myFunction()">Booking</button>
                         <script>
                                function myFunction() {
                                alert("Untuk Booking kamar silahkan mendaftar di aplikasi hotel Asri");
                                }
                        </script>
                    </div>
                </article>
                <article class = "room">
                    <div class = "room-image">
                        <img src = "images/img3.jpg" alt = "room image">
                    </div>
                    <div class = "room-text">
                        <h3>Suite Room</h3>
                        <ul>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Tv / Ac
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Kamar Mandi / Tempat tidur
                            </li>
                            <li>
                                <i class = "fas fa-arrow-alt-circle-right"></i>
                                Meja / Sofa
                            </li>
                        </ul>
                        <p>Jenis kamar hotel Suite biasanya memiliki beberapa ukuran berbeda. Basic Suite atau Executive Suite dilengkapi dengan ruang tamu terpisah yang terhubung ke satu atau lebih kamar tidur.</p>
                        
                        <p class = "rate">
                            <span>Rp.125.000 /</span> Per Malam
                        </p>
                          <button type = "button" class = "btn" onclick="myFunction()">Booking</button>
                         <script>
                                function myFunction() {
                                alert("Untuk Booking kamar silahkan mendaftar di aplikasi hotel Asri");
                                }
                        </script>
                    </div>
                </article>
                <!-- end of single room -->
            </div>
        </section>

        <section class = "customers" id = "customers">
            <div class = "sec-width">
                <div class = "title">
                    <h2>customers</h2>
                </div>
                <div class = "customers-container">
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>We Loved it</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus1.jpg" alt = "customer image">
                        <span>Edward Pattison, England</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Comfortable Living</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus2.jpg" alt = "customer image">
                        <span>Livia, Germany</span>
                    </div>
                    <!-- end of single customer -->
                    <!-- single customer -->
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus3.jpg" alt = "customer image">
                        <span>Porter, France</span>
                    </div>
                    <div class = "customer">
                        <div class = "rating">
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "fas fa-star"></i></span>
                            <span><i class = "far fa-star"></i></span>
                        </div>
                        <h3>Nice Place</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat beatae veritatis provident eveniet praesentium veniam cum iusto distinctio esse, vero est autem, eius optio cupiditate?</p>
                        <img src = "images/cus3.jpg" alt = "customer image">
                        <span>Roy, Irlandia</span>
                    </div>
                    <!-- end of single customer -->
                </div>
                    <!-- end of single customer -->
                </div>
            </div>
        </section>
        <!-- end of body content -->
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0282876867095!2d113.78623351415669!3d-7.9960155819696865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6c23fe974d4a5%3A0x180bd6adcfe07e78!2sHotel%20Wisata%20Asri!5e0!3m2!1sid!2sid!4v1635341949603!5m2!1sid!2sid" width="1400" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- footer -->
        <footer class = "footer">
            <div class = "footer-container">
                <div>
                    <h2>Tentang Kami </h2>
                    <p>Hotel Murah Di Bondowoso. Hotel Wisata Asri merupakan salah satu Daftar Hotel Murah Di Bondowoso. Hotel Ini Berada di Jalan Sumber Pandan, Grujugan, Bondowoso dengan nomor telpon 0332-433479 433480. Halaman Hotel Wisata Asri Bondowoso ini berisi informasi seputar Hotel Wisata Asri Bondowoso seperti Alamat Hotel, No Tlp, Peta Lokasi Hotel Wisata Asri, serta Harga/Tarif Hotel Wisata Asri Bondowoso.</p>
                    <ul class = "social-icons">
                        <li class = "flex">
                            <i class = "fa fa-twitter fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-facebook fa-2x"></i>
                        </li>
                        <li class = "flex">
                            <i class = "fa fa-instagram fa-2x"></i>
                        </li>
                    </ul>
                </div>

                <div>
                    <h2>Tautan Kami</h2>
                    <a href = "#">Blog</a>
                    <a href = "#">Rooms</a>
                    <a href = "#">Subscription</a>
                    <a href = "#">Gift Card</a>
                </div>

                <div>
                    <h2>Layanan Kami</h2>
                    <a href = "#">Career</a>
                    <a href = "#">About Us</a>
                    <a href = "#">Contact Us</a>
                    <a href = "#">Services</a>
                </div>

                <div>
                    <h2>Alamat Kami</h2>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                        Jalan Sumber Pandan, Grujugan, Bondowoso
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                           0332-433479 433480
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            asrihotel@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        
        <script src="script.js"></script>
    </body>
</html>