

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    

    <title>FacturaNet Admin</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand">FacturaNet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('clientes')}}">Ir a Clientes</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Cerrar Sesion</a>
                        </li>
                    
                </ul>
    
            </div>
        </div>
    </nav>

    <div class="cotainer mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Productos</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Id Producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Disponibilidad</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse($datos as $item)
                                <tr scope="row">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>${{ $item->precio }}</td>
                                    @if ($item->Disponibilidad >= 1)
                                    <td>Disponible</td>
                                    @endif
                                    @if ($item->Disponibilidad  == 0)
                                    <td>No Disponible</td>
                                    @endif
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square">Editar</i></button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash">Eliminar</i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No hay datos disponibles.</td>
                                </tr
                            @endforelse
                            </tbody>
                          </table>
                          <div>
                            @if($datos->count())
                            {{$datos->links()}}
                                @endif
                            </div>  
                            
                            <!-- Model Para editar de productos -->
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                              <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                              <input type="email" class="form-control" id="nombre"  name="nombreEP">
                                            </div>
                                            <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">Precio</label>
                                              <input type="text" class="form-control" id="precio" name="precioEP">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Seleciona la Disponibilidad</label>
                                                <select class="form-control" id="Disponibilidad" name="DisponibilidadEP">
                                                  <option>Disponible</option>
                                                  <option>No Disponible</option>
                                                </select>
                                              </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-trash">Salir</i></button>
                                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa-solid fa-trash">Modificar</i></button>
                                              </div>
                                          </form>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                    </div> 
                    
                    <!-- Model Para registro de productos -->
                    
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Registro de Producto</h5>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{route('registrar-producto')}}">
                                    @csrf
                                    <div class="mb-3">
                                      <label  class="form-label">Nombre</label>
                                      <input type="text" class="form-control" id="nombre"  name="nombreRp">
                                    </div>
                                    <div class="mb-3">
                                      <label class="form-label">Precio</label>
                                      <input type="text" class="form-control" id="precio" name="precioRp">
                                    </div>
                                    <div class="form-group">
                                        <label >Ingrese la Disponibilidad</label>
                                        <input type="text" class="form-control" id="Disponibilidad" name="DisponibilidadRp">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal">Registrar</button>
                                      </div>  
                                  </form>
                            </div>
                            
                          </div>
                        </div>
                        
                      </div>
                      <div class="mx-auto my-3" style="width: 200px;">
                        <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn btn-primary "><i class="fa-solid fa-pen-to-square">Añadir Producto</button>
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>









</body>
</html>