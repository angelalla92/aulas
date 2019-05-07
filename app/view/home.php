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
    <button type="button" class="btn btn-default" data-target="#exampleModal" data-toggle="modal">Insertar</button>

    <!-- Indica una acción exitosa o positiva -->
    <button type="button" class="btn btn-success" data-target="#exampleModal" data-toggle="modal">actualizar</button>  

    <!-- Indica una acción negativa o potencialmente peligrosa -->
    <button id="botonparaeliminar" type="button" class="btn btn-danger">Eliminar</button>

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
                            
                            <th></th>
                            <th></th>
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
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script src="public/js/listar.js"></script>
</body>
</html>