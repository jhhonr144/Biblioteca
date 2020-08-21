<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF-8">
        <title>Libreria</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script type="text/javascript" src="js/ajax.js">
        </script>
        <script type="text/javascript">
            function  validarL(a, b, c, d, e, f, g, h, i, j, k) {
                alert(a);
            }               
        </script>
    </head>
    <body>
        <br>
        <br>
    <center><br>
        <br>
        <form id="formulario" name="formulario" action="#" >
            <table border="10px" >
                <tr>
                    <td>
                        <label> ISBN:</label>
                    </td>
                    <td>
                        <input type="text" name="isbn" id="isbn" placeholder="Escriba Codigo ISBN">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Titulo:</label>
                    </td>
                    <td>
                        <input type="text" name="titulo" id="titulo" placeholder="Escriba Titulo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Numero de pagina:</label>
                    </td>
                    <td>
                        <input type="number" name="pagina" id="pagina" placeholder="Escriba # de pagina">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Cantidad:</label>
                    </td>
                    <td>
                        <input type="number" name="cantidad" id="cantidad" placeholder="Escriba la Cantidad">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Precio Compra:</label>
                    </td>
                    <td>
                        <input type="number" name="compra" id="compra" placeholder="Escriba Cuanto cuesta">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Precio Venta:</label>
                    </td>
                    <td>
                        <input type="number" name="venta" id="venta" placeholder="Escriba Cuanto vale">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Publicado:</label>
                    </td>
                    <td>
                        <input type="number" name="publicado" id="publicado" placeholder="Escriba ano de publicacion">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Impuesto:</label>
                    </td>
                    <td>
                        <input type="number" name="impuesto" id="impuesto" placeholder="Escriba % Del Impuste">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label> Area En Efasis:</label>
                    </td>
                    <td>
                        <select name="efasis" id="efasis" placeholder="selecione Enfasis" onchange="mostrar(this.value)">
                            <option value="1">Selecione Tipo</option>
                            <option value="2">  Obras Literarias</option>
                            <option value="3">Obras Religiosas</option>
                            <option value="4">Obras Poéticas</option>
                        </select>
                    </td>
                </tr>                
                <tr id="or" class="nover">
                    <td>
                        <label> Idioma:</label>
                    </td>
                    <td>
                        <input type="text" name="idioma" id="idioma" placeholder="Escriba EL Idioma ">
                    </td>
                </tr> 
                <tr id="or1" class="nover">
                    <td>
                        <label> Religion:</label>
                    </td>
                    <td>
                        <input type="text" name="religion" id="religion" placeholder="Escriba LA Religion ">
                    </td>
                </tr> 
                <tr id="or2" class="nover">
                    <td>
                        <label>Lider Religion:</label>
                    </td>
                    <td>
                        <input type="text" name="lreligion" id="lreligion" placeholder="Escriba El Lider Religioso">
                    </td>
                </tr> 
                <tr id="op" class="nover">
                    <td>
                        <label> Tipo de Escritura:</label>
                    </td>
                    <td>
                        <input type="text" name="tipoe" id="tipoe" placeholder="Escriba Tipo de Escritura ">
                    </td>
                </tr> 
                <tr id="op1" class="nover">
                    <td>
                        <label> Edad Minima:</label>
                    </td>
                    <td>
                        <input type="text" name="edad" id="edad" placeholder="Escriba edad minima">
                    </td>
                </tr> 
                <tr id="op2" class="nover">
                    <td>
                        <label> Numero De Poemas:</label>
                    </td>
                    <td>
                        <input type="number" name="npoema" id="npoema" placeholder="Escriba # poemas">
                    </td>
                </tr> 
                <tr id="op3" class="nover">
                    <td>
                        <label> Audio:</label>
                    </td>
                    <td>
                        si: <input type="radio" name="audio" id="audio" value="si" />
                        no: <input type="radio" name="audio" value="no" checked="checked" />                       
                    </td>
                </tr> 
                <tr id="ol" class="nover" >                    
                    <td>
                        <label> Genero:</label>
                    </td>
                    <td>
                        <input type="text" name="genero" id="genero" placeholder="Escriba el Genero ">
                    </td>                 
                </tr> 
                <tr id="ol1" class="nover" >                    
                    <td>
                        <label> Pais:</label>
                    </td>
                    <td>
                        <input type="text" name="pais" id="pais" placeholder="Escriba El Pais De Publicacion">
                    </td>                 
                </tr> 
                <tr>
                    <td colspan="2">
                <center> <center>
                        <br>                                                                                                                                            
                        <button id="b" onclick="guardar(document.formulario.isbn.value, document.formulario.titulo.value, document.formulario.pagina.value, document.formulario.cantidad.value, document.formulario.compra.value, document.formulario.venta.value, document.formulario.publicado.value, document.formulario.impuesto.value, document.formulario.efasis.value);" disabled="true">LLENAR LOS DATOS Y SELECIONAR TIPO</button>
<button id="b1" class="nover" onclick=" validarL(document.formulario.isbn.value, document.formulario.titulo.value, document.formulario.pagina.value, document.formulario.cantidad.value, document.formulario.compra.value, document.formulario.venta.value, document.formulario.publicado.value, document.formulario.impuesto.value, document.formulario.efasis.value, document.formulario.genero.value, document.formulario.pais.value)">Guardar Obra Literaria</button>
                        <button id="b2" class="nover" onclick="guardarR(document.formulario.isbn.value, document.formulario.titulo.value, document.formulario.pagina.value, document.formulario.cantidad.value, document.formulario.compra.value, document.formulario.venta.value, document.formulario.publicado.value, document.formulario.impuesto.value, document.formulario.efasis.value);">Guardar Obra Religiosa</button>
                        <button id="b3"  class="nover" onclick="guardarP(document.formulario.isbn.value, document.formulario.titulo.value, document.formulario.pagina.value, document.formulario.cantidad.value, document.formulario.compra.value, document.formulario.venta.value, document.formulario.publicado.value, document.formulario.impuesto.value, document.formulario.efasis.value);">Guardar Obra Poetica</button>
                    </center><br></center>
                </td>
                </tr>
            </table>
        </form>
    </center>    

</body>
</html>


