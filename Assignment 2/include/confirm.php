<?php
// hash the password given
$password = hash('sha512', $_POST['password']);
$confirm_password= hash('sha512', $_POST['confirm password']);

require 'database.php';


// validate given input choice to confirm its correct
$sql = "SELECT user_id FROM createUser WHERE email='$email' AND password ='$password'";
$sql = "SELECT id FROM personInfo WHERE email='$email' AND password ='$password' AND confirm_password='$confirm_password'";
?>



























































