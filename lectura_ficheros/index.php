<?php
    $archivo = fopen("texto.txt","r"); //Le pasamos el archivo en el primer parametro y el segundo "r" que permite lectura.

    //Mostramos el contenido de la primera linea del archivo.
    //echo fgets($archivo); 

    //De esta manera mostramos todas las lineas del archivo.
    while(!feof($archivo)){ //Mientras el archivo no de false (Mientras tenga lineas de texto dentro) mostrara todo el contenido.
        $linea = fgets($archivo);
        echo $linea."<br>";
    }

    //Cerramos el archivo
    fclose($archivo);
?>