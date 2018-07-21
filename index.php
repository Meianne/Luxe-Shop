<?php
require "template/header.php";

// Connexion BDD
$bdd = new PDO('mysql:host=localhost;dbname=luxe-shop;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Lancer requête en BDD
$reponse = $bdd->query('SELECT * FROM product');

// Extraire données (réponse)
$products = $reponse ->fetchall(PDO::FETCH_ASSOC);

?>

  <!-- Header content -->

  <!-- Main content -->

    <!-- <h2>Accueil</h2> -->
    <!-- Boucle pour parcourir les données -->
    <?php
      foreach ($products as $key => $product) {
        // Pour chaque produit on applique une carte
        echo '<article class="card my-3 mx-2" style="width: 18rem;">
        <h3>' . $product["name"] ."</h3>
        <p>" . $product["price"] ." € </p>";
        if ($product["stock"]) {
          echo "<p> Disponible </p>";
        }
        else {
          echo "<p> Indisponible </p>";
        }
      echo "<a href='single.php?index=" . $key . "'>Voir le produit</a></article>";
  }
?>

  <!-- Footer loading -->
<?php require "template/footer.php" ?>
