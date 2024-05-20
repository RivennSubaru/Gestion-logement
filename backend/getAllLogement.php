<?php
    $connexion = connexion();
    
    if (isset($_GET['disponible']) && $_GET['disponible'] == 1) {
        // Si l'utilisateur choisi d'afficher seulement les logements disponibles
        $req = $connexion -> query("SELECT * FROM logement LEFT JOIN image_logement ON logement.Num_log = image_logement.Num_log LEFT JOIN cite ON logement.id_cite = cite.id_cite WHERE is_dispo = 1");

    } else {
        // Sinon afficher tout
        $req = $connexion -> query("SELECT * FROM logement LEFT JOIN image_logement ON logement.Num_log = image_logement.Num_log LEFT JOIN cite ON logement.id_cite = cite.id_cite");
    }

    function getNumbLog($connexion){
        $req = $connexion -> query("SELECT COUNT(*) AS nb FROM logement");
        $donnee = $req -> fetch();

        $req -> closeCursor();

        return $donnee['nb'];
    }

    function getNumbLogVendu($connexion){
        $req = $connexion -> query("SELECT COUNT(*) AS nb FROM logement WHERE is_dispo = 0 ");
        $donnee = $req -> fetch();

        $req -> closeCursor();

        return $donnee['nb'];
    }
?>
