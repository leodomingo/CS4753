<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mysql");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$user_name = mysqli_real_escape_string($link, $_REQUEST['username']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zip = mysqli_real_escape_string($link, $_REQUEST['zip']);
$insta_user_name = mysqli_real_escape_string($link, $_REQUEST['insta_username']);
$insta_password = mysqli_real_escape_string($link, $_REQUEST['insta_pass']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$hashed_insta_password = password_hash($insta_password, PASSWORD_DEFAULT);
// attempt insert query execution
$sql = "INSERT INTO instaplan_users (first_name, last_name, email,user_name,city,state,address, zip,insta_user_name,insta_password) 
VALUES ('$first_name', '$last_name', '$email', '$user_name', '$city','$state','$address','$zip','$insta_user_name','$hashed_insta_password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    $success= "success";
    header('Location: index.php');
} else{
    $error = mysqli_error($link);
    $pos = strpos($error, "Duplicate");
    $usererror = strpos($error, "user_name");
    $emailerror = strpos($error, "email");
    if($pos !== false){
        if($usererror !== false){
            $error = "dup_user";
        }
        else{
            $error = "dup_email";
        }
        header('Location: new_user.php?error='.$error);
    }
    echo $error;
}

 
// close connection
mysqli_close($link);
?>