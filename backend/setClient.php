<?php
    include ("../connexion/connexion.php");

    $nom = htmlspecialchars($_POST['nomCli']);
    $prenom = htmlspecialchars($_POST['prenomCli']);
    $mail = htmlspecialchars($_POST['mail']);
    $metier = htmlspecialchars($_POST['metier']);
    $tel = htmlspecialchars($_POST['tel']);

    $connexion = connexion();

    if (!isset($_GET['option'])) {
        $req = $connexion -> prepare("INSERT INTO client(Nom_cli, prenom_cli, metier, email, telephone) VALUES (:nom, :prenom, :metier, :mail, :tel)");
        $req -> execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'metier' => $metier,
            'mail' => $mail,
            'tel' => $tel
        ));   
    } else {
        $idClient = $_GET['id'];
        $req = $connexion -> prepare("UPDATE client SET Nom_cli = :nom, prenom_cli = :prenom, metier = :metier, email = :mail, telephone = :tel WHERE id_client = :idClient");
        $req -> execute(array(
            'nom' => $nom,
            'prenom' => $prenom,
            'metier' => $metier,
            'mail' => $mail,
            'tel' => $tel,
            'idClient' => $idClient
        ));  
    }

    header('location: ../formulaire/form-locataire.php');
?>