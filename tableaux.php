<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include 'includes/_head.php'; ?>
</head>
<body>
  <?php include 'includes/_navbar.php'; ?>
     <main class= "container-lg bg-white py-4">
        <h1>Les tableaux</h1>
        <h2>les tableaux numérotés</h2>
          <pre class="bg-dark text-light">
                <code>
                     &lt;?php
                     $tableau=array("pomme","poire","banane");
                     echo$tableau[0];
                      echo$tableau[1];
                     echo$tableau[2];
                      ?&gt;
                </code>
            </pre>
                <?php
                $prenom=["jean","marc","luc","pierre"];
                // ont affiche le tableau avec la méthode native var_dump()
                var_dump($prenom);
                echo '<p>La longueur du tableau est de '.count($prenom).'éléments</p>';
                 echo '<p>Le premier élément  du tableau est '.$prenom[0].'</p>';
                 print_r($prenom);

                ?>
                <h2>Les tableaux associatifs</h2>
<pre class="bg-dark text-light">
                <code>
                &lt;?php
                $tableaux = aray(
                "pomme"  =>"fruit",
                "Tomate" =>"Légume",
                "Fraise"=> "fruit",
                );
                echo $tableau["pomme"]; //affiche fruit
                echo $tableau["Tomate"]; //affiche Légume
                echo $tableau["Fraise"]; //affiche fruit
                ?&gt;
                </code>
</pre>
<?php
// déclaration  d'un tableau associatif
$users=[
  "user0"=>"Jean",
  "user1"=>"Marc",
  "user2" =>"Luc",
  "user3" =>"Pierre",
];
//on affiche le prénom user de la ligne d'index 2 
echo $users["user2"];
echo"Le user en index2 est :".$users["user2"];
?>
<h2>les tableaux multidimensionels</h2>
<?php
$users=[
  ['prenom' => "Christian", 'nom' => "Meneux", 'age' => "inconnu"], 
   ['prenom' => "Adème", 'nom' => "Jouneau", 'age' => "inconnu"], 
    ['prenom' => "Latifa", 'nom' => "chafaoui", 'age' => "inconnu"], 
     ['prenom' => "fatouma", 'nom' => "mali", 'age' => "inconnu"], 
     ['prenom' => "habibata", 'nom' => "doucouré", 'age' => "inconnu"], 
];
echo"<p> le prénom du user d'index 3 est :".$users[3]['prenom']."</p>";
echo"<p> le prénom du user d'index 3 est :".$users[3]['nom']."</p>";
//echo "<p class=" text-primary">Le prénom du user d'\index3 est : '.$users[3]['prenom']."</p>";
?>
<h2> Quleques méthodes</h2>
<h3>usert</h3>
<p> la méthode usert tire un tableau</p>
<$php
</main>

</body>
</html>