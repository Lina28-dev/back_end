<?php

    include 'db/conexion.php';

    $query = mysqli_query($conexion, "SELECT * FROM usuarios");
    $query2 = mysqli_query($conexion, "SELECT cedula FROM usuarios");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<a href="index.html#section-respuestas">
        <img class="home" src="img/.jpg" alt="">
    </a>
        <div class="wraper">
        <div class="container">
            <div class="filter">
            <div class="row">
                <div class="col-sm-4">
                <div class="show-row">
                <select class="form-control">
                <option value="5" selected="selected">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                </select>
            
            </div> 
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
            <div class="search-row">
                <input type="text" name="search" class="form-control1" id="exampleFormControlInput1" placeholder="Digite su Cédula">
            </div>
            </div>
        </div>
        </div>
    <table id="music" class="table table-responsive table-hover">
        <thead>
        <tr class="myHead">
                <th>#</th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cédula</th>
            </tr>
</thead>
<tbody>

<?php

    while ($datos = mysqli_fetch_array(query)) {
    $id = $datos['nombre'];
    $nombre = $datos['nombre'];
    $apellido = $datos['apellido'];
    $cedula = $datos['cedula'];

    echo'
    <tr data-url="FQS7i2z1CoA">
        <th></th>
        <th>'.$id.'</th>
        <th>.$nombre.</th>
        <th>.$apellido.</th>
        <th>.$Cédula.</th>
    </tr>
    ';

}



