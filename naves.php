<?PHP

require_once "config/funciones.php";
require_once "config/db_connetion.php";

$tabla = $_GET['categorias'] ?? FALSE;
$id = $_GET['id'] ?? FALSE;

$productos = categoria_Particular($conn, $tabla, $id);

/* echo "<pre>";
var_dump($productos);
echo "</pre>"; */


$producto = $productos[0] ?? null;
?>

<?php require "partials/header.php" ?>

<main class="container">



    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="producto.php?categoria=<?= $tabla ?>"><?= $tabla ?></a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $producto['nombre'] ?> >Data</li>
        </ol>
    </nav>



    <?php foreach ($productos as $producto) { ?>


        <div class="card mb-3 mx-auto mt-5" style="max-width: 740px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/<?= $producto['imagen'] ?> " class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?= $producto['nombre'] ?></h5>
                        <p class="card-text"> <?= $producto['descripcion'] ?></p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $producto['tipo'] ?></li>
                            <li class="list-group-item"><?= $producto['fabricante'] ?></li>
                            <li class="list-group-item"><?= $producto['longitud'] ?></li>
                            <li class="list-group-item"><?= $producto['velocidad_max'] ?></li>
                            <li class="list-group-item"><?= $producto['armamento'] ?></li>
                            <li class="list-group-item"><?= $producto['capacidad'] ?></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>

</main>

<?php require "partials/footer.php" ?>