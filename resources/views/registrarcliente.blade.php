
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
                        <a class="nav-link" href="{{route('clientes')}}">Ir a Clientes</a>
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
                    <div class="card-header">Registrar Cliente</div>
                    <div class="card-body">
                        <form method="post" action="{{route('registrar-cliente')}}">
                            @csrf
                            <div class="mb-3">
                              <label  class="form-label">Nombre</label>
                              <input type="text" class="form-control" id="nombre"  name="nombre">
                            </div>
                            <div class="mb-3">
                              <label class="form-label">Apellido</label>
                              <input type="text" class="form-control" id="apellido" name="apellido">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>
                              <div class="">
                                <button type="submit" class="btn btn-primary" ><i class="fa-solid fa-trash">Registrar</i></button>
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