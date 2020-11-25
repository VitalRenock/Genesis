<?php
    $user = 'root';
    $password = '';
    $dbh = new PDO('mysql:host=localhost;dbname=genesisDB', $user, $password);
?>

<?php
/*     function connectDB(){
        $host = '127.0.0.1';
        $user = 'root';
        $password = '';
        $database = 'genesisdb';
        $port = 3306;

        $mysqli = mysqli_connect($host, $user, $password, $database, $port);
        if (mysqli_connect_errno()) {
            echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
        }
        return $mysqli;
    } */
?>