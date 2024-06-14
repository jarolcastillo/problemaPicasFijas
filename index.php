<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta name="author" content="Videojuegos & Desarrollo">
        <meta name="description" content="Ejemplo de formulario de acceso basado en HTML5 y CSS">
        <meta name="keywords" content="login,formulariode acceso html">
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="css/style.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform">
                        <label for="number" >Numero</label>
                        <input id="number" readonly name="number" type="number" placeholder="ingrese el numero" required> 
                    </form>
                    <button id="btnIniciar">Iniciar</button>
                    <button id="btnValidar" style="display:none">Validar</button>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        PICAS Y FIJAS
                    </div>
                    <hr>
                    <div class="pie-form">
                        <p class="parrafo" id="notasDelJuego"></p>
                        <hr>
                        <a href="reglas.php">Ver Reglas</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    <script src="js/index.js"></script>
    <script src="js/jquery.js"></script>
</html>