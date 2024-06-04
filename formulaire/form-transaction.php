<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- fontawesome -->
        <link rel="stylesheet" href="../Fonts/css/all.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- style perso -->
        <link rel="stylesheet" href="../style/navBar_Header.css">
        
        <Style>
            form.transaction {
                padding: 48px 0 38px 0;
                width: 37%;
                margin: auto;
                margin-top: 5%;
                border-radius: 10px;
                box-shadow: 0px 0px 20px 0px #b6b6b6;
            }

            input#modepay {
                cursor: pointer;
            }

            .form-row, .row {
                justify-content: center !important;
            }

            select#IdClient:hover {
                cursor: pointer;
            }

            #active4 {
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

            #active4 i{
                color: #208dc0;
            }
        </Style>
    </head>
    <body>
        <?php include("../header.php"); ?>

        <div class="align">

            <!-- Navigateur -->
            <?php include("./nav.php") ?>

            <?php
                
                
                if(!(isset($_GET['logement']) && isset($_GET['prix']))){
                    /* Si le logement à acheter n'est pas spécifier */
                    ?>

                    <p>no data...(Vous devez spécifier le logement à acheter depuis la liste des logements)</p>
                    <?php
                } else {
                    
                    $numLog = $_GET['logement'];
                    $prixLog = $_GET['prix'];

                    include ("../connexion/connexion.php");

                    $connexion = connexion();
                    
                    $req = $connexion -> query("SELECT * FROM client");?>

                    <form class="transaction" action="../backend/setTransaction.php" method="post">
                        <input type="number" name="numLog" id="numLog" class="form-control"  value=<?php echo $numLog ?> style="display: none">
                        <input type="number" name="prixLog" id="prixLog" class="form-control" value=<?php echo $prixLog ?> style="display: none">

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numLog">Numéro logement</label>
                                <input type="number" name="numLog" id="numLog" class="form-control"  value=<?php echo $numLog ?> disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="prixLog">Prix (Ariary)</label>
                                <input type="number" name="prixLog" id="prixLog" class="form-control" value=<?php echo $prixLog ?> disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="IdClient">Locataire</label>
                                <select class="form-control" name="IdClient" id="IdClient">
                                    <?php
                                        while ($donnee = $req -> fetch()) {
                                            ?>
                                            <option value= <?php echo $donnee['id_client'] ?> ><?php echo $donnee['Nom_cli']. ' ' .$donnee['prenom_cli'] ?> </option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="montant">Montant payé (en Ariary)</label>
                                <input type="number" name="montant" id="montant" class="form-control" placeholder="montant payé">
                            </div>
                        </div>
                        <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-6 pt-0">Mode de payement</legend>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="modepay" id="modepay" value="espece" checked>
                                            <label class="form-check-label">espèce</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="modepay" id="modepay" value="credit">
                                            <label class="form-check-label">crédit</label>
                                        </div>
                                    </div>
                                </div>
                        </fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </div>
                    </form><?php
                }
            ?>
            
        </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>