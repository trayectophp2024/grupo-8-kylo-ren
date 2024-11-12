<?php

function index_personajes($conn){
    $sqlPersonajes = "SELECT * FROM personajes LIMIT 4 ";

    $result = $conn->query($sqlPersonajes);

    return $result->fetch_all(MYSQLI_ASSOC);

} 


function listar_todo($conn, $tabla){
    $sqlPersonajes = " SELECT * FROM " . $tabla ;

    $result = $conn->query($sqlPersonajes);

    return $result->fetch_all(MYSQLI_ASSOC);

} 

function categoria_Particular($conn, $tabla, $id){
    
    $sqlPersonajes = "SELECT * FROM " . $tabla . " WHERE id = " . $id ;

    $result= $conn->query($sqlPersonajes);

    return $result->fetch_all(MYSQLI_ASSOC);
}

function buscar_personajes($conn, $termino_busqueda){


    $termino_busqueda = $conn->real_escape_string($termino_busqueda);

    $sqlPersonajes = "SELECT 'personajes' as tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes
    WHERE lower(nombre) LIKE '%$termino_busqueda%' 
    ";

    $sqlNaves = "SELECT 'naves' as tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_max, armamento, capacidad, imagen FROM naves
    WHERE lower(nombre) LIKE '%$termino_busqueda%' 
    ";

    $sqlPeliculas = "SELECT 'peliculas' as tabla, id, nombre, descripcion, director, anio_extreno, duracion, imagen FROM peliculas
    WHERE lower(nombre) LIKE '%$termino_busqueda%'
    ";

     $sqlSables = "SELECT 'sables' as tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables
    WHERE lower(nombre) LIKE '%$termino_busqueda%'


";
    
    $resultPersonajes = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
    $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
    $resultPeliculas = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
    $resultSables = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);

    $resultado = array_merge($resultPersonajes, $resultNaves, $resultPeliculas, $resultSables);

    return $resultado;


}





?>