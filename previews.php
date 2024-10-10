<?php

require_once "config/funciones.php";
require_once "config/db_connetion.php";

$tabla = $_GET['categoria'] ?? false;

$tablas = [
    'personajes' => 'personajes',
    'peliculas' => 'peliculas',
    'sables' => 'sables',
    'naves' => 'naves'


];


if (!array_key_exists($tabla, $tablas)) {
    header('Location: 404.php');
}

$categorias = listar_todo($conn, $tabla);

/* echo "<pre>";
var_dump($categrorias);
echo "</pre>";
 */




?>


<?php require "partials/header.php" ?>

<main class="container ">
    <div class="row ">
        <h1 class="text-center">Categoria de <?= $tabla ?> </h1>

        <?php foreach ($categorias as $personajes) { ?>
            <a href="<?= $tabla ?>.php?categorias=<?= $tabla ?>&id=<?= $personajes['id'] ?>" class="col-4 mt-4 mb-4 d-block">
                <div class="card" style="width: 18rem;">
                    <img height="350px" src="img/<?= $personajes['imagen']; ?>" class="card-img-top" alt="">
                    
                </div>
             </a>
        <?php   } ?>
       

    </div>

</main>

<?php require "partials/footer.php" ?>