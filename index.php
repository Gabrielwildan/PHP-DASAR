<?php
    require_once "content.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $titel ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="startbootstrap-blog-home-gh-pages/css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
            <?php
            require_once "pages/nav.php";
            ?>

        <!-- page header -->
            <?php
            require_once "pages/header.php";
            ?>  

        <!-- Page content-->
            <?php
            require_once "pages/container.php";
            ?>

        <!-- footer -->
            <?php
            require_once "pages/footer.php";
            ?>

        
        
       
    </body>
</html>
