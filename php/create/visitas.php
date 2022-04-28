<?php

include("../../includes/conexion.php");
$id0 = 0;
$fecha_visita=$_POST['fecha_visita'];
$solicitante=$_POST['solicitante'];
$datos_visita=$_POST['datos_visita'];
$nombre_completo=$_POST['nombre_completo'];
$edad_sujeto_proteccion=$_POST['edad_sujeto_proteccion'];
$nombres_atiende_visita=$_POST['nombres_atiende_visita'];
$tipo_numero_documento=$_POST['tipo_numero_documento'];  
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$edad_persona=$_POST['edad_persona'];
$direccion_residencial=$_POST['direccion_residencial'];
$telefono_persona=$_POST['telefono_persona'];
$objetivo=$_POST['objetivo'];
$nombres_apellidos=$_POST['nombres_apellidos'];
$parentesco=$_POST['parentesco'];
$edad_familiar=$_POST['edad_familiar']; 
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
$otros_espacios=$_POST['otros_espacios'];
$descripcion_vivienda=$_POST['descripcion_vivienda'];
$apropiacion_recursos=$_POST['apropiacion_recursos'];
$observaciones_adicionales=$_POST['observaciones_adicionales'];
$concepto=$_POST['concepto'];
$nombre_encuestado=$_POST['nombre_encuestado'];
$numero_identificacion=$_POST['numero_identificacion'];
$residencia_encuestado=$_POST['residencia_encuestado'];
$edad_encuestado=$_POST['edad_encuestado'];
$telefono_encuestado=$_POST['telefono_encuestado'];
$fecha_inicio_proceso=$_POST['fecha_inicio_proceso'];
$profesional_encargado=$_POST['profesional_encargado'];
$observaciones=$_POST['observaciones'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];



$sql="INSERT INTO visitas_programa (id_visitas_programa, fecha_visita,solicitante,datos_visita ) VALUES ('$id0','$fecha_visita','$solicitante','$datos_visita')";
$base->query($sql);

$ultimoId = $base->query('SELECT MAX(id_visitas_programa) FROM `visitas_programa`');
$id = $ultimoId->fetchAll()[0]["MAX(id_visitas_programa)"];

$sql2="INSERT INTO visitas_datos_adulto_mayor (id_visitas_datos_adulto_mayor, nombre_completo,edad, id_visitas_programa) VALUES ('$id0','$nombre_completo','$edad_sujeto_proteccion', '$id' )";
$sql3="INSERT INTO datos_atiende_visita (id_datos_atiende_visita, nombres_atiende_visita,tipo_numero_documento,fecha_nacimiento,edad,direccion_residencial,telefono, id_visitas_programa) VALUES ('$id0','$nombres_atiende_visita','$tipo_numero_documento','$fecha_nacimiento','$edad_persona','$direccion_residencial','$telefono_persona', '$id')";
$sql4="INSERT INTO visita_objetivo (id_visita_objetivo, objetivo, id_visitas_programa) VALUES ('$id0','$objetivo', '$id')";
$sql5="INSERT INTO composion_familiar (id_composion_familiar, nombres_apellidos,parentesco, edad,escolaridad,estado_civil,actividad,ocupacion, id_visitas_programa) VALUES ('$id0','$nombres_apellidos','$parentesco','$edad_familiar','$escolaridad','$estado_civil','$actividad','$ocupacion', '$id')";
$sql6="INSERT INTO visita_desarrollo (id_visita_desarrollo, desarrollo,id_visitas_programa) VALUES ('$id0','$desarrollo', '$id')";
$base->query($sql2);
$base->query($sql3);
$base->query($sql4);
$base->query($sql5);
$base->query($sql6);

$sql16 = "INSERT INTO `condiciones_habitacionales_economicos`(`id_condiciones_habitacionales_economicos`, `id_visitas_programa`) VALUES ('$id0','$id')";
$base->query($sql16);
$ultimoId = $base->query('SELECT MAX(id_condiciones_habitacionales_economicos) FROM `condiciones_habitacionales_economicos`');
$id_condiciones_habitacionales_economicos = $ultimoId->fetchAll()[0]["MAX(id_condiciones_habitacionales_economicos)"];




$sql7="INSERT INTO visitas_vivenda (id_visitas_vivenda, tipo_vivienda,tenencia_vivienda,estrato,ubicacion, tiempo_permanencia_vivienda, id_condiciones_habitacionales_economicos) VALUES ('$id0','$tipo_vivienda','$tenencia_vivienda','$estrato','$ubicacion', '$tiempo_permanencia_vivienda','$id_condiciones_habitacionales_economicos')";
$base->query($sql7);

$ultimoId = $base->query('SELECT MAX(id_visitas_vivenda) FROM `visitas_vivenda`');
$id_visitas_vivenda = $ultimoId->fetchAll()[0]["MAX(id_visitas_vivenda)"];

$sql8="INSERT INTO vistas_servicios_vivienda (id_vistas_servicios_vivienda,acueducto,energia,manejo_basuras,gas_domiciliario,television,internet, id_visitas_vivenda) VALUES ('$id0','$acueducto','$energia','$manejo_basuras','$gas_domiciliario','$television','$internet', '$id_visitas_vivenda')";
$base->query($sql8);

$sql9="INSERT INTO visitas_distribucion_espacios (id_visitas_distribucion_espacios, numero_habitaciones,numero_residentes,otros_espacios,descripcion_vivienda, id_visitas_vivenda) VALUES ('$id0','$numero_habitaciones','$numero_residentes','$otros_espacios','$descripcion_vivienda', '$id_visitas_vivenda')";

$sql10="INSERT INTO visitas_recursos_economicos (id_visitas_recursos_economicos, apropiacion_recursos, id_condiciones_habitacionales_economicos) VALUES ('$id0','$apropiacion_recursos','$id_condiciones_habitacionales_economicos')";

$sql11="INSERT INTO visitas_observaciones_adicionales (id_visitas_observaciones_adicionales, observaciones_adicionales, id_condiciones_habitacionales_economicos) VALUES ('$id0','$observaciones_adicionales','$id_condiciones_habitacionales_economicos')";

$sql12="INSERT INTO visitas_concepto (id_visitas_concepto, concepto, id_condiciones_habitacionales_economicos) VALUES ('$id0','$concepto','$id_condiciones_habitacionales_economicos')";

$base->query($sql9);
$base->query($sql10);
$base->query($sql11);
$base->query($sql12);

$sql17 = "INSERT INTO `informe_valoracion`(`id_informe_valoracion`, `id_visitas_programa`) VALUES ('$id0','$id')";
$base->query($sql17);
$ultimoId = $base->query('SELECT MAX(id_informe_valoracion) FROM `informe_valoracion`');
$id_informe_valoracion = $ultimoId->fetchAll()[0]["MAX(id_informe_valoracion)"];

$sql13="INSERT INTO datos_persona_realizo_evaluacion (id_datos_persona_realizo_evaluacion, nombre,numero_identificacion,residencia,edad,telefono, id_informe_valoracion) VALUES ('$id0','$nombre_encuestado','$numero_identificacion','$residencia_encuestado','$edad_encuestado','$telefono_encuestado', '$id_informe_valoracion')";

$sql14="INSERT INTO descripcion_actividad (id_descripcion_actividad, fecha_inicio_proceso,profesional_encargado,observaciones, id_informe_valoracion) VALUES ('$id0','$fecha_inicio_proceso','$profesional_encargado','$observaciones','$id_informe_valoracion')";

$sql15="INSERT INTO visitas_funcionario (id_visitas_funcionario, nombre_funcionario, cargo, registro_profesional,id_visitas_programa) VALUES ('$id0','$nombre_funcionario','$cargo','$registro_profesional','$id')";


$base->query($sql13);
$base->query($sql14);
$base->query($sql15);


$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/visitas.html");

