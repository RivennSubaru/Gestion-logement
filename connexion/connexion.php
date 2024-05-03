<?php
    function connexion()
    {
        $host = "localhost";
        $DB = "gestionLogement";
        $user = "root";
        $pass = "";
        try {
            $connexion = new PDO("mysql:host=$host; dbname=$DB", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        } catch (Exception $e) {
            die("Erreur: " .$e -> getMessage());
        }

        return $connexion;
    }
?>