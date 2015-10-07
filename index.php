<?php //Esto inicia codigo PHP
$user = $_GET ["usuario"];//echo nos permite imprimir resultados (como el document.write)
$pass = $_GET ["contraseña"];//echo nos permite imprimir resultados (como el document.write)
//para dictar una variable en php es con el simbolo "$"
if($user != "rctorr" || $pass != "1234567"){
    echo "¡Lo siento, no estas autorizado!";
} else {//inicia bloque autorizado
    
//Si el usuario y clave no coinciden entonces terminamos o enviamos un mensaje de error

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css"> 
   <title>Felicidades</title>
</head>

<body>
    <header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    |   
                    <a href=" ">Ingresar</a>
                    |
                    <a href=" ">Nuevo usuario</a>
                </nav>
    </header>

        <div id="contenido">
            <p> ¡Felicidades, bienvenido al mundo!</p>
         <div id="mensaje_noexiste" >
          </div> <!-- termina mensaje-->  
        </div>  <!--termina contenido-->
        <footer>
             <p>Copyleft: TDW2.0</p>
         </footer>
    
</body>
</html>
<?php
} //termina bloque autorizado
?>
