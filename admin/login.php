<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTO Admin Panel Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>

<body class="login-bg">

    <div class="container mt-5 pt-5 center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-head text-center">
                        <div class="justify-content-center">
                            <img src="assets/logo.png" class="img-fluid img-thumbnail rounded" alt="logo"
                                style="height: 250px; width: 450px;">
                        </div>
                        EVENTO Admin Panel Login
                    </div>
                    <div class="card-body">
                        <form method="POST" action="login_process.php">
                            <div class="mb-3">
                                <label for="username" class="form-label log">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label log">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary log-btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>