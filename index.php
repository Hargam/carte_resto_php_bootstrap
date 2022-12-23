<!DOCTYPE html>
<html>
    <head>
        <title>Exo 3 - restaurant</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" type="text/css" rel="stylesheet">    
    </head>
    <body>
        <?php
        include_once('header.php');
        ?>

        <main class="container">

            <?php
            include_once('connexion.php');
            ?>

            <?php
            $sectionsCarte = $connexion->query("SELECT * FROM carte");

            $i = 0;
            $class = "";

            foreach($sectionsCarte as $sectionCarte) {

                $i++;

                // Modulo de 2, pour changer la class d'1 section sur 2
                if($i % 2 == 0) {
                    $class = "row-reverse";
                }
                else {
                    $class = "";
                }

                echo "<section class='row mt-3 mb-3 p-3 align-items-center border border-dark " . $class . "'>
                    <img class='col-6' src='images/" . $sectionCarte['image'] . "'>
                    <article class='col-6 text-center'>
                        <h2>" . $sectionCarte['titre'] . "</h2>
                        <a class='btn btn-primary' href='" . $sectionCarte['lien'] . "'>
                        <i class='fa-solid fa-eye'></i>&nbsp;Voir
                        </a>
                    </article>
                </section>";
            }
            ?>

        </main>

        <?php
        include_once('footer.php');
        ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>