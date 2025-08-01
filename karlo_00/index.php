<?php
if (!isset($_SESSION['IE_empno'])){
    // header("location: login.php");
    
}
?>


<!doctype html>
<html>
<head>
 <?php include "includes/head.php";  ?>
</head>

<body>
    <div class="wrapper">
    <?php 
        $folder_name = "";
         include("includes/sidebar_shipping.php"); 
        include("includes/topnav.php"); ?>
       
    <div class="main-panel">
        <?php include("controller/" . getFileName());
        // include("includes/footer.php");

        ?>
   </div>

<?php include("includes/scripts.php"); ?>   
   </div>
</body>

</html>