<?php

    class MatriculaModel{
        private $codem;
        private $nombrec;
        private $costo;
        private $estado;
        private $codepro;
        private $codeapr;
        private $fecham;

        public function __construct($objDtoMatricula){
            $this ->codem      =  $objDtoMatricula -> getCodem() ;
            $this ->nombrec      =  $objDtoMatricula -> getNombrec() ;
            $this ->costo  =  $objDtoMatricula -> getCosto() ;
            $this ->estado     =  $objDtoMatricula -> getEstado() ;
            $this ->codepro  =  $objDtoMatricula -> getCodepro() ;
            $this ->codeapr  =  $objDtoMatricula -> getCodeapr() ;
            $this ->fecham  =  $objDtoMatricula -> getFecham() ;
        }

        public function mldInsertMatricula(){
            $sql  = "CALL spInsertMatricula (?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> nombrec,      PDO::PARAM_STR);
                $stmt ->  bindParam(2,  $this -> costo,  PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> estado,      PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> codepro,  PDO::PARAM_STR);
                $stmt ->  bindParam(5,  $this -> codeapr,  PDO::PARAM_STR);
                $stmt ->  bindParam(6,  $this -> fecham,  PDO::PARAM_STR);
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al insertar matricula " . $e ->getMessage();
            }
            return $estado;
        }
        public function mldSearchAllMatricula(){
            $respon=false;
            $sql  = "call spSearchAllMatricula()";
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
        }//END SEARCHALLMATRICULA
        public function mldEraseMatricula(){
            $respon = false;
            $sql  = "call spDeleteMatricula( ? )";
            try {
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> codem,      PDO::PARAM_INT);
                $stmt -> execute();
                $respon = true;
            } catch (PDOException $e) {
                echo "Ha ocurrido un error al 
                mostrar los datos en el dao " . $e -> getMessage() ;
            }//end try-catch
            return $respon;
        }


        public function mldUpdateMatricula(){
            $sql  = "CALL spUpdateMatricula (?, ?, ?, ?, ?, ?, ?);";
            $estado = false;
            try {   
                $objCon = new Conexion();
                $stmt = $objCon->getConect() -> prepare($sql);
                $stmt ->  bindParam(1,  $this -> codem,      PDO::PARAM_INT);
                $stmt ->  bindParam(2,  $this -> nombrec,      PDO::PARAM_STR);
                $stmt ->  bindParam(3,  $this -> costo,  PDO::PARAM_STR);
                $stmt ->  bindParam(4,  $this -> estado,      PDO::PARAM_STR);
                $stmt ->  bindParam(5,  $this -> codepro,  PDO::PARAM_STR);
                $stmt ->  bindParam(6,  $this -> codeapr,  PDO::PARAM_STR);
                $stmt ->  bindParam(7,  $this -> fecham,  PDO::PARAM_STR);
    
                $estado = $stmt -> execute();
            } catch (PDOException $e) {
                echo "Error al modfiicar aprendiz " . $e ->getMessage();
            }
            return $estado;
        }

}//END CLASS
?>