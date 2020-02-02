<?php
function getFormatoConteo($validar = false){
    $archivo = "conteo.txt"; 
    $filas = file($archivo);
    $array = explode('-',$filas[count($filas)-1]); 
    
    if(isset($array[1])){
        $mes_contador = substr($array[0], 4);
        $contador = (int) $array[1];
        
        if($validar){
            $contador = str_pad($contador, 3, "0", STR_PAD_LEFT);
        }else{
            $contador = str_pad($contador + 1, 3, "0", STR_PAD_LEFT);
        }
    }else{
        $mes_contador = date('m');
        if($validar){
            $contador = '000';
        }else{
            $contador = '001';
        }
    }
    $consecutivo = $mes_contador.'-'.$contador;
    return $consecutivo;
}
function interface_contador(){ 

    $archivo = "conteo.txt"; 
    $contador = 0; 
    $date_contador = '';
    $date = date('Ym');

    $filas = file($archivo);
    $array = explode('-',$filas[count($filas)-1]); 

    if(isset($array[1])){
        $date_contador = $array[0];
        $contador = (int) $array[1];
    }

    if($date_contador == $date){
       ++$contador;
       $codigo = $date.'-'.$contador;

        $file = fopen($archivo,'r');
        $cantidadRegistros = 0;
        while(!feof($file)) {   
            $name = fgets($file);  
            $lineas[] = $name; 
            ++$cantidadRegistros;
        }  
        fclose($file);
        $lineas[$cantidadRegistros - 1] = $codigo;

        $lineas = array_values($lineas);
        $file = fopen($archivo, "w");  
        foreach( $lineas as $linea ) {  
            fwrite( $file, $linea );  
        }   
        fclose( $file );
    }else{
        $contador = 1;
        $codigo = $date.'-'.$contador;
        $fp = fopen($archivo,"a"); 
        if($date_contador != ''){
            fwrite($fp, "\n");
        }
        fwrite($fp, $codigo);
        fclose($fp); 
    }
}