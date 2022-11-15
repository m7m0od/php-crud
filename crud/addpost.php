<?php 
session_start();
require_once "inc/header.php";

?>

<div class="container"> 
    <?php if(isset($_SESSION['errors'])) { ?>
    <div class="alert alert-danger w-25">
        <?php foreach($_SESSION['errors'] as $error){ ?>
            <P><?php echo $error ?> </p>
    <?php } unset($_SESSION['errors']); ?> 
    </div>
    <?php } ?> 


    <form action="handlers/addpostHandle.php" method="post">

        <div class="form-group">
            <label>Product Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label>Product Desc:</label>
            <textarea  name="postDesc" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-info mt-3 float-right">Add Product</button>
        <div class="clr"></div>
    </form>
</div>

<?php 

require_once "inc/footer.php";

?>