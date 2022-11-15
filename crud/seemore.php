<?php 

require_once "inc/connection.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}
$query="SELECT * FROM `postData` WHERE id = $id";
$runQuery= mysqli_query($conn,$query);
$post=mysqli_fetch_assoc($runQuery);

?>


<?php 

require_once "inc/header.php";

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1><?php echo $post['name'] ?> </h1>
            <p><?php echo $post['description'] ?> </p>
        </div>
    </div>
</div>


<?php 

require_once "inc/footer.php";

?>