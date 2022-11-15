<?php 
$conn=mysqli_connect("localhost","root","","posts");
/*header("Access-Control-Allow-Orgin: *");
header("Content-Type:Application/json;charset=UTF-8"); */

if(!$conn)
{
    die("connection failed ".mysqli_connect_error());
}
?>