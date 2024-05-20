<?php
    include ("../connexion/connexion.php");

    $numLog = (int) htmlspecialchars($_POST['numLog']);
    $numCli = (int) htmlspecialchars($_POST['IdClient']);
    $prixLog = (int) htmlspecialchars($_POST['prixLog']);
    $modePay = $_POST['modepay'] == 'espece' ? 1 : 2;
    $montant = (int) htmlspecialchars($_POST['montant']);
    $resteMontant = $modePay == 2 ? $prixLog - $montant : NULL;

    if ($modePay == 2) {
        $date = new DateTime();
        $date -> modify('+15 days');

        $dateLim = $date -> format('Y-m-d');
    } else {
        $dateLim = NULL;
    }


    $connexion = connexion();
    
    $req = $connexion -> prepare("INSERT INTO `transaction`(Num_log, id_client, id_modePay, montant, date_transaction, reste_montant, date_limit) 
                                VALUES(:numlog, :numcli, :modepay, :montant, NOW(), :reste, :datelim)");
    $req -> execute(array(
        'numlog' => $numLog,
        'numcli' => $numCli,
        'modepay' => $modePay,
        'montant' => $montant,
        'reste' => $resteMontant,
        'datelim' => $dateLim
    ));


    /* UPDATE */
    $req = $connexion -> prepare("UPDATE logement SET id_client = :numcli, is_dispo = 0 WHERE Num_log = :numlog");

    $req -> execute(array(
        'numcli' => $numCli,
        'numlog' => $numLog
    ));

    header('location: ../logement.php');
?>