<?php
    //Comprobamos si exite un directorio y en caso de no existir lo creamos
    if(is_dir("directorio")){
        //En caso de que exista mostraremos el contenido del directorio.
        //abrimos el directorio
        if($direc = opendir("./directorio")){
            //leemos el todo el contenido del directorio.
            while(false !== ($datos = readdir($direc))){ //Mientras el directorio no de false (Mientras tenga archivos dentro) mostrara todo el contenido.
                echo $datos."<br>"; //Imprimimos el contenido.
            }
        }

        

    }else{ //En el caso de que no exita el directorio lo creamos.
        mkdir("directorio", 0777); //Creamos el directorio y con 0777 le damos todos los permisos.
        echo "Directorio creado.";
    }
?>