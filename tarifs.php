<?php

$dsn = 'mysql:host=localhost;dbname=equiadapt';
$user = 'root';
$pass = '';
$pdo = new PDO($dsn, $user, $pass);
//requêter les informations sur la table "services":
$sql = "SELECT * FROM services";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//afficher sous la forme d'un tableau html les résultats:
?>
<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
include 'container_navbar.php';
?>


<body>
    <div class="container">
        <div class="rectangle_orange">
            <div class="accroche">Tarifs et séjours adaptés</div>
        </div>
        <div class="rectangle_bordeaux_tarifs">
            <div class="image_page_tarifs">
                <div class="image_tarifs">
                    <img src="images/linda_evita_champ.jpg">
                </div>
                <div class="image_tarifs">
                    <img src="images/garcon_debout.jpg">
                </div>
                <div class="image_tarifs">
                    <img src="images/chevaux_personne_dos.jpg">
                </div>
                <div class="honoraires">Mes honoraires<br><br>
                    ***<br><br>
                </div>
            </div>
            <div class="tarifs_texte">
                PARTICULIERS:<br><br>
                <table style="width:60%; text-align: left; position: relative; left: 15%;">
                    <tr>
                        <th>Prestations :</th>
                        <th>prix</th>
                    </tr>
                    <?php

                    foreach ($result as $row) {

                        echo '<tr>';
                        echo '<td>' . $row['nom'] . '</td>';
                        echo '<td>' . $row['prix'] . ' ' . '€' . '</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
                <br><br>
                STRUCTURES: <br><br>Sur devis<br>
                N'hésitez pas à me contacter pour toutes informations complémentaires:<br><br>
                06 60 23 20 50<br>
                equilibrenaturelsante@gmail.com<br><br>

            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </div>

</body>

</html>