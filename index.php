<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
    <!--bootstrap--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!---stylesheets--->
    <link href="./css/index.css" rel="stylesheet">
</head>

<body>

    <? require('header.php');
    ?>

    <main>
        <section id="greeting">
            <div>
                <h1>Don't have an account, Fill out form below to register!</h1>
            </div>
        </section>
        <section class="form-row">
            <div class="col-sm-12-col-md-2-col-lg-2">
                <form class="form1" method="post" action="./saveAdm.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name:</label></br>
                        <input type="text" class="form-control" id="fname">
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name:</label></br>
                        <input type="text" class="form-control" id="lname">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label></br>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label></br>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label></br>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label></br>
                        <input type="password" class="form-control" id="confirm_password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </section>
        <section class="secondary-form">
            <div class="col-sm-12-col-md-6-col-lg-6">
                <h3>If you have an account with us, please sign in below:</h3>
                <form class="form2" method="post" action="./include/confirm.php">
                    <p><input class="form-control" name="email" type="email" placeholder="email" required /></p>
                    <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                    <input class="btn btn-primary" type="submit" value="Login" />
                </form>
            </div>
        </section>
    </main>

</body>


</html>