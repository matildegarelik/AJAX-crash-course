<?php 

//Crear conexion
$conexion = mysqli_connect('localhost', 'root', '', 'ajax-test');
$query='SELECT * FROM users';

//Obtener resultado
$resultado = mysqli_query($conexion, $query);

//Fetch Data 
$users = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

echo json_encode($users);