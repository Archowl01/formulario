<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tarjeta</title>

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
     <link href="creative.min.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet" type="text/css">

  </head>

  <body id="page-top">
    <?php
         $nom= $_POST["name"];
         $rut= $_POST["rut"];
    ?>
   
    <!-- Navigation -->

     <form style="padding:5% 0 0 0" role="form" method="post" class="contactForm  col-lg-12 col-md-12 col-xs-12 left">
    <div class="container">
    <div class="row">
        <div class="col-sm-3" style="background-color: black"></div>
        <div class="col-sm-9">
           

        <h4>Ingreso </h4><br>
        
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">

                <div class="form-group">
                    <label>Nombre </label>
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Nombre" maxlength="30" value="<?php echo $nom;  ?>"/>
                </div>
                 <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="Ape" class="form-control form" id="Ape" placeholder="Apellido" maxlength="30" value=""/>
                 </div>
                <div class="form-group">
                    <label>RUT </label>
                    <div class="row">                    
                        <div class="col-md-8 col-sm-8 col-xs-8 left">
                        <input type="number" class="form-control" name="rut" id="rut" placeholder="123456789" min="0" maxlength="8" value="<?php echo $rut;  ?>" />
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 left">
                        <input type="text" class="form-control" name="dv" id="dv" placeholder="dv" maxlength="1" />
                        </div>
                    </div>
                </div>
              
            </div>        
        </div>
                
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
             <div class="form-group">
                    <label>Nacionalidad</label>
                    <input type="text" name="Nac" class="form-control form" id="Nac" placeholder="" maxlength="30"/>
                 </div>
                 <div class="form-group">
                    <label>Fecha de Vencimiento</label>
                    <input type="date" name="FechV" class="form-control form" id="FechV" placeholder="" maxlength="30"/>
                 </div>
             <div class="form-group">
                    <label>Sexo</label>
                    <input type="text" name="Sex" class="form-control form" id="Sex" placeholder="" maxlength="30"/>
                 </div>
                
        </div>
        </div>
        </div>
        <div class="col-md-3" style="background-color: black"></div>
            </div>
                  <input type="submit" name="boton1" id="boton1" value="Insertar Datos" class=" btn btn-default">        
                  <button formaction="mostrarRut.php" class=" btn btn-default">Mostrar Datos</button>
                   <input type="submit" name="boton2" id="boton2" value="Guardar Datos" class=" btn btn-default"> 
                  
            </div>

    </form>
    <div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-5" style="padding:1% 0 0 0">
           </div>
            <form enctype="multipart/form-data"  method="POST" class="contactForm  col-lg-12 col-md-12 col-xs-12 left">
           <input name="imagen" type="file" />
           <input type="submit" name="boton3" id="boton3" value="Subir archivo" />
           </form> 
            
        </div>
    </div>

         <?php           
         
        $datos = file_get_contents('tarjeta.php');
        $css = file_get_contents('Bootstrap/vendor/bootstrap/css/bootstrap.min.css');
        $css1 = file_get_contents('Bootstrap/vendor/magnific-popup/magnific-popup.css');
        $css2 = file_get_contents('Bootstrap/css/creative.min.css');
        MKdir("Datos/$rut");
        $file = "Datos/$rut/$rut.php";
        $fp = fopen($file, "w");
        fputs($fp, $datos);
        
        $file1 = "Datos/$rut/bootstrap.min.css";
        $file2 = "Datos/$rut/magnific-popup.css";
        $file3 = "Datos/$rut/creative.min.css";
        $fp1 = fopen($file1, "w");
        $fp2 = fopen($file2, "w");
        $fp3 = fopen($file3, "w");
        fputs($fp1, $css);
        fputs($fp2, $css1);      
        fputs($fp3, $css2);
        fclose($fp);
        ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="Bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="Bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    

    <!-- Custom scripts for this template -->
    <script src="Bootstrap/js/creative.min.js"></script>

  </body>

</html>

