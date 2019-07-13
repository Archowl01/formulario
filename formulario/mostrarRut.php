<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TurnHelp</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="Bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="Bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Bootstrap/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
      
   
    <!-- Navigation -->
    
     <form style="padding:5%" role="form" method="post" class="contactForm  col-lg-12 col-md-12 col-xs-12 left">
          <?php      
          
          require_once 'conectBD.php';
          
           $op= new OperacionesMysql();
           $con = $op->conectar();
           $consul = $op->MostrarDatos() ;
           
           if ($resultado = $con->query($consul)) {          
                while ($rowTable =$resultado->fetch_assoc())
                {
                    echo '<br>';
                    echo 'Nombre: '.$rowTable['nombre']; 
                    echo '<br>';
                    echo 'Rut: <a href="DatosTar.php?rut='.$rowTable['rut'].'">'.$rowTable['rut'].'-'.$rowTable['dv'].'</a>'; 
                    echo '<br>';
                }
           }
         
            
           ?>       
    </form>

      

    
    <!-- Bootstrap core JavaScript -->
    <script src="Bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="Bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    

    <!-- Custom scripts for this template -->
    <script src="Bootstrap/js/creative.min.js"></script>

  </body>

</html>

