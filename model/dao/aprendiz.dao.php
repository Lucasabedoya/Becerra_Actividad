<?php

    class AprendizModel{
        private $codea;
        private $nombre;
        private $fechan;
        private $sexo;
        private $ciudad;

        public function __construct($objDtoAprendiz){
            $this ->codea      =  $objDtoAprendiz -> getCodea() ;
            $this ->nombre      =  $objDtoAprendiz -> getNombre() ;
            $this ->fechan  =  $objDtoAprendiz -> getFechan() ;
            $this ->sexo      =  $objDtoAprendiz -> getSexo() ;
            $this ->ciudad  =  $objDtoAprendiz -> getCiudad() ;
        }

        public function mldInsertAprendiz(){
            $sql  = "CALL spInsertAprendiz (?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> nombre,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> fechan,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> sexo,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> ciudad,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar aprendiz " . $e ->getMessage();
            }
            return $estado;
        }

        public function mldSearchAllAprendiz(){
            $respon=false;
            $sql  = "call spSearchAllAprendiz()";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt -> execute();
                $respon = $stmt;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al 
                mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }//END SEARCHALLUSER

        public function mldEraseAprendiz(){
            $respon = false;
            $sql  = "call spDeleteAprendiz( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> codea,      PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al 
                mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }

    }

?>