<?php
    include ('./backend/getAllLogement.php');

    // Récupérer l'option de tri sélectionnée
    $tri = isset($_GET['tri']) ? $_GET['tri'] : 'tout';

    // Récupérer les résultats en fonction de l'option de tri
    switch ($tri) {
        case 'tout':
            $req = afficheTout($connexion);
            break;
        case 'disponible':
            $req = afficheDispo($connexion);
            break;
        case 'indisponible':
            $req = afficheIndispo($connexion);
            break;
        default:
            $req = afficheTout($connexion);
    }

    // Afficher les résultats
    $results = $req->fetchAll(PDO::FETCH_ASSOC);

    if (count($results) > 0) {?>

    <div class="card_container">
        <div class="card-deck"><?php
        foreach ($results as $donnee) {?>
            <!-- AFFICHER LES LOGEMENTS -->
                <div class="card">
                    <!-- Image du logement Mettre le chemin de l'image dans src -->
                    <img class="card-img-top" src="<?php echo $donnee['chemin_image'] ?>" alt="image maison">

                    <!-- Nombre de piece et surface -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="background: #0066b4;color: white;">
                            <i class="fa-solid fa-door-closed"></i> <?php echo $donnee['nombre_piece'] ?> pièce(s)      
                            <i class="fa-solid fa-ruler-combined"></i> <?php echo $donnee['surface'] ?>
                        </li>
                    </ul>

                    <!-- Corps de la carte -->
                    <div class="card-body" style="position: relative;">
                        <div class="card-body-text">
                            <h4 class="card-title">Logement <?php echo $donnee['Num_log'] ?></h4>
                            <p class="card-text">Cite: <?php echo $donnee['Lib_cite'] ?></p>
                            <?php
                                if ($donnee['is_dispo']) {?>
                                    <!-- Affiche dispo en vert si logement disponible -->
                                    <span class="dispo" style="color: green;">Disponible</span><?php

                                } else {?>
                                    <!-- Affiche indispo en rouge si indisponible -->
                                    <span class="dispo" style="color: red;">Indisponible</span><?php

                                }
                            ?>
                        </div>

                        <!-- Prix en position absolue et vers la droite -->
                        <div class="prix"><?php echo $donnee['prix_log'] ?> Ar</div>
                    </div>

                    <!-- Liens vers le detail et formulaire de transaction -->
                    <div class="card-footer">
                        <a name="detail" id="detail" class="btn btn-outline-info" href="#?logement= <?php echo $donnee['Num_log'] ?>" role="button">Detail</a>
                        <?php
                        if ($donnee['is_dispo']) {
                            ?>
                            <a name="achat" id="achat" class="btn btn-primary" href="./formulaire/form-transaction.php?logement= <?php echo $donnee['Num_log'] ?>&prix= <?php echo $donnee['prix_log'] ?>" role="button" style="background: #0066b4;border-color: #0066b4;">Procéder au payement</a>
                            <?php
                        }?>
                    </div>
                </div>
            <?php
        }?>
        </div>
    </div><?php
    
    } else {
        echo 'Aucun résultat trouvé.';
    }

    $req->closeCursor();
?>