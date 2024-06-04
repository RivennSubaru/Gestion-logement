<?php
    include ("../connexion/connexion.php");

    $connexion = connexion();

    $client = htmlspecialchars($_GET['client']);

    $req = $connexion -> prepare("SELECT * FROM client WHERE id_client = :client ");
    $req -> execute(array(
        'client' => $client
    ));

?>