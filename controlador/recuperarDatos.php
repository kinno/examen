<?php
include_once '../libs/datos.php';
$datos = new Datos();
$respuesta = $datos->recuperaDatos();
?>
<div id="acordion">
    <?php
    foreach ($respuesta as $key => $v) {
        echo "<h3>".$v['nombre']."</h3>";
        echo '<div>';
        echo '
                <center>                
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Nombre</legend>
                                    <table style="padding:5px;" cellspacing="5">
                                        <tr>
                                            <td><input type="text" id="nombre" name="nombre" value="'.$v['nombre'].'"/></td>
                                            <td><input type="text" id="aPaterno" name="aPaterno" value="'.$v['aPaterno'].'"/></td>
                                            <td><input type="text" id="aMaterno" name="aMaterno" value="'.$v['aMaterno'].'"/></td>

                                        </tr>
                                        <tr style="text-align: center;">
                                            <td>Nombre</td>
                                            <td>Apellido paterno</td>
                                            <td>Apellido materno</td>

                                        </tr>
                                        <tr>
                                            <td><input type="fecha" id="fechaN" name="fechaN" value="'.$v['fechaN'].'"/></td>
                                            <td><input type="text" id="nacionalidad" name="nacionalidad" value="'.$v['nacionalidad'].'"/></td>
                                            <td>
                                                <label for="genero">Género: </label>
                                                <input type="text" id="genero" name="genero" value="'.$v['genero'].'">
                                    
                                            </td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td>Fecha de nacimiento</td>
                                            <td>Nacionalidad</td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                            <td>
                                <fieldset>
                                    <legend>Residencia</legend>
                                    <table style="padding:4px;" cellspacing="5">
                                        <tr>
                                            <td><input type="text" id="domicilio" name="domicilio" style="width:300px" value="'.$v['domicilio'].'"/></td>
                                            <td><input type="text" id="colonia" name="colonia" style="width:200px;" value="'.$v['colonia'].'"/></td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td>Domicilio</td>
                                            <td>Colonia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table style="width:100%; text-align: center;">
                                                    <tr>
                                                        <td><input type="text" id="cp" name="cp" value="'.$v['cp'].'"/></td>
                                                        <td><input type="text" id="municipio" name="municipio" value="'.$v['municipio'].'"/></td>
                                                        <td><input type="text" id="entidad" name="entidad" value="'.$v['entidad'].'"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>C. P.</td>
                                                        <td>Municipio</td>
                                                        <td>Estado</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                    <fieldset>
                                    <legend>Forma de contacto</legend>
                                        <table style="width:250px">
                                            <tr>
                                                <td><input type="text" id="celular" name="celular" value="'.$v['celular'].'"/></td>
                                                <td><input type="text" id="telefono" name="telefono" value="'.$v['telefono'].'"/></td>
                                                <td><input type="text" id="mail" name="mail" value="'.$v['mail'].'"/></td>

                                            </tr>
                                            <tr style="text-align: center;">
                                                <td>Celular</td>
                                                <td>Teléfono</td>
                                                <td>Correo Electronico</td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </fieldset>
                            </td>
                        </tr>
                    </table>
                    </center>
                ';
        echo '</div>';
    }
    ?>
</div>


