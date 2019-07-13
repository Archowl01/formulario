<?php

 class OperacionesMysql
    {
        private $_host = "localhost:8080";
        private $_db_name = "multimedia";
        private $_user = "root";
        private $_pass = "";
        
         public function  conectar()
        {
            $con= mysqli_connect($this->_host, $this->_user, $this->_pass, $this->_db_name) or die ('No se conecta');
            return $con;
        }

        public function InsertarDato($nom,$ape,$rut,$nac,$fechav,$sex,$dv)
        {

            $sql = "INSERT INTO datos (nombre,Apellido,rut,nacionalidad,FechVec,sexo,dv) VALUES ('$nom',"
                    . "'$ape',"
                    . "'$rut',"
                    . "'$nac',"
                    . "'$fechav',"  
                    . "'$sex',"
                    . "'$dv')";
            $con= $this->conectar();
            mysqli_query($con,$sql) or die('No se inserto '. mysqli_error($con)); 
        }
        
        public function MostrarDatos()
        {
           $consul = "SELECT * FROM datos";
           return $consul;
        }
        public function DatosTar($rutTar)
        {
           $consul = "SELECT nombre,Apellido,rut,nacionalidad,FechVec,sexo,dv FROM datos where rut=".$rutTar."";
           return $consul;
        }
        public function Imagen($imagenEscapes,$tipo,$alto,$ancho,$nom,$titulo,$descripcion)
        {
           $consulta="INSERT INTO imagenes SET IMAGEN='$imagenEscapes', TIPO='$tipo', ALTO='$alto', ANCHO='$ancho', NOMBRE='$nom', TITULO='$titulo', DESCRIPCION='$descripcion'";
           return $consulta;
        }
        
    }
    
