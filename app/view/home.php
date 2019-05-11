<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body>
    <!-- Botón normal -->   
    <button id="botoninsertar" type="button" class="btn btn-default" data-target="#exampleModal" data-toggle="modal">Insertar</button>

    <!-- Indica una acción exitosa o positiva -->
    <!-- <button type="button" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button>   -->

    <!-- Indica una acción negativa o potencialmente peligrosa -->
    <!-- <button id="botonparaeliminar" type="button" class="btn btn-danger">Eliminar</button> -->

    <!-- Resta importancia al botón haciéndolo parecer un simple enlace,
        aunque conserva tu comportamiento original de botón -->
    <button type="button" class="btn btn-link">Reporte</button>
    <!-- hola...! -->
    <div class="container-fluid mt-2 ">
        <div class="row">
            <div class="col-md-12">
                <table id="idmitablita" class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>AULAS</th>
                            <th>PUERTAS</th>
                            <th>CAPACIDAD</th>
                            <th>VENTILACION</th>
                            <th>ESTADO</th>
                            <th>ID</th>
                            <th width="20%">OBSERVACION</th>
                            <th>ALUMNO</th>
                            <th>DOCENTE</th>
                            <th>PIZARRA</th>
                            <th>PROYACTOR</th>
                            <th>TABURETE</th>
                            <th>ENTRADA</th>
                            <th>SALIDA</th>
                            <th>ACTUALIZAR</th>
                            <th>ELIMINAR</th>                            
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- formulario     -->
        <form autocomplete="off" name="formactualiza" id="formactualiza" >           
            <div class="form-row">           
                <div class="form-group col-md-6">
                    <label>ID:</label>
                    <input type="text" class="form-control" name="idn" id="idi" readonly="readonly">
                </div>
                <div class="form-group col-md-6">
                    <label>AULA:</label>
                    <input type="text" class="form-control" name="aulan" id="aulai">
                </div>            
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>CAPACIDAD:</label>
                    <input type="text" class="form-control" name="capan" id="capai">
                </div>
                <div class="form-group col-md-6">
                    <label>TIPO DE SILLA:</label>
                    <input type="text" class="form-control" name="tsillan" id="tsillai">
                </div>               
            </div>
            <div class="form-row">
                <div class="form-group col-md-6"> 
                    <label>TIPO DE ENTRADA:</label>              
                <input type="text" class="form-control"  name="tipen" id="tipei">
                </div>
                <div class="form-group col-md-6"> 
                    <label>TABURETE:</label>              
                <input type="text" class="form-control"  name="tabureten" id="taburetei">
                </div>           
            </div>
            <div class="form-row">            
                <div class="form-group col-md-6"> 
                    <label>PIZARRA:</label>              
                <input type="text" class="form-control"  name="pizan" id="pizi">
                </div>
                <div class="form-group col-md-6"> 
                    <label>PROYECTOR:</label>              
                <input type="text" class="form-control"  name="pron" id="proi">
                </div>
            </div>        
            <div class="row">            
                <div class="col-sm-4"> 
                    <label>PC ALUMNO:</label>              
                <input type="text" class="form-control col-md-11"  name="pcai" id="pcai">
                </div>
                <div class="form-group col-md-6"> 
                    <label>PC DOCENTE:</label>              
                <input type="text" class="form-control"  name="pcdi" id="pcdi">
                </div>
            </div>  
            <div class="form-row">            
                <div class="form-group col-md-6"> 
                    <label>PUERTAS:</label>              
                <input type="text" class="form-control"  name="puertasn" id="puertasi">
                </div>
                <div class="form-group col-md-6"> 
                    <label>VENTILACION:</label>              
                <input type="text" class="form-control"  name="venn" id="veni">
                </div>
            </div>  
            <div class="form-row">            
                <div class="form-group col-md-6"> 
                    <label>OBSERVACION:</label>              
                <input type="text" class="form-control"  name="obsen" id="obsei">
                </div>
                <div class="form-group col-md-6"> 
                    <label>ESTADO:</label>              
                <input type="text" class="form-control"  name="estan" id="estai">
                </div>
            </div>  
        </form>
        <!-- formulario -->
      </div>     
    </div>
  </div>
</div>
    <script src="public/js/listar.js"></script>
</body>
</html>