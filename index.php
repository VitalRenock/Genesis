<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/includeMetaCSS.php"); ?>
        <?php include("includes/connectDB.php"); ?>
        <title>Genesis</title>

    </head>

    <body>

        <?php include("includes/header.php"); ?>
        
        <?php
            $essaiName = $dbh->query("SELECT lastname FROM users WHERE id = 1");
            var_dump($essaiName);
        ?>

        <br>
        <p class="lorem">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sapiente vitae corporis tempore nostrum? Facilis blanditiis eveniet reprehenderit, ratione voluptate modi enim itaque adipisci quasi atque minima temporibus vel nemo.
        </p>
        <br>
        <a href="http://localhost/phpmyadmin/">Vers phpMyAdmin =></a>

        <?php include("includes/footer.php"); ?>

    </body>

</html>