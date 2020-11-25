<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="/css-global/style.css" type="text/css">
    <link rel="stylesheet" media="screen" href="/css-renock/style_renock.css" type="text/css">

    <!-- Titre -->
    <title>Renock</title>
</head>

<body>

    <!-- Header -->
    <?php include("header.php"); ?>

    <a href="/balisesTexte.php">
        <div class="RenBlock_Style">
            <div class="RenBlock_Small">
                <p>Les balises de texte</p><br>
            </div>
        </div>
    </a>
    <a href="/positionBloc.php">
        <div class="RenBlock_Style">
            <div class="RenBlock_Small">
                <p>Le positionnement des blocs</p><br>
            </div>
        </div>
    </a>
    <a href="/renockJouePHP.php">
        <div class="RenBlock_Style">
            <div class="RenBlock_Small">
                <p>Renock joue avec le php</p><br>
            </div>
        </div>
    </a>

    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>

</html>