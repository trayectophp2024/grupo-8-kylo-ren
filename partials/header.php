<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Star Wars</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/estilos.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>

<body>

  <header>

    <div class="header-superior">

      <div class="row d-flex align-items-center p-3" style="background-color: #000000;">

        <div class="col-4">
          <img width="165px" height="165px" src="img/incio.jpg" alt="">
        </div>


        <div class="col-4">
          <a href="index.php" class="titulo-principal text-decoration-none">
            <h1 class="text-center text-warning">STAR WARS</h1>
          </a>

        </div>

        <div class="col-4">
          <form action="busqueda.php" method="GET" class="d-flex" role="search">
            <div class="input-group">
           
              <input class="form-control" name="q" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>

          </form>
        </div>


      </div>

    </div>

    <div class="header-inferior">
      <nav class=" p-5" data-bs-theme="warning" style="background-color: #000000;">

        <div class="d-flex justify-content-around" id="navbarNav" style="color: #FFC600;  max-width:1000px">

          <a class="nav-link fs-3" href="previews.php?categoria=peliculas">Peliculas</a>

          <a class="nav-link fs-3" href="previews.php?categoria=personajes">Personajes</a>

          <a class="nav-link fs-3" href="previews.php?categoria=sables">Sables</a>

          <a class="nav-link fs-3" href="previews.php?categoria=naves">Naves</a>

        </div>

      </nav>
    </div>

  </header>


  