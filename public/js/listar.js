$(document).ready(function(){
    // alert('hola')
    $.ajax({
        url: 'ajax/listar_aulas.php',
        dataType: 'json',        
    }).done(function(variable){
        console.log(variable)
        $.each(variable,function(index,value){
            // console.log(value)
            $('#idmitablita').append(`<tr id=${value.id}>
            <td>${value.aula}</td>
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
            <td><button id="botonactualizador" data-ida="${value.id}" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button></td>           
            <td><button id="btn-eliminar" data-ide="${value.id}">Eliminar</button></td>    
            <td><button type="button" class="btn btn-link">Reporte</button></td>            
            </tr>
            `)
        })
    })
})

$(document).on('click', '#btn-eliminar', function(){
    var amiguito=$(this).data('ide');

    $.ajax({
        url: 'ajax/eliminar.php',
        method:'POST',
        data: {chau:amiguito}
    }).done(function(respuesta){
        if(respuesta=="eliminadito"){
            $('#'+amiguito).remove()
        }else{
            alert("no quiere ser eliminado :V");
        }
    })
})

$(document).on('click', '#botonactualizador',function(){
    $("#formactualiza").trigger("reset");
    var mejor=$(this).data('ida');
    console.log(mejor);
    $.ajax({
        url: 'ajax/recuperar_datos.php',
        method: 'POST',
        data: {mas:mejor},
        dataType: "json",

    }).done(function(respuesta){
        var data = respuesta[0];

        // console.log(data)
        $('#botonactualizador').removeData();
        $('#botonactualizador').attr('data-actulizar', data.id)
        $('#idi').val(data.id)
        $('#aulai').val(data.aula)
        $('#capai').val(data.canPuerta)   
        $('#tsillai').val(data.tipSilla)  
        $('#tipei').val(data.tipEntrada) 
        $('#taburetei').val(data.taburete)  
        $('#pizi').val(data.pizarra)
        $('#proi').val(data.proyector)
        $('#pcai').val(data.pcAlumno)
        $('#pcdi').val(data.pcDocente)
        $('#puertasi').val(data.canPuerta)
        $('#veni').val(data.equVentilacion)
        $('#obsei').val(data.observacion)
        $('#estai').val(data.estado)
    })
})

$('#botoninsertar').on('click',function(){
    $("#formactualiza").trigger("reset");

})

$('#btnactuar').on('click',function(a){
    var datos1=$('#formactualiza').serialize();

    var id=$('#idi').val();
    var aul=$('#aulai').val();
    var capacida=$('#capai').val();
    var tipSill=$('#tsillai').val(); 
    var tipEntrad=$('#tipei').val(); 
    var taburet=$('#taburetei').val();  
    var pizarr=$('#pizi').val();
    var proyecto=$('#proi').val();
    var pcAlumn=$('#pcai').val();
    var pcDocent=$('#pcdi').val();
    var canPuerta=$('#puertasi').val();
    var equVentilacio=$('#veni').val();
    var observacio=$('#obsei').val();
    var estad=$('#estai').val();
    console.log(id);
    $.ajax({
        url: 'ajax/actualizar_aulitas.php',
        method: 'post',
        data: datos1
    }).done(function(respuest){
        if(respuest=="actualizado"){
            $('#exampleModal').modal("hide");      
            alert("actualizar aulas");
            $('#'+id).html(
                `
                <td>${aul}</td>           
                <td>${canPuerta}</td>
                <td>${capacida}</td>
                <td>${equVentilacio}</td>
                <td>${estad}</td>
                <td>${id}</td>
                <td>${observacio}</td>
                <td>${pcAlumn}</td>   
                <td>${pcDocent}</td>
                <td>${pizarr}</td>
                <td>${proyecto}</td>
                <td>${taburet}</td>   
                <td>${tipEntrad}</td> 
                <td>${tipSill}</td>
                <td><button id="botonactualizador" data-ida="${id}" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button></td>           
                <td><button id="btn-eliminar" data-ide="${id}">Eliminar</button></td>    
                <td><button type="button" class="btn btn-link">Reporte</button></td>    
                `
            );
            }else{
                alert("Aula insertada");
                $('#exampleModal').modal("hide");            
                if(id==""){
                    $('#idmitablita').append(`<tr id=${respuest}>
                    <td>${aul}</td>           
                        <td>${canPuerta}</td>
                        <td>${capacida}</td>
                        <td>${equVentilacio}</td>
                        <td>${estad}</td>
                        <td>${id}</td>
                        <td>${observacio}</td>
                        <td>${pcAlumn}</td>   
                        <td>${pcDocent}</td>
                        <td>${pizarr}</td>
                        <td>${proyecto}</td>
                        <td>${taburet}</td>   
                        <td>${tipEntrad}</td> 
                        <td>${tipSill}</td>
                        <td><button id="botonactualizador" data-ida="${respuest}" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button></td>           
                        <td><button id="btn-eliminar" data-ide="${respuest}">Eliminar</button></td>    
                        <td><button type="button" class="btn btn-link">Reporte</button></td>            
                    </tr>
                    `)
               
            }


        }
    })
    // location.reload();
})



