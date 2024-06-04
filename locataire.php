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

</head>
<style>
    #active3 {
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

    #active3 i{
        color: #208dc0;
    }

    .table {
        margin: auto !important;
        margin-top: 2% !important;
        width: 75% !important;
    }
</style>
<body>
    <?php include("header.php"); ?>
    <div class="align">
        <?php 
        include("nav.php");

        if (isset($_GET["new"])) {
            echo $_GET["new"];
        }

        include ("./connexion/connexion.php");
        
        include ("./backend/getAllClient.php");
        ?>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénoms</th>
                    <th scope="col">metier</th>
                    <th scope="col">email</th>
                    <th scope="col">téléphone</th>
                    <th scope="col">gèrer</th>
                </tr>
            </thead>
            <tbody><?php
                while($donnee = $req -> fetch()){?>
                    <tr>
                        <th scope="row"><?php echo $donnee["id_client"]; ?></td>
                        <td><?php echo $donnee["Nom_cli"]; ?></td>
                        <td><?php echo $donnee["prenom_cli"]; ?></td>
                        <td><?php echo $donnee["metier"]; ?></td>
                        <td><?php echo $donnee["email"]; ?></td>
                        <td><?php echo $donnee["telephone"]; ?></td>
                        <td>
                            <a name="modify" id="modify" class="btn btn-warning" href="./formulaire/form-locataire.php?client=<?php echo $donnee["id_client"]; ?>&option=modify" role="button">Modifier</a>
                            <a name="delete" id="delete" class="btn btn-danger" href="./backend/client.controller.php?client=<?php echo $donnee["id_client"]; ?>" role="button">Supprimer</a>
                        </td>
                    </tr><?php
                }?>
            </tbody>
        </table>

        <?php $req -> closeCursor(); ?>
    </div>
    
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>