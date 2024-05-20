<?php
    $connexion = connexion();
    
    $req = $connexion -> query("SELECT * FROM `transaction` WHERE id_modePay = 2");

    function getNumbLate($req){
        $late = 0;
        while ($donnee = $req -> fetch()) {
            if ($donnee['date_limit'] <= date('Y-m-d') && $donnee['reste_montant'] > 0) {
                $late++;
            }
        }

        $req -> closeCursor();

        return $late;
    }
?>