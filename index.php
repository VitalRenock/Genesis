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
        $mysqli = connectDB();

        $sql = "SELECT id, name, lastname FROM users";

            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
            }
            } else {
            echo "0 results";
            }

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