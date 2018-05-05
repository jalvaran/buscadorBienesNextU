<?php

class Buscador{
    //Convierte una matriz en valores unicos
    function unique_multidim_array($array, $key) {
        $temp_array = array();      
        
        for($i=0;$i<count($array);$i++){
            
            $temp_array[$i]=$array[$i][$key];
        }
        return array_unique($temp_array); 
    }
    
    
    public function RetorneValoresUnicos($data,$Clave){
        
        return $this->unique_multidim_array($data,$Clave);
        //return ($this->unique_multidim_array($data,$Clave)); 
    }
    
}