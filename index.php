<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTO</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animation effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <!-- for footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">



</head>

<body>

    <!--Navbar-->
    <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
        <div class="container-fluid">
            <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail rounded" alt="logo"
                    style="height: 65px; width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav gap-40">
                    <li class="nav-item"> <a class="nav-link active text-body-emphasis" aria-current="page"
                            href="index.php">Home </a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="about_us.php">About Us</a>
                    </li>
                    <!-- <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="#">Categories</a>
                    </li> -->
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="services.php">Services</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="portfolio.php">Portfolio</a></li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="packages.php">Packages</a>
                    </li>

                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="contact_us.php">Contact
                            Us</a>
                    </li>

                </ul>
            </div>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <form class="d-flex">
                    <a href="sign_in.php" class="btn search-btn" style="background-color: #e97dc3;"
                        type="submit">Login</a>
                </form>
            </div>
        </nav>
    </nav>


    <main>
        <!-- Main content goes here -->


        <!-- Carousel -->

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="images/intex_001.png" class="d-block w-100 slider-img" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/intex_002.png" class="d-block w-100 slider-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/intex_003.png" class="d-block w-100 slider-img" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/intex_004.png" class="d-block w-100 slider-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/intex_005.png" class="d-block w-100 slider-img" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>




        <!-- description -->
        <div class="container mb-1 pb-5  pt-5 mt-5">
            <h3 class="pb-2 fs-1 mb-5" style="text-align: center; font-family: 'Pacifico', cursive;letter-spacing: 6px;"
                data-fontsize="26" data-lineheight="48">EVENTO</h3>
            <p class="text-center">Welcome to our event planner website! We understand that planning an event can be a
                complex and
                time-consuming task. That's why we have created a platform that offers a comprehensive range of services
                and
                tools to simplify the entire process for event planners like you.</p>
        </div>


        <!-- Section -->


        <div class="container mb-5 pb-5">
            <!-- <h3 class="pb-5" style="text-align: center; font-family: Cormorant Garamond, serif;" data-fontsize="22" data-lineheight="48">
                Event Categories
            </h3> -->
            <div class="row">
                <div class="col-12">
                    <div class="gallery-heading pb-5">
                        <h3 class="pb-2 fs-1 mb-5"
                            style="text-align: center; font-family: 'Pacifico', cursive;letter-spacing: 6px;"
                            data-fontsize="26" data-lineheight="48">Event Categories</h3>

                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <div>
                        <img src="images/intex_021.png" alt="" srcset="" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 d-flex ps-5">
                    <div class="d-flex flex-column justify-content-center ps-5">
                        <div class="title">
                            EVENTO
                        </div>
                        <div class="heading">
                            Weddings
                        </div>
                        <div class="desc">
                            Your dream wedding is within reach with our event planner website. We understand the
                            importance of this special day and offer a range of features tailored to weddings, such as
                            venue selection assistance, vendor recommendations, customizable themes, and coordination
                            tools to ensure that every detail is meticulously planned and executed.
                        </div>
                    </div>
                </div>
            </div>



            <div class="row mb-5 mt-5 pt-5">
                <div class="col-lg-6 d-flex">
                    <div class="d-flex flex-column justify-content-center ps-5">
                        <div class="title">
                            EVENTO
                        </div>
                        <div class="heading">
                            Private events
                        </div>
                        <div class="desc">
                            From intimate gatherings to extravagant celebrations, our event planner website is your
                            go-to platform for planning private events. Whether it's a birthday party, anniversary
                            celebration, or a social gathering, we provide you with the necessary tools to create
                            memorable experiences. Manage guest lists, send invitations, and coordinate all aspects of
                            your private event with ease.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex ps-5">
                    <div>
                        <img src="images/intex_022.png" alt="" srcset="" width="100%">
                    </div>

                </div>
            </div>


            <div class="row mb-3 pb-5 mt-5 pt-5">
                <div class="col-lg-6">
                    <div>
                        <img src="images/intex_023.png" alt="" srcset="" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 d-flex ps-5">
                    <div class="d-flex flex-column justify-content-center ps-5">
                        <div class="title">
                            EVENTO
                        </div>
                        <div class="heading">
                            Religious events
                        </div>
                        <div class="desc">
                            If you're organizing a religious event, our event planner website is here to support you. We
                            understand the significance and unique requirements of religious gatherings. Our platform
                            offers specialized features to help you plan and coordinate religious ceremonies, festivals,
                            and spiritual retreats. From venue selection to organizing rituals and managing guest
                            participation, we have you covered.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5 mt-5 pt-5">
                <div class="col-lg-6 d-flex">
                    <div class="d-flex flex-column justify-content-center ps-5">
                        <div class="title">
                            EVENTO
                        </div>
                        <div class="heading">
                            Sports events
                        </div>
                        <div class="desc">
                            For sports enthusiasts and organizers, our event planner website is the ideal resource for
                            planning successful sports events. Whether it's a local tournament, charity run, or a
                            large-scale sporting extravaganza, we provide features designed specifically for sports
                            event management. You can handle participant registrations, schedule matches, track scores,
                            and communicate updates effortlessly.
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex ps-5">
                    <div>
                        <img src="images/intex_024.png" alt="" srcset="" width="100%">
                    </div>

                </div>
            </div>

        </div>






        <!-- Why us -->


        <div class="container mb-5 pb-5">
            <!-- <div class="d-flex justify-content-center align-items-center flex-column pb-5">
                <h3>Services</h3>
            </div> -->
            <div class="row">
                <div class="col-12">
                    <div class="gallery-heading pb-5">
                        <h3 class="pb-2 fs-1 mb-5"
                            style="text-align: center; font-family: 'Pacifico', cursive;letter-spacing: 6px;"
                            data-fontsize="26" data-lineheight="48">Services</h3>
                    </div>
                </div>
            </div>
            <div class="row pt-4">

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/camera.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Photography
                        </div>
                        <div class="desc-title">
                            Capture precious moments with our professional event photography services. Immortalize your
                            event in stunning images.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/decoration.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Decoration
                        </div>
                        <div class="desc-title">
                            Transform your venue into a captivating space with our exquisite event decoration services.
                            Elevate the ambiance and create a memorable atmosphere.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/catering.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Catering
                        </div>
                        <div class="desc-title">
                            Delight your guests with our exceptional catering services. From delectable cuisine to
                            impeccable service, we ensure a culinary experience to remember.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/dj.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Technical Assistance
                        </div>
                        <div class="desc-title">
                            Leave the technical aspects to us. Our skilled technicians provide seamless audiovisual
                            setup, lighting, and sound support for a flawless event.
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/heart.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Exclusive Design
                        </div>
                        <div class="desc-title">
                            Apparently we had reached a great height in the atmosphere
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <a href="index.php" class="icon-why">
                            <div><img src="images/heart.svg" alt="" srcset="" width="30px"></div>
                        </a>
                        <div class="title-why">
                            Exclusive Design
                        </div>
                        <div class="desc-title">
                            Apparently we had reached a great height in the atmosphere
                        </div>
                    </div>
                </div>



            </div>
        </div>





        <!-- Gallery -->

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="gallery-heading pb-5">
                        <h3 class="pb-2 fs-1 mb-5"
                            style="text-align: center; font-family: 'Pacifico', cursive;letter-spacing: 6px;"
                            data-fontsize="26" data-lineheight="48">Gallery</h3>
                    </div>
                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                        </span>
                    </div>
                </div>
            </div>
            <div class="gallery pb-5">
                <div class="gallery-item">
                    <img src="images/index_51.png" alt="Image 51">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Wedding</h3>
                            <p>22th May 2022</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_52.png" alt="Image 52">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Reception</h3>
                            <p>15th April 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_53.png" alt="Image 53">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Birthday</h3>
                            <p>02nd March 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_54.png" alt="Image 54">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>DJ Party</h3>
                            <p>29th January 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_55.png" alt="Image 55">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>DJ Night</h3>
                            <p>30th June 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_56.png" alt="Image 56">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Poson</h3>
                            <p>3rd June 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_57.png" alt="Image 57">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Culture Event</h3>
                            <p>10th May 2023</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_58.png" alt="Image 58">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Marathon 2022</h3>
                            <p>27th December 2022</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="images/index_59.png" alt="Image 59">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h3>Food Festival</h3>
                            <p>8th January 2023</p>
                        </div>
                    </div>
                </div>
                <!-- Add more gallery items as needed -->
            </div>













    </main>



    <!-- footer -->
    <footer class="navbar-dark nav-bg mt-auto pb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail" alt="logo"
                                style="height: 90px; width: 220px;"></a>

                        <h3 class="pt-4 foot">About Us</h3>
                        <p class="foot">We are your trusted event planning partner, offering comprehensive services and
                            tools to streamline your event management process. Let us help you create unforgettable
                            experiences.</p>
                        <div class="card-area">
                            <i class="fa fa-cc-visa foot"></i>
                            <i class="fa fa-credit-card foot"></i>
                            <i class="fa fa-cc-mastercard foot"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2 class="foot">Quick Links</h2>
                        <ul>
                            <li><a href="index.php" class="foot foott-link">Home</a></li>
                            <li><a href="about_us.php" class="foot foott-link">About Us</a></li>
                            <!-- <li><a href="#" class="foot foott-link">Categories</a></li> -->
                            <li><a href="services.php" class="foot foott-link">Services</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2 class="foot">Quick Links</h2>
                        <ul>
                            <li><a href="portfolio.php" class="foot foott-link">Portfolio</a></li>
                            <li><a href="contact_us.php" class="foot foott-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <h2 class="foot">Contact</h2>
                        <ul class="widget_contacts_style_1">
                            <li class="widget_contacts_address text-dark d-flex mt-4">
                                <div class="icon"><i class='fa-solid fa-location-dot'></i></div>
                                <div class="text ms-3"><b>Evento (Pvt) Ltd.</b><br><b>Colombo Branch</b><br>No. 47,
                                    Ananda
                                    Coomaraswamy Mawatha, Colombo 03, 00300.<br><b>Ja-Ela Branch</b><br>
                                    No. 78/5(1st Floor),
                                    Ja-Ela Road Ekala,<br>
                                    Sri Lanka.
                                </div>
                            </li>

                            <li class="widget_contacts_phone text-dark d-flex mt-4">
                                <div class="icon"><i class='fas fa-phone-alt'></i></div>
                                <div class="text ms-3"><b>Office phone</b> <br>
                                    0111234567<br><b>Mobile</b><br>0771234567<br>0701234567<br>0777654321</div>
                            </li>

                            <li class="widget_contacts_email d-flex align-items-center">
                                <div class="icon"><i class='fa fa-envelope'></i></div>
                                <div class="text ms-3">
                                    <a href="mailto:evento@lanka.lk" class="text-primary">evento@lanka.lk</a>
                                </div>
                            </li>
                        </ul>

                        <!-- <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                aria-label="Enter your Email ..." aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="fa fa-long-arrow-right"></i>
                            </span>
                        </div> -->

                        <div>
                            <h2 class="text-dark">Follow us on</h2>
                            <p class="socials text-dark">
                                <a href="#" class="follow"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="follow"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="follow"><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="follow"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="follow"><i class="fa fa-youtube"></i></a>
                                <a href="#" class="follow"><i class="fa fa-pinterest"></i></a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="textwidget custom-html-widget">
            <p style="text-align:center; font-size:15px;">
                Copyright © 2023 EVENTO (Pvt) Ltd. All rights reserved.
            </p>
        </div>



    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script> -->
    <script src="/contact_us.js"></script>
</body>

</html>