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

    <div class="TextRenock">
        <ol>
            <li>Les titres</li>
            <h1>Titre en H1</h1>
            <h2>Titre en H2</h2>
            <h3>Titre en H3</h3>
            <h4>Titre en H4</h4>
            <h5>Titre en H5</h5>
            <h6>Titre en H6</h6>
    
            <li>Le paragraphe</li>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> 
                Eius, ex doloremque nemo explicabo obcaecati earum possimus<br> 
                perspiciatis officiis, nisi molestias libero totam numquam<br> 
                nobis natus iusto error? Perferendis, saepe quo.
            </p>
    
            <li>La liste simple</li>
            <ul>
                <li>Fraise</li>
                <li>Orange</li>
                <li>Kiwi</li>
            </ul>
            <br>
            <li>La liste ordonnée</li>
            <ol>
                <li>Éplucher les fruits.</li>
                <li>Couper les fruits en petits morceaux.</li>
                <li>Placer les fruits coupés dans un grand plat.</li>
                <li>Ajouter de la sangria et des glacons.</li>
            </ol>
        </ol>
    </div>

    <!-- Footer -->
    <?php include("footer.php"); ?>

</body>

</html>