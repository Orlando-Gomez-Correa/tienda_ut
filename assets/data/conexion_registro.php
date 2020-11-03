<?php
    class Conexion{
        var $conn;
        
        function conectar(){
            $conn = null;
            try{
                $conn = new PDO('mysql:host=localhost;dbname=tienda_ut', 
                                    'root',
                                     '');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //echo 'Se estableció la conexión <br> <br>';
            }
            catch(PDOException $e){
                die( print_r('Error conectando a la base de datos:' 
                    . $e->getMessage()));
           }
           return $conn;
        }

        function insertarUsuario($user, $pass, $nombre, $correo){
            $con = $this->conectar(); //mandar llamar al metodo de conectar

            $consulta = 'INSERT INTO usuario 
                        (usuario, contrasena, nombre, correo_e)
                         VALUES (:user, :pass, :nom, :mail)'; 

            $stmt = $con->prepare($consulta);
            $stmt->execute(array(':user'=>$user,
                                ':pass'=>$pass,
                                ':nom'=>$nombre,
                                ':mail'=>$correo));
    
        }
    }

?>