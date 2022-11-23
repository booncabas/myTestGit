<!-- <?php
session_start();
?> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta charset="UTF-8">
        <title>Sistema de facturación</title>
        <script src="view/js/jquery-2.1.4.js"></script>
        <script src="view/js/bootstrap.js"></script>
        <script src="view/js/bootstrap-table.js"></script>
        <link href="view/css/bootstrap.css" rel="stylesheet">
        <link href="view/css/bootstrap-table.css" rel="stylesheet">
</head>
<body>
        <div class="container">
            <img src="view/images/banner-facturacion.jpg">
            <div class="row">
                <h2 align="center">Sistema de Facturación ggggg</h2>
            </div>
            <div class="row">
                    <table width="507" border="1" align="center">
                      <tr>
                        <td height="60" colspan="3" align="center">INICIAR SESIÓN</td>
                      </tr>
                      <tr>
                        <td width="122" align="center">USUARIO</td>
                        <td width="192" align="center">NOMBRE DE USUARIO</td>
                        <td width="171" align="center">CONTRASEÑA</td>
                      </tr>
                    <form action="controller/controller.php">
                    <input type="hidden" name="opcion" value="iniciar_sesion" >
                      <tr>
                        <td width="122" align="right">
                        <select name="tipoUsu" required="true">
                            <option value="vendedor">vendedor</option>"
                            <option value="administrador">administrador</option>"               
                        </select></td>
                        <td><input type="text" name="nombreUsu" required="true" /></td>
                        <td><input type="password" name="claveUsu" required="true"/></td>
                      </tr>
                      <tr>
                        <td height="44" colspan="3" align="center">
                        <input class="btn btn-primary"  value="Ingresar" type="submit" name="guardar"/></td>
                      </tr>
                     </form>
                    
                    </table>            
            
                <!--a class="btn btn-primary" href="../controller/controller.php?opcion=listar_clientes">Clientes</a-->
            </div>
        </div>
    </body>
</html>