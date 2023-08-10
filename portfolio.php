<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

    <!-- animation effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- for footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">
    <title>Portfolio</title>

</head>

<body>

    <!--Navbar-->
    <!-- <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
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
                    <li class="nav-item"> <a class="nav-link text-body-emphasis" aria-current="page"
                            href="index.php">Home </a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="services.php">Services</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis active"
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
    </nav> -->

    <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
        <div class="container-fluid">
            <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail rounded" alt="logo" style="height: 65px; width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav gap-40">
                    <li class="nav-item"> <a class="nav-link text-body-emphasis" aria-current="page" href="index.php">Home </a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="services.php">Services</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link active text-body-emphasis" href="portfolio.php">Portfolio</a></li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="packages.php">Packages</a>
                    </li>

                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="contact_us.php">Contact
                            Us</a>
                    </li>

                </ul>
            </div>
            <div class="navbar">
                <div class="container-fluid">
                    <?php
                    if (isset($_SESSION["userid"])) {
                    ?>
                        <ul class="navbar-nav gap-40">
                            <li><a href="includes/logout.inc.php" id="logoutButton" class="btn search-btn" style="background-color: #e97dc3; " type="submit">Logout</a></li>
                        </ul>

                    <?php
                    } else {
                    ?>
                        <ul class="navbar-nav gap-40">
                            <li><a href="sign_in.php" id="loginButton" class="btn search-btn" style="background-color: #e97dc3; " type="submit">Login</a></li>
                        </ul>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </nav>

    <main class="my-5 py-5">

        <!-- Carousel wrapper -->
        <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
            <!-- Controls -->

            <!-- Inner -->
            <div class="carousel-inner py-4">
                <!-- Single item -->
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <img src="images/index_51.png" class="mx-auto d-block img-fluid" style="height: 100%; width: 100%;" class="card-img-top" alt="Weddings" />
                                    <div class="card-body">
                                        <h5 class="card-title">Weddings</h5>
                                        <p class="card-text">
                                            Experience the magic of weddings in our curated Wedding Gallery. Find
                                            inspiration in breathtaking venues and personalized details.
                                            Our expert team will bring your vision to life for an unforgettable
                                            celebration.
                                            Start your journey to
                                        </p>
                                        <a href="wedding.php" class="btn btn-clr">View Gallery</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="images/index_53.png" class="mx-auto d-block img-fluid" style="height: 100%; width: 100%;" class="card-img-top" alt="personal parties" />
                                    <div class="card-body">
                                        <h5 class="card-title">Personal Events</h5>
                                        <p class="card-text">
                                            Celebrate life's special moments in our Personal Events Gallery. We creates
                                            unforgettable events tailored to your unique style.
                                            From elegant decorations to delicious cuisine, we ensure every detail is
                                            perfect.
                                            Let us create a personalized
                                        </p>
                                        <a href="personalevt.php" class="btn btn-clr">View Gallery</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="images/index_54.png" class="mx-auto d-block img-fluid" style="height: 100%; width: 100%;" class="card-img-top" alt="Concerts" />
                                    <div class="card-body">
                                        <h5 class="card-title">Concerts</h5>
                                        <p class="card-text">
                                            Experience the electrifying world of concerts in our Concerts Gallery. Feel
                                            the
                                            energy as talented artists take the stage and captivate audiences.
                                            Our gallery showcases diverse musical genres and unforgettable moments.
                                        </p>
                                        <a href="musicevt.php" class="btn btn-clr">View Gallery</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="card">
                                    <img src="images/index_58.png" class="mx-auto d-block img-fluid" style="height: 100%; width: 100%;" class="card-img-top" alt="Sports Event" />
                                    <div class="card-body">
                                        <h5 class="card-title">Sports Events</h5>
                                        <p class="card-text">
                                            Experience the adrenaline of sports events in our captivating Sports Events
                                            Gallery. Witness the power, skill, and competitive spirit in disciplines
                                            like
                                            football, basketball, tennis, and more.
                                            Feel the excitement of roaring crowds and admire the
                                        </p>
                                        <a href="sportsevt.php" class="btn btn-clr">View Gallery</a>


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 d-none d-lg-block">
                                <div class="card">
                                    <img src="images/index_56.png" class="mx-auto d-block img-fluid" style="height: 100%; width: 100%;" class="card-img-top" alt="Storm Clouds" />
                                    <div class="card-body">
                                        <h5 class="card-title">Cultural Events</h5>
                                        <p class="card-text">
                                            Embark on a cultural journey through our vibrant Cultural Events Gallery.
                                            Explore traditions, heritage, and artistic expressions that come to life.
                                            Experience captivating festivals, dances, music, and theater that showcase
                                            cultural richness
                                        </p>
                                        <a href="culturalevt.php" class="btn btn-clr">View Gallery</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->
            <div class="d-flex justify-content-center mb-4">
                <button class="carousel-control-prev position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next position-relative" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel wrapper -->
    </main>





    <!-- footer -->
    <footer class="navbar-dark nav-bg mt-auto pb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="single-box">
                        <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail" alt="logo" style="height: 90px; width: 220px;"></a>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script> -->
    <script src="css/portfolio.css"></script>

</body>

</html>