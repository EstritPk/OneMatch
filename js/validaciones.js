function validarLoginU(){

    if(document.formlog.usern.value == ""){
        alert("Debe Ingresar Nombre de Usuario");
        document.formlog.usern.focus();
        return false;
    }
    if(document.formlog.claveuser == ""){
        alert("Debe Ingresar Clave de Usuario");
        document.formlog.claveuser.focus();
        return false;
    }
    document.formlog.submit();
}