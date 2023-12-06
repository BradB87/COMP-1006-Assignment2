<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link href="./css/index.css" rel="stylesheet"
</head>

<body>

    <? require('./include/header.php')
    ?>

    <main>
        <section id="greeting">
            <div>
                <h1>Don't have an account, Fill out form below to register!</h1>
            </div>
        </section>
        <section class="form-row">
            <div class="col-sm-12 col-md-2 col-lg-2">
                <form method="post" action="registerSave.php">
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

    </main>
</body>
<?php require('./include/footer.php') ?>

</html>