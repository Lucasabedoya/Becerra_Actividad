<?php

eraseAprendiz();
function eraseAprendiz(){
    try {
        $objDtoAprendiz = new Aprendiz();
        $objDtoAprendiz -> setCodea($_GET['codigo']);
        $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
        if ( $objDaoAprendiz -> mldEraseAprendiz() == true ) {

            echo "<script>
                    Swal.fire(
                        'Borrado!',
                        'El registro ha sido borrado',
                        'success'
                    )
                </script>";
                include_once 'view/module/aprendiz.php'; 
        }

    } catch ( PDOException $e ) {
        echo "Error on the delete of the 
        controller of show all " . $e->getMessage(); 
    }


}

?>