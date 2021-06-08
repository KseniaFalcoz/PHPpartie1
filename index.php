<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Exercices PHP</title>
</head>
<body>
<div class="container col-6 text-center">
    
    <h1>Exercices PHP Partie 1</h1>
<?php echo date('Y/d/m h:i:s'); ?>
    <h2>Exercice 1</h2>
<?php
     $text = 'Bonjour !';
     echo $text;
?>
    <h2>Exercice 2</h2>
<?php
    $nom = 'Doe';
    $prenom = 'John';
    $age = 25;
    echo 'Bonjour, je m\'appelle'. ' ' . $prenom . ' ' . $nom . ' ' . 'et j\'ai'. ' ' . $age . ' ' . 'ans.';
?>
    <h2>Exercice 3</h2>
<?php
    $age = 20;
    if($age > 0 && $age < 120) {
        if($age >= 18){
            echo 'Vous etes majeur.';
        } else {
            echo 'Vous etes mineur.';
        }
    } else {
        echo 'Entrez un age valide.';
    };
?>
    <h2>Exercice 4</h2>
<?php
    $age = rand(0, 120);
    echo $age. ' ans :';
        if($age >= 18){
            echo ' Vous etes majeur.';
        } else {
            echo ' Vous etes mineur.';
        };
?>
    <h2>Exercice 5</h2>
<?php
    $age = rand(0, 120);
    $genres = array('femme', 'home');
    $genre = $genres[rand(0, 1)];
    echo 'Vous êtes un(e) ' .$genre.  ' et vous avez ' .$age. ' ans.';
?>
    <h2>Exercice 6</h2>
<?php
$seisme = rand(1,9);
 switch ($seisme) {
     case 1:
         echo 'Micro-séisme impossible à ressentir.';
         break;
     case 2:
         echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
         break;
     case 3:
         echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
         break;
     case 4:
         echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
         break;
     case 5:
         echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
         break;
     case 6:
         echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
         break;
     case 7:
         echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
         break;
     case 8:
         echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
         break;
     case 9:
         echo 'Séisme capable de tout détruire sur une très vaste zone.';
         break;
     default:
     echo '?';
}
?>
</div>
</body>
</html>