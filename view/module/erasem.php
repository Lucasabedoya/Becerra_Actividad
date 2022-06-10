<?php

eraseMatricula();
function eraseMatricula(){
    try {
        $objDtoMatricula = new Matricula();
        $objDtoMatricula -> setCodem($_GET['codigo']);
        $objDaoMatricula = new MatriculaModel($objDtoMatricula);
        if ( $objDaoMatricula -> mldEraseMatricula() == true ) {

            echo "<script>
                    Swal.fire(
                        'Borrado!',
                        'El registro ha sido borrado',
                        'success'
                    )
                </script>";
                include_once 'view/module/matricula.php';
        }

    } catch ( PDOException $e ) {
        echo "Error on the delete of the 
        controller of show all " . $e->getMessage(); 
    }


}

?>