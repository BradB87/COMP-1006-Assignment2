<?php require './inc/database.php';?>

<?php
$fname = $_POST['first name'];
$lname = $_POST['last name'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$password= $_POST['password'];
$confirm_password=$_POST['confirm password'];


class validate{  
     //empty validation
    public function checkEmpty($data, $fields)
    {
        $error = null;
        foreach ($fields as $value) {
            if (empty($data[$value])) {
                $error .= "<p>$value field is empty</p>";
            }
        }
        return $error;
    }

    // check for valid  first name format
    public function validFname($fname)
    {
        if (preg_match("/^[a-zA-z]*$/", $fname)) {
            return true;
            $errMsg="only numeric values allowed";
        
            
        }
        return false;
    }


    
    // check for valid last name format
    public function validLname($lname)
    {

        if (preg_match("/^[a-zA-z]*$/", $lname)) {
        $errMsg="Only letters allowed";
        }
        return false;
    }


    // check for valid last phone number format
    public function validPhone($phone)
    {
        if (preg_match("/^[0-9]*$/", $phone)) {
            $errMsg="only numeric values allowed";
            return true;
        }
        return false;
    }

    // check to see if email follows the email format
    public function validEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
}

 // Validate password strength
$password ='user-input-pass';
$uppercase = preg_match('@[A-Z]@', $password, $confirm_password);
$lowercase = preg_match('@[a-z]@', $password, $confirm_password);
$number= preg_match('@[0-9]@', $password, $confirm_password);
$spChars = preg_match('@[^\w]@', $password, $confirm_password);

if(!$uppercase || !$lowercase || !$number || !$spChars || strlen($password, $confirm_password) < 8) {
echo ' password should be at least eight characters in length, include one upper case,number, and special character';
}else{
    echo 'strong password.';

}
 
?>

<?php require './include/footer.php';?>

