<?php


//user input
$email = $_POST['email'];
$password = hash('sha512', $_POST['password']);

// connect to db
require('./include/database.php');

// run query
$sql = "SELECT id FROM personInfo  WHERE email = '$email' AND password= '$password'";
$result = $conn->query($sql);

$count = $result->countRow();

// check to see if email follows the email format
function validEmail($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}
	return false;
}
//check for matches
if ($count == 1) {
    echo '<p> logged in</P>';
    foreach ($result as $row) {
        session_start();
        $_SESSION['user_id'] = $row['id'];
        header('location: ../display_customer.php');
    }
} else {
    echo '<p> failed to login </P>';
}
$conn = null;
?>