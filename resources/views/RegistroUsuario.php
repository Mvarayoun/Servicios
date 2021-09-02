<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossoring="anonymus">
    <link rel="stylesheet" href="resources/css/estilomenu.css">
    <link rel="stylesheet" href="../css/estiloRegistroUsuario.css">
    <title>Entrar</title>

</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form action="ClienteController.php" method="POST">
                    
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Registrar nuevo usuario</h1>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="Usuario" placeholder="Ingrese un Usuario">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="contraseña" placeholder="Ingrese una Contraseña">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese su Nombre">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" namer="apellido" placeholder="Ingrese su Apellido">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="direccion" placeholder="Ingrese su Direccion">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="email" placeholder="Ingrese un Correo Electronico">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="text" class="form-control" name="telefono" placeholder="Ingrese un Telefono">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="date" class="form-control" name="fechanacimiento" placeholder="Ingrese fecha de nacimiento">
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" name="terminosycondiciones" for="flexSwitchCheckDefault">Acepto Terminos y Condiciones</label>
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="submit" class="btn btn-block ingresar" name="ingresar" value="ACEPTAR">
                    </div>
                    <div class="form-group mx-sm-4">
                        <input type="button" class="btn btn-block volver" name="volver" onclick="history.go(-1)" value="VOLVER">
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