<!DOCTYPE html>
<html lang="fr">
<head>
   <?php include 'includes/_head.php'; ?>
</head>
<body>
    <?php include 'includes/_navbar.php'; ?>
        <main class= "container-lg bg-white py-4">
             <h1>les opérateurs</h1>
                 <h2>Opérateurs arithmétiques</h2>
                     <pre class="bg-dark text-light">
                         <code>
                &lt;?php
                $a = 10;
                $b = 2;
                $total = $a + $b;    <!-- Addition renvoi 12 -->
                $total = $a - $b;    <!-- Soustration renvoi 8 -->
                $total = $a * $b;    <!-- Multiplication renvoi 20 -->
                $total = $a / $b;    <!-- Division renvoi 5 -->
                ?&gt;
            </code>
            </pre>
            <h2>opérateurs de comparaison</h2>
             <pre class="bg-dark text-light">
                <code>
               
                &lt;?php
                 $a = 20;
                $b = 10;
            return $a==$b; <!-- Renvoi false-->
            return $a!=$b;<!-- Renvoi true-->
            return $a>$b ;<!--Renvoi true-->
            return $a<$b; <!-- renvoi false-->
                   ?&gt;
                </code>
                 </pre>
                  <h2>opérateurs logique</h2>
             <pre class="bg-dark text-light">
                <code>
               
                &lt;?php
                 $a = 20;
                $b = 10;
            if($a==20 || $b==10){
                echo"vrai";
            }else{
                echo"faux";
            }
             ?&gt;
                </code>
                 </pre>
 </main>
</body>
</html>