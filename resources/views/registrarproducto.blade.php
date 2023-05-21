
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
            <a class="navbar-brand">FacturaNet</a>
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
                    <div class="card-header">Registrar Productos</div>
                    <div class="card-body">
                        <form method="post" action="{{route('registrar-producto')}}">
                            @csrf
                            <div class="mb-3">
                              <label  class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="nombre"  name="nombre" required>
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Precio</label>
                              <input type="text" class="form-control" id="precio" name="precio" required>
                            </div>
                            <div class="form-group">
                                <label for="Select1">Seleciona la Disponibilidad</label>
                                <select class="form-control" id="Disponibilidad" name="Disponibilidad">
                                  <option >Seleciona la Disponibilidad</option>
                                  <option >Disponible</option>
                                  <option >No Disponible</option>
                                </select>
                              </div>
                              <div class=" mx-sm-auto my-3" style="width: 250px;">
                                <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-trash">Guardar Producto</i></button>
                              </div>  
                          </form>
                          
                        </div>
       
                    </div>
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
</html>