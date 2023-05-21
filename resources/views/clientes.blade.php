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
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand fs-">FacturaNet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('homeadmin')}}">Ir a Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Cerrar Sesion</a>
                    </li>
                </ul>
    
            </div>
        </div>
    </nav>
    <div class="cotainer mt-3" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tabla de Clientes</div>
                    <div class="card-body">
                        <table class="table">
                            <caption></caption>
                            <thead>
                                <thead>
                                    <tr >
                                        <th>Id Cliente</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($datos as $item)
                                        <tr scope="row">
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nombre }}</td>
                                            <td>{{ $item->apellido }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->telefono }}</td>
                                            <td>
                                                <button type="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square">Editar</i></button>
                                                <a href="{{route("eliminar-cliente","$item->id")}}" onclick='return confirm ("¿Estas seguro de eliminar cliente?")' class="btn btn-danger btn-sm"><i class="fa-solid fa-trash">Eliminar</i></a>
                                            </td>
                                        </tr>
                                        
                                        <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body" >
                                                    <form method="POST" action="{{route('editar-cliente')}}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Id Cliente</label>
                                                            <input type="text" class="form-control" id="id"  name="id" value="{{ $item->id }}" readonly>
                                                          </div>
                                                        <div class="mb-3">
                                                          <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                          <input type="text" class="form-control" id="nombre"  name="nombre" value="{{ $item->nombre }}">
                                                        </div>
                                                        <div class="mb-3">
                                                          <label for="exampleInputPassword1" class="form-label">Apellido</label>
                                                          <input type="text" class="form-control" id="apellido" name="apellido" value=" {{$item->apellido}}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Email</label>
                                                            <input type="text" class="form-control" id="email" name="email" value="{{ $item->email }}">
                                                          </div>
                                                          <div class="mb-3">
                                                            <label for="exampleInputPassword1" class="form-label">Telefono</label>
                                                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $item->telefono }}">
                                                          </div>
                                                          <div class="mx-1">
                                                            <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-trash">Modificar</i></button>
                                                          </div>
                                                      </form>
                                                </div> 
                                              </div>
                                              
                                            </div>
                                            
                                          </div>
                                    @endforeach
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
                            <a href="{{route('registrarcliente')}}"><button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash">
                                Registrar Nuevo Cliente
                            </i></button></a>
                        </div>
                        
                    </div>
                    
                </div>
                <!-- Modelo para editar CLientes -->
            </div>
            
            <!-- Modelo para Añadir Clientes --> 
        </div>
    </div>
    </div>


</body>
</html>