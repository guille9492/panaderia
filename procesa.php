<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
</head>
<body>
    <?php
        //Recogemos datos de los formularios

        //De clientes
        $Nombre = $_POST["Nombre"];

        //De Panes
        $Nombrepan = $_POST["Nombrepan"];
        $Cantidad = $_POST["Cantidad"];

        //De pedidos
        $Cantidadpan = $_POST["Cantidadpan"];

        //conexión a la base de datos
        $servername = 'localhost';
        $username = 'usuario';
        $password = 'usuario';

        $conn = new mysqli($servername, $username, $password);

        if (!$conn){
            echo "Conexión fallida";
         } else {
            echo "Conexión Exitosa" . "<br>";
         }

         // Seleccionar base de datos
         mysqli_select_db ($conn, "panaderia");

         //creamos la sentencia SQL de inserción para clientes, la ejecutamos y cerramos
        
        
        $insertarcliente = "INSERT clientes (nombre) 
                            VALUES ('$Nombre')";

        if ($Nombre) {
            if (mysqli_query($conn,$insertarcliente)) {
                echo "Insersión de datos exitosa" . "<br>";
            } else {
                echo "No se pudieron insertar los datos" . "<br>";
            }
        }
        
       // $insertarlibro->close();
        
       
        //Ejecutamos la sentencia SQL para panes, la ejecutamos y cerramos
       
        $insertarpan = "INSERT pan (nombre,cantidad)
                            VALUES ('$Nombrepan','$Cantidad')";

        if ($Nombrepan) {
            if (mysqli_query($conn,$insertarpan)) {
                echo "Insersión de datos exitosa". "<br>";
            } else {
                echo "No se pudieron insertar los datos";
            }
        }

       // $insertarusuario->close();

        //creamos la sentencia SQL de inserción para pedidos, la ejecutamos y cerramos
        
        
        $insertarpedido= "INSERT pedidos (cantidad) 
                            VALUES ('$Cantidadpan')";

        if ($Nombre) {
            if (mysqli_query($conn,$insertarpedido)) {
                echo "Insersión de datos exitosa" . "<br>";
            } else {
                echo "No se pudieron insertar los datos" . "<br>";
            }
        }
        
    //cerrar conexión
       $conn->close();

    ?>
</body>
</html>
