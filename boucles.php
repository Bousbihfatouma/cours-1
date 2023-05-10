<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/_head.php'; ?>
</head>
<body>
  <?php include 'includes/_navbar.php'; ?>
<main class= "container-lg bg-white py-4">
      <h1>les boucles</h1>
                 <h2>while</h2>
                   <pre class="bg-dark text-light">
                         <code>
                        &lt;?php
                        $i = 0;
                    while ($i < 10){
                      echo $i;
                       $i++;
                    }
                 ?&gt;
                </code>
                         </pre>
                         <?php
                         //on déclare un tableau mutidimensionnel associatif d'utilisateur 
                         $users=[
                            ["nom"=>"Meneux","prenom"=>"Christian", "ville"=>'Paris'],
                              ["nom"=>"Meneux","prenom"=>"Jean", "ville"=>'Bagnolet'],
                                ["nom"=>"Meneux","prenom"=>"Henri", "ville"=>'Nice'],
                                  ["nom"=>"mona","prenom"=>"Faira", "ville"=>'Marseille'],
                                  ["nom"=>"cesar","prenom"=>"jules", "ville"=>'Alexandrie'],
                         ]
                         ?>
                         <table class="table table-striped table_responsive"></table>

<?php
$users = [
    ["nom" => "Meneux", "prenom" => "Christian", "ville" => 'Paris'],
    ["nom" => "Meneux", "prenom" => "Jean", "ville" => 'Bagnolet'],
    ["nom" => "Meneux", "prenom" => "Henri", "ville" => 'Nice'],
    ["nom" => "mona", "prenom" => "Faira", "ville" => 'Marseille'],
    ["nom" => "cesar", "prenom" => "jules", "ville" => 'Alexandrie'],
];
?>

<table class="table table-striped table-responsive">
        <!-- thead = table head -->
    <thead>
        <tr>    <!-- table row -->
            <th>Nom</th>        <!-- th cellule d'entête dans le thead -->
            <th>Prénom</th>
            <th>Ville</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //la variable i correspond à index
                $i = 0;
                while($i<count($users)){
                    echo "<tr>";
                    //td cellule de composition dans le tbody
                    echo "<td>".$users[$i]["nom"]."</td>";
                    echo "<td>".$users[$i]["prenom"]."</td>";
                    echo "<td>".$users[$i]["ville"]."</td>";
                    echo "</tr>";
                    $i++;
                }
        ?>
    </tbody>
    </table>
    </main>
    </body>
    </html>