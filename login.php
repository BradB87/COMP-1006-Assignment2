<?php
require('./include/header.php');
?>
<main>
    <section class="signIn">
        <div class="col align-self-center">
            <h3>sign in!</h3>
            <p>Sign in below</p>
            <form method="post" action="./include/display_customer.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="email" required > 
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" placeholder="password" required>
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
</main>
<?php

?>
<?php
$email = $_POST['email'];
$password = $_POST['password'];

// validate email and password then hash
$pass = true;

if (empty($email)) {
	echo '<p>email is needed</p>';
	$pass = false;
}

if ((empty($password)) || ($password != $confirm)) {
	echo '<p> Password is invalid</P>';
    $pass= false;
}
// hash password
if ($pass) {
	$password = hash('sha512', $password);

}
?>
<section class="row success-back-row">
	<div>
		<p>click the button to head to the sign in page</p>
		<a href="login.php" class="btn btn-primary">Sign In</a>
	</div>
</section>










