<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animation effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <!-- for footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/about_us.css">

    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
</head>

<body>

    <!--Navbar-->

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
                    <li class="nav-item text-body-emphasis"><a class="nav-link active text-body-emphasis" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="services.php">Services</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="portfolio.php">Portfolio</a></li>
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















    <main>
        <!------------------ About Us ---------------------------->
        <section class="our-services pt-5 pb-4">
            <div class="container-fluid pb-5">

                <h1 class="mt-0 pb-2" style="color:#e7119c;text-align:center;">About Us</h1>
                <p class="card-text">Welcome to our event planner website, your one-stop destination for seamless event
                    planning and
                    management.
                    With our user-friendly platform, we aim to make the process of organizing events a breeze for
                    individuals,
                    businesses, and organizations alike.

                    Whether you're planning a corporate conference, a wedding, a music festival, or any other type of
                    gathering,
                    our event planner website provides you with the essential tools and resources to bring your vision
                    to
                    life.
                    From start to finish, we're here to support you every step of the way.</p>
            </div>

            <div class="container-fluid">
                <div class="para">
                    <h2 class="mt-0" style="color:#e7119c;text-align:left;">Company Overview</h2>
                    <div class="row">

                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col1">
                                <img src="images/com.jpeg">
                                <h3 class="card-title">Company History</h3>
                                <p class="card-text">Founded in 2010 by experienced event professionals, Evento has been
                                    at the forefront of the event
                                    planning industry for over a decade. With a passion for creativity and a dedication
                                    to
                                    exceptional
                                    service, we have successfully organized a wide range of events, earning a reputation
                                    for
                                    excellence
                                    along the way.</p>
                                <a href="#" class="ser-btn">Explore</a>

                            </div>
                        </div>

                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col1">
                                <img src="images/R.jpeg">

                                <h3 class="card-title">Services Offered</h3>
                                <p class="card-text">Evento offers comprehensive event planning services for corporate
                                    events, weddings, conferences,
                                    and
                                    social gatherings. From conceptualization to execution, our team handles all aspects
                                    and on-site event support.
                                    Our
                                    website provides a user-friendly platform where clients can access all the tools and
                                    resources
                                    needed for seamless event management.</p>
                                <a href="#" class="ser-btn">Explore</a>
                            </div>
                        </div>

                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col1">
                                <img src="images/aud.jpg">
                                <h3 class="card-title">Target Audience</h3>
                                <p class="card-text">Evento serves a diverse clientele, including both small and large
                                    businesses, nonprofit
                                    organizations, and individuals hosting personal events. Our services cater to
                                    clients who value
                                    professionalism, creativity, and meticulous attention to detail in their event
                                    planning
                                    experience.
                                </p>
                                <a href="#" class="ser-btn">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="para">
                <div class="container-fluid pb-5">

                    <h2 class="mt-5" style="color:#e7119c;text-align:left;">Mission and Values</h2>
                    <div class="row">
                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col2">
                                <img src="images/mis.jpeg">
                                <h3 class="card-title">Company Mission</h3>
                                <p class="card-text">At Evento, our mission is to create unforgettable events that leave
                                    a lasting impact. We strive
                                    to be
                                    the go-to platform for individuals, businesses, and organizations seeking seamless
                                    event
                                    planning
                                    and management solutions.</p>
                                <a href="#" class="ser-btn">Explore</a>
                            </div>
                        </div>

                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col2">
                                <img src="images/vi.png">
                                <h3 class="card-title">Future Vision</h3>
                                <p class="card-text">As we look ahead, Evento envisions expanding our services to new
                                    markets and exploring emerging
                                    event
                                    technologies. We strive to continuously improve our offerings, deliver unforgettable
                                    experiences,
                                    and remain a trusted partner for our clients' event planning needs.</p>
                                <a href="#" class="ser-btn">Explore</a>

                            </div>
                        </div>

                        <div class="card mt-5" style="width: 25rem;">
                            <div class="our-services-col2">
                                <img src="images/aw.jpeg">
                                <h3 class="card-title">Awards</h3>
                                <p class="card-text">As we look ahead, Evento envisions expanding our services to new
                                    markets and exploring emerging
                                    eventEvento has received industry recognition for our excellence in event planning.
                                    We have been
                                    honored
                                    with awards such as the "Best Event Planning Company" and have been featured in
                                    prominent
                                    publications for our innovative event concepts and flawless execution.</p>
                                <a href="#" class="ser-btn">Explore</a>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            </div>
        </section>

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
    <script src="/services.js"></script>


</body>

</html>