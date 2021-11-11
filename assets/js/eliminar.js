function confirmarDelete(){
    var rpta= confirm("Esta seguro que desea eliminar?");

    if(rpta==true)
    {
        return true;
    }
    else{
        return false;
    }
}