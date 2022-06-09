<?php

    class AprendizController{

        public function setInsertAprendiz($nombre, $fechan, $sexo, $ciudad){
            try{
                $objDtoAprendiz = new Aprendiz();
                $objDtoAprendiz -> setNombre($nombre);
                $objDtoAprendiz -> setFechan($fechan);
                $objDtoAprendiz -> setSexo($sexo);
                $objDtoAprendiz -> setCiudad($ciudad);
    
                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
    
                if ($objDaoAprendiz -> mldInsertAprendiz()){
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

        }

        public function getSearchAllAprendiz(){
            $respon = false;
            try {
                $objDtoAprendiz = new Aprendiz();
                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
                $respon = $objDaoAprendiz -> mldSearchAllAprendiz()->fetchAll();
            } catch (PDOException $e) {
                echo "Error on the creation of the 
                controller of show all " . $e->getMessage();
            }
            return $respon;
        }//FIN DE MOSTRAR TODOS

        public function setUpdateAprendiz($codea, $nombre, $fechan, $sexo, $ciudad){
            try{
                $objDtoAprendiz = new Aprendiz();
                $objDtoAprendiz -> setCodea($codea);
                $objDtoAprendiz -> setNombre($nombre);
                $objDtoAprendiz -> setFechan($fechan);
                $objDtoAprendiz -> setSexo($sexo);
                $objDtoAprendiz -> setCiudad($ciudad);
                $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
                if ($objDaoAprendiz -> mldUpdateAprendiz()){
                    echo "<script>
                    Swal.fire(
                        'Actualizado!',
                        'El registro ha sido actualizado',
                        'success'
                    )
                </script>";
                }
            } catch(PDOException $e){
                echo 'Error al modificara'.$e->getMessage();
            }


    }
    }
?>