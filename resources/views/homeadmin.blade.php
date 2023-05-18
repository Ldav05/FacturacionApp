

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    

    <title>Admin</title>
</head>
<body>
    
    <div class="cotainer">
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
                                </tr>
                            @endforelse
                            </tbody>
                          </table>
                          <div>
                            @if($datos->count())
                            {{$datos->links()}}
                                @endif
                            </div>       
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="falses">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                          <label for="exampleInputEmail1" class="form-label">Nombre</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputPassword1" class="form-label">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                            <button type="button" class="btn btn-primary">Guardar Cambios</button>
                                          </div>
                                      </form>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                          <div>
                            <a href="{{route('login')}}"><button type="submit" class="btn btn-warning">
                                Salir
                            </button></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>









</body>
</html>