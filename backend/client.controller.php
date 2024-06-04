<?php
    include ("../connexion/connexion.php");

    $client = htmlspecialchars($_GET['client']);

    $connexion = connexion();
    
    $req = $connexion -> prepare("DELETE FROM client WHERE id_client = :client ");
    $req -> execute(array(
        'client' => $client
    ));
?>