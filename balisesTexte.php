<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Metas -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" media="screen" href="/css-global/style.css" type="text/css">
    <link rel="stylesheet" media="screen" href="/css-renock/style_renock.css" type="text/css">

    <!-- Titre -->
    <title>Les balises textes</title>

</head>

<body>

    <!-- Header -->
    <?php include("header.php"); ?>

        <ol>
            <div class="RenBlock_Style">
                <div class="RenBlock_Auto">
                    <li>Les titres</li>
                    <h1>Titre en H1</h1><br>
                    <h2>Titre en H2</h2><br>
                    <h3>Titre en H3</h3><br>
                    <h4>Titre en H4</h4><br>
                    <h5>Titre en H5</h5><br>
                    <h6>Titre en H6</h6>
                </div>
            </div>
            <div class="RenBlock_Style">
                <div class="RenBlock_Large">
                    <li>Le paragraphe</li>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
                        Eius, ex doloremque nemo explicabo obcaecati earum possimus<br> 
                        perspiciatis officiis, nisi molestias libero totam numquam<br> 
                        nobis natus iusto error? Perferendis, saepe quo.
                    </p>
                </div>
            </div>
            <div class="RenBlock_Style">
                <div class="RenBlock_Medium">
                    <li>La liste simple</li>
                    <ul>
                        <li>Fraise</li>
                        <li>Orange</li>
                        <li>Kiwi</li>
                    </ul>
                </div>
            </div>
            <div class="RenBlock_Style">
                <div class="RenBlock_Medium">
                    <li>La liste ordonnée</li>
                    <ol>
                        <li>Éplucher les fruits.</li>
                        <li>Couper les fruits en petits morceaux.</li>
                        <li>Placer les fruits coupés dans un grand plat.</li>
                        <li>Ajouter de la sangria et des glacons.</li>
                    </ol>
                </div>
            </div>
        </ol>

    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>

</html>