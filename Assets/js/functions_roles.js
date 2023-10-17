var tableRoles;
document.addEventListener('DOMContentLoaded', function(){
    tableRoles=$('#tableRoles').DataTable({
        "aProcessing":true,
        "aServerSide":true, 
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json",
        },
        "ajax": {
            "url": " " +base_url+ "/Roles/getRoles",
            "dataSrc": ""
        },

        "columns":[
            {"data": "idrol"},
            {"data": "nombrerol"},
            {"data": "descripcion"},
            {"data": "estado"},
            {"data": "options"}

            
   
        ],
        
        "resonsieve":"true",
        "bDestroy":true,
        "iDisplay length":10, 
        "order": [[0, "desc"]]
    });


    

//Capturamos los datos del formRol con Ajax 
var formRol = document.querySelector("#formRol"); 
formRol.onsubmit = function(e) {
    e.preventDefault();
var strNombre = document.querySelector('#txtNombre').value;
var strDescripcion = document.querySelector('#txtDescripcion').value; 
var intStatus = document.querySelector('#listStatus').value; 
if(strNombre == '' || strDescripcion == '' || intStatus == '')
{
swal("Atención", "Todos los campos son obligatorios.", "error"); 
return false;
}

var request = (window.XMLHttpRequest)? new XMLHttpRequest(): new ActiveXObject('Mi');
var ajaxUrl = base_url+'/Roles/setRol';
var formData = new FormData(formRol);
request.open("POST", ajaxUrl, true);
request.send(formData);
request.onreadystatechange = function(){
if(request.readyState== 4 && request.status == 200){

    console.log(request);

}

}
}
});


$('#tableRoles').DataTable();

function openModal(){
    $('#modalFormRol').modal('show');
}

function closeModal(){
    $('#modalFormRol').modal('hide');
}