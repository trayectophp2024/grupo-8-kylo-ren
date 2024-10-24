<?php

    require_once "config/db_connetion.php";
    require_once "config/funciones.php";


   $personajes_principal = index_personajes($conn);



?>


<?php require "partials/header.php" ?>


<img width="100%" height="300px" src="img/banner2.jpg" alt="star wars">

<main class="fondo-index p-5">
    <div class="container">
        <h1 class="text-warning mt-3">PERSONAJES PRINCIPAL</h1>

            <div class="row">
                <?php foreach($personajes_principal as $personaje){  ?>
                    <div class="col-3 mt-4 mb-4">
                        <div class="card" style="width: 18rem;">
                            <img height="300px" width="250px" src="img/<?= $personaje['imagen']  ?>" class="card-img" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $personaje['nombre']  ?></h5>
                                <a href="personajes.php?id=<?= $personaje['id']  ?>" class="btn btn-dark">Ver</a>
                                
                            </div>
                        </div>

                    </div>
                
                <?php } ?>
            </div>


    </div>


</main>






<?php require "partials/footer.php" ?>