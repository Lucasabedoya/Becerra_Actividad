function erasea(obj){
    
    let codigo =  obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
        })
    
        swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No se podra revertir!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, borralo!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
        }).then((result) => {
        if (result.isConfirmed) {
    
            window.location="index.php?ruta=erasea&codigo="+codigo

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
                swalWithBootstrapButtons.fire(
                'Cancelado',
                'No se ha borrado :)',
                'error'
                )
            }
        })
    

}
function getDataA(obj){

    let codigoa = obj.children[0].innerHTML;
    let nombre = obj.children[1].innerHTML;
    let fechan = obj.children[2].innerHTML;
    let sexo = obj.children[3].innerHTML;
    let ciudad = obj.children[4].innerHTML;

    document.getElementById("txtCodigoAM").value = codigoa;
    document.getElementById("txtNombreAM").value = nombre;
    document.getElementById("txtFechanM").value = fechan;
    document.getElementById("txtSexoM").value = sexo;
    document.getElementById("txtCiudadM").value = ciudad;

}