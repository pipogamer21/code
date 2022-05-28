<html>
    <head>
        <title>php</title>
    </head>
    <body>
        <form method="POST" action="index.php" id="request" class="main_form" autocomplete="on">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre Completo" type="text" name="full_name" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Teléfono" type="tel" name="tel" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email" required>                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="contactus" placeholder="Mensaje" name="textarea" type="textarea" Message="Name">Mensaje </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
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
            $consulta = "INSERT INTO INFORMACION_PERSONAL (NOMBRE_COMPLETO,TELEFONO,EMAIL,MENSAJE)VALUES('$nombre_completo','$tel','$email','$texto')";
            #ponemos la información de conexión en otra (ip/nombreDNS,usuario,contraseña,nombre base de datos)
            $con=new mysqli('mysql:3306','root','proyecto','CLUSTERS');
            # hacemos la consulta con los datos de la conexión
            mysqli_query($con , $consulta);
            # cerramos conexión
            mysqli_close($con);
        ?>
    </body>
</html>
