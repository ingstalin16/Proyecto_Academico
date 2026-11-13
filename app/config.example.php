<?php
/* 
*Proporcionar una plantilla de configuración para conectar
* la base de datos de mysql.*/
/*Este archivo no contiene contraseñas reales se puede cargar el git*/
#Establecer la dirección del servidor mysql
$host = "127.0.0.1";
$puerto = "3306";
#Nombre de la base de datos.
$baseDatos = "Proyecto_Academico";
#Usuario de ejemplo en SQL
$usuario = "Academico_user";
# Definimos una contrasena de administrador
$contrasena = "MuchoMote";
#Retornar estos valores como si fuera un arreglo asociativo.
return[
    "host" => $host,
    "port" => $puerto,
    "database" => $baseDatos,
    "username" => $usuario,
    "password" => $contrasena
];