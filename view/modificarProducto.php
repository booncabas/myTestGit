<!DOCTYPE html>
<?php
require_once '../model/Producto.php';
session_start();
$producto=$_SESSION['productoModi'];
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
                <h3 align="center">Modificar datos del Clientes</h3>
            </div>
            <div class="row">
                <a class="btn btn-primary" href="../view/index.php">Inicio</a>
            </div>
          
            <p>
            
               <form action="../controller/controller.php">
                    <input type="hidden" name="opcion" value="guardar_productoModi">
                    Código del Producto:<input type="text" name="idProducto"    maxlength="50" required="true" value="<?php echo $producto->getIdProducto(); ?>">
                                 Nombre:<input type="text" name="nombre"        maxlength="50" required="true" value="<?php echo $producto->getNombre(); ?>">
                                 Precio:<input type="text" name="precio"        maxlength="10" required="true" value="<?php echo $producto->getPrecio();?>">
                                 I.V.A.:<input type="text" name="porcentajeIva" maxlength="5" required="true" value="<?php echo $producto->getPorcentajeIva(); ?>">
                    <input type="submit" class="btn btn-warning" value="Modificar">
                </form>
            </p>
            <p>    
                <form action="../controller/controller.php">
                    <input type="hidden" name="opcion" value="eliminar_productoModi">
                    <input type="hidden" name="idProducto" value="<?php echo $producto->getIdProducto(); ?>">
                    <input type="submit" class="btn btn-danger"value="Eliminar Producto" align="right">
                </form>
            </p>

        </div>
    </body>
</html>
