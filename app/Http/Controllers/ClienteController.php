<?php
include 'con';
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ClienteController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    $IDUsuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $Nombre = $_POST["nombre"];
    $Apellido = $_POST["apellido"];
    $Direccion = $_POST["direccion"]; 
    $Email = $_POST["email"];
    $Telefono = $_POST["telefono"];
    $FechaNacimiento = $_POST["fechanacimiento"];

    $insertarUsuario = "INSERT INTO usuario(usuario, contraseña, nombre, apellido, direccion, email, telefono, fechanacimiento)
    values ('$IDUsuario',  '$contraseña', '$Nombre', '$Apellido', '$Direccion', '$Email', '$Telefono', '$FechaNacimiento')";

    $resultado = mysqli_query($insertarUsuario);


}


