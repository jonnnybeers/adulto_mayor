<?php

include("../../includes/conexion.php");

$fecha_apertura = $_POST['fecha_apertura'];
$nombres_apellidos = $_POST['nombres_apellidos'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$direccion_residencial = $_POST['direccion_residencial'];
$telefono = $_POST['telefono'];
$numero_identificacion = $_POST['numero_identificacion'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$estado_civil = $_POST['estado_civil'];
$grado_escolaridad = $_POST['grado_escolaridad'];
$grupo_sisben = $_POST['grupo_sisben'];
$eps = $_POST['eps'];
$regimen_actual = $_POST['regimen_actual'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$motivo_ingreso = $_POST['motivo_ingreso'];
$consume_alcohol = $_POST['consume_alcohol'];
$hace_cuanto_consume_alcohol = $_POST['hace_cuanto_consume_alcohol'];
$fumador = $_POST['fumador'];
$hace_cuanto_fuma = $_POST['hace_cuanto_fuma'];
$consume_drogas = $_POST['consume_drogas'];
$hace_cuanto_consume_drogas = $_POST['hace_cuanto_consume_drogas'];
$tipo_droga = $_POST['tipo_droga'];
$nombre_acudiente = $_POST['nombre_acudiente'];
$parentesco_acudiente = $_POST['parentesco_acudiente'];
$direccion_acudiente = $_POST['direccion_acudiente'];
$telefono_acudiente = $_POST['telefono_acudiente'];
$cataratas = $_POST['cataratas'];
$pterigios = $_POST['pterigios'];
$lentes = $_POST['lentes'];
$parpados = $_POST['parpados'];
$dentadura = $_POST['dentadura'];
$protesis = $_POST['protesis'];
$protesis_total = $_POST['protesis_total'];
$protesis_parcial = $_POST['protesis_parcial'];
$dientes_naturales = $_POST['dientes_naturales'];
$deficiencia = $_POST['deficiencia'];
$alergias = $_POST['alergias'];
$tipo_alergias = $_POST['tipo_alergias'];
$resequedad = $_POST['resequedad'];
$lesiones = $_POST['lesiones'];
$alteraciones_unas = $_POST['alteraciones_unas'];
$hongos = $_POST['hongos'];
$cambio_color = $_POST['cambio_color'];
$disminucion_muscular = $_POST['disminucion_muscular'];
$paralisis_algun_lado_del_cuerpo = $_POST['paralisis_algun_lado_del_cuerpo'];
$fecha_A = $_POST['fecha_A'];
$edad_A = $_POST['edad_A'];
$peso_A = $_POST['peso_A'];
$talla_A = $_POST['talla_A'];
$pe_A = $_POST['pe_A'];
$te_A = $_POST['te_A'];
$imc_A = $_POST['imc_A'];
$analis_A = $_POST['analis_A'];
$te2_A = $_POST['te2_A'];
$apariencia_fisica = $_POST['apariencia_fisica'];
$presentacion_personal = $_POST['presentacion_personal'];
$actitud_entrevista = $_POST['actitud_entrevista'];
$memoria_presente = $_POST['memoria_presente'];
$memoria_pasada = $_POST['memoria_pasada'];
$atencion = $_POST['atencion'];
$lectoescritura = $_POST['lectoescritura'];
$lenguaje_hablado = $_POST['lenguaje_hablado'];
$curso_pensamiento = $_POST['curso_pensamiento'];
$razonamiento = $_POST['razonamiento'];
$angustia = $_POST['angustia'];
$llanto = $_POST['llanto'];
$manifiesta_no_institucion = $_POST['manifiesta_no_institucion'];
$ideas_suicidas = $_POST['ideas_suicidas'];
$manifiesta_agresividad = $_POST['manifiesta_agresividad'];
$observa_tranquilo = $_POST['observa_tranquilo'];
$proyecto_vida = $_POST['proyecto_vida'];
$espera_muerte = $_POST['espera_muerte'];
$nombre_SF = $_POST['nombre_SF'];
$parentesco_SF = $_POST['parentesco_SF'];
$direccion_SF = $_POST['direccion_SF'];
$telefono_SF = $_POST['telefono_SF'];
$hace_amigos = $_POST['hace_amigos'];
$pertenece_grupos = $_POST['pertenece_grupos'];
$maneja_relaciones = $_POST['maneja_relaciones'];
$manifiesta_preocupaciones = $_POST['manifiesta_preocupaciones'];
$facilidad_comunicarse = $_POST['facilidad_comunicarse'];
$religiosos = $_POST['religiosos'];
$cultural = $_POST['cultural'];
$intelectual_cientifico = $_POST['intelectual_cientifico'];
$manuales = $_POST['manuales'];
$actitudes = $_POST['actitudes'];
$dibujo = $_POST['dibujo'];
$pintar = $_POST['pintar'];
$danzar = $_POST['danzar'];
$bailar = $_POST['bailar'];
$teatro = $_POST['teatro'];
$poesia = $_POST['poesia'];
$canto = $_POST['canto'];
$escritura = $_POST['escritura'];
$deportivas = $_POST['deportivas'];
$liderazgo = $_POST['liderazgo'];
$humanisticas = $_POST['humanisticas'];
$intervencion_gerontologica = $_POST['intervencion_gerontologica'];
$nombre_funcionario = $_POST['nombre_funcionario'];
$numero_identificacion_funcionario = $_POST['numero_identificacion_funcionario'];
$cargo = $_POST['cargo'];
$registro_profesional = $_POST['registro_profesional'];
$aprobada_por = $_POST['aprobada_por'];
$id0 = 0;

$sql = "INSERT INTO `historia_programa`(`id_historia_programa`, `fecha_apertura`) VALUES ('$id0','$fecha_apertura')";
$base->query($sql);

$ultimoId = $base->query('SELECT MAX(id_historia_programa) FROM `historia_programa`');
$id = $ultimoId->fetchAll()[0]["MAX(id_historia_programa)"];


$sql2 = "INSERT INTO `historia_datos_adulto_mayor`(`id_historia_datos_adulto_mayor`, `nombres_apellidos`, `fecha_nacimiento`, `direccion_residencial`, `telefono`, `numero_identificacion`, `edad`, `sexo`, `estado_civil`, `grado_escolaridad`, `grupo_sisben`, `eps`, `regimen_actual`, `fecha_ingreso`, `motivo_ingreso`, `consume_alcohol`, `hace_cuanto_consume_alcohol`, `fumador`, `hace_cuanto_fuma`, `consume_drogas`, `hace_cuanto_consume_drogas`, `tipo_droga`, `nombre_acudiente`, `parentesco_acudiente`, `direccion_acudiente`, `telefono_acudiente`, `id_historia_programa`) VALUES ('$id0','$nombres_apellidos','$fecha_nacimiento','$direccion_residencial','$telefono','$numero_identificacion','$edad','$sexo','$estado_civil','$grado_escolaridad','$grupo_sisben','$eps','$regimen_actual','$fecha_ingreso','$motivo_ingreso','$consume_alcohol','$hace_cuanto_consume_alcohol','$fumador','$hace_cuanto_fuma','$consume_drogas','$hace_cuanto_consume_drogas','$tipo_droga','$nombre_acudiente','$parentesco_acudiente','$direccion_acudiente','$telefono_acudiente','$id')";
$base->query($sql2);
$ultimoId = $base->query('SELECT MAX(id_historia_datos_adulto_mayor) FROM `historia_datos_adulto_mayor`');
$id_historia_datos_adulto_mayor = $ultimoId->fetchAll()[0]["MAX(id_historia_datos_adulto_mayor)"];

$sql18 = "INSERT INTO `valoracion_fisica`(`id_valoracion_fisica`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$id_historia_datos_adulto_mayor')";
$base->query($sql18);
$ultimoId = $base->query('SELECT MAX(id_valoracion_fisica) FROM `valoracion_fisica`');
$id_valoracion_fisica = $ultimoId->fetchAll()[0]["MAX(id_valoracion_fisica)"];

$sql3 = "INSERT INTO `valoracion_fisica_ojos`(`id_valoracion_fisica_ojos`, `cataratas`, `pterigios`, `lentes`, `parpados`, `id_valoracion_fisica`) VALUES ('$id0','$cataratas','$pterigios','$lentes','$parpados','$id_valoracion_fisica')";
$sql4 = "INSERT INTO `valoracion_fisica_boca`(`id_valoracion_fisica_boca`, `dentadura`, `protesis`, `protesis_total`, `protesis_parcial`, `dientes_naturales`, `id_valoracion_fisica`) VALUES ('$id0','$dentadura','$protesis','$protesis_total','$protesis_parcial','$dientes_naturales','$id_valoracion_fisica')";
$sql5 = "INSERT INTO `valoracion_fisica_oidos`(`id_valoracion_fisica_oidos`, `deficiencia`, `id_valoracion_fisica`) VALUES ('$id0','$deficiencia','$id_valoracion_fisica')";
$sql6 = "INSERT INTO `valoracion_fisica_piel`(`id_valoracion_fisica_piel`, `alergias`, `tipo_alergias`, `resequedad`, `lesiones`, `id_valoracion_fisica`) VALUES ('$id0','$alergias','$tipo_alergias','$resequedad','$lesiones','$id_valoracion_fisica')";
$sql7 = "INSERT INTO `valoracion_fisica_ugnas`(`id_valoracion_fisica_piel`, `alteraciones_unas`, `hongos`, `cambio_color`, `id_valoracion_fisica`) VALUES ('$id0','$alteraciones_unas','$hongos','$cambio_color','$id_valoracion_fisica')";
$sql8 = "INSERT INTO `sistema_musculo_esqueletico`(`id_sistema_musculo_esqueletico`, `disminucion_muscular`, `paralisis_algun_lado_del_cuerpo`, `id_valoracion_fisica`) VALUES ('$id0','$disminucion_muscular','$paralisis_algun_lado_del_cuerpo','$id_valoracion_fisica')";
$sql9 = "INSERT INTO `antrotometria`(`id_antrotometria`, `fecha`, `edad`, `peso`, `talla`, `pe`, `te`, `imc`, `analis`, `te2`, `id_valoracion_fisica`) VALUES ('$id0','$fecha_A','$edad_A','$peso_A','$talla_A','$pe_A','$te_A','$imc_A','$analis_A','$te2_A','$id_valoracion_fisica')";

$base->query($sql3);
$base->query($sql4);
$base->query($sql5);
$base->query($sql6);
$base->query($sql7);
$base->query($sql8);
$base->query($sql9);


$sql19 = "INSERT INTO `valoracion_psicologica`(`id_valoracion_psicologica`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$id_historia_datos_adulto_mayor')";
$base->query($sql19);
$ultimoId = $base->query('SELECT MAX(id_valoracion_psicologica) FROM `valoracion_psicologica`');
$id_valoracion_psicologica = $ultimoId->fetchAll()[0]["MAX(id_valoracion_psicologica)"];

$sql10 = "INSERT INTO `area_personal`(`id_area_personal`, `apariencia_fisica`, `presentacion_personal`, `actitud_entrevista`, `id_valoracion_psicologica`) VALUES ('$id0','$apariencia_fisica','$presentacion_personal','$actitud_entrevista','$id_valoracion_psicologica')";
$sql11 = "INSERT INTO `area_cognitiva`(`id_area_cognitiva`, `memoria_presente`, `memoria_pasada`, `atencion`, `lectoescritura`, `lenguaje_hablado`, `curso_pensamiento`, `razonamiento`, `id_valoracion_psicologica`) VALUES ('$id0','$memoria_presente','$memoria_pasada','$atencion','$lectoescritura','$lenguaje_hablado','$curso_pensamiento','$razonamiento','$id_valoracion_psicologica')";
$sql12 = "INSERT INTO `area_emocional`(`id_area_emocional`, `angustia`, `llanto`, `manifiesta_no_institucion`, `ideas_suicidas`, `manifiesta_agresividad`, `observa_tranquilo`, `proyecto_vida`, `espera_muerte`, `id_valoracion_psicologica`) VALUES ('$id0','$angustia','$llanto','$manifiesta_no_institucion','$ideas_suicidas','$manifiesta_agresividad','$observa_tranquilo','$proyecto_vida','$espera_muerte','$id_valoracion_psicologica')";
$sql13 = "INSERT INTO `area_sociofamiliar`(`id_area_emocional`, `nombre`, `parentesco`, `direccion`, `telefono`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$nombre_SF','$parentesco_SF','$direccion_SF','$telefono_SF','$id_historia_datos_adulto_mayor')";
$sql14 = "INSERT INTO `sistema_relaciones`(`id_sistema_relaciones`, `hace_amigos`, `pertenece_grupos`, `maneja_relaciones`, `manifiesta_preocupaciones`, `facilidad_comunicarse`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$hace_amigos','$pertenece_grupos','$maneja_relaciones','$manifiesta_preocupaciones','$facilidad_comunicarse','$id_historia_datos_adulto_mayor')";
$sql15 = "INSERT INTO `intereses`(`id_intereses`, `religiosos`, `cultural`, `intelectual_cientifico`, `manuales`, `actitudes`, `dibujo`, `pintar`, `danzar`, `bailar`, `teatro`, `poesia`, `canto`, `escritura`, `deportivas`, `liderazgo`, `humanisticas`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$religiosos','$cultural','$intelectual_cientifico','$manuales','$actitudes','$dibujo','$pintar','$danzar','$bailar','$teatro','$poesia','$canto','$escritura','$deportivas','$liderazgo','$humanisticas','$id_historia_datos_adulto_mayor')";
$sql16 = "INSERT INTO `intervencion_gerontologica`(`id_intervencion_gerontologica`, `intervencion_gerontologica`, `id_historia_datos_adulto_mayor`) VALUES ('$id0','$intervencion_gerontologica','$id_historia_datos_adulto_mayor')";
$sql17 = "INSERT INTO `historia_funcionario`(`id_historia_funcionario`, `nombre_funcionario`, `numero_identificacion_funcionario`, `cargo`, `registro_profesional`, `aprobada_por`, `id_historia_programa`) VALUES ('$id0','$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional','$aprobada_por','$id')";


$base->query($sql10);
$base->query($sql11);
$base->query($sql12);
$base->query($sql13);
$base->query($sql14);
$base->query($sql15);
$base->query($sql16);
$base->query($sql17);


Header("Location: ../../views/Historia.html");
