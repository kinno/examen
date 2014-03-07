<?php
class Datos{
    function Datos(){
    }
    
    function guardarDatos($form){
        extract($form);
        $dom = new DOMDocument('1.0','UTF-8');
        error_reporting(~E_WARNING);
            if($dom->load('datos.xml')){
                
                $raiz=$dom->documentElement;
                $datosP = new DOMElement('persona');
                $datosP = $raiz->appendChild($datosP);
                $datosP->appendChild($dom->createElement('nombre',$nombre));
                $datosP->appendChild($dom->createElement('aPaterno',$aPaterno));
                $datosP->appendChild($dom->createElement('aMaterno',$aMaterno));
                $datosP->appendChild($dom->createElement('fechaN',$fechaN));
                $datosP->appendChild($dom->createElement('nacionalidad',$nacionalidad));
                $datosP->appendChild($dom->createElement('genero',$genero));
                $datosP->appendChild($dom->createElement('domicilio',$domicilio));
                $datosP->appendChild($dom->createElement('colonia',$colonia));
                $datosP->appendChild($dom->createElement('cp',$cp));
                $datosP->appendChild($dom->createElement('municipio',$municipio));
                $datosP->appendChild($dom->createElement('entidad',$entidad));
                $datosP->appendChild($dom->createElement('celular',$celular));
                $datosP->appendChild($dom->createElement('telefono',$telefono));
                $datosP->appendChild($dom->createElement('mail',$mail));
                 $xmlData = $dom->saveXML();
                $dom->formatOutput = true;
                $strings_xml = $dom->saveXML();
                if($dom->save('datos.xml')){
                    echo 'ok';
                }
            }else{
                
            $raiz = $dom->createElement('datos');
            $raiz = $dom->appendChild($raiz);
            $datosP = $dom->createElement('persona');
            $datosP = $raiz->appendChild($datosP);
            $datosP->appendChild($dom->createElement('nombre',$nombre));
            $datosP->appendChild($dom->createElement('aPaterno',$aPaterno));
            $datosP->appendChild($dom->createElement('aMaterno',$aMaterno));
            $datosP->appendChild($dom->createElement('fechaN',$fechaN));
            $datosP->appendChild($dom->createElement('nacionalidad',$nacionalidad));
            $datosP->appendChild($dom->createElement('genero',$genero));
            $datosP->appendChild($dom->createElement('domicilio',$domicilio));
            $datosP->appendChild($dom->createElement('colonia',$colonia));
            $datosP->appendChild($dom->createElement('cp',$cp));
            $datosP->appendChild($dom->createElement('municipio',$municipio));
            $datosP->appendChild($dom->createElement('entidad',$entidad));
            $datosP->appendChild($dom->createElement('celular',$celular));
            $datosP->appendChild($dom->createElement('telefono',$telefono));
            $datosP->appendChild($dom->createElement('mail',$mail));

            $xmlData = $dom->saveXML();
            $dom->formatOutput = true;
            $strings_xml = $dom->saveXML();
            if($dom->save('datos.xml')){
                echo 'ok';
            }       
            }
        
    }
    
    function recuperaDatos(){
      
        $dom = new DOMDocument('1.0','UTF-8');
        error_reporting(~E_WARNING);
        $dom->load('datos.xml');
        $personas = $dom->getElementsByTagName("persona");
        $datos =[];
        $i=0;
        foreach ($personas as $persona) {
           $nombres = $persona->getElementsByTagName("nombre");
           $nombre = $nombres->item(0)->nodeValue;
           $datos[$i]['nombre']=$persona->getElementsByTagName("nombre")->item(0)->nodeValue;
           $datos[$i]['aPaterno']=$persona->getElementsByTagName("aPaterno")->item(0)->nodeValue;
           $datos[$i]['aMaterno']=$persona->getElementsByTagName("aMaterno")->item(0)->nodeValue;
           $datos[$i]['fechaN']=$persona->getElementsByTagName("fechaN")->item(0)->nodeValue;
           $datos[$i]['nacionalidad']=$persona->getElementsByTagName("nacionalidad")->item(0)->nodeValue;
           $datos[$i]['genero']=$persona->getElementsByTagName("genero")->item(0)->nodeValue;
           $datos[$i]['domicilio']=$persona->getElementsByTagName("domicilio")->item(0)->nodeValue;
           $datos[$i]['colonia']=$persona->getElementsByTagName("colonia")->item(0)->nodeValue;
           $datos[$i]['cp']=$persona->getElementsByTagName("cp")->item(0)->nodeValue;
           $datos[$i]['municipio']=$persona->getElementsByTagName("municipio")->item(0)->nodeValue;
           $datos[$i]['entidad']=$persona->getElementsByTagName("entidad")->item(0)->nodeValue;
           $datos[$i]['celular']=$persona->getElementsByTagName("celular")->item(0)->nodeValue;
           $datos[$i]['telefono']=$persona->getElementsByTagName("telefono")->item(0)->nodeValue;
           $datos[$i]['mail']=$persona->getElementsByTagName("mail")->item(0)->nodeValue;
           $i++;
        }
        return $datos;
        
    }
}

