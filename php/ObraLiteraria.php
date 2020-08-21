<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF-8">
        <title>Libreria</title>
        <link rel="stylesheet" href="../css/estilo.css">        
        <script type="text/javascript" src="../js/ajax.js"></script>            
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="Obral" onload="actu()" >
        <header id="menu">
            <section class="wrapper">
                <nav>
                    <ul>
                        <li><a href="../">Inicio</a></li>
                        <li><a href="ObraLiteraria.php">Agregar</a></li>
                        <li><a href="ObraLiteraria_M.php">Eliminar</a></li>
                    </ul>
                </nav>
            </section>
        </header>

        <div id="respuesta">  
            <div id="todo" class="table-responsive" >
                <center><br>
                    <br>
                    <form id="formulario" name="formulario"  >
                        <table class="table table-hover" id="borde">
                            <thead>
                                <tr >
                                    <th id="nobordedentro" colspan="2" >DATOS DE LIBRO<br>LITERARIO</th>
                                </tr>
                            </thead><tr >
                                <td>
                                    <label> ISBN:</label>
                                </td>
                                <td>
                                    <input type="text"  name="isbn" id="isbn" value="" maxlength="50" placeholder="Escriba Codigo ISBN">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label> Titulo:</label>
                                </td>
                                <td>
                                    <input type="text"  name="titulo" id="titulo" value="" maxlength="50" placeholder="Escriba Titulo">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label> Numero de pagina:</label>
                                </td>
                                <td>
                                    <input type="number" name="pagina" id="pagina" value="0" min="0" max="100000" placeholder="Escriba # de pagina">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Cantidad:</label>
                                </td>
                                <td>
                                    <input type="number" name="cantidad" value="0" min="0" max="100000" id="cantidad" placeholder="Escriba la Cantidad">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label> Precio Compra:</label>
                                </td>
                                <td>
                                    <input type="number" name="compra" id="compra" value="0" min="0" max="1000000000" placeholder="Escriba Cuanto cuesta">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label> Precio Venta:</label>
                                </td>
                                <td>
                                    <input type="number" name="venta" id="venta"  value="0" min="0" max="1000000000" placeholder="Escriba Cuanto vale">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label> Publicado:</label>
                                </td>
                                <td>
                                    <input type="number" name="publicado" value="0" min="0" max="2017" id="publicado" placeholder="Escriba ano de publicacion">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label> Impuesto:</label>
                                </td>
                                <td>
                                    <input type="number" name="impuesto" value="0" min="0" max="100" id="impuesto" placeholder="Escriba % Del Impuste">
                                </td>
                            </tr>                
                            <tr>                    
                                <td>
                                    <label> Genero:</label>
                                </td>
                                <td>
                                    <input type="text"  name="genero" id="genero"  value=""  maxlength="50" placeholder="Escriba el Genero ">
                                </td>                 
                            </tr> 
                            <tr>                    
                                <td>
                                    <label> Pais:</label>
                                </td>
                                <td>
                                    <input type="text"   name="pais" id="pais"  value="" maxlength="50" placeholder="Escriba El Pais De Publicacion">
                                </td>                 
                            </tr> 
                            <tr>
                                <td>Foto:</td>
                                <td><input type=file size=60 name="file1"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                            <center> <center>
                                    <br>
                                    <input class="Block-level Button" type="button" value="GUARDAR OBRA LITERARIA" 
                                           onclick="guardarL(document.formulario.isbn.value,
                                                           document.formulario.titulo.value,
                                                           document.formulario.pagina.value,
                                                           document.formulario.cantidad.value,
                                                           document.formulario.compra.value,
                                                           document.formulario.venta.value,
                                                           document.formulario.publicado.value,
                                                           document.formulario.impuesto.value,
                                                           document.formulario.genero.value,
                                                           document.formulario.pais.value);actu()">
                                </center><br></center>
                            </td>
                            </tr>
                        </table>
                    </form>
                </center>  
            </div>
            </div>
    </body>
</html>


