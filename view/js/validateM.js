function validateM(e){
    e.preventDefault();
    formulario  = document.getElementById('frmMatricula');
    nombre      = document.getElementById('txtNombrec');
    costo      = document.getElementById('txtCosto');
    estado      = document.getElementById('txtEstado');
    codepro     = document.getElementById('txtCodepro');
    codeapr     = document.getElementById('txtCodeapr');
    fecham      = document.getElementById('txtFecham');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (costo.value==""){
        costo.style.borderColor="red";
        ohSnap('Ingresar el costo...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (estado.value==""){
        estado.style.borderColor="red";
        ohSnap('Ingresar el estado...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codepro.value==""){
        codepro.style.borderColor="red";
        ohSnap('Ingresar la codigo programa...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codeapr.value==""){
        codeapr.style.borderColor="red";
        ohSnap('Ingresar la codigo aprendiz...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (fecham.value==""){
        fecham.style.borderColor="red";
        ohSnap('Ingresar la fecha matricula...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}

function validateMModify(e){
    e.preventDefault();
    formulario  = document.getElementById('frmMatriculaModificar');
    nombrec      = document.getElementById('txtNombreMM');
    costo    = document.getElementById('txtCostoM');
    estado     = document.getElementById('txtEstadoM');
    codepro       = document.getElementById('txtCodeproM');
    codeapr       = document.getElementById('txtCodeaprM');
    fecham       = document.getElementById('txtFechamM');
    
    lVali = true;
    
    if (nombrec.value==""){
        nombrec.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (costo.value==""){
        costo.style.borderColor="red";
        ohSnap('Ingresar el costo...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (estado.value==""){
        estado.style.borderColor="red";
        ohSnap('Ingresar el estado...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codepro.value==""){
        codepro.style.borderColor="red";
        ohSnap('Ingresar el codigo Programa...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (codeapr.value==""){
        codeapr.style.borderColor="red";
        ohSnap('Ingresar el codigo Aprendiz...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (fecham.value==""){
        fecham.style.borderColor="red";
        ohSnap('Ingresar la fecha Matricula...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}

if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}