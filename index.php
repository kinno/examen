<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet" /> 
        <link type="text/css" href="css/style.css" rel="stylesheet" /> 
        <script type="text/javascript" language="javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery-ui-1.10.4.custom.js"></script>
        <script type="text/javascript" language="javascript" src="js/funcionesExamen.js"></script>
        <title>Exámen</title>
    </head>
    <body>
        <div id="btnsMenu">
            <input type="radio" id="radio1" name="radio" onclick="panelRegistrar()"><label for="radio1">Registrar Datos</label>
            <input type="radio" id="radio2" name="radio" onclick="panelConsultar()"><label for="radio2">Consultar Datos</label>
        </div>
        <div id="contenedorRegistrar" class="ui-widget ui-widget-content" style="display:none">
            <form id="registro">
                <center>                
                    <table>
                        <tr>
                            <td>
                                <fieldset>
                                    <legend>Nombre</legend>
                                    <table style="padding:5px;" cellspacing="5">
                                        <tr>
                                            <td><input type="text" id="nombre" name="nombre"/></td>
                                            <td><input type="text" id="aPaterno" name="aPaterno"/></td>
                                            <td><input type="text" id="aMaterno" name="aMaterno"/></td>

                                        </tr>
                                        <tr style="text-align: center;">
                                            <td>Nombre</td>
                                            <td>Apellido paterno</td>
                                            <td>Apellido materno</td>

                                        </tr>
                                        <tr>
                                            <td><input type="fecha" id="fechaN" name="fechaN"/></td>
                                            <td><input type="text" id="nacionalidad" name="nacionalidad"/></td>
                                            <td>
                                                <label for="genero">Género: </label>
                                                <select id="genero" name="genero">
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
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
                                            <td><input type="text" id="domicilio" name="domicilio" style="width:300px"/></td>
                                            <td><input type="text" id="colonia" name="colonia" style="width:200px;"/></td>
                                        </tr>
                                        <tr style="text-align: center;">
                                            <td>Domicilio</td>
                                            <td>Colonia</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table style="width:100%; text-align: center;">
                                                    <tr>
                                                        <td><input type="text" id="cp" name="cp"/></td>
                                                        <td><input type="text" id="municipio" name="municipio"/></td>
                                                        <td><input type="text" id="entidad" name="entidad"/></td>
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
                                                <td><input type="text" id="celular" name="celular"/></td>
                                                <td><input type="text" id="telefono" name="telefono"/></td>
                                                <td><input type="text" id="mail" name="mail"/></td>

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
            </form>
            <center><span id="guardar" onclick="guardarDatos()">Guardar</span></center>
        </div>
        <div id="contenedorConsultar" class="ui-widget ui-widget-content" style="display:none"></div>
        <div id="respResultados"></div>
    </body>
</html>
