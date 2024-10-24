<?php

require_once "config/funciones.php";
require_once "config/db_connetion.php";


$termino_busqueda = $_GET['q'] ?? '';


$productos = [];

if ($termino_busqueda) {
    $productos = buscar_personajes($conn, $termino_busqueda);
}



?>
<?php require "partials/header.php" ?>

<main class="container">
    <h1 class="text-center">Resultados de busqueda</h1>

    <?php if ($termino_busqueda && !empty($productos)) { ?>
        <div class="row">
            <?php foreach ($productos as $producto) { ?>
                <div class="col-4 mt-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="img/<?= $producto['imagen'] ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                         
                            <a href="<?= $producto['tabla'] ?>.php?categorias=<?= $producto['tabla'] ?>&id=<?= $producto['id'] ?> " class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>



            <?php } ?>

        </div>

    <?php } elseif ($termino_busqueda) { ?>
        <p class="text-center text-warning fs-3">No se encontraron productos para el termino de busqueda: <?= $termino_busqueda ?> </p>
        <?php }else { ?>
            <p class="text-center text-danger fs-3"> El campo de busqueda no puede estar vacio </p>
        <?php } ?>



</main>

<?php require "partials/footer.php" ?>