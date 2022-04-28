<?php

include("../../includes/conexion.php");
$id0 = 0;
$fecha_digilenciamiento=$_POST['fecha_digilenciamiento'];
$nombres_apellidos=$_POST['nombres_apellidos'];
$sexo=$_POST['sexo'];
$direccion_residencial=$_POST['direccion_residencial'];
$barrio=$_POST['barrio'];
$telefono=$_POST['telefono'];
$numero_identificacion=$_POST['numero_identificacion'];
$fecha_nacimiento_dia=$_POST['fecha_nacimiento_dia'];
$fecha_nacimiento_mes=$_POST['fecha_nacimiento_mes'];
$fecha_nacimiento_ano=$_POST['fecha_nacimiento_ano'];
$procedencia=$_POST['procedencia'];
$lugar=$_POST['lugar'];
$departamento=$_POST['departamento'];
$estado_civil=$_POST['estado_civil'];
$educacion=$_POST['educacion'];
$profesion=$_POST['profesion'];
$otros_oficios=$_POST['otros_oficios'];
$se_encuentra_afiliado_eps=$_POST['se_encuentra_afiliado_eps'];
$sisben=$_POST['sisben'];
$cual_sisben=$_POST['cual_sisben'];
$eps=$_POST['eps'];
$cual_eps=$_POST['cual_eps'];
$otro_servicio=$_POST['otro_servicio'];
$tenencia=$_POST['tenencia'];
$otra_tenencia=$_POST['otra_tenencia'];
$tipo_vivienda=$_POST['tipo_vivienda'];
$otro_tipo=$_POST['otro_tipo'];
$ruido=$_POST['ruido'];
$iluminacion=$_POST['iluminacion'];
$ventilacion=$_POST['ventilacion'];
$humedad=$_POST['humedad'];
$accesibilidad_escaleras=$_POST['accesibilidad_escaleras'];
$pisos=$_POST['pisos'];
$vias_acceso=$_POST['vias_acceso'];
$transporte=$_POST['transporte'];
$agua=$_POST['agua'];
$luz=$_POST['luz'];
$telefono_servicios=$_POST['telefono_servicios'];
$gas=$_POST['gas'];
$alcantarillado=$_POST['alcantarillado'];
$material_vivienda=$_POST['material_vivienda'];
$hipertension=$_POST['hipertension'];
$diabetes=$_POST['diabetes'];
$enfermedades_cardiacas=$_POST['enfermedades_cardiacas'];
$osteoporosis=$_POST['osteoporosis'];
$asma=$_POST['asma'];
$artritis=$_POST['artritis'];
$cancer=$_POST['cancer'];
$demencia=$_POST['demencia'];
$otras=$_POST['otras'];
$dolor_articulaciones=$_POST['dolor_articulaciones'];
$mareos_vahidos=$_POST['mareos_vahidos'];
$tos_catarro_gripe=$_POST['tos_catarro_gripe'];
$tobillos_inflamados=$_POST['tobillos_inflamados'];
$cansancio=$_POST['osteoporosis'];
$dificultad_para_dormir=$_POST['dificultad_para_dormir'];
$flojedad_piernas=$_POST['flojedad_piernas'];
$dificultad_respirar=$_POST['dificultad_respirar'];
$palpitaciones=$_POST['palpitaciones'];
$dolor_pecho=$_POST['dolor_pecho'];
$manos_pies_frios=$_POST['manos_pies_frios'];
$adormilado=$_POST['adormilado'];
$boca_seca=$_POST['boca_seca'];
$hormigueo_manos_pies=$_POST['hormigueo_manos_pies'];
$consume_medicamentos=$_POST['consume_medicamentos'];
$cuantos_medicamentos=$_POST['cuantos_medicamentos'];
$cuales_medicamentos=$_POST['cuales_medicamentos'];
$recibe_tratamiento=$_POST['recibe_tratamiento'];
$cual_tratamiento=$_POST['cual_tratamiento'];
$frecuencia_visita_medico=$_POST['frecuencia_visita_medico'];
$otros_datos=$_POST['otros_datos'];
$medicamentos_no_prescritos=$_POST['medicamentos_no_prescritos'];
$cuales_no_prescritos=$_POST['cuales_no_prescritos'];
$cambio_habitos_alimenticios=$_POST['cambio_habitos_alimenticios'];
$come_menos_dos_veces=$_POST['come_menos_dos_veces'];
$tiene_problemas_dentales=$_POST['tiene_problemas_dentales'];
$come_pocas_frutas=$_POST['come_pocas_frutas'];
$come_solo=$_POST['come_solo'];
$realiza_ejercicio=$_POST['realiza_ejercicio'];
$frecuencia_realiza_ejercicio=$_POST['frecuencia_realiza_ejercicio'];
$fuma=$_POST['fuma'];
$cuantos_cigarrillos=$_POST['cuantos_cigarrillos'];
$consume_licor=$_POST['consume_licor'];
$frecuencia_consume_licor=$_POST['frecuencia_consume_licor'];
$cantidad_consume_licor=$_POST['cantidad_consume_licor'];
$cuidar_aspecto_fisico=$_POST['cuidar_aspecto_fisico'];
$realizar_tareas_caseras=$_POST['realizar_tareas_caseras'];
$caminar_funcionalidad=$_POST['caminar_funcionalidad'];
$realizar_tareas_fuera=$_POST['realizar_tareas_fuera'];
$puede_valerse=$_POST['puede_valerse'];
$parientes_longevos=$_POST['parientes_longevos'];
$edad_madre_padre=$_POST['edad_madre_padre'];
$edad_abuelo_abuela=$_POST['edad_abuelo_abuela'];
$edad_tio_tia=$_POST['edad_tio_tia'];
$siente_deprimido=$_POST['siente_deprimido'];
$siente_desesperado=$_POST['siente_desesperado'];
$olvida_dia_que_se_encuentra=$_POST['olvida_dia_que_se_encuentra'];
$olvida_oficios=$_POST['olvida_oficios'];
$olvida_objetos_personales=$_POST['olvida_objetos_personales'];
$se_pierde_en_algun_lugar=$_POST['se_pierde_en_algun_lugar'];
$falta_interes=$_POST['falta_interes'];
$preocupa_higiene_personal=$_POST['preocupa_higiene_personal'];
$satisfecho_como_ocupa_eltiempo=$_POST['satisfecho_como_ocupa_eltiempo'];
$esta_satisfecho_con_la_vida=$_POST['esta_satisfecho_con_la_vida'];
$observaciones=$_POST['observaciones'];
$personas_viven=$_POST['personas_viven'];
$con_quien_vive=$_POST['con_quien_vive'];
$tuvo_hijos=$_POST['tuvo_hijos'];
$cuantos_hijos=$_POST['cuantos_hijos'];
$rol_nucleo_familiar=$_POST['rol_nucleo_familiar'];
$actividades_que_participa=$_POST['actividades_que_participa'];
$otras_actividades=$_POST['otras_actividades'];
$participa_en_decisiones=$_POST['participa_en_decisiones'];
$como_participa=$_POST['como_participa'];
$mencione_participacion=$_POST['mencione_participacion'];
$que_aportes_recibe=$_POST['que_aportes_recibe'];
$otros_aportes=$_POST['otros_aportes'];
$esta_satisfecho=$_POST['esta_satisfecho'];
$por_que_satisfecho=$_POST['por_que_satisfecho'];
$comunicacion_con_quien_vive=$_POST['comunicacion_con_quien_vive'];
$por_que_comunica=$_POST['por_que_comunica'];
$como_califica_relaciones=$_POST['como_califica_relaciones'];
$por_que_relaciona=$_POST['por_que_relaciona'];
$hijos_que_no_viven_con_usted=$_POST['hijos_que_no_viven_con_usted'];
$nietos_que_no_viven_con_usted=$_POST['nietos_que_no_viven_con_usted'];
$familiares_no_viven_con_usted=$_POST['familiares_no_viven_con_usted'];
$vecinos=$_POST['vecinos'];
$amigos_no_vecinos=$_POST['amigos_no_vecinos'];
$conyuge=$_POST['conyuge'];
$hijos=$_POST['hijos'];
$nietos=$_POST['nietos'];
$otros_familiares=$_POST['otros_familiares'];
$vecinos2=$_POST['vecinos'];
$amigos_no_vecinos2=$_POST['amigos_no_vecinos'];
$participa_en_grupos=$_POST['participa_en_grupos'];
$cuales_grupos=$_POST['cuales_grupos'];
$con_que_frecuencia=$_POST['con_que_frecuencia'];
$nunca_explique_razones=$_POST['nunca_explique_razones'];
$trabajado_durante_su_vida=$_POST['trabajado_durante_su_vida'];
$labora_actualmente=$_POST['labora_actualmente'];
$cual_actividad=$_POST['cual_actividad'];
$leer=$_POST['leer'];
$visitar_amigos=$_POST['visitar_amigos'];
$ver_television=$_POST['ver_television'];
$escuchar_radio=$_POST['escuchar_radio'];
$caminar=$_POST['caminar'];
$juegos_actividades=$_POST['juegos_actividades'];
$cuidar_ninos=$_POST['cuidar_ninos'];
$hacer_manualidades=$_POST['hacer_manualidades'];
$hacer_mandados=$_POST['hacer_mandados'];
$ir_compras=$_POST['ir_compras'];
$viajar=$_POST['viajar'];
$observaciones_generales=$_POST['observaciones_generales'];
$impresion_diagnostica=$_POST['impresion_diagnostica'];
$concepto_gerontologico=$_POST['concepto_gerontologico'];
$plan=$_POST['plan'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$numero_identificacion_funcionario=$_POST['numero_identificacion_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO instrumento_programa (id_instrumento_programa, fecha_digilenciamiento) VALUES ('$id0','$fecha_digilenciamiento')";
$base->query($sql);

$ultimoId = $base->query('SELECT MAX(id_instrumento_programa) FROM `instrumento_programa`');
$id = $ultimoId->fetchAll()[0]["MAX(id_instrumento_programa)"];

$sql2="INSERT INTO instrumento_datos_adulto_mayor (id_instrumento_datos_adulto_mayor, nombres_apellidos,sexo,direccion_residencial,barrio,telefono,numero_identificacion,fecha_nacimiento_dia,fecha_nacimiento_mes,fecha_nacimiento_ano,procedencia,lugar,departamento,estado_civil,educacion,profesion,otros_oficios,se_encuentra_afiliado_eps,sisben,cual_sisben,eps,cual_eps,otro_servicio, id_instrumento_programa) VALUES ('$id0','$nombres_apellidos','$sexo','$direccion_residencial','$barrio','$telefono','$numero_identificacion','$fecha_nacimiento_dia','$fecha_nacimiento_mes','$fecha_nacimiento_ano','$procedencia','$lugar','$departamento','$estado_civil','$educacion','$profesion','$otros_oficios','$se_encuentra_afiliado_eps','$sisben','$cual_sisben','$eps','$cual_eps','$otro_servicio','$id')";
$sql3="INSERT INTO instrumento_datos_ambiente_servicios_vivienda (id_instrumento_datos_ambiente_servicios_vivienda, tenencia,otra_tenencia,tipo_vivienda,otro_tipo,numero_identificacion,ruido,iluminacion,ventilacion,humedad,accesibilidad_escaleras,pisos,vias_acceso,transporte, id_instrumento_programa) VALUES ('$id0','$tenencia','$otra_tenencia','$tipo_vivienda','$otro_tipo','$numero_identificacion','$ruido','$iluminacion','$ventilacion','$humedad','$accesibilidad_escaleras','$pisos','$vias_acceso', '$transporte','$id')";
$base->query($sql2);
$base->query($sql3);

$ultimoId = $base->query('SELECT MAX(id_instrumento_datos_ambiente_servicios_vivienda) FROM `instrumento_datos_ambiente_servicios_vivienda`');
$id_instrumento_datos_ambiente_servicios_vivienda = $ultimoId->fetchAll()[0]["MAX(id_instrumento_datos_ambiente_servicios_vivienda)"];

$sql4="INSERT INTO servicios_vivienda (id_servicios_vivienda, agua,luz,telefono,gas,alcantarillado,material_vivienda, id_instrumento_datos_ambiente_servicios_vivienda) VALUES ('$id0','$agua','$luz','$telefono_servicios','$gas','$alcantarillado','$material_vivienda','$id_instrumento_datos_ambiente_servicios_vivienda')";

$base->query($sql4);

$sql17 = "INSERT INTO `aspecto_biologico`(`id_aspecto_biologico`, `id_instrumento_programa`) VALUES ('$id0','$id')";
$base->query($sql17);

$ultimoId = $base->query('SELECT MAX(id_aspecto_biologico) FROM `aspecto_biologico`');
$id_aspecto_biologico = $ultimoId->fetchAll()[0]["MAX(id_aspecto_biologico)"];


$sql5="INSERT INTO instrumento_patologias (id_instrumento_estado_salud_patologias, hipertension,diabetes,enfermedades_cardiacas,osteoporosis,asma,artritis,cancer,demencia, otras, id_aspecto_biologico) VALUES ('$id0','$hipertension','$diabetes','$enfermedades_cardiacas','$osteoporosis','$asma','$artritis','$cancer','$demencia', '$otras','$id_aspecto_biologico')";
$sql6="INSERT INTO instrumento_síntomas (id_instrumento_síntomas,dolor_articulaciones,mareos_vahidos,tos_catarro_gripe,tobillos_inflamados,cansancio,dificultad_para_dormir,flojedad_piernas,dificultad_respirar,palpitaciones,dolor_pecho,manos_pies_frios,adormilado,boca_seca,hormigueo_manos_pies, id_aspecto_biologico) VALUES ('$id0','$dolor_articulaciones','$mareos_vahidos','$tos_catarro_gripe','$tobillos_inflamados','$cansancio','$dificultad_para_dormir','$flojedad_piernas','$dificultad_respirar','$palpitaciones','$dolor_pecho','$manos_pies_frios','$adormilado','$boca_seca','$hormigueo_manos_pies','$id_aspecto_biologico')";
$sql7="INSERT INTO instrumento_consumo_medicamentos (id_instrumento_consumo_medicamentos,consume_medicamentos,cuantos_medicamentos,cuales_medicamentos,recibe_tratamiento,cual_tratamiento,frecuencia_visita_medico,otros_datos,medicamentos_no_prescritos, cuales_no_prescritos, id_aspecto_biologico) VALUES ('$id0','$consume_medicamentos','$cuantos_medicamentos','$cuales_medicamentos','$recibe_tratamiento','$cual_tratamiento','$frecuencia_visita_medico','$otros_datos','$medicamentos_no_prescritos', '$cuales_no_prescritos','$id_aspecto_biologico')";

$sql8="INSERT INTO instrumento_habitos_adulto_mayor (id_instrumento_habitos_adulto_mayor, cambio_habitos_alimenticios,come_menos_dos_veces,tiene_problemas_dentales,come_pocas_frutas,come_solo,realiza_ejercicio,frecuencia_realiza_ejercicio,fuma,cuantos_cigarrillos,consume_licor, frecuencia_consume_licor,cantidad_consume_licor,id_aspecto_biologico) VALUES ('$id0','$cambio_habitos_alimenticios','$come_menos_dos_veces','$tiene_problemas_dentales','$come_pocas_frutas','$come_solo','$realiza_ejercicio','$frecuencia_realiza_ejercicio','$fuma','$cuantos_cigarrillos','$consume_licor', '$frecuencia_consume_licor','$cantidad_consume_licor','$id_aspecto_biologico')";
$sql9="INSERT INTO instrumento_funcionalidad_adulto_mayor (id_instrumento_funcionalidad_adulto_mayor, cuidar_aspecto_fisico,realizar_tareas_caseras,caminar,realizar_tareas_fuera,puede_valerse,id_aspecto_biologico) VALUES ('$id0','$cuidar_aspecto_fisico','$realizar_tareas_caseras','$caminar','$realizar_tareas_fuera','$puede_valerse','$id_aspecto_biologico')";
$sql10="INSERT INTO instrumento_longevidad_adulto_mayor (id_instrumento_longevidad_adulto_mayor, parientes_longevos,edad_madre_padre,edad_abuelo_abuela,edad_tio_tia,id_aspecto_biologico) VALUES ('$id0','$parientes_longevos','$edad_madre_padre','$edad_abuelo_abuela','$edad_tio_tia','$id_aspecto_biologico')";
$sql11="INSERT INTO ficha_psicologia_adulto_mayor (id_ficha_psicologia_adulto_mayor, siente_deprimido,siente_desesperado,olvida_dia_que_se_encuentra,olvida_oficios,olvida_objetos_personales,se_pierde_en_algun_lugar,falta_interes,preocupa_higiene_personal,satisfecho_como_ocupa_eltiempo,esta_satisfecho_con_la_vida,observaciones, id_instrumento_programa) VALUES ('$id0','$siente_deprimido','$siente_desesperado','$olvida_dia_que_se_encuentra','$olvida_oficios','$olvida_objetos_personales','$se_pierde_en_algun_lugar','$falta_interes','$preocupa_higiene_personal','$satisfecho_como_ocupa_eltiempo','$esta_satisfecho_con_la_vida','$observaciones','$id')";

$base->query($sql5);
$base->query($sql6);
$base->query($sql7);
$base->query($sql8);
$base->query($sql9);
$base->query($sql10);
$base->query($sql11);

$sql18 = "INSERT INTO `aspecto_social`(`id_aspecto_social`, `id_instrumento_programa`) VALUES ('$id0','$id')";
$base->query($sql18);
$ultimoId = $base->query('SELECT MAX(id_aspecto_social) FROM `aspecto_social`');
$id_aspecto_social = $ultimoId->fetchAll()[0]["MAX(id_aspecto_social)"];

$sql12="INSERT INTO relaciones_familiares (id_relaciones_familiares, personas_viven,con_quien_vive,tuvo_hijos,cuantos_hijos,rol_nucleo_familiar,actividades_que_participa,otras_actividades,participa_en_decisiones,como_participa,mencione_participacion,que_aportes_recibe,otros_aportes,esta_satisfecho,por_que_satisfecho,comunicacion_con_quien_vive,por_que_comunica,como_califica_relaciones,por_que_relaciona, id_aspecto_social) VALUES ('$id0','$personas_viven','$con_quien_vive','$tuvo_hijos','$cuantos_hijos','$rol_nucleo_familiar','$actividades_que_participa','$otras_actividades','$participa_en_decisiones','$como_participa','$mencione_participacion','$que_aportes_recibe', '$otros_aportes','$esta_satisfecho','$por_que_satisfecho','$comunicacion_con_quien_vive','$por_que_comunica','$como_califica_relaciones','$por_que_relaciona','$id_aspecto_social')";
$sql13="INSERT INTO relaciones_interpersonales (id_relaciones_interpersonales, hijos_que_no_viven_con_usted,nietos_que_no_viven_con_usted,familiares_no_viven_con_usted,vecinos,amigos_no_vecinos, conyuge,hijos,nietos,otros_familiares,vecinos2,amigos_no_vecinos2,id_aspecto_social) VALUES ('$id0','$hijos_que_no_viven_con_usted','$nietos_que_no_viven_con_usted','$familiares_no_viven_con_usted','$vecinos', '$amigos_no_vecinos', '$conyuge','$hijos','$nietos','$otros_familiares','$vecinos','$amigos_no_vecinos','$id_aspecto_social')";
$sql14="INSERT INTO relaciones_social (id_relaciones_social, participa_en_grupos,cuales_grupos,con_que_frecuencia,nunca_explique_razones, id_aspecto_social) VALUES ('$id0','$participa_en_grupos','$cuales_grupos','$con_que_frecuencia','$nunca_explique_razones','$id_aspecto_social')";
$sql15="INSERT INTO instrumento_actividad_ocio_adulto_mayor (id_instrumento_actividad_ocio_adulto_mayor, ntrabajado_durante_su_vida, labora_actualmente,cual_actividad,leer,visitar_amigos,ver_television,escuchar_radio,caminar,juegos_actividades,cuidar_ninos,hacer_manualidades,hacer_mandados,ir_compras,viajar,observaciones_generales,impresion_diagnostica,concepto_gerontologico,plan, id_instrumento_programa) VALUES ('$id0','$trabajado_durante_su_vida', '$labora_actualmente','$cual_actividad','$leer','$visitar_amigos','$ver_television','$escuchar_radio','$caminar','$juegos_actividades','$cuidar_ninos','$hacer_manualidades','$hacer_mandados','$ir_compras','$viajar','$observaciones_generales','$impresion_diagnostica','$concepto_gerontologico','$plan','$id')";

$sql16="INSERT INTO datos_funcionario_instrumento (id_datos_funcionario, nombre_funcionario, cargo, registro_profesional,numero_identificacion_funcionario, id_instrumento_programa) VALUES ('$id0','$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional','$id')";



$base->query($sql12);
$base->query($sql13);
$base->query($sql14);
$base->query($sql15);
$base->query($sql16);

$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/instrumento.html");

