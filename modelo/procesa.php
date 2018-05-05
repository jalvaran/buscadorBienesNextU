<?php
require_once '../clases/buscador.class.php';
/* 
 * Clase para procesar las peticiones del buscador
 * Por Julian Alvaran
 */
$data = file_get_contents("../data-1.json");
$DB = json_decode($data, true);
if(isset($_REQUEST["CargarCiudad"])){
    
    $obBuscador=new Buscador();
    $DatosCiudades=$obBuscador->RetorneValoresUnicos($DB,"Ciudad");
    $DatosTipo=$obBuscador->RetorneValoresUnicos($DB,"Tipo");
    $Respuesta['Ciudades']=$DatosCiudades;
    $Respuesta['Tipo']=$DatosTipo;
    echo json_encode($Respuesta);
}

if(isset($_REQUEST["rangoPrecio"])){
    
    $DatosFormulario["rangoPrecio"]=$_REQUEST["rangoPrecio"];    
    $DatosFormulario["selectCiudad"]=$_REQUEST["selectCiudad"];
    $DatosFormulario["selectTipo"]=$_REQUEST["selectTipo"];
    
    echo json_encode($DatosFormulario);
}