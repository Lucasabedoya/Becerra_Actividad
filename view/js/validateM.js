function validateM(e){
    e.preventDefault();
    formulario  = document.getElementById('frmMatricula');
    nombrec      = document.getElementById('txtNombrec');
    costo    = document.getElementById('txtCosto');
    estado     = document.getElementById('txtEstado');
    codepro       = document.getElementById('txtCodepro');
    codeapr       = document.getElementById('txtCodeapr');
    fecham       = document.getElementById('txtFecham');
    
    lVali = true;
    
    if (nombrec.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (costo.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el costo...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (estado.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el estado...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codepro.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la codigo programa...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codeapr.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la codigo aprendiz...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (fecham.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la fecha matricula...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}