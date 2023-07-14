<?php

require_once "conexion.php";

    class ModeloFormularios{

        /*
            REGISTRO
        

        static public function mdlRegistro($tabla, $datos){
            #statement = declaracion (significa) 
            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES (:usuario, :password, :email)");
            
            $stmt->bindparam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindparam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindparam(":email", $datos["email"], PDO::PARAM_STR);


            if($stmt->excute()){

                return "ok";

            }else{

                print_r(Conexion::conectar()->errorInfo());

            }
        
            $stmt->close();
            $stmt = null;
        
        }

        
*/




    }

?>