<html>
    <head>
        <title>php</title>
    </head>
    <body>
        <?php
            #cogemos datos del formulario y los ponemos en variables
            $nombre_completo=$_POST["full_name"];
            $tel=$_POST["tel"];
            $email=$_POST["email"];
            $texto=$_POST["textarea"];
            echo $nombre_completo;
            echo $tel;
            echo $email;
            echo $texto;

            #ponemos la consulta en una variable
            $consulta = "INSERT INTO informacion_personal (nombre_completo,telefono,email,mensaje)VALUES('$nombre_completo','$tel','$email','$texto')";
            #ponemos la información de conexión en otra (ip/nombreDNS,usuario,contraseña,nombre base de datos)
            $con=new mysqli('localhost','root','','clusters');
            # hacemos la consulta con los datos de la conexión
            mysqli_query($con , $consulta);
            # cerramos conexión
            mysqli_close($con);
        ?>
    </body>
</html>