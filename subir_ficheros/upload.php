<?php
    $archivo = $_FILES["img"]; //Con file optenemos un array con los datos del archivo que hemos subido.
    $imgNombre = $archivo["name"]; //Con el id name optenemo el nombre del archivo.
    $imgTipo = $archivo["type"]; //Con el id type optenemos la extension o tipo de archivo
    $imgTmp = $archivo["tmp_name"]; //Con el id tmp_name optenemos la ruta del directorio temporal donde se ha subido.

    if($imgTipo == "image/jpg" || $imgTipo == "image/jpeg" || $imgTipo == "image/png" || $imgTipo == "image/gif"){ //Hacemos un filtro para solo subir tipo de archivos
        if(!is_dir("images")){ //Comprobamos si existe el directorio donde vamos a subir los archivos y en caso de que no exitas lo creamos.
            mkdir("images", 0777); //Creamos el directorio y le damos los permisos
        }

        move_uploaded_file($imgTmp, "images/".$imgNombre); //Con esta funcion movemos el archivo del directorio temporal al que nosotros queramos.
        header("Refresh: 5; URL=index.html"); //Hacemos que la pagina se redireccione a los 5 segundos a index.html
        echo "Imagen subida.";
    }else{ //En caso de que no sea valido el formato de archivo que pedimos
        header("Refresh: 5; URL=index.html");//Hacemos que la pagina se redireccione a los 5 segundos a index.html
        echo "Formato de imagen no valido.";
    }
?>