<!DOCTYPE html>
<html lang="fr">
<head>
   <?php include 'includes/_head.php'; ?>
    <title>Document</title>
</head>
<body>
    <?php include 'includes/_navbar.php'; ?>
    <main class="container-lg bg-white py-4">
    <?php

  
    //déclaration de variable
    $titre = " Bienvenue sur les premiers pas php";
    $soustitre = "les variables";
    //ont affiche le titre en concaténant avec la variable
    echo "<h1>" .$titre. "</h1>";
    
    ?>
    <h2><?php echo $soustitre; ?></h2>
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>