<?php
   //conexion a base de datos
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "prueba";
   
   $conn = new mysqli($servername, $username, $password, $dbname);
   if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   };

   $codigo = $_GET['id'];
   $sql = "SELECT id,estado,dato FROM prueba WHERE codigo='$codigo'";
   // selecciona los atributos de la fila de la tabla que se desea mostrar, se mostrara los atributos de la fila
   // en donde el codigo es igual al codigo ingresado
   $result = $conn->query($sql);

   if ($result->num_rows > 0) 
   {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["estado"]. " - dato: " . $row["dato"];
        };
   } 
   else 
   {
        echo "no found :(";
   }
   $conn->close();
?>