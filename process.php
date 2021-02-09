<?php
    echo('Processing...');

    //Conectar a MySQL database
    $host = "localhost";    
	$basededatos = "ajax-test";    
	$usuariodb = "root";    
	$clavedb = "";   

	$tabla_db = "users"; 	   
		
	//$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
    $conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos);
    
    //Buscar variable POST
    if(isset($_POST['nombre'])){
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        //echo'POST: Tu nombre es ' . $_POST['nombre'];

        $query = "INSERT INTO users(nombre) VALUES('$nombre')";

        if(mysqli_query($conexion, $query)){
            echo 'Usuario añadido...';
        }else{
            echo 'ERROR: '. mysqli_error($conexion);
        }
    }

    //Buscar variable GET
    if(isset($_GET['nombre'])){
        echo'GET: Tu nombre es ' . $_GET['nombre'];
    }