<?php
require('./include/database.php');

// make variables
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// check to see if fields are empty
$pass = true;
require './include/header.php';
if (empty($fname)) {
	echo '<p>first name is needed</p>';
	$pass = false;
}

if (empty($lname)) {
	echo '<p> last name is invalid</P>';
	$pass = false;
}
if (empty($phone)) {
	echo '<p> phone number is invalid</P>';
	$pass = false;
}

if (empty($email)) {
	echo '<p> email is invalid</P>';
	$pass = false;
}
if ((empty($password)) || ($password != $confirm_password)) {
	echo '<p> password is not correct</P>';
	$pass = false;
}

if ($confirm_password != $password) {
	echo '<p> passwords must match</P>';
}


// save admin //hash password
if ($pass) {
	$password = hash('sha512', $password);

	//sql
	$sql = "INSERT INTO createUser(fname, lname, phone, email, password, confirm_password) VALUES ('$fname', '$lname', '$phone', '$email', '$password');";
}
$conn->execute_query($sql);
echo 'section class="success row';
echo '<div>';
echo '<h3> admin saved</h3>';
echo '</div>';
echo '</section>';
//dis
$conn = null;
// check for valid first name
function validFname($fname)
{
	if (preg_match("/^[a-zA-z]*$/", $fname)) {
		return true;
	}
	return false;
}
// check for valid last name format
function validLname($lname)
{
	if (preg_match("/^[a-zA-z]*$/", $lname)) {
		return true;
	}
	return false;
}
// check for valid last phone number format
function validPhone($phone)
{
	if (preg_match("/^[a-zA-z]*$/", $phone)) {
		return true;
	}
	return false;
}
// check to see if email follows the email format
function validEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}
	return false;
}
