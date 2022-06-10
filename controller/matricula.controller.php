<?php
class MatriculaController{
    
    public function setInsertMatricula($nombrec, $costo, $estado, $codepro, $codeapr, $fecham){
        try{
            $objDtoMatricula = new Matricula();
            $objDtoMatricula -> setNombrec($nombrec);
            $objDtoMatricula -> setCosto($costo);
            $objDtoMatricula -> setEstado($estado);
            $objDtoMatricula -> setCodepro($codepro);
            $objDtoMatricula -> setCodeapr($codeapr);
            $objDtoMatricula -> setFecham($fecham);

            $objDaoUser = new MatriculaModel($objDtoMatricula);

            if ($objDaoUser -> mldInsertMatricula()){
                echo "<script>
                Swal.fire(
                    'Guardado',
                    'Registro insertado',
                    'success'
                  )
                </script>";
            }

        } catch(Exception $e){
            echo "Error en el controlador de insercion " . $e->getMessage();
        }

    }// FIN DEL CONTROLADOR DE INSERCION
    public function getSearchAllMatricula(){
        $respon = false;
        try {
            $objDtoMatricula = new Matricula();
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            $respon = $objDaoMatricula -> mldSearchAllMatricula()->fetchAll();
        } catch (PDOException $e) {
            echo "Error on the creation of the 
            controller of show all " . $e->getMessage();
        }
        return $respon;
    }//FIN DE MOSTRAR TODOS
    public function setUpdateMatricula($codem, $nombrec, $costo, $estado, $codepro, $codeapr, $fecham){
        try{
            $objDtoMatricula = new Matricula();

            $objDtoMatricula -> setCodem($codem);
            $objDtoMatricula -> setNombrec($nombrec);
            $objDtoMatricula -> setCosto($costo);
            $objDtoMatricula -> setEstado($estado);
            $objDtoMatricula -> setCodepro($codepro);
            $objDtoMatricula -> setCodeapr($codeapr);
            $objDtoMatricula -> setFecham($fecham);
            $objDaoMatricula = new MatriculaModel($objDtoMatricula);
            if ($objDaoMatricula -> mldUpdateMatricula()){
                echo "<script>
                Swal.fire(
                    'Actualizado!',
                    'El registro ha sido actualizado',
                    'success'
                )
            </script>";
            }
        } catch(PDOException $e){
            echo 'Error al modificar'.$e->getMessage();
        }
  
    }//END UPDATE

}// END CLASS

?>