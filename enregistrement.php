<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <?php include("header.php"); ?>
    <div class="align">
        <?php include("nav.php") ?>
        <div class="container">
            <h1>Location</h1>
            <div class="content">
            <h3>INFORMATION GENERALES</h3>
        <form id="LocationForm">
            
            <p>NOM</p>
            <input type="text" name="identifiant" id="">

            <p>ADDRESS</p>
            <input type="text" name="bien" id="">

            <p>E-MAIL</p>
            <input type="text" name="TLocation" id="">

            <p>TELEPHONE</p>
            <input type="text" name="DLocation" id="">
            <div class="valider">
            <p>
                <input type="submit" value="Valider">
            </p>
        </div>
        </form>
            </div>
        </div>
            
    </div>
</body>
</html>