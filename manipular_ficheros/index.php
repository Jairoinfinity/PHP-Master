<?php
    //Copiar un fichero
    copy("texto.txt","Fichero.txt");

    //Renombrar un fichero
    rename("Fichero.txt", "fff.txt");

    //Borrar un fichero
    unlink("fff.txt");

    //Comprobamos si existe un archivo
    if(file_exists("fff.txt")){
        echo "El archivo existe.";
    }else{
        echo "El archivo no existe.";
    }
?>