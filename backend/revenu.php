<?php
    $connexion = connexion();
    
    function revenuMois($connexion){
        $req = $connexion -> query('SELECT YEAR(date_transaction) AS annee, MONTH(date_transaction) AS mois, SUM(montant) AS total_revenus FROM transaction GROUP BY annee, mois ORDER BY annee, mois');

        return $req;
    }

    function revenuAnnee($connexion){
        $req = $connexion -> query('SELECT YEAR(date_transaction) AS annee, SUM(montant) AS total_revenus FROM transaction GROUP BY annee ORDER BY annee');

        return $req;
    }

    function moisMontantAsc($connexion){
        $req = $connexion -> query('SELECT YEAR(date_transaction) AS annee, MONTH(date_transaction) AS mois, SUM(montant) AS total_revenus FROM transaction GROUP BY annee, mois ORDER BY total_revenus;');

        return $req;
    }

    function moisMontantDesc($connexion){
        $req = $connexion -> query('SELECT YEAR(date_transaction) AS annee, MONTH(date_transaction) AS mois, SUM(montant) AS total_revenus FROM transaction GROUP BY annee, mois ORDER BY total_revenus DESC;');

        return $req;
    }
?>