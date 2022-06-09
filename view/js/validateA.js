function validateA(e){
    e.preventDefault();
    formulario  = document.getElementById('frmAprendiz');
    nombre      = document.getElementById('txtNombreAp');
    apellido    = document.getElementById('txtFechan');
    usuario     = document.getElementById('txtSexo');
    clave       = document.getElementById('txtCiudad');
    
    lVali = true;
    
    if (nombre.value==""){
        nombre.style.borderColor="red";
        ohSnap('Ingresar el nombre...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (apellido.value==""){
        apellido.style.borderColor="red";
        ohSnap('Ingresar el fecha...', {color: 'red'},{duration:1000});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (usuario.value==""){
        usuario.style.borderColor="red";
        ohSnap('Ingresar el sexo...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (clave.value==""){
        clave.style.borderColor="red";
        ohSnap('Ingresar la ciudad...', {color: 'red'});  // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true){
        formulario.submit();
    }
    

}