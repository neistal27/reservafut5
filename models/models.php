<?php 

class enlacesPaginas{

    public static function enlacesPaginasModel($enlacesModel){

        if($enlacesModel == "reservas" ||
           $enlacesModel == "galeria"){

            $module = "vista/modules/".$enlacesModel.".php";

        }
        
        else if($enlacesModel == "index"){

            $module = "vista/modules/inicio.php";

        }else{
                #se limpian URL CON PHP
            $module = "vista/modules/inicio.php";

        }

        return $module;

    }

}

?>