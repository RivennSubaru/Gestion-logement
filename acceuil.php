<?php 
    include ('./connexion/connexion.php');

    include ('./backend/getCreditTransaction.php');
    $late = getNumbLate($req);

    include ('./backend/getAllLogement.php');
    $nombreLog = getNumbLog($connexion);
    $nombreLogVendu = getNumbLogVendu($connexion);

    include ('./backend/getAllClient.php');
    $nombreCli = getNumbCli($req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logement</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./Fonts/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- style perso -->
    <link rel="stylesheet" href="./style/navBar_Header.css">
    <link rel="stylesheet" href="style/acceuil.css">

</head>
<style>
    a:hover {
        color: initial !important;
        text-decoration: none !important;
    }
    .stat {
        font-size: 5vh;
        height: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 85px;
    }

    .stat span {
        font-weight: bold;
        font-size: 6vh;
        color: #3f3f3f;
    }

    .stat i {
        color: gray;
    }

    h1 i {
        font-size: smaller;
    }

    .content {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }

    .lienRapide div {
        display: flex;
        width: 60px;
        height: 60px;
        text-align: center;
        align-items: center;
        justify-content: center;
        color: #4a4a4a;
    }

    .lienRapide {
        font-size: 3vw;
        border: 7px solid #8bccff;
        border-radius: 50%;
        padding: 20px 20px;
    }

    a.lienRapide:hover {
        box-shadow: 0 0 5px 0px;
    }

    .lienRapide.plus {
        border-color: #53ff53;
    }

    .lienRapide.moins {
        border-color: #ff5454;
    }
</style>
<body>
    <?php include("header.php") ?>
    
    <div class="align">
        <?php include("nav.php") ?>
        <div class="container">
            <h1><i class="fa-solid fa-desktop"></i> Bureau</h1>
            <div class="content">
                <a class="lienRapide" href="./logement"><div><i class="fa-solid fa-house"></i></div></a>
                <a class="lienRapide" href="./locataire"><div><i class="fa-solid fa-user-group"></i></div></a>
                <a class="lienRapide" href="./logement"><div><i class="fa-solid fa-key"></i></div></a>
                <a class="lienRapide plus" href=""><div><i class="fa-solid fa-plus"></i></div></a>
                <a class="lienRapide moins" href=""><div><i class="fa-solid fa-minus"></i></div></a>
            </div>
            <div class="content_1">
                <div class="sous_content">
                    <div class="sous_content1">
                        <h3>BIENS</h3>
                        <div class="stat"><i class="fa-solid fa-house"></i> <span><?php echo $nombreLog ?></span></div>
                    </div>
                    <div class="sous_content1">
                        <h3>LOCATAIRES</h3>
                        <div class="stat"><i class="fa-solid fa-user-group"></i> <span><?php echo $nombreCli ?></span></div>
                    </div>
                    <div class="sous_content1">
                        <h3>VENDU</h3>
                        <div class="stat"><i class="fa-solid fa-key"></i> <span><?php echo $nombreLogVendu ?></span></div>
                    </div>
                </div>
                <div class="contenue"><?php echo $late. ' payements en retard' ?> <a href="./transaction.php">Voir <i class="fa-solid fa-chevron-right"></i></a></div>
            </div>
        </div>


        </div>
    </div>

    
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>