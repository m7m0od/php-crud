<?php 
session_start();
require_once "../inc/connection.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $desc=$_POST['postDesc'];
    $submit=$_POST['submit'];

    $errors=[];

    if(empty($name))
    {
        $errors[]="username is required";
    }elseif (is_numeric($name)) {
        $errors[]="username is not valid";
    }elseif (strlen($name)<5) {
        $errors[]="name must be more than 5 chars.";
    }

    if(empty($desc))
    {
        $errors[]="username is required";
    }elseif (is_numeric($desc)) {
        $errors[]="username is not valid";
    }elseif (strlen($desc)<5) {
        $errors[]="name must be more than 5 chars.";
    }

    if(empty($errors))
    {
        $query="INSERT INTO `postData` (`name`,`description`) VALUES ('$name','$desc')";
        $runQuery=mysqli_query($conn,$query);
        header("location:../index.php");

    }
    else{
        $_SESSION['errors']=$errors;
        header("location:../addpost.php");
    }
}


?>