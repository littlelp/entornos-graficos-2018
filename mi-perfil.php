<?php

include_once ("includes/cabecera.php");
$sql1 = "select u.idUsuario as 'idUsuario', u.nombre as 'nombre', u.apellido as 'apellido', u.usuario as 'user', u.contrasena as 'contrasena',
u.email as 'email'
            from usuario u
            where u.idUsuario=" . $_SESSION["idUsuario"];

$rs1 = mysqli_query($db, $sql1);
$r = mysqli_fetch_array($rs1);
?>
<div class= "container-fluid">
    <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 style="text-align:center" >Mi Perfil</h1>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
                <form id = "formModificarPerfil" action="editar-perfil.php" method="post">
                    <div class="md-form">
                        <i class="fa  fa-male  prefix"></i>
                        <input  type="text" id="Nombre" name="Nombre" value="<?php  echo $r["nombre"]; ?>" class="form-control validate" maxlength="30" required>
                        <label for="Nombre">Nombre:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa  fa-male  prefix"></i>
                        <input type="text" id="Apellido" name="Apellido" value="<?php  echo $r["apellido"]; ?>" class="form-control validate" maxlength="30" required>
                        <label for="Apellido">Apellido:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="Email" name="Email" value="<?php  echo $r["email"]; ?>" class="form-control validate" maxlength="40" required>
                        <label for="Email">E-Mail:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="usuario" name="usuario" value="<?php  echo $r["user"]; ?>" class="form-control validate" maxlength="15" required>
                        <label for="Usuario">Usuario:</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-key prefix"></i>
                        <input type="password" id="contrasena" name="contrasena" class="form-control validate" maxlength="20" required>
                        <label for="contrasena">Contraseña:</label>
                    </div>
                    <p style="text-align:center" ><button type="submit" id="btnModificarPerfil"class="btn btn-default btn-rounded">Modificar</button></p>																	
                </form>            
            </div>
        </div>
    </div>
</div>
<?php 
include_once ("includes/pie.php");
?>