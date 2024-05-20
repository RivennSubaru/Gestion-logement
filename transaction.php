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

</head>
<style>
    #active5 {
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

    #active5 i{
        color: #208dc0;
    }

    .table {
        margin: auto !important;
        margin-top: 2% !important;
        width: 75% !important;
    }
</style>
<body>
    <?php include("header.php") ?>
    
    <div class="align">
        <?php 
            include("nav.php");

            include("./connexion/connexion.php");

            include("./backend/getAllTransaction.php");

        ?>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Numéro de logement</th>
                    <th scope="col">Locataire</th>
                    <th scope="col">mode payment</th>
                    <th scope="col">montant</th>
                    <th scope="col">date du transaction</th>
                    <th scope="col">reste à payer</th>
                    <th scope="col">date_limite</th>
                </tr>
            </thead>
            <tbody><?php
                while($donnee = $req -> fetch()){
                    $date_actuelle = new DateTime();
                    $jours_avance = 7;

                    $date_limite_proche = $date_actuelle->modify("+{$jours_avance} days")->format('Y-m-d');
                    
                    ?>
                    <tr 
                        <?php
                            /* Colorer toute la ligne en orange si date limite est proche, rouge si date limite dépassé */

                            if ($donnee["reste_montant"] && $donnee['date_limit'] <= date('Y-m-d') && $donnee['reste_montant'] > 0) 
                                echo 'class="table-danger"';

                            else if($donnee['date_limit'] <= $date_limite_proche && $donnee["reste_montant"] > 0)
                                echo 'class="table-warning"';

                        ?>
                    >
                        <th scope="row"><?php echo $donnee["id_transaction"]; ?></td>
                        <td><?php echo $donnee["Num_log"]; ?></td>
                        <td><?php echo $donnee["Nom_cli"]; ?></td>
                        <td><?php echo $donnee["lib_modePay"]; ?></td>
                        <td><?php echo $donnee["montant"]. ' Ar' ?></td>
                        <td><?php echo $donnee["date_transaction"]; ?></td>
                        <td><?php
                                /* Ajouter '+pénalité' si la date limite est dépasser */

                                if ($donnee["reste_montant"] && $donnee['date_limit'] <= date('Y-m-d') && $donnee['reste_montant'] > 0) {
                                    echo $donnee["reste_montant"]. ' Ar'. '<br><span Style="color: orange">+pénalité</span>';

                                } else if(!$donnee["reste_montant"]){
                                    echo '';

                                } else {
                                    echo $donnee["reste_montant"]. ' Ar';

                                }
                            ?>
                        </td>
                        <td <?php
                                /* Colorer la date en rouge ou orange ou vert selon le cas */

                                if($donnee['date_limit'] <= date('Y-m-d') && $donnee['reste_montant'] > 0){
                                    echo 'Style= "color:red"';

                                } else if ($donnee['date_limit'] <= date('Y-m-d') && $donnee['reste_montant'] == 0) {
                                    echo 'Style= "color:green"';

                                } else if($donnee['date_limit'] <= $date_limite_proche && $donnee["reste_montant"] > 0){
                                    echo 'Style= "color:#ff7800"';
                                }
                            ?>
                        ><?php echo $donnee["date_limit"]; ?></td>
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