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
        form.locataire {
          padding: 48px 38px 38px 37px;
            width: 37%;
            margin: auto;
            margin-top: 5%;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px #b6b6b6;
        }

        .form-row, .row {
            justify-content: center !important;
        }

        select#IdClient:hover {
            cursor: pointer;
        }

        #active2 {
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
        #active2 i{
            color: #208dc0;
        }
    </Style>
      
  </head>
    <body>
      <?php include("../header.php"); ?>

      <div class="align">
        <?php include("./nav.php") ?>

        <!-- Condition si c'est une modification ou une première insertion -->
        <?php 
        if(isset($_GET['option'])) {
          include("../backend/selectClientSpecified.php");

          $donnees = $req -> fetch();
        }
        ?>

        <form class="locataire" <?php if(!isset($_GET['option'])) echo 'action="../backend/setClient.php"'; else echo 'action="../backend/setClient.php?option=modify&id=' .$donnees["id_client"]. '"' ?> method="post">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="nomCli">Nom</label>
              <input type="text" name="nomCli" id="nomCli" class="form-control" placeholder="Le nom du nouveau locataire" aria-describedby="helpId" pattern="[A-Z a-zÀ-ÿ]+" required value="<?php if (isset($_GET['option'])) echo $donnees['Nom_cli']; else ""; ?>">
                                                                                                                                                                                            <!-- le value c'est pour le cas de modifiction -->
            </div>
            <div class="col-md-8 mb-3">
              <label for="prenomCli">Prénom</label>
              <input type="text" name="prenomCli" id="prenomCli" class="form-control" placeholder="Prénom du client" aria-describedby="helpId" pattern="[A-Z a-zÀ-ÿ]+" required value="<?php if (isset($_GET['option'])) echo $donnees['prenom_cli']; else ""; ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="mail">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                  </div>
                  <input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelpId" placeholder="exemple@gmail.com" value="<?php if (isset($_GET['option'])) echo $donnees['email']; else ""; ?>">
                </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="metier">Métier</label>
              <input type="text" name="metier" id="metier" class="form-control" aria-describedby="helpId" pattern="[A-Z a-zÀ-ÿ]+" required value="<?php if (isset($_GET['option'])) echo $donnees['metier']; else ""; ?>">
            </div>
            <div class="form-group col-md-4">
              <label for="tel">Téléphone</label>
              <input type="text" name="tel" id="tel" class="form-control" placeholder="032/034/038/033" aria-describedby="helpId" pattern="^(03[2-48])[.\-_ ]?([0-9]{2})[.\-_ ]?([0-9]{3})[.\-_ ]?([0-9]{2})$" required value="<?php if (isset($_GET['option'])) echo $donnees['telephone']; else ""; ?>">
              <small id="helpId" class="text-muted" style= "display: none">Help text</small>
            </div>
          </div>
          <button type="submit" class="btn btn-primary"><?php if (isset($_GET['option'])) echo "Modifier"; else echo "Enregistrer"; ?></button>
        </form>
        

      </div>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../bootstrap/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="../bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>