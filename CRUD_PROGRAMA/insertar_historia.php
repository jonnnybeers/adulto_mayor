<?php
include("conexion.php");


$fecha_apertura=$_POST['fecha_apertura'];
$nombres_apellidos=$_POST['nombres_apellidos'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$direccion_residencial=$_POST['direccion_residencial'];
$telefono=$_POST['telefono'];
$numero_identificacion=$_POST['numero_identificacion'];
$edad=$_POST['edad'];  
$sexo=$_POST['sexo'];
$estado_civil=$_POST['estado_civil'];
$grado_escolaridad=$_POST['grado_escolaridad'];
$grupo_sisben=$_POST['grupo_sisben'];
$eps=$_POST['eps'];
$regimen_actual=$_POST['regimen_actual'];
$fecha_ingreso=$_POST['fecha_ingreso']; 
$motivo_ingreso=$_POST['motivo_ingreso'];
$consume_alcohol=$_POST['consume_alcohol'];
$hace_cuanto_consume_alcohol=$_POST['hace_cuanto_consume_alcohol'];
$fumador=$_POST['fumador'];
$hace_cuanto_fuma=$_POST['hace_cuanto_fuma'];
$consume_drogas=$_POST['consume_drogas'];
$hace_cuanto_consume_drogas=$_POST['hace_cuanto_consume_drogas'];  
$tipo_droga=$_POST['tipo_droga'];
$nombre_acudiente=$_POST['nombre_acudiente'];
$parentesco_acudiente=$_POST['parentesco_acudiente'];
$direccion_acudiente=$_POST['direccion_acudiente'];
$telefono_acudiente=$_POST['telefono_acudiente'];
$cataratas=$_POST['cataratas'];
$pterigios=$_POST['pterigios'];
$lentes=$_POST['lentes'];
$parpados=$_POST['parpados'];
$dentadura=$_POST['dentadura'];  
$protesis=$_POST['protesis'];
$protesis_total=$_POST['protesis_total'];
$protesis_parcial=$_POST['protesis_parcial'];
$dientes_naturales=$_POST['dientes_naturales'];
$deficiencia=$_POST['deficiencia'];
$alergias=$_POST['alergias'];
$tipo_alergias=$_POST['tipo_alergias'];
$resequedad=$_POST['resequedad'];
$lesiones=$_POST['lesiones'];
$alteraciones_unas=$_POST['alteraciones_unas'];  
$hongos=$_POST['hongos'];
$cambio_color=$_POST['cambio_color'];
$disminucion_muscular=$_POST['disminucion_muscular'];
$paralisis_algun_lado_del_cuerpo=$_POST['paralisis_algun_lado_del_cuerpo'];
$fecha=$_POST['fecha'];
$edad=$_POST['edad'];
$peso=$_POST['peso'];
$talla=$_POST['talla'];
$pe=$_POST['pe'];  
$te=$_POST['te'];
$imc=$_POST['imc'];
$analis=$_POST['analis'];
$te2=$_POST['te2'];
$apariencia_fisica=$_POST['apariencia_fisica'];
$presentacion_personal=$_POST['presentacion_personal'];
$actitud_entrevista=$_POST['actitud_entrevista'];
$memoria_presente=$_POST['memoria_presente'];
$memoria_pasada=$_POST['memoria_pasada'];  
$atencion=$_POST['atencion'];
$lectoescritura=$_POST['lectoescritura'];
$lenguaje_hablado=$_POST['lenguaje_hablado'];
$curso_pensamiento=$_POST['curso_pensamiento'];  
$razonamiento=$_POST['razonamiento'];
$angustia=$_POST['angustia'];
$llanto=$_POST['llanto'];
$manifiesta_no_institucion=$_POST['manifiesta_no_institucion'];
$ideas_suicidas=$_POST['ideas_suicidas'];
$manifiesta_agresividad=$_POST['manifiesta_agresividad'];  
$observa_tranquilo=$_POST['observa_tranquilo'];
$proyecto_vida=$_POST['proyecto_vida'];
$espera_muerte=$_POST['espera_muerte'];
$nombre=$_POST['nombre'];  
$parentesco=$_POST['parentesco'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$hace_amigos=$_POST['hace_amigos'];
$pertenece_grupos=$_POST['pertenece_grupos'];
$maneja_relaciones=$_POST['maneja_relaciones'];
$manifiesta_preocupaciones=$_POST['manifiesta_preocupaciones'];
$facilidad_comunicarse=$_POST['facilidad_comunicarse'];  
$religiosos=$_POST['religiosos'];
$cultural=$_POST['cultural'];
$intelectual_cientifico=$_POST['intelectual_cientifico'];
$manuales=$_POST['manuales'];
$actitudes=$_POST['actitudes'];
$dibujo=$_POST['dibujo'];
$pintar=$_POST['pintar'];  
$danzar=$_POST['danzar'];
$bailar=$_POST['bailar'];
$teatro=$_POST['teatro'];
$poesia=$_POST['poesia'];
$canto=$_POST['canto'];
$escritura=$_POST['escritura'];
$deportivas=$_POST['deportivas'];  
$liderazgo=$_POST['liderazgo'];
$humanisticas=$_POST['humanisticas'];
$intervencion_gerontologica=$_POST['intervencion_gerontologica'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$numero_identificacion_funcionario=$_POST['numero_identificacion_funcionario'];
$cargo=$_POST['cargo'];  
$registro_profesional=$_POST['registro_profesional'];
$aprobada_por=$_POST['aprobada_por'];


$sql="INSERT INTO historia_programa (fecha_apertura) VALUES ('$fecha_apertura')";

$sql2="INSERT INTO historia_datos_adulto_mayor (nombres_apellidos, fecha_nacimiento, direccion_residencial, telefono, numero_identificacion, edad, sexo, estado_civil, grado_escolaridad, grupo_sisben, eps, regimen_actual, fecha_ingreso, motivo_ingreso, consume_alcohol, hace_cuanto_consume_alcohol, fumador, hace_cuanto_fuma, consume_drogas, hace_cuanto_consume_drogas, tipo_droga, nombre_acudiente, parentesco_acudiente, direccion_acudiente, telefono_acudiente) VALUES ('$nombres_apellidos','$fecha_nacimiento','$direccion_residencial','$telefono','$numero_identificacion','$edad','$sexo','$estado_civil', '$grado_escolaridad','$grupo_sisben','$eps','$regimen_actual','$fecha_ingreso','$motivo_ingreso','$consume_alcohol','$hace_cuanto_consume_alcohol','$fumador','$hace_cuanto_fuma','$consume_drogas','$hace_cuanto_consume_drogas','$tipo_droga','$nombre_acudiente', '$parentesco_acudiente','$direccion_acudiente','$telefono_acudiente')";

$sql3="INSERT INTO valoracion_fisica_ojos (cataratas, pterigios, lentes, parpados) VALUES ('$cataratas','$pterigios','$lentes','$parpados')";

$sql4="INSERT INTO valoracion_fisica_boca (dentadura, protesis, protesis_total, protesis_parcial, dientes_naturales) VALUES ('$dentadura','$protesis','$protesis_total','$protesis_parcial','$dientes_naturales')";

$sql5="INSERT INTO valoracion_fisica_oidos (deficiencia) VALUES ('$deficiencia')";

$sql6="INSERT INTO valoracion_fisica_piel (alergias,tipo_alergias,resequedad, lesiones) VALUES ('$alergias','$tipo_alergias','$resequedad','$lesiones')";

$sql7="INSERT INTO valoracion_fisica_ugnas (alteraciones_unas,hongos,cambio_color) VALUES ('$alteraciones_unas','$hongos','$cambio_color')";

$sql8="INSERT INTO sistema_musculo_esqueletico (disminucion_muscular,paralisis_algun_lado_del_cuerpo) VALUES ('$disminucion_muscular','$paralisis_algun_lado_del_cuerpo')";

$sql9="INSERT INTO antrotometria (fecha,edad,peso,talla,pe,te,imc,analis,te2) VALUES ('$fecha','$edad','$peso','$talla','$pe','$te','$imc','$analis','$te2')";

$sql10="INSERT INTO area_personal (apariencia_fisica,presentacion_personal,actitud_entrevista) VALUES ( '$apariencia_fisica','$presentacion_personal','$actitud_entrevista')";

$sql11="INSERT INTO area_cognitiva (memoria_presente,memoria_pasada,atencion,lectoescritura,lenguaje_hablado,curso_pensamiento,razonamiento) VALUES ('$memoria_presente','$memoria_pasada','$atencion','$lectoescritura','$lenguaje_hablado','$curso_pensamiento','$razonamiento')";

$sql12="INSERT INTO area_emocional (angustia,llanto,manifiesta_no_institucion,ideas_suicidas,manifiesta_agresividad,observa_tranquilo,proyecto_vida,espera_muerte) VALUES ('$angustia','$llanto','$manifiesta_no_institucion','$ideas_suicidas','$manifiesta_agresividad','$observa_tranquilo','$proyecto_vida','$espera_muerte')";
$sql13="INSERT INTO area_sociofamiliar (nombre,parentesco,direccion,telefono) VALUES ('$nombre','$parentesco','$direccion','$telefono')";

$sql14="INSERT INTO sistema_relaciones (hace_amigos,pertenece_grupos, maneja_relaciones,manifiesta_preocupaciones,facilidad_comunicarse) VALUES ('$hace_amigos','$pertenece_grupos', '$maneja_relaciones','$manifiesta_preocupaciones','$facilidad_comunicarse')";

$sql15="INSERT INTO intereses (religiosos,cultural,intelectual_cientifico,manuales,actitudes,dibujo,pintar,danzar,bailar,teatro,poesia,canto,escritura,deportivas,liderazgo,humanisticas) VALUES ('$religiosos','$cultural','$intelectual_cientifico','$manuales','$actitudes','$dibujo','$pintar','$danzar','$bailar','$teatro','$poesia','$canto','$escritura','$deportivas','$liderazgo','$humanisticas')";
$sql16="INSERT INTO intervencion_gerontologica (intervencion_gerontologica) VALUES ('$intervencion_gerontologica')";

$sql17="INSERT INTO historia_funcionario (nombre_funcionario, numero_identificacion_funcionario, cargo, registro_profesional, aprobada_por) VALUES ('$nombre_funcionario','$numero_identificacion_funcionario','$cargo','$registro_profesional', '$aprobada_por')";




$base->query($sql);
    

Header("Location: Historia.html");


