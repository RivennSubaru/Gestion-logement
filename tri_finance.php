<?php 
    include("./backend/revenu.php");

    // Récupérer l'option de tri sélectionnée
    $tri = isset($_GET['tri']) ? $_GET['tri'] : 'moisAnnee';

    // Récupérer les résultats en fonction de l'option de tri
    switch ($tri) {
        case 'moisAnnee':
            $req = revenuMois($connexion);
            break;
        case 'annee':
            $req = revenuAnnee($connexion);
            break;
        case 'montantAsc':
            $req = moisMontantAsc($connexion);
            break;
        case 'montantDesc':
            $req = moisMontantDesc($connexion);
            break;
        
        default:
            $req = revenuMois($connexion);
    }

    // Afficher les résultats
    $results = $req->fetchAll(PDO::FETCH_ASSOC);

    // Tableau des noms des mois
    $moisNoms = [
        1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril', 
        5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 
        9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
    ];

    if (count($results) > 0) {
        $anneeActu = null;

        echo '<div>';

        foreach ($results as $donnee) {
            if (isset($donnee['annee']) && $anneeActu != $donnee['annee']) {
                if ($anneeActu !== null) {
                    echo '</table>';
                }

                $anneeActu = $donnee['annee'];
                echo "<h2>Année {$anneeActu}</h2>";
                echo '<table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Mois</th>
                                <th scope="col">Total revenu</th>
                            </tr>
                        </thead>';
            }

            $mois = isset($donnee['mois']) ? $moisNoms[$donnee['mois']] : '';
            $total = $donnee['total_revenus'];

            echo "<tbody>
                    <tr>
                        <td>{$mois}</td>
                        <td>{$total} Ar</td>
                    </tr>
                </tbody>";
        }

        echo "</table>";
        echo "</div>";
    } else {
        echo 'Aucun résultat trouvé.';
    }

    $req->closeCursor();
?>