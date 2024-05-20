<?php include './connexion/connexion.php'; $page = 'logement'; ?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- fontawesome -->
        <link rel="stylesheet" href="./Fonts/css/all.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- style perso -->
        <link rel="stylesheet" href="./style/navBar_Header.css">
    </head>

    <style>
        a#achat {
            background: #0066b4;
            border-color: #0066b4;
            font-size: small;
        }
        
        a#detail{
            font-size: small;
        }

        a#achat:hover {
            background-color: #007bff !important;
            border-color: #007bff !important;
        }

        .prix {
            width: fit-content;
            font-size: 1.5vw;
            font-weight: 600;
            color: #0066b4 !important;
        }

        .card-body {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: baseline;
        }

        .list-group .list-group-item i.fa-ruler-combined{
            margin-left: 15px;
        }

        #active1 {
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

        #active1 i{
            color: #208dc0;
        }

        .card-deck{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(315px, 1fr));
            gap: 1rem;
            margin-top: 48px;
            background: #f6f6ff;
            padding: 10px;
            border-radius: 5px;
            width: 83vw;
            margin-left: 5px;
        }
    </style>
    <body>
        <?php include("header.php"); ?>
        <div class="align">

            <?php include("nav.php") ?>

            <?php include 'tri_logement.php' ?>

        </div>        
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>