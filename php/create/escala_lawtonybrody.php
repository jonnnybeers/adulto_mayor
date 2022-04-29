<?php

include("../../includes/conexion.php");
$id0 = 0;
$nombre_usuario=$_POST['nombre_usuario'];
$zona=$_POST['zona'];
$distrito=$_POST['distrito'];
$modalidad_atencion=$_POST['modalidad_atencion'];
$lugar_atencion=$_POST['lugar_atencion'];
$edad_anual=$_POST['edad_anual'];
$edad_meses=$_POST['edad_meses'];  
$fecha_aplicacion=$_POST['fecha_aplicacion'];
$aplicado_por=$_POST['aplicado_por'];
$capacidad_telefono=$_POST['capacidad_telefono'];
$marcar_numeros=$_POST['marcar_numeros'];
$contestar_telefono=$_POST['contestar_telefono'];
$total_uno=$_POST['total_uno'];
$realiza_compras_necesarias=$_POST['realiza_compras_necesarias']; 
$compras_independiente=$_POST['compras_independiente'];
$acompanado_compra=$_POST['acompanado_compra'];
$incapaz_comprar=$_POST['incapaz_comprar'];
$total_dos=$_POST['total_dos'];
$organiza_comida=$_POST['organiza_comida'];
$adecuadamente_comida=$_POST['adecuadamente_comida'];
$sirve_comida=$_POST['sirve_comida'];
$necesita_comida=$_POST['necesita_comida'];
$total_tres=$_POST['total_tres']; 
$mantiene_casa_solo=$_POST['mantiene_casa_solo'];
$realiza_tareas_ligeras=$_POST['realiza_tareas_ligeras'];
$nivel_bajo_limpieza=$_POST['nivel_bajo_limpieza'];
$ayuda_labores=$_POST['ayuda_labores'];
$no_labora_casa=$_POST['no_labora_casa'];
$total_cuatro=$_POST['total_cuatro'];
$lava_ropa=$_POST['lava_ropa']; 
$lava_pequenas_prendas=$_POST['lava_pequenas_prendas'];
$lava_otro=$_POST['lava_otro'];
$total_cinco=$_POST['total_cinco'];
$viaja_solo=$_POST['viaja_solo'];
$coge_taxi=$_POST['coge_taxi'];
$transporte_publico=$_POST['transporte_publico'];
$utiliza_automovil=$_POST['utiliza_automovil']; 
$no_viaja=$_POST['no_viaja'];
$total_seis=$_POST['total_seis'];
$medicacion_solo=$_POST['medicacion_solo'];
$medicacion_previa=$_POST['medicacion_previa'];
$no_administra_medicacion=$_POST['no_administra_medicacion'];
$total_siete=$_POST['total_siete'];
$economicos_solo=$_POST['economicos_solo']; 
$compras_ayuda=$_POST['compras_ayuda'];
$economicos_ayuda=$_POST['economicos_ayuda'];
$total_ocho=$_POST['total_ocho'];
$total_todo=$_POST['total_todo'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO escala_lawton_brody (id_escala_lawton_brody,nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion,aplicado_por) VALUES ('$id0','$nombre_usuario','$zona','$distrito','$modalidad_atencion','$lugar_atencion','$edad_anual','$edad_meses','$fecha_aplicacion', '$aplicado_por')";

$ultimoId = $base->query('SELECT MAX(id_escala_lawton_brody) FROM `escala_lawton_brody`');
$id = $ultimoId->fetchAll()[0]["MAX(id_escala_lawton_brody)"];

$sql2="INSERT INTO pregunta_uno_lawton (id_pregunta_uno_lawton,capacidad_telefono,marcar_numeros,contestar_telefono,total_uno, id_escala_lawton_brody) VALUES ('$id0','$capacidad_telefono','$marcar_numeros','$contestar_telefono','$total_uno','$id')";
$sql3="INSERT INTO pregunta_dos_lawton (id_pregunta_dos_lawton,realiza_compras_necesarias,compras_independiente,acompanado_compra,incapaz_comprar,total_dos, id_escala_lawton_brody) VALUES ('$id0','$realiza_compras_necesarias','$compras_independiente','$acompanado_compra','$incapaz_comprar','$total_dos','$id')";
$sql4="INSERT INTO pregunta_tres_lawton (id_pregunta_tres_lawton,organiza_comida,adecuadamente_comida,sirve_comida,necesita_comida,total_tres, id_escala_lawton_brody) VALUES ('$id0','$organiza_comida','$adecuadamente_comida','$sirve_comida','$necesita_comida','$total_tres','$id')";
$sql5="INSERT INTO pregunta_cuatro_lawton (id_pregunta_cuatro_lawton,mantiene_casa_solo,realiza_tareas_ligeras,nivel_bajo_limpieza,ayuda_labores,no_labora_casa,total_cuatro, id_escala_lawton_brody) VALUES ('$id0','$mantiene_casa_solo','$realiza_tareas_ligeras','$nivel_bajo_limpieza','$ayuda_labores','$no_labora_casa','$total_cuatro','$id')";
$sql6="INSERT INTO pregunta_cinco_lawton (id_pregunta_cinco_lawton, lava_ropa,lava_pequenas_prendas,lava_otro,total_cinco, id_escala_lawton_brody) VALUES ('$id0','$lava_ropa','$lava_pequenas_prendas','$lava_otro','$total_cinco','$id')";
$sql7="INSERT INTO pregunta_seis_lawton (id_pregunta_seis_lawton, viaja_solo,coge_taxi,transporte_publico,utiliza_automovil,no_viaja,total_seis, id_escala_lawton_brody) VALUES ('$id0','$viaja_solo','$coge_taxi','$transporte_publico','$utiliza_automovil','$no_viaja','$total_seis','$id')";
$sql8="INSERT INTO pregunta_siete_lawton (id_pregunta_siete_lawton, medicacion_solo,medicacion_previa,no_administra_medicacion, total_siete, id_escala_lawton_brody) VALUES ('$id0','$medicacion_solo','$medicacion_previa','$no_administra_medicacion', '$total_siete','$id')";
$sql9="INSERT INTO pregunta_ocho_lawton (id_pregunta_ocho_lawton, economicos_solo,compras_ayuda,economicos_ayuda,total_ocho, id_escala_lawton_brody) VALUES ('$id0','$economicos_solo','$compras_ayuda','$economicos_ayuda','$total_ocho','$id')";
$sql10="INSERT INTO total_lawton_brody (id_total_lawton_brody, total_todo, id_escala_lawton_brody) VALUES ('$id0','$total_todo','$id')";
$sql11="INSERT INTO lawton_brody_funcionario (id_datos_funcionario, nombre_funcionario, cargo, registro_profesional, id_escala_lawton_brody) VALUES ('$id0','$nombre_funcionario','$cargo','$registro_profesional','$id')";

$base->query($sql2);
$base->query($sql3);
$base->query($sql4);
$base->query($sql5);
$base->query($sql6);
$base->query($sql7);
$base->query($sql8);
$base->query($sql9);
$base->query($sql10);
$base->query($sql11);


$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/escala_lawtonybrody.html");

