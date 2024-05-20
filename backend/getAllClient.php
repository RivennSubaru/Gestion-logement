<?php
    $connexion = connexion();
    
    $req = $connexion -> query("SELECT * FROM client");

    function getNumbCli($req){
        $numb = 0;
        while($req -> fetch()){
            $numb++;
        }

        $req -> closeCursor();

        return $numb;
    }
?>