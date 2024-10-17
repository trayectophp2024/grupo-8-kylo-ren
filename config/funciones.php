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





?>