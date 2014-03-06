<?php
class Datos{
    function Datos(){
    }
    
    function guardarDatos($datos){
        extract($datos);
        $xml = new DOMDocument('1.0','UTF-8');
        $root = $xml->createElement('Datos');
        $root = $xml->appendChild($root);
        
        $nom = $xml->createElement('nombre',$nombre);
        $nom = $root->appendChild($nom);
        $ap = $xml->createElement('apellidoPaterno',$aPaterno);
        $ap = $root->appendChild($ap);
        $am = $xml->createElement('apellidoMaterno',$aMaterno);
        $am = $root->appendChild($am);
        $fecha = $xml->createElement('fechaNacimiento',$fechaN);
        $fecha = $root->appendChild($fecha);
        $nac = $xml->createElement('nacionalidad',$nacionalidad);
        $nac = $root->appendChild($nac);
        $gen = $xml->createElement('genero',$genero);
        $gen = $root->appendChild($gen);
        $dom = $xml->createElement('domicilio',$domicilio);
        $dom = $root->appendChild($dom);
        $col = $xml->createElement('colonia',$colonia);
        $col = $root->appendChild($col);
        $cP = $xml->createElement('cp',$cp);
        $cP = $root->appendChild($cP);
        $mun = $xml->createElement('municipio',$municipio);
        $mun = $root->appendChild($mun);
        $ent = $xml->createElement('entidad',$entidad);
        $ent = $root->appendChild($ent);
        $cel = $xml->createElement('celular',$celular);
        $cel = $root->appendChild($cel);
        $tel = $xml->createElement('telefono',$telefono);
        $tel = $root->appendChild($tel);
        $mal = $xml->createElement('mail',$mail);
        $mal = $root->appendChild($mal);
        
        $xml->formatOutput=true;
        $string_xml = $xml->saveXML();
        if($xml->save('datos.xml')){
            echo 'ok';
        }else{
            echo 'error';
        }
        
    }
}

