<?php
include'../modele/clientsListExo7.php';
include'../controller/controller7.php';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/mdb.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <title>Exercice PDO</title>
    </head>
    <body >
    <div class="container-fluid ">
            <div class="row">
                <!--Deuxieme exercice-->
                <div class="firstTest offset-4 col-4 text-center ">
                    <h1 >1- Afficher les informations des clients</h1>
                    <!--Création d'un tableau qui affichera les noms et prénoms des clients-->
                    <ul class="col-12 text-center">

                        <?php foreach ($clientList as $clientDetail) { ?>

                            <li>Nom : <?= $clientDetail->lastName ?></li>
                            <li>Prénom : <?= $clientDetail->firstName ?></li>
                            <li>Date de naissance : <?= $clientDetail->birthDate ?></li>
                            <li>Carte de fidélité : <?= $clientDetail->case ?></li>
                        <?php if ($clientDetail->case == "OUI") { ?>
                            <li>N° de carte : <?= $clientDetail->cardNumber ?></li>
                        <?php } 
                        //IF permet d afficher le n° de carte que quand c est une carte de fidelité
                        } ?>  
                    </ul>
                </div>

            </div>
        </div>
    </body>
</html>

