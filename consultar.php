<?php session_start();?>
<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../img/icono.ico">

    <title>Contactar</title>

    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>

<body>

    <?php 
    $fecha=date("d-m-Y");
    $hora= date("H:i:s");

    if(isset($_SESSION["autentificado"])){
            if($_SESSION["tipo_usuario"] == "cliente"){
                $destino= "lachocolateria00@gmail.com";
                $asunto="Nueva consulta de un cliente - La Chocolateria.";
                $desde=$_SESSION['mail'];
                $apellido=$_SESSION['apellido'];
                $nombre =$_SESSION['nombre'];
                $mail=$_SESSION['mail'];

                $comentario= "
                \n
                $asunto:\n\n
                Apellido: $apellido\n
                Nombre: $nombre\n
                Email: $mail\n
                Teléfono de Contacto: $_POST[tel]\n
                Mensaje: $_POST[consulta]\n
                Enviado el $fecha a las $hora\n";


                mail($destino,$asunto,$comentario,$desde);
                header ("Location: index.php");

            }
    }
    else
    {
        $destino= "lachocolateria00@gmail.com";
        $asunto="Nueva consulta de un usuario - La Chocolateria.";
        $desde=$_POST[email];

        $comentario= "
            \n
            $asunto\n\n
            Apellido y nombre: $_POST[nombre]\n
            Email: $_POST[email]\n
            Teléfono de Contacto: $_POST[tel]\n
            Mensaje: $_POST[consulta]\n
            Enviado el $fecha a las $hora\n";
        
            mail($destino,$asunto,$comentario,$desde);
            header ("Location: index.php");}
    ?> 
</body>
</html>