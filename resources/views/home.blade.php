
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
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand">FacturaNet</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Cerrar Sesion</a>
                        </li>
                </ul>
    
            </div>
        </div>
    </nav>
    <div class="cotainer mt-5" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Productos Disponibles</div>
                    <div class="card-body">
                        <table class="table">
                            <caption></caption>
                            <thead>
                                <thead>
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
                                            <td>{{ $item->precio }}</td>
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
                            <a href=""><button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash">
                                Generar Venta
                            </i></button></a>
                       
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
