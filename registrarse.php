<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>PERFUMERIA MORES</title>
    
</head>
<body class="index" background="img\extractos.jpg" width=50%>


    <div class="contenedor">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="row lign-center">
            <div class="col-lg-4  formulario"></div>
            <div class="col-lg-4 letra"><h2>INSCRIPCION DE CLIENTE</h2>
                <!-- formulario-->
                <div class="fila">
        
                        <div class=" col-sm-12 ">
                            <form method="POST" action="registrarse.html" name="formulario1"></form>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Correo electronico">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="telefono" class="form-control" id="tel" placeholder="Contraseña">
                                </div>

                                <div class="form-group">
                                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Completo" >
                                </div>
                      
                                 <div class="form-group">
                                    <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellidos">
                                </div>
                    
                                
                                
                                <div class="form-group">
                                    <input type="text" name="telefono" class="form-control" id="tel" placeholder="Telefono">
                                    </div>
                    
                                <div class="form-group">
                                    <input type="date" name="fecha" class="form-control" id="fecha" placeholder="Fecha (AA-MM_DD)">
                                </div>
                        </form>
                        </div>
                            
                        <center> 
                            <div class="fila">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                  <input type="submit" value="Crear" class="btn btn-primary btn-xs" name="btn3"  onclick="confirmar()">
                                </div>
                            </div>
                                  
                        </center>
                </div>
                    </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                
            </div>
        </div>
        <div class="fila">
            
</body>
</html>