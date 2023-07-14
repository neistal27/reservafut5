<?php
#CONEXION A LA BASE DE DATOS
class Conexion{

    static public function conectar(){

        #PDO ("nombre del servidor", "nombre de base de datos", "usuarios", "contraseña ")

        $link = new PDO("mysql:host=localhost;dbname=reservasfut5","root","");

        $link->exec("set names utf8");

        return $link;

    }

}

?>