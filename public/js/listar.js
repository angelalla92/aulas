$(document).ready(function(){
    // alert('hola')
    $.ajax({
        url: 'ajax/listar_aulas.php',
        dataType: 'json',        
    }).done(function(variable){
        // console.log(variable)
        $.each(variable,function(index,value){
            // console.log(value)
            $('#idmitablita').append(`<tr id=${value.id}>
            <th >${value.aula}</th>
            <td>${value.canPuerta}</td>
            <td>${value.capacidad}</td>
            <td>${value.equVentilacion}</td>
            <td>${value.estado}</td>
            <td>${value.id}</td>
            <td>${value.observacion}</td>
            <td>${value.pcAlumno}</td>
            <td>${value.pcDocente}</td>
            <td>${value.pizarra}</td>
            <td>${value.proyector}</td>
            <td>${value.taburete}</td>
            <td>${value.tipEntrada}</td>
            <td>${value.tipSilla}</td>
            <td><button type="button" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button>  
            </td>
            <td><button id="botonparaeliminar" type="button" class="btn btn-danger data-idd="${value.id}">Eliminar</button>
            </td>
            <td><button type="button" class="btn btn-link">Reporte</button>
            </td>            
            </tr>
            `)
        })
    })
})

$(document).on('cick', '#botonparaeliminar', function(){
    var amiguito=$(this).data('idd');
    $.ajax({
        url: 'ajax/eliminar.php',
        method:'post',
        data: {chau: amiguito}
    }).done(function(respuesta){
        if(respuesta=="eliminadito:p"){
            $('#'+amiguito).remove()
        }else{
            alert("no quiere ser eliminado :V");
        }
    })
})