<header>
    <?php
        if (isset($page)) {
            if ($page == 'logement') {
                ?>
                    <form method="GET" action="./logement.php">
                        <label for="tri">Afficher: </label>
                        <div id="blocTri">
                            <select name="tri" id="tri">
                                <option value="tout" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'tout') echo 'selected'; ?>>Tout</option>
                                <option value="disponible" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'disponible') echo 'selected'; ?>>Disponible</option>
                                <option value="indisponible" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'indisponible') echo 'selected'; ?>>Indisponible</option>
                            </select>
                            <button type="submit"><i class="fa-solid fa-filter"></i></button>
                        </div>
                    </form>
                <?php
            } else if ($page == 'finance') {
                ?>
                    <form method="GET" action="finance.php">
                        <label for="tri">Trier par:</label>
                        <div id="blocTri">
                            <select name="tri" id="tri">
                                <option value="moisAnnee" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'moisAnnee') echo 'selected'; ?>>Revenu par mois par année</option>
                                <option value="annee" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'annee') echo 'selected'; ?>>Revenu par Année</option>
                                <option value="montantAsc" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'montantAsc') echo 'selected'; ?>>Montant (croissant)</option>
                                <option value="montantDesc" <?php if (isset($_GET['tri']) && $_GET['tri'] == 'montantDesc') echo 'selected'; ?>>Montant (décroissant)</option>
                            </select>
                            <button type="submit"><i class="fa-solid fa-filter"></i></button>
                        </div>
                    </form>
                <?php
            }
        } else {
            echo '';
        }
    ?>
</header>