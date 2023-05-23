

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
    @if(session('mensaje'))
    <div class="alert alert-success">
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
                    <div class="card-header">Tabla de Productos</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Id Producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Disponibilidad</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($datos as $item)
                                <tr scope="row">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td>${{ $item->precio }}</td>
                                    @if ($item->Disponibilidad == 1)
                                    <td>Disponible</td>
                                    @endif
                                    @if ($item->Disponibilidad  == 0)
                                    <td>No Disponible</td>
                                    @endif
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#exampleModal{{ $item->id }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square">Editar</i></button>
                                        <a href="{{route("eliminar-producto","$item->id")}}" onclick='return confirm ("¿Estas seguro de eliminar producto?")' class="btn btn-danger btn-sm"><i class="fa-solid fa-trash">Eliminar</i></a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{route('editar-producto')}}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Id Producto</label>
                                                    <input type="text" class="form-control" id="id"  name="id" value="{{ $item->id }}" readonly>
                                                  </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                                  <input type="text" class="form-control" id="nombre"  name="nombre" value="{{ $item->nombre }}">
                                                </div>
                                                <div class="mb-3">
                                                  <label for="exampleInputPassword1" class="form-label">Precio</label>
                                                  <input type="text" class="form-control" id="precio" name="precio" value="{{ $item->precio }}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Disponibilidad</label>
                                                    <input type="text" placeholder="Ingrese Disponible o No Disponible" class="form-control" id="Disponibilidad" name="Disponibilidad" 
                                                    @if($item->Disponibilidad == 1)
                                                    value="Disponible"
                                                    @else
                                                    value="No Disponible"
                                                    @endif
                                                    >
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
                          <div>
                            @if($datos->count())
                            {{$datos->links()}}
                                @endif
                            </div>  
                            
                            <!-- Model Para editar de productos -->
                            <div class="mx-auto my-4" style="width: 200px;">
                                <a href="{{route('registrarproducto')}}"><button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash">
                                    Registrar nuevo Producto
                                </i></button></a>
                    </div> 
                    
                    <!-- Model Para registro de productos -->
                    
                   
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>









</body>
</html>