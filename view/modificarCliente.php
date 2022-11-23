<!DOCTYPE html>
<?php
require_once '../model/Cliente.php';
session_start();
$cliente=$_SESSION['clienteModi'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Facturación - clientes</title>
        <script src="js/jquery-2.1.4.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-table.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-table.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <img src="images/banner-facturacion.jpg">
            <div class="row">
                <h3>Modificar datos del Clientes</h3>
            </div>
            <div class="row">
                <a class="btn btn-primary" href="../view/index.php">Inicio</a>
            </div>
          
            <p>
                <form action="../controller/controller.php">
                    <input type="hidden" name="opcion" value="guardar_clienteModi">
                    Cédula:<input type="text" name="cedula" maxlength="10" required="true" value="<?php echo $cliente->getCedula(); ?>">
                    Apellidos:<input type="text" name="apellidos" maxlength="50" required="true" value="<?php echo $cliente->getApellidos();?>">
                    Nombres:<input type="text" name="nombres" maxlength="50" required="true" value="<?php echo $cliente->getNombres();?>">
                    Direccion:<input type="text" name="direccion" maxlength="100" value="<?php echo $cliente->getDireccion(); ?>">
                    <input type="submit" class="btn " value="Modificar">
                </form>
            </p>
            <p>
                <form action="../controller/controller.php">
                    <input type="hidden" name="opcion" value="eliminar_clienteModi">
                    <input type="hidden" name="cedula" value="<?php echo $cliente->getCedula(); ?>">
                    <input type="submit" class="btn " value="Eliminar Cliente">
                </form>
            </p>

        </div>
    </body>
</html>
