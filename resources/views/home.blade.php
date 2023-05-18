
<!doctype html>
<html lang="en">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
</head>
<body>

    <div class="cotainer">
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
                          
                          <div>
                            <a href=""><button type="submit" class="btn btn-primary">
                                Generar Venta
                            </button></a>
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
    </div>


</body>
</html>
