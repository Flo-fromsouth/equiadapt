<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
include 'container_navbar.php';
?>

<body>
    <div class="container">
        <div class="rectangle_orange">
            <div class="accroche">Contact</div>
        </div>
        <div class="rectangle_bordeaux_contact">
            <div class="image_contact">
                <div class="garçon_brosse_evita">
                    <img src=" images/garcon_brosse_evita.jpg">
                </div>
                <div class="linda_champ_avec_evita">
                    <img src="images/linda_cheval_blanc.jpg">
                </div>
                <div class="filles_de_dos">
                    <img src="images/2_filles_dos.jpg">
                </div>
                <div class="texte_contact">Contactez moi en remplissant<br>
                    le formulaire ci dessous<br><br>
                    Par téléphone au 06 60 23 20 50<br>
                    ou mail à<br>
                    equilibrenaturelsante@gmail.com<br><br>
                    ***
                </div>
            </div>
            <div class="formulaire">
                <fieldset class="fieldset">Pour me contacter, veuillez remplir le formulaire ci-dessous :
                    <form action="formulaire.php" method="post"><br><br>
                        <label for="prenom">Prénom</label><br>
                        <input type="text" id="prenom" name="prenom" /><br><br>

                        <label for="nom">Nom</label><br>
                        <input type="text" id="nom" name="nom" /><br><br>

                        <label for="mail">E-mail</label><br>
                        <input type="email" id="mail" name="user_mail" /><br><br>

                        <label for="message">Message</label><br>
                        <textarea id="message" name="message" rows="10" cols="60"></textarea><br><br>
                        <input type="submit" id="submitbutton" value="Envoyer"><br>
                </fieldset>
                </form>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
</body>

</html>