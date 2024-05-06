<?php
    include ("./connexion/connexion.php");
?>
<?php
    $connexion = connexion();
    
    if (isset($_GET['disponible']) && $_GET['disponible'] == 1) {
        // Si l'utilisateur choisi d'afficher seulement les logements disponibles
        $req = $connexion -> query("SELECT * FROM logement INNER JOIN image_logement ON logement.Num_log = image_logement.Num_log INNER JOIN cite ON logement.id_cite = cite.id_cite WHERE is_dispo = 1");

    } else {
        // Sinon afficher tout
        $req = $connexion -> query("SELECT * FROM logement INNER JOIN image_logement ON logement.Num_log = image_logement.Num_log INNER JOIN cite ON logement.id_cite = cite.id_cite");
        
    }

?>
