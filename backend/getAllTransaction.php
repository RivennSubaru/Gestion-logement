<?php
    $connexion = connexion();
    
    $req = $connexion -> query("SELECT id_transaction, Num_log, Nom_cli, lib_modePay, montant, date_transaction, reste_montant, date_limit FROM `transaction` LEFT JOIN client ON transaction.id_client = client.id_client LEFT JOIN mode_payement ON transaction.id_modePay = mode_payement.id_modePay;");
?>