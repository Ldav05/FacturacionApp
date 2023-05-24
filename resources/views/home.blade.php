<!doctype html>
<html lang="en">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>    

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
</head>
<body>
   
    
        @if(session('mensaje'))
    <script>
        setTimeout(function() {
            document.getElementById('alerta').style.display = 'none';
        }, 3000); 
        
        window.onload = function() {
            document.getElementById('alerta').style.display = 'block';
        };
    </script>
    <div id="alerta" class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
    
    
    
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand">FacturaNet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout" onclick='return confirm ("¿Estas seguro de cerrar sesion?")'>Cerrar Sesion</a>
                        </li>
                </ul>
    
            </div>
        </div>
    </nav>
    <div class="cotainer mt-3" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Productos Disponibles</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <caption></caption>
                            <thead>
                                <thead class="thead-dark">
                                    <tr >
                                        <th>Id Producto</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @forelse($datos as $item)
                                        <tr scope="row">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>$   {{ $item->precio }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">No hay datos disponibles.</td>
                                        </tr>
                                        
                                    @endforelse
                                </tbody>
                          </table>    
                          <tfoot>
                            <div>
                                @if($datos->count())
                                    {{$datos->links()}}
                                    @endif
                              </div>
                              
                        </tfoot>
                          <div class="mx-auto my-3" style="width: 200px;">
                            <a><button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa-solid fa-trash">
                                Generar Venta
                            </i></button></a>
                       
                        </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Generar Venta</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('registrar-venta')}}">
                                @csrf
                                    <div class="form-group">
                                        <label for="Select1">Selecciona un Producto</label>
                                        <select class="form-control" name="producto">
                                            @foreach($datos as $item)
                                            <option>{{$item->nombre}}</option>
                                            @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="Select1">Nombre Vendedor</label>
                                        <select class="form-control" name="usuario">
                                            @foreach($usuario as $item)
                                            @if ($item->rolid == 2)
                                            <option>{{$item->nombre}}</option>
                                            @endif
                                            @endforeach
                                          </select>
                                      </div>
                                      <div class="form-group">
                                        <div class="form-control">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="habilitar" name="habilitar" > ¿Desea ingresar informacion personal?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" id="nombre"  name="nombre" >
                                      
                                        <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" id="apellido" name="apellido">
                                      
                                          <label for="exampleInputPassword1" class="form-label">Email</label>
                                          <input type="text" class="form-control" id="email" name="email">
                                        
                                          <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                          <input type="text" class="form-control" id="telefono" name="telefono">
                                        </div>
                                      <div class="my-1">
                                        <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-trash">Guardar</i></button>
                                      </div>  

                                      <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const checkbox = document.getElementById('habilitar');
                                            const input = document.getElementById('nombre');
                                            const input2 = document.getElementById('apellido');
                                            const input3 = document.getElementById('email');
                                            const input4 = document.getElementById('telefono');
                                            
                                            checkbox.addEventListener('change', function() {
                                                if (this.checked) {
                                                    input.removeAttribute('disabled');
                                                    input2.removeAttribute('disabled');
                                                    input3.removeAttribute('disabled');
                                                    input4.removeAttribute('disabled');
                                                } else {
                                                    input.setAttribute('disabled', 'disabled');
                                                    input2.setAttribute('disabled', 'disabled');
                                                    input3.setAttribute('disabled', 'disabled');
                                                    input4.setAttribute('disabled', 'disabled');
                                                }
                                            });
                                        });
                                    </script>
                                    
                                      
                              </form>
                        </div> 
                      </div>
                      
                    </div>
                    
                  </div>
                </div>

            </div>
        
            </div>
        </div>
    </div>
    </div>


</body>
</html>
