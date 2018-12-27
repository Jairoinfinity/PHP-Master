<?php
    $archivo = fopen("texto.txt","a+"); // Con a+ podemos leer y escribir el archivo.

    //Escribimos una frase dentro del archivo.
    fwrite($archivo,"Esto es una frase que se introducira en el archivo.");

    //La mostramos para ver que funciona tambien la lectura.
    echo fgets($archivo);

    //Cerramos el archivo 
    fclose($archivo);
?>