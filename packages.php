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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animation effects -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/packages.css">
    <title>Packages</title>

</head>

<body>


    <!--Navbar-->

    <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
        <div class="container-fluid">
            <a href="index.html"><img src="images/logo.png" class="img-fluid img-thumbnail rounded" alt="logo"
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
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="portfolio.php">Portfolio</a></li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link active text-body-emphasis"
                            href="packages.php">Packages</a>
                    </li>

                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
                            href="contact_us.php">Contact
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
                            <li><a href="includes/logout.inc.php" id="logoutButton" class="btn search-btn"
                                    style="background-color: #e97dc3; " type="submit">Logout</a></li>
                        </ul>

                        <?php
                    } else {
                        ?>
                        <ul class="navbar-nav gap-40">
                            <li><a href="sign_in.php" id="loginButton" class="btn search-btn"
                                    style="background-color: #e97dc3; " type="submit">Login</a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </nav>


    <!-- Packagese -->
    <main>
        <h1 class="mt-5" style="color:#e7119c;text-align:center;">
            Packages
        </h1>

        <div class="container">
            <div class="card-group">


                <div class="row">
                    <div class=" col-md-4">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/index_59.png" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title">Catering</h3>
                                <p class="card-text">Farm-to-Table Freshness</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-full-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 25000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1"
                                    aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal1Label">Catering -
                                                    Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-4">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/intex_022.png" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title">Photography</h3>
                                <p class="card-text">Capturing Unforgettable Memories</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-full-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 15000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal2">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1"
                                    aria-labelledby="exampleModal2Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal2Label">Photography
                                                    - Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-4">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/index_54.png" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title">DJ</h3>
                                <p class="card-text">Energetic and Dynamic Soundscapes</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 12000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal3">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1"
                                    aria-labelledby="exampleModal3Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal3Label">DJ - Book
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="space"></p>


                    <div class=" col-md-4">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/index_60.png" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title"> Decoration </h3>
                                <p class="card-text">Elegant and Timeless Decor</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-full-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 30000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal4">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1"
                                    aria-labelledby="exampleModal4Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal4Label">Decoration -
                                                    Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" col-md-4">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/image=1.jpeg" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title">Decoration + Photography</h3>
                                <p class="card-text">Unforgettable memory</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 40000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal5">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal5" tabindex="-1"
                                    aria-labelledby="exampleModal5Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal5Label">Decoration +
                                                    Photography - Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-4 mb-5">
                        <div class="card p-3 mt-5">
                            <img class="card-img-top" src="images/image package.jpg" width="100%" height="300px">

                            <div class="card-body">
                                <h3 class="card-title"> Photography + DJ</h3>
                                <p class="card-text">Sounds on and make memories</p>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div><br>
                                <p>Price for one package is <span class="price">Rs. 60000/=</span>.</p>
                                <!-- <button type=" button" class="btn search-btn book-btn">Book</button> -->

                                <!-- Button trigger modal -->
                                <button type="button" class="btn search-btn book-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal6">
                                    Book
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal6" tabindex="-1"
                                    aria-labelledby="exampleModal6Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal6Label">
                                                    Photography + DJ - Book</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="container">
                                                <div class="modal-body">
                                                    <form action="booking.php" method="POST">
                                                        <div class="form-group p-2">
                                                            <label for="name form-name pb-2">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter your name" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter your email" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="phone_no">Phone No</label>
                                                            <input type="text" class="form-control" name="phone_no"
                                                                placeholder="Enter your phone no" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="type">Event Type</label>
                                                            <input type="text" class="form-control" name="type"
                                                                placeholder="Enter your event type" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="location">Event Location</label>
                                                            <input type="text" class="form-control" name="location"
                                                                placeholder="Enter your event location" required>
                                                        </div>
                                                        <div class="form-group p-2">
                                                            <label for="date">Event Date</label>
                                                            <input type="date" class="form-control datepicker"
                                                                name="date" placeholder="MM/DD/YYY" required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit"
                                                                class="btn search-btn book-btn">Book</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="js/packages.js"></script>
</body>

</html>