<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Login</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/icon2.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">

</head>
<body>

    <div class="container">

        <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login</h2>

                <form action="validation.php" method="post">

                    <div class="form-group">
                        <label>Username</label><br>
                        <input type="text" name="user" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="password" name="password" class="form-control" required><br>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>


                <div class="col-md-6 login-right">
                    <h2>Register</h2>

                    <form action="registration.php" method="post">

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required><br>
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
</div>


</body>
</html>