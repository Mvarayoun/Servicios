<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossoring="anonymus">
    <link rel="stylesheet" href="css/estilomenu.css">
    <link rel="stylesheet" href="../css/estiloRegistroServicio.css">
    <title>RegistroServicio</title>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Registrar nuevo Servicio</h1>
                    </div>
                    <div class="form-group text-center pt-3">
                        <h2 class="text-light">Datos del Prestador</h2>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese un Usuario">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese una Contraseña">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese su Apellido">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese un Correo Electronico">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese un Telefono">
                    </div>
                    <div class="form-group text-center pt-3">
                        <h2 class="text-light">Datos del Servicio</h2>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese el Nombre del Servicio">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese la Direccion del Servicio">
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Categoria del Servicio
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Plomeria</a>
                            <a class="dropdown-item" href="#">Peluqueria</a>
                            <a class="dropdown-item" href="#">Carpinteria</a>
                        </div>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" placeholder="Ingrese una Descripcion del Servicio" rows=5>
                    </div>
                    <div><label class="form-label" for="customFile">Ingrese una imagen para su Servicio</label>
                        <input type="file" class="form-control" id="customFile" />
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Acepto Terminos y Condiciones</label>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="btn btn-block ingresar" value="ACEPTAR">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="button" class="btn btn-block volver" onclick="history.go(-1)" value="VOLVER">
                    </div>
                </form>            
            </div>
        </div>
    </div>
    
    <script src="js\bootstrap.bundle.min.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
</body>
</html>