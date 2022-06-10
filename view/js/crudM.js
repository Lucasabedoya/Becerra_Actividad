function erasem(obj){
    
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
    
            window.location="index.php?ruta=erasem&codigo="+codigo

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

function getDataM(obj){

    let codem = obj.children[0].innerHTML;
    let nombrec = obj.children[1].innerHTML;
    let costo = obj.children[2].innerHTML;
    let estado = obj.children[3].innerHTML;
    let codepro = obj.children[4].innerHTML;
    let codeapr = obj.children[5].innerHTML;
    let fecham = obj.children[6].innerHTML;

    document.getElementById("txtCodigoMM").value = codem;
    document.getElementById("txtNombreMM").value = nombrec;
    document.getElementById("txtCostoM").value = costo;
    document.getElementById("txtEstadoM").value = estado;
    document.getElementById("txtCodeproM").value = codepro;
    document.getElementById("txtCodeaprM").value = codeapr;
    document.getElementById("txtFechamM").value = fecham;

}