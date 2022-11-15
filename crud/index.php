<?php 
require_once "inc/header.php";
require_once "inc/connection.php";
$query="SELECT * FROM `postData` ";
$runQuery= mysqli_query($conn,$query);
$posts=mysqli_fetch_all($runQuery,MYSQLI_ASSOC);
?>


<div class="container">
    <div class="row">
        <?php foreach($posts as $post){?>
        <div class="col-md-6">
            <h1><?php echo $post['name'] ?> </h1>
            <a class="btn btn-info" href="seemore.php?id=<?php echo $post['id'] ?>">see more</a>
            <a class="btn btn-info" href="addpost.php">add Post</a>
            <a class="btn btn-info" href="update.php?id=<?php echo $post['id'] ?>">update</a>
            <a class="btn btn-info" href="delete.php?id=<?php echo $post['id'] ?>">delete</a>

        </div>
        <?php } ?>
    </div>
</div>
<?php 
require_once "inc/footer.php";
?>