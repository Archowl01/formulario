<?php

   if (isset($_POST['boton1'])) {
          $nom= $_POST["name"];
          $ape = $_POST["Ape"];
          $rut = $_POST["rut"];
          $nac= $_POST["Nac"];
          $fechv= $_POST["FechV"];
          $sex= $_POST["Sex"];
          $dv= $_POST["dv"];
         
          require_once 'conectBD.php';     
          
          $op= new OperacionesMysql();
          $op->InsertarDato($nom, $ape, $rut, $nac, $fechv, $sex, $dv);
          
      }
   
      
      if (isset($_POST['boton3'])) {
          require_once 'conectBD.php';
          
          //Titulo de la imagen
            $titulo="imagen 1";
            //Descripción de la imagen
            $descripcion="Prueba";
            //Verifica si se ha subido la imagen
            if (is_uploaded_file($_FILES["imagen"]["tmp_name"])){
            //Verifica si el el formato de la imagen es JPEG o JPG
            //if ($_FILES["imagen"]["type"]=="image/jpeg"|| $_FILES["imagen"]["type"]=="image/jpg" ){
                //Obtiene información de la imagen
                $info=getimagesize($_FILES["imagen"]["tmp_name"]);

                //Obtiene el formato de imagen nuevamente para asignarlo al nombre
                $tipo=$_FILES["imagen"]["type"];
                //Asigna un nombre aleatorio
                $nom=md5(time().rand(500,100000),FALSE)."_.$tipo";


                //Guarda el contenido de la imagen codificado con base 64 
                $imagenEscapes=base64_encode(file_get_contents($_FILES["imagen"]["tmp_name"]));

                //Inserta en la base de datos 
                $op= new OperacionesMysql();
                $conexion=$op->conectar();
                $sql=$op->Imagen($imagenEscapes, $tipo, $info[0], $info[1], $nom, $titulo, $descripcion); 
                $consulta = mysqli_query($conexion,$sql);
                //Si la consulta imprime el error de la consulta 
                if(!$consulta){
                   print("MySQLI Error:".mysqli_error($conexion));
                }
                //De lo contrario regresa al index
                else{
                    echo 'imagen subida';
                }
            //}
            }
            
      }

