function validateA(e){
    e.preventDefault();
    formulario  = document.getElementById('frmAprendiz');
    nombre      = document.getElementById('txtNombreAp');
    fechan      = document.getElementById('txtFechan');
    sexo        = document.getElementById('txtSexo');
    ciudad      = document.getElementById('txtCiudad');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechan.value==""){
        fechan.style.borderColor="red";
        ohSnap('Ingresar el fecha...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value==""){
        sexo.style.borderColor="red";
        ohSnap('Ingresar el sexo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value==""){
        ciudad.style.borderColor="red";
        ohSnap('Ingresar la ciudad...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }

    }

    function validateAModify(e){
        e.preventDefault();
        formulario  = document.getElementById('frmAprendizModificar');
        nombre      = document.getElementById('txtNombreAM');
        fecha    = document.getElementById('txtFechanM');
        sexo     = document.getElementById('txtSexoM');
        ciudad       = document.getElementById('txtCiudadM');
        
        lVali = true;
        
        if (nombre.value==""){
            nombre.style.borderColor="red";
            ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
            lVali = false;
        }
        if (fecha.value==""){
            fecha.style.borderColor="red";
            ohSnap('Ingresar el fecha...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
            lVali = false;
        }
        if (sexo.value==""){
            sexo.style.borderColor="red";
            ohSnap('Ingresar el sexo...', {color: 'red'});  // alert will have class 'alert-color'
            lVali = false;
        }
        if (ciudad.value==""){
            ciudad.style.borderColor="red";
            ohSnap('Ingresar la ciudad...', {color: 'red'});  // alert will have class 'alert-color'
            lVali = false;
        }
        if (lVali == true){
            formulario.submit();
        }
    

    }

if (window.history.replaceState) { // verificamos disponibilidad
    window.history.replaceState(null, null, window.location.href);
}