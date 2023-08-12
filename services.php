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
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="css/services.css">
    <title>Services</title>
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
                    <li class="nav-item text-body-emphasis"><a class="nav-link text-body-emphasis" href="about_us.php">About Us</a>
                    </li>
                    <li class="nav-item text-body-emphasis"><a class="nav-link active text-body-emphasis" href="services.php">Services</a>
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
        <!------------------ Services ---------------------------->-
        <section class="our-services pt-5 pb-4">
            <div class="container-fluid">


                <div class="para">
                    <h2 class="mt-0" style="color:#e7119c;text-align:left;">Experience and Expertise</h2>
                    <div class="row">
                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/R.jpeg">
                                <h3 class="card-title active">Industry Experience</h3>
                                <p class="card-text">With over a decade of experience in the event planning industry,
                                    Evento has successfully
                                    organized a
                                    wide range of events across various sectors. Our team has handled birthday parties,
                                    sports
                                    tournaments, religious ceremonies, weddings, and social gatherings.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                    Explore
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal1Label">Industry Experience</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="justify-content-center">
                                                    <div class="container">
                                                        <img class="image-fluid" src="images/R.jpeg">
                                                    </div>
                                                    <div class=" container card-text pt-3 pb-3">
                                                        <p>
                                                            With over a decade of experience in the event planning industry,
                                                            Evento has successfully organized a wide range of events across
                                                            various sectors. Our team has handled birthday parties, sports
                                                            tournaments, religious ceremonies, weddings, and social gatherings.
                                                            Dear potential client, Thank you for your interest in Evento and
                                                            our industry experience. We are proud to say that our team has
                                                            gained extensive knowledge and expertise in the event planning
                                                            industry over the past decade. Throughout these years, we have
                                                            successfully organized a diverse range of events across various
                                                            sectors. From intimate birthday parties to large-scale sports
                                                            tournaments, religious ceremonies, weddings, and social gatherings
                                                            - we have done it all. Our experience allows us to understand the
                                                            unique requirements of each event type and sector. We know how
                                                            to cater to different audiences, create memorable experiences,
                                                            and ensure smooth execution from start to finish. We believe
                                                            that our deep understanding of the industry combined with our
                                                            passion for creating exceptional events will greatly benefit
                                                            your upcoming project. At Evento, we strive for excellence in
                                                            every aspect of event planning - from conceptualization and
                                                            coordination to logistics management and creative design.
                                                            Rest assured that by choosing Evento as your event planning
                                                            partner, you will receive professional guidance throughout
                                                            the entire process. Our dedicated team is committed to
                                                            delivering outstanding results that surpass your expectations.
                                                            We look forward to discussing your specific needs further so that
                                                            we can create an unforgettable event tailored just for you.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/at.jpeg">
                                <h3 class="card-title active">Attention to Detail</h3>
                                <p class="card-text">EventPro's planners are known for their meticulous attention to
                                    detail. We understand that every
                                    element of an event, from venue selection to decor, audiovisual setup, and guest
                                    experience,
                                    contributes to its success.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                    Explore
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal2Label">Attention to Detail</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="justify-content-center">
                                                    <div class="container">
                                                        <img class="image-fluid" src="images/at.jpeg">
                                                    </div>
                                                    <div class=" container card-text pt-3 pb-3">
                                                        <p>
                                                            EventPro's planners are known for their meticulous
                                                            attention to detail. We understand that every element
                                                            of an event, from venue selection to decor, audiovisual
                                                            setup, and guest experience, contributes to its success.
                                                            Our team ensures that even the smallest details are taken
                                                            care of to create a seamless and immersive event experience.
                                                            At EventPro, we pride ourselves on our unwavering commitment
                                                            to attention to detail. We understand that the success of
                                                            an event is determined by the careful consideration and
                                                            execution of every single element. From selecting the perfect
                                                            venue to creating a captivating decor scheme, setting up
                                                            flawless audiovisual systems, and curating a memorable guest
                                                            experience - we leave no stone unturned. Our team of
                                                            experienced planners are masters at meticulously crafting
                                                            events that leave a lasting impression. We understand
                                                            that it's often the smallest details that make the
                                                            biggest impact. That's why we go above and beyond to
                                                            ensure that every aspect of your event is taken care
                                                            of with utmost precision. Whether it's coordinating
                                                            intricate table settings or ensuring seamless transitions
                                                            between different parts of your program, you can trust
                                                            us to handle every detail flawlessly. Our goal is to create
                                                            an event experience that not only meets but exceeds your
                                                            expectations. With EventPro by your side, you can rest
                                                            assured knowing that even the tiniest details will be
                                                            handled with utmost care and attention. Let us help you
                                                            bring your vision to life and create an unforgettable
                                                            event for you and your guests.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/cl.jpeg">
                                <h3 class="card-title active">Creativity</h3>
                                <p class="card-text">Our team stays abreast of the latest event trends and styles, and
                                    technological advancements to
                                    infuse creativity and innovation into every event we plan. We work closely with our
                                    clients to
                                    understand their vision and then bring it to life with a imaginative approach.</p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                    Explore
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal3Label">Creativity</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="justify-content-center">
                                                    <div class="container">
                                                        <img class="image-fluid" src="images/cl.jpeg">
                                                    </div>
                                                    <div class=" container card-text pt-3 pb-3">
                                                        <p>
                                                            Our team stays abreast of the latest event trends and styles, and
                                                            technological advancements to infuse creativity and innovation into
                                                            every event we plan. We work closely with our clients to understand
                                                            their vision and then bring it to life with an imaginative approach.
                                                            Creativity is at the heart of what we do. Our team is passionate
                                                            about staying ahead of the curve when it comes to event trends,
                                                            styles, and technological advancements. By continuously researching
                                                            and exploring new possibilities, we ensure that our events are
                                                            always fresh and innovative. When working with our clients,
                                                            we make it a priority to understand their unique vision. We
                                                            believe that every event should be a reflection of their
                                                            personality and objectives. By collaborating closely with them,
                                                            we are able to bring their ideas to life in imaginative ways.
                                                            Whether it's designing a stunning visual display or crafting
                                                            an interactive experience for attendees, our team thrives on
                                                            pushing boundaries and thinking outside the box. We take pride
                                                            in creating memorable moments that leave a lasting impact on
                                                            guests. With our commitment to creativity and innovation, you
                                                            can trust us to deliver events that not only meet your
                                                            expectations but exceed them. Let us transform your vision
                                                            into reality with our imaginative approach!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/ven.jpeg">
                                <h3 class="card-title active">Vendor</h3>
                                <p class="card-text">Evento has established strong relationships with reputable vendors,
                                    ensuring access to top-tier
                                    venues, caterers, entertainers, and suppliers. Our extensive network allows us to
                                    negotiate
                                    competitive prices, secure the best services, and manage vendor relationships
                                    seamlessly.

                                </p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                                    Explore
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal4Label">Vendor</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="justify-content-center">
                                                    <div class="container">
                                                        <img class="image-fluid" src="images/ven.jpeg">
                                                    </div>
                                                    <div class=" container card-text pt-3 pb-3">
                                                        <p>
                                                            Evento has established strong relationships with reputable
                                                            vendors, ensuring access to top-tier venues, caterers,
                                                            entertainers, and suppliers. Our extensive network allows
                                                            us to negotiate competitive prices, secure the best services,
                                                            and manage vendor relationships seamlessly. for our clients.
                                                            With years of experience in the event industry, we understand
                                                            the importance of reliable vendors and their impact on the
                                                            success of any event.At Evento, we take pride in our ability
                                                            to work with a wide range of vendors who have proven themselves
                                                            time and again. We have carefully selected these vendors
                                                            based on their reputation, professionalism, and quality of
                                                            service. By partnering with us, you can rest assured that
                                                            you will have access to the best venues, caterers,
                                                            entertainers, and suppliers available.Our extensive network
                                                            not only allows us to secure competitive prices for our
                                                            clients but also ensures that we can provide a diverse
                                                            range of options tailored to your specific needs and budget.
                                                            Whether you are planning an intimate gathering or a
                                                            large-scale corporate event, we have the right vendors
                                                            who can deliver exceptional services without compromising
                                                            on quality.Furthermore, managing vendor relationships
                                                            is one of our core strengths. We understand that effective
                                                            communication and coordination are crucial when working
                                                            with multiple vendors. Our experienced team will handle all
                                                            interactions with vendors on your behalf, ensuring seamless
                                                            collaboration throughout the entire planning process.
                                                            By entrusting Evento as your event partner, you can relax
                                                            knowing that every aspect related to vendor selection and
                                                            management will be taken care of diligently. Our goal is
                                                            to alleviate any stress associated with vendor sourcing so
                                                            that you can focus on enjoying a successful and memorable event.
                                                            Contact us today to learn more about how Evento's strong relationships
                                                            with reputable vendors can elevate your next event experience!
                                                        </p>
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

            <div class="container-fluid pb-5">
                <div class="para">
                    <h2 class="mt-5" style="color:#e7119c;text-align:left;">Team Members</h2>


                    <div class="row">
                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/or.jpeg">
                                <h3 class="card-title active">Event Organizers</h3>
                                <p class="card-text">Event organizers have a deep understanding of event logistics,
                                    budgeting, and overall project
                                    management. They work closely with clients to understand their event goals,
                                    conceptualize event
                                    themes, and coordinate all aspects of event planning, from inception to execution.
                                </p>
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                                    Explore
                                </button>

                                

                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModal5Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal5Label">Event Organizers</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                $servername = "localhost"; // Change this to your database server
                                                $username = "root"; // Change this to your database username
                                                $password = ""; // Change this to your database password
                                                $dbname = "event_planner"; // Change this to your database name

                                                // Create a connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Check the connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // Fetch data from the database
                                                $sql = "SELECT * FROM organizer";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '
                        <div class="container my-2">
                            <div class="row p-3">
                                <div class="col-md-4 pb-3">
                                    <img src="images/team001.png" class="rounded float-start" alt="...">
                                </div>
                                <div class="col-md-8 align-items-center">
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Id : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['org_id'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Name : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['org_name'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Email : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['org_email'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Phone No : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['org_phone_no'] . '</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                                                    }
                                                } else {
                                                    echo '<p>No organizers found</p>';
                                                }

                                                // Close the connection
                                                $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/dec.jpg">
                                <h3 class="card-title active">Decorators</h3>
                                <p class="card-text">Our creative decorators and event stylists transform event spaces
                                    into visually captivating
                                    environments. They have an eye for design and a talent for creating unique and
                                    memorable event
                                    aesthetics. From stunning floral arrangements to thematic decor elements, they work
                                    closely with
                                    clients to bring their vision to life.</p>
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                                    Explore
                                </button>

                                

                                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModal6Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal6Label">Decorators</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                $servername = "localhost"; // Change this to your database server
                                                $username = "root"; // Change this to your database username
                                                $password = ""; // Change this to your database password
                                                $dbname = "event_planner"; // Change this to your database name

                                                // Create a connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Check the connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // Fetch data from the database
                                                $sql = "SELECT * FROM decorator";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '
                        <div class="container my-2">
                            <div class="row p-3">
                                <div class="col-md-4 pb-3">
                                    <img src="images/team002.png" class="rounded float-start" alt="...">
                                </div>
                                <div class="col-md-8 align-items-center">
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Id : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['decorator_id'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Name : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['decorator_name'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Email : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['decorator_email'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Phone No : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['decorator_phone_no'] . '</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                                                    }
                                                } else {
                                                    echo '<p>No Decorators found</p>';
                                                }

                                                // Close the connection
                                                $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/ph.jpg">
                                <h3 class="card-title active">Photographers</h3>
                                <p class="card-text">Our skilled photographers capture the essence of each event through
                                    their lenses. They have an
                                    eye
                                    for detail and an artistic approach, ensuring that every special moment, from candid
                                    shots to
                                    key
                                    highlights, is documented beautifully. Our team of technicians and audiovisual
                                    specialists
                                    brings
                                    technical expertise to the table.</p>
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                                    Explore
                                </button>

                                

                                <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModal7Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal7Label">Photographers</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                $servername = "localhost"; // Change this to your database server
                                                $username = "root"; // Change this to your database username
                                                $password = ""; // Change this to your database password
                                                $dbname = "event_planner"; // Change this to your database name

                                                // Create a connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Check the connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // Fetch data from the database
                                                $sql = "SELECT * FROM photographer";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '
                        <div class="container my-2">
                            <div class="row p-3">
                                <div class="col-md-4 pb-3">
                                    <img src="images/team003.png" class="rounded float-start" alt="...">
                                </div>
                                <div class="col-md-8 align-items-center">
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Id : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['photographer_id'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Name : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['photographer_name'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Email : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['photographer_email'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Phone No : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['photographer_phone_no'] . '</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                                                    }
                                                } else {
                                                    echo '<p>No Photographers found</p>';
                                                }

                                                // Close the connection
                                                $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mt-5" style="width: 18.5rem;">
                            <div class="our-services-col2">
                                <img src="images/cat.jpeg">
                                <h3 class="card-title active">Caterers</h3>
                                <p class="card-text">Caterers and food service professionals excels in creating culinary
                                    experiences that delight
                                    attendees. They carefully consider dietary preferences and
                                    event
                                    themes. With a focus on quality ingredients and impeccable presentation, our
                                    caterers ensure
                                    that
                                    guests are treated to an exceptional dining experience.</p>
                                <button type="button" class="btn ser-btn" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                                    Explore
                                </button>

                                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModal8Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable p-5">
                                        <div class="modal-content rounded-4">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5 active" id="exampleModal8Label">Caterers</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                $servername = "localhost"; // Change this to your database server
                                                $username = "root"; // Change this to your database username
                                                $password = ""; // Change this to your database password
                                                $dbname = "event_planner"; // Change this to your database name

                                                // Create a connection
                                                $conn = new mysqli($servername, $username, $password, $dbname);

                                                // Check the connection
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                }

                                                // Fetch data from the database
                                                $sql = "SELECT * FROM caterer";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '
                        <div class="container my-2">
                            <div class="row p-3">
                                <div class="col-md-4 pb-3">
                                    <img src="images/team004.png" class="rounded float-start" alt="...">
                                </div>
                                <div class="col-md-8 align-items-center">
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Id : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['caterer_id'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Name : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['caterer_name'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Email : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['caterer_email'] . '</label>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start">
                                        <div class="col-md-3 text-start">
                                            <label class="form-label">Phone No : </label>
                                        </div>
                                        <div class="col-md-5 text-start text-secondary">
                                            <label class="form-label">' . $row['caterer_phone_no'] . '</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                                                    }
                                                } else {
                                                    echo '<p>No Caterers found</p>';
                                                }

                                                // Close the connection
                                                $conn->close();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
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
 
    <script src="/services.js"></script>


</body>



</html>