<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>menu version mobile</title>
</head>
<style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    .menu_version_mobile {
        position: sticky;
        top: 20px;
        width: 100%;
        z-index: 999;
    }

    @media(max-width:599px) {

        .menu_burger {
            width: 100%;
            box-sizing: border-box;
            display: inline;
        }

        .hamburger {
            font-size: 1.5rem;
            color: #8F4343;
        }

        .menu_version_mobile {
            display: none;
        }

        .menu_container {
            display: flex;
            align-items: center;
        }


        .navbar {
            display: flex;
            text-align: center;
            flex-direction: column;
            box-sizing: border-box;
        }

        .navbar li {
            list-style-type: none;
        }

        .navbar a {
            color: black;
            text-decoration: none;
            box-sizing: border-box;
            display: block;
            padding: 10px 20px;
            font-size: 1.2rem;
        }


    }
</style>

<body>
    <div class="menu_burger">
        <div class="hamburger"><i class="fa-solid fa-bars" onclick="toggler()" id="toggler"></i>
        </div>
    </div>
    <div class="menu_version_mobile">
        <div class="menu_container">
            <ul class="navbar">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="qui_suis_je.php">Qui Suis-Je ?</a></li>
                <li><a href="equitherapie_what.php">L'équithérapie qu'est ce que c'est ?</a></li>
                <li><a href="equitherapie_why.php">Pourquoi faire de l'équithérapie ?</a></li>
                <li><a href="tarifs.php">Tarifs & séjours adaptés</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <script>
        function toggler() {
            let icon = document.querySelector('#toggler')
            let menu = document.querySelector('.menu_verion_mobile');
        }
        if () {

        } else() {

        }
    </script>

</body>

</html>