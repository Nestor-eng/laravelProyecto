/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function guardarCambios(){
    swal({
            title: "¿Deseas guardar los cambios?",
            text: "",
            type: "info",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#3c8dbc",
            confirmButtonText: "Aceptar",
            closeOnConfirm: false },

            function(){
                
               document.editAgente.submit();

            });    
}
