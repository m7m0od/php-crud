<?php
require_once "inc/connection.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $query="DELETE FROM `postData` WHERE id = $id";
    $runQuery=mysqli_query($conn,$query);
    header("location:index.php");

}