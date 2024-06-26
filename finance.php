<?php include './connexion/connexion.php'; $page = 'finance'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="./Fonts/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- style perso -->
    <link rel="stylesheet" href="./style/navBar_Header.css">

    <!-- tri -->
    <link rel="stylesheet" href="./style/tri.css">

</head>
<style>
    #active6 {
        background-color: white !important;
        &::before {
            position: absolute !important;
            content: "" !important;
            padding-right: 0 !important;
            left: 0px !important;
            width: 6px !important;
            height: 26px !important;
            background: #208dc0 !important;
            transform: scaleY(1.9) !important;
            align-items: center !important;
        }
    }

    #active6 i{
        color: #208dc0;
    }

    .table {
        margin: auto !important;
        margin-top: 2% !important;
        margin-bottom: 75px !important;
        width: 75% !important;
    }

    .align div h2 {
        padding-left: 20px;
    }

    .align div {
        width: 100%;
        margin-top: 25px;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div class="align">

        <?php include 'nav.php' ?>

        <?php include 'tri_finance.php' ?>

    </div>
    
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>