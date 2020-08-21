<?php

include_once 'conecion.php';
include_once '../clase/ObraLiteraria.php';
include_once '../clase/Perso.php';

class add {

    function __construct() {
        
    }

    public function p() {

        $conexion = new conecion();
        $p = new Perso();
        $p = unserialize($_SESSION['p']);

        $sentencia = $conexion->Guardame()->prepare('SELECT count(1) FROM presona where correo="' . $p->getCorreo() . '"');
        $sentencia->execute();
        foreach ($sentencia as $fila) {
            if ($fila['count(1)'] > 0) {
                return 1;
            }
        }
        $conexion->Guardame()->exec("INSERT INTO presona (cedula,nombre,celular,correo,clave,hora,fecha)"
                . " VALUES ('" . $p->getCedula() . "','" . $p->getNombre() . "', '" . $p->getCelular() . "', '"
                . $p->getCorreo() . "', '" . $p->getClave() . "',curdate(),curtime())");
        if (isset($_session))session_destroy();
        return 0;
    }

    public function es() {

        $conexion = new conecion();
        $p = new Perso();
        $p = unserialize($_SESSION['veri']);
        $sentencia = $conexion->Guardame()->prepare('SELECT nombre FROM presona where correo="' . $p->getCorreo() . '" and clave="' . $p->getClave() . '"');
        $sentencia->execute();          
        foreach ($sentencia as $fila) {
            return "PAARCAS :)".$fila['nombre'];
               
        }
       
        $res="PAARCAS :(".$p->getNombre()." Vista Sin User";
         if( isset($_session))  session_destroy();
        return $res;
    }
   
    public function l() {

        $conexion = new Conecion();
        $oli = new ObraLiteraria();
        $oli = unserialize($_SESSION['ol']);
        $sentencia = $conexion->Guardame()->prepare('SELECT count(1) FROM obras_literaria where codigo="' . $oli->getIsbn() . '"');
        $sentencia->execute();
        foreach ($sentencia as $fila) {
            if ($fila['count(1)'] > 0) {
                return 1;
            }
        }


        $conexion->Guardame()->exec("INSERT INTO obras_literaria (codigo,titulo,numero,cantidad,compra,venta,impuesto,enfasis,genero,pais,fecha,hora)"
                . " VALUES ('" . $oli->getIsbn() . "','" . $oli->getTitulo() . "', '" . $oli->getNpagina() . "', '"
                . $oli->getCantidad() . "', '" . $oli->getCompra() . "', '" . $oli->getVenta() . "', '"
                . $oli->getImpuesto() . "', 'Literario', '" . $oli->getGenero() . "', '" . $oli->getPais() . "',curdate(),curtime())");
        if (isset($_session))
            session_destroy();
        return 0;
    }

    public function mostrarol() {
        $conexion = new Conecion();
        $sentencia = $conexion->Guardame()->prepare('SELECT * FROM obras_literaria order by fecha desc,hora desc');
        $sentencia->execute();
        echo "<br><br>";
        echo '<div  class="container" >';
        echo '<table class="table table-hover" >'
        . '<thead>';
        echo '<tr >';
        echo '<th>Codigo</th>';
        echo '<th>Tiulo</th>';
        echo '<th>Num De Paginas</th>';
        echo '<th>Cantidad</th>';
        echo '<th>Compra</th>';
        echo '<th>Venta</th>';
        echo '<th>Impueso</th>';
        echo '<th>Genero</th>';
        echo '<th>Pais</th>';
        echo '</tr>'
        . '</thead>'
        . '<tbody>';
//codigo,titulo,numero,cantidad,compra,venta,impuesto,enfasis,genero,pais,fecha,hora
        $con = 1;
        foreach ($sentencia as $fila) {
            if ($con == 1) {
                echo '<tr class="active">';
                $con = 0;
            } else {
                echo '<tr class="warning">';
                $con = 1;
            }
            echo '<td>';
            echo $fila['codigo'];
            echo '</td>';
            echo '<td>';
            echo $fila['titulo'];
            echo '</td>';
            echo '<td>';
            echo $fila['numero'];
            echo '</td>';
            echo '<td>';
            echo $fila['cantidad'];
            echo '</td>';
            echo '<td>';
            echo $fila['compra'];
            echo '</td>';
            echo '<td>';
            echo $fila['venta'];
            echo '</td>';
            echo '<td>';
            echo $fila['impuesto'];
            echo '</td>';
            echo '<td>';
            echo $fila['enfasis'];
            echo '</td>';
            echo '<td>';
            echo $fila['pais'];
            echo '</td>';
            echo '</tr>';
        }
        echo '</tbody>'
        . '</table>';
        echo '</div';
    }

    public function modificar() {
        $conexion = new Conecion();
        $sentencia = $conexion->Guardame()->prepare('SELECT * FROM obras_literaria order by fecha desc,hora desc');
        $sentencia->execute();
        echo '    <body id="Obral">';
        echo "<br><br>";
        echo '<div  class="container"  style="top:20px;">';
        echo' 
            <label for="sel2">BORRAR IBNS/label>
<select multiple class="form-control" id="sel2"   onload="Mmostrar()" onchange="selec(this.value)">';
        $con = 1;
        $valu = 0;
        echo '<option value="0">isbn   - titulo    - valor venta    - pais publicado </option>';
        foreach ($sentencia as $fila) {
            $valu++;
            echo '<option value="' . $fila['codigo'] . '">' .
            $fila['codigo'] . "-" . $fila['titulo'] . "-" . $fila['venta'] . "-" . $fila['pais']
            . '</option> . ';
        }
        echo' </select>';
        echo '</div';
    }

    public function borrar($resivido) {
        $conexion = new Conecion();
        $sentencia = $conexion->Guardame()->prepare('DELETE FROM obras_literaria  WHERE codigo =' . $resivido);
        $sentencia->execute();
    }

}
