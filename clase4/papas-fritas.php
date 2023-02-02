<?php
$titulo = "Papas Fritas";
$promoApp = true;

$productos = [
    ["nombre" => "Papas Grandes", "imagen" => "kcXXQgnB.png"],
    ["nombre" => "Papas Medianos", "imagen" => "kcXmVCCk.png"],
    ["nombre" => "Papas pequeñas", "imagen" => "kcXUUjwZ.png"],
    ["nombre" => "Papas Kids", "imagen" => "kcX3g9kK.png"]
]; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo; ?> - Educación It</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include("header.php");
    include("renderProductos.php"); 
    ?>
    <div class="container py-5">
        <div class="row text-center">
            <h1><?php echo $titulo; ?></h1>
        </div>
        <div class="row">
            <?php
            renderProductos($productos);
            ?>
        </div>
    </div>
    <?php
    include("promoApp.php");
    include("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
