<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ADMIN PANEL | EVENTO</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper" style="position: static; font-family: Arial, sans-serif;">
            <div class="sidebar-heading border-bottom bg-light">EVENTO ADMIN PANEL</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Home</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="organizers.php">Event Organizers Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="decorators.php">Decorators Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="photographers.php">Photographers Team</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3 active" href="caterers.php">Caterers Team</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown active" aria-haspopup="true" aria-expanded="false">
                                    Administrator </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Manage Account</a>
                                    <a class="dropdown-item" href="#!">Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container mt-5">
                <h1 class="text-center">Team Members</h1>
                <br>
                <hr>
                <h4 class="text-center">Event Organizers</h4>

                <form action="insertCaterers.php" method="post">
                    <table class="table table-bordered mt-4">
                        <tr>
                            <td>Id :</td>
                            <td><input type="text" name="id" class="form-control" placeholder="Id"></td>
                        </tr>
                        <tr>
                            <td>Name :</td>
                            <td><input type="text" name="name" class="form-control" placeholder="Name"></td>
                        </tr>
                        <tr>
                            <td>Profile Picture:</td>
                            <td><input type="file" name="image" class="form-control-file"></td>
                        </tr>
                        <tr>
                            <td>Email Address :</td>
                            <td><input type="mail" name="email" class="form-control" placeholder="Email"></td>
                        </tr>
                        <tr>
                            <td>Phone No:</td>
                            <td><input type="text" name="phone_no" class="form-control" placeholder="Phone No"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <input type="reset" value="Reset" class="btn btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <br><br>
            <hr>
            <h4 class="text-center"> All Event Caterers Details</h4>

            <div class="container mt-5">
                <?php
                $db = mysqli_connect("localhost", "root", "", "event_planner");

                // Check if the connection was successful
                if (mysqli_connect_errno()) {
                    die("Database connection failed: " . mysqli_connect_error());
                }
                $query = "select * from caterer";
                $result = mysqli_query($db, $query);
                ?>
                <table class="table table-bordered mt-4">
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <!-- <th>Profile Picture</th> -->
                        <th>Email Address</th>
                        <th>Phone No</th>
                    </tr>
                    <?php
                    $rowNumber = 1;
                    // Use a foreach loop to iterate over the result and display each row
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php echo $rowNumber++; ?>
                            </td>
                            <td>
                                <?php echo $row["caterer_id"]; ?>
                            </td>
                            <td>
                                <?php echo $row["caterer_name"]; ?>
                            </td>
                            <!-- <td> -->

                            <!-- </td> -->
                            <td>
                                <?php echo $row["caterer_email"]; ?>
                            </td>
                            <td>
                                <?php echo $row["caterer_phone_no"]; ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>