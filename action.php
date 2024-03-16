<?php include("connection.php");?>

<?php

if (isset($_POST["submit"])){
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirm_password'];

$signup_query = "INSERT INTO `akucodersignup`( `username`, `email`, `password`, `confirm_password`) 
VALUES ('$username','$email','$password','$confirmpassword')";

$query_response = mysqli_query($response , $signup_query);

if($query_response){
    setcookie('signup_success','signup done',time() + 10,"/");
                    header('location:index.html');
        
    }else{
        echo "please enter correct detail ";
    }

}

?>