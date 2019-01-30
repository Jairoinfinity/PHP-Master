<?php
    $conexion = mysqli_connect("localhost","root","","phpmysql");

    if($conexion){
        echo "Conectado";
    }else{
        echo "Error: ".mysqli_connect_error();
    }

    //Configurar la consulta para que nos muestre los caracteres bien
    mysqli_query($conexion, "SET NAMES 'utf8'");

    //Selec de notas
    $notas = mysqli_query($conexion, "SELECT * FROM notas");

    //Mostramos las notas
    while($nota = mysqli_fetch_assoc($notas)){
        echo "<h1>".$nota["titulo"]."</h1>";
        echo $nota["descripcion"];
        echo "<hr>";
    }

    //Insertar datos
    /*$insert = mysqli_query($conexion, "INSERT INTO notas VALUES(null,'Nota insertada','Texto de la nota insertada.','green')");

    if($insert){
        echo "nota insertada correctamente";
    }else{
        echo mysqli_error();
    }*/
?>