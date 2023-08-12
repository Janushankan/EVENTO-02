<?php
session_start();
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $message = $_POST["message"];

  // Validate form fields
  if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    header('Location: contact_us.php?error=1');
    exit;
  }

  $mail = new PHPMailer(true);

  try {
    $mail->SMTPDebug = 0; // Enable verbose debug output


    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'vj.janushankan1006@gmail.com'; // SMTP username
    $mail->Password = 'upaxmlvazprrilbq'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to


    $mail->setFrom('vj.janushankan1006@gmail.com', 'Contact Us');
    $mail->addAddress('vj.janushankan1006@gmail.com'); // Add a recipient
    // $mail->addAddress('ellen@example.com'); // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
    $mail->isHTML(true); // Set email format to HTML


    $mail->Subject = 'EVENTO | Contact Us';
    $mail->Body = '<b>Username:<b> ' . $name . '<br><b>Email:<b> ' . $email . '<br><b>Phone No:<b> ' . $phone . '<br><b>Message:<b> ' . $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header("Location: contact_us.php?success=1");
    exit;
  } catch (Exception $e) {
    header('Location: contact_us.php?error=1');
    exit;
  }

  // if (!$mail->Send()) {
  //   echo '<script>alert("Message was not sent. Mailer error: ' . $mail->ErrorInfo . '");</script>';
  // } else {
  //   echo '<script>alert("Message has been sent.");</script>';
  // }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--head and footer-->
  <link rel="stylesheet" href="css/contact_us.css">

  <!--head-->
  <link rel="icon" type="image/x-icon" href="images/logo.png">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--body-->
  <link rel="stylesheet" href="css/contact_us.css" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

  <!--footer-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <title>Contact Us</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/contact_us.css">

</head>

<body>

  <!--Navbar-->
  <!-- <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
    <div class="container-fluid">
      <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail rounded" alt="logo" style="height: 65px; width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav gap-40">
          <li class="nav-item"> <a class="nav-link text-body-emphasis" aria-current="page" href="index.php">Home </a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="about_us.php">About
              Us</a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="services.php">Services</a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="portfolio.php">Portfolio</a></li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="packages.php">Packages</a>
          </li>

          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis active" href="contact_us.php">Contact
              Us</a>
          </li>

        </ul>
      </div>
    </div>
    <nav class="navbar">
      <div class="container-fluid">
        <form class="d-flex">
          <a href="sign_in.php" class="btn search-btn" style="background-color: #e97dc3;" type="submit">Login</a>
        </form>
      </div>
    </nav>
  </nav> -->

  <nav class="navbar px-5 navbar-expand-lg nav-bg pb-2">
    <div class="container-fluid">
      <a href="index.php"><img src="images/logo.png" class="img-fluid img-thumbnail rounded" alt="logo"
          style="height: 65px; width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav gap-40">
          <li class="nav-item"> <a class="nav-link text-body-emphasis" aria-current="page" href="index.php">Home </a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="about_us.php">About
              Us</a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
              href="services.php">Services</a>
          </li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
              href="portfolio.php">Portfolio</a></li>
          <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis"
              href="packages.php">Packages</a>
          </li>

          <li class="nav-item text-body-emphasis"><a class="nav-link active text-body-emphasis"
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
              <li><a href="sign_in.php" id="loginButton" class="btn search-btn" style="background-color: #e97dc3; "
                  type="submit">Login</a></li>
            </ul>
            <?php
          }
          ?>
        </div>
      </div>
    </div>

  </nav>



  <main>
    <div class="c-container">
      <span class="big-circle"></span>
      <img src="images/shape-pink.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="con-text">
            "Where every occasion becomes an unforgettable experience,
            let us weave the threads of your dreams into a tapestry of extraordinary events."
          </p>

          <div class="info">
            <div class="information">
              <div class="icon-c"><i class='fa-solid fa-location-dot'></i></div>
              <p><b>Evento (Pvt) Ltd.</b><br>
                <b>Colombo Branch</b><br>
                No. 47, Ananda Coomaraswamy Mawatha,<br>
                Colombo 03,<br>
                00300.<br>
                <b>Ja-Ela Branch</b><br>
                No. 78/5(1st Floor),<br>
                Ja-Ela Road, Ekala,<br>
                Sri Lanka.
              </p>
            </div>
            <div class="information">
              <div class="icon-c"><i class='fa fa-envelope'></i></div>
              <p>evento@lanka.lk</p>
            </div>
            <div class="information">
              <div class="icon-c"><i class='fas fa-phone-alt'></i></div>
              <p><b>Office phone:</b>&nbsp;&nbsp;0111234567<br>
                <b>Mobile:</b>&nbsp;&nbsp;0771234567, 0701234567, 0777654321
              </p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="#">
                <i class="fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        </div>



        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="contact_us.php" method="POST" autocomplete="off">
            <h3 class="title1">Contact Us</h3>
            <?php
            $msg = "";
            if (isset($_GET['error'])) {
              $msg = "Please fill in the blanks.";
              echo '<div class="alert alert-danger">' . $msg . '</div>';
            }
            if (isset($_GET['success'])) {
              $msg = "You message has been sent successfully.";
              echo '<div class="alert alert-success">' . $msg . '</div>';
            }
            ?>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="name">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="email">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="phone">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="message">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" name="submit" value="Send" class="c-btn" />
          </form>
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

  <!--head and footer-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="/contact_us.js"></script>

  <!--body-->
  <script src="js/contact_us.js"></script>
</body>

</html>