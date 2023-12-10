<?php
require './include/header.php';
require './index.php';
?>
<?php
// start session
 session_start();
 // remove variables
 session_unset();

// end session
session_destroy();

// send back to index 
header('Location:index.php');






