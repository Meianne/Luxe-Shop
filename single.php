  <!-- Template loading -->
  <?php
    require "template/header.php";
    // Connexion BDD
    $bdd = new PDO('mysql:host=localhost;dbname=luxe-shop;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // Lancer requête en BDD
    $reponse = $bdd->query('SELECT * FROM product');

    // Extraire données (réponse)
    $products = $reponse ->fetchall(PDO::FETCH_ASSOC);

   ?>
<!-- lien url avec l'id du produit -->
   <!-- Produit -->
  <?php
    $product = $products[$_GET["index"]];
  ?>

  <!-- Main Content -->
  <main class="justify-content-center mx-5 px-5">
    <img src="img/impala.jpg" alt="Chevrolet Impala 1967 noire">
    <h2><?php echo $product["name"]; ?></h2>
    <p><?php echo $product["description"]; ?></p>
  </main>

    <?php
      // var_dump($products);
    ?>


  <!-- Footer loading -->
  <?php require "template/footer.php" ?>
