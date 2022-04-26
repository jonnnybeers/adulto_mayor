<?php
include("conexion.php");
//$con=conectar();


$fecha_visita=$_POST['fecha_visita'];
$solicitante=$_POST['solicitante'];
$datos_visita=$_POST['datos_visita'];
$nombre_completo=$_POST['nombre_completo'];
$edad=$_POST['edad'];
$nombres_atiende_visita=$_POST['nombres_atiende_visita'];
$tipo_numero_documento=$_POST['tipo_numero_documento'];  
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$edad_persona=$_POST['edad_persona'];
$direccion_residencial=$_POST['direccion_residencial'];
$telefono=$_POST['telefono'];
$nombres_apellidos=$_POST['nombres_apellidos'];
$parentesco=$_POST['parentesco'];
$edad=$_POST['edad']; 
$escolaridad=$_POST['escolaridad'];
$estado_civil=$_POST['estado_civil'];
$actividad=$_POST['actividad'];
$ocupacion=$_POST['ocupacion'];
$desarrollo=$_POST['desarrollo'];
$tipo_vivienda=$_POST['tipo_vivienda'];
$tenencia_vivienda=$_POST['tenencia_vivienda'];
$estrato=$_POST['estrato'];
$ubicacion=$_POST['ubicacion'];
$tiempo_permanencia_vivienda=$_POST['tiempo_permanencia_vivienda'];
$acueducto=$_POST['acueducto'];
$energia=$_POST['energia'];
$manejo_basuras=$_POST['manejo_basuras'];
$gas_domiciliario=$_POST['gas_domiciliario'];
$television=$_POST['television']; 
$internet=$_POST['internet'];
$numero_habitaciones=$_POST['numero_habitaciones'];
$numero_residentes=$_POST['numero_residentes'];
$otros_espacios=$_POST['otros_espaciosotros_espacios'];
$descripcion_vivienda=$_POST['descripcion_vivienda'];
$apropiacion_recursos=$_POST['apropiacion_recursos'];
$observaciones_adicionales=$_POST['observaciones_adicionales'];
$concepto=$_POST['concepto'];
$nombre=$_POST['nombre'];
$numero_identificacion=$_POST['numero_identificacion'];
$residencia=$_POST['residencia'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$fecha_inicio_proceso=$_POST['fecha_inicio_proceso'];
$profesional_encargado=$_POST['profesional_encargado'];
$observaciones=$_POST['observaciones'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];
$numero_identificacion=$_POST['numero_identificacion'];


$sql="UPDATE visitas_programa (fecha_visita,solicitante,datos_visita) SET ('$fecha_visita','$solicitante','$datos_visita')";
$sql2="UPDATE visitas_datos_adulto_mayor (nombre_completo,edad) SET ('$nombre_completo','$edad')";
$sql3="UPDATE datos_atiende_visita (nombres_atiende_visita,tipo_numero_documento,fecha_nacimiento,edad_persona,direccion_residencial,telefono) SET ('$nombres_atiende_visita','$tipo_numero_documento','$fecha_nacimiento','$edad_persona','$direccion_residencial','$telefono')";
$sql4="UPDATE visita_objetivo (objetivo) SET ('$objetivo')";
$sql5="UPDATE composion_familiar (nombres_apellidos,parentesco,edad,escolaridad,estado_civil,actividad,ocupacion) SET ('$nombres_apellidos','$parentesco','$edad','$escolaridad','$estado_civil','$actividad','$ocupacion')";
$sql6="UPDATE visita_desarrollo (desarrollo) SET ('$desarrollo')";
$sql7="UPDATE visitas_vivenda (tipo_vivienda,tenencia_vivienda,estrato,ubicacion, tiempo_permanencia_vivienda) SET ('$tipo_vivienda','$tenencia_vivienda','$estrato','$ubicacion', '$tiempo_permanencia_vivienda')";

$sql8="UPDATE vistas_servicios_vivienda (acueducto,energia,manejo_basuras,gas_domiciliario,television,internet) SET ('$acueducto','$energia','$manejo_basuras','$gas_domiciliario','$television','$internet')";

$sql9="UPDATE visitas_distribucion_espacios (numero_habitaciones,numero_residentes,otros_espacios,descripcion_vivienda) SET ('$numero_habitaciones','$numero_residentes','$otros_espacios','$descripcion_vivienda')";

$sql10="UPDATE visitas_recursos_economicos (apropiacion_recursos) SET ('$apropiacion_recursos')";

$sql11="UPDATE visitas_observaciones_adicionales (observaciones_adicionales) SET ('$observaciones_adicionales')";

$sql12="UPDATE visitas_concepto (concepto) SET ('$concepto')";
$sql13="UPDATE datos_persona_realizo_evaluacion (nombre,numero_identificacion,residencia,edad,telefono) SET ('$nombre','$numero_identificacion','$residencia','$edad','$telefono')";

$sql14="UPDATE descripcion_actividad (fecha_inicio_proceso,profesional_encargado,observaciones) SET ('$fecha_inicio_proceso','$profesional_encargado','$observaciones')";

$sql15="UPDATE visitas_funcionario (nombre_funcionario, cargo, registro_profesional, numero_identificacion_funcionario) SET ('$nombre_funcionario','$cargo','$registro_profesional', '$numero_identificacion_funcionario')";

//$query= mysqli_query($con,$sql);

if($base->query($sql)){
    Header("Location: visitas.html");

?>
