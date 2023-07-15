<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad_exacta.css">
    <title>Edad Exacta</title>
</head>
<body>
    <a href="index.html#section-respuestas">
        <img class="home" src="img/edad_exacta.jpg" alt="">
    </a>
    
    <div class="main-frame-cal">
    <form action ="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="Fecha" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button class="submit" name="verificar" class="btn btn-outline-info">Envíar</button>
    </form>

    <?php

    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['Fecha']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;

        if ($edad_actual<18){
            echo "Usted es menor de edad ya que tiene $edad_actual años";     
        }
        else {
            echo "Usted es mayor de edad ya que tiene $edad_actual años";
            }

        echo "<br> meses; $edad_meses dias: $edad_dias";

    }

    ?>

    </div>
</body>
</html>