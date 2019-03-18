<?php
    require '../vendor/autoload.php';

    //CSS
    echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

    //Conexion a la base de datos
    $conexion = new mysqli("localhost","root","","tema3");
    $conexion->query("SET NAMES 'utf8'");

    //Consultas
    $query = $conexion->query("SELECT * FROM regalo;");
    $elementos = $query->num_rows;

    //Creamos la paginación
    $paginacion = new Zebra_Pagination();

    //Indicamos la cantidad de elementos que va a tener
    $paginacion->records($elementos);

    //Indicamos la cantidad de elementos que va a mostrar por pagina.
    $numeroPaginas = 2;
    $paginacion->records_per_page($numeroPaginas);

    $pagina = $paginacion->get_page();
    $empezar = ($pagina - 1)*$numeroPaginas;
    $juguetes = $conexion->query("SELECT * FROM regalo LIMIT $empezar, $numeroPaginas");

    //Mostramos los datos con la paginación
    while($juguete = $juguetes->fetch_object()){
       echo "<h1>{$juguete->Nombre}</h1>";
       echo "<h3>{$juguete->Precio}</h3><hr>";
    }

    //Mostramos la paginación
    $paginacion->render();
?>