<?php

class MvcControllers{

    #llamada a la plantilla
    #----------------------------------------------------------
    public function plantilla(){

        include "vista/cabecera.php";
        include "vista/pie.php";
    }
    #Interaccion del USUARIO
    #-----------------------------------------------------------
    public function enlacesPaginasController(){

        if(isset($_GET["action"])){

        $enlacesController = $_GET["action"];

        }else{

        $enlacesController = "index";

        }
        
      #  echo $enlacesController;
        $respuesta = enlacesPaginas::enlacesPaginasModel($enlacesController);
    
        include $respuesta;
    }
}


?>