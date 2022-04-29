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
$dia_estamos=$_POST['dia_estamos'];
$mes_estamos=$_POST['mes_estamos'];
$ano_estamos=$_POST['ano_estamos'];
$dia_semana=$_POST['dia_semana'];
$hora_estamos=$_POST['hora_estamos']; 
$puntuacion_uno=$_POST['puntuacion_uno'];
$dia_estamos_dos=$_POST['dia_estamos_dos'];
$mes_estamos_dos=$_POST['mes_estamos_dos'];
$ano_estamos_dos=$_POST['ano_estamos_dos'];
$dia_semana_dos=$_POST['dia_semana_dos'];
$hora_estamos_dos=$_POST['hora_estamos_dos'];
$puntuacion_dos=$_POST['puntuacion_dos'];
$lugar_estamos=$_POST['lugar_estamos'];
$departamento_estamos=$_POST['departamento_estamos'];
$barrio_actual=$_POST['barrio_actual'];
$ciudad_estamos=$_POST['ciudad_estamos'];
$pais_estamos=$_POST['pais_estamos'];
$puntuacion_tres=$_POST['puntuacion_tres']; 
$repeticion_ensayo=$_POST['repeticion_ensayo'];
$papel=$_POST['papel'];
$bicicleta=$_POST['bicicleta'];
$cuchara=$_POST['cuchara'];
$puntuacion_cuatro=$_POST['puntuacion_cuatro'];
$uno=$_POST['uno'];
$dos=$_POST['dos'];
$tres=$_POST['tres'];
$cuatro=$_POST['cuatro'];
$cinco=$_POST['cinco'];
$puntuacion_cinco=$_POST['puntuacion_cinco'];
$papel_uno=$_POST['papel_uno'];
$bicicleta_dos=$_POST['bicicleta_dos']; 
$cuchara_tres=$_POST['cuchara_tres'];
$puntuacion_seis=$_POST['puntuacion_seis'];
$mostrarle_lapiz=$_POST['mostrarle_lapiz'];
$mostrarle_reloj=$_POST['mostrarle_reloj'];
$puntuacion_siete=$_POST['puntuacion_siete'];
$consigna=$_POST['consigna'];
$puntuacion_ocho=$_POST['puntuacion_ocho'];
$comprension_ejecucion=$_POST['comprension_ejecucion'];
$doblar_mitad=$_POST['doblar_mitad'];
$dejelo_suelo=$_POST['dejelo_suelo'];
$puntuacion_nueve=$_POST['puntuacion_nueve'];
$pidale_leer=$_POST['pidale_leer'];
$puntuacion_diez=$_POST['puntuacion_diez'];
$escriba_frase=$_POST['escriba_frase'];
$puntuacion_once=$_POST['puntuacion_once'];
$copie_dibujo=$_POST['copie_dibujo'];
$puntuacion_doce=$_POST['puntuacion_doce'];
$puntuacion_total=$_POST['puntuacion_total'];
$nombre_funcionario=$_POST['nombre_funcionario'];
$cargo=$_POST['cargo'];
$registro_profesional=$_POST['registro_profesional'];


$sql="INSERT INTO escala_mental (id_escala_mental, nombre_usuario,zona,distrito,modalidad_atencion,lugar_atencion,edad_anual,edad_meses,fecha_aplicacion,aplicado_por) VALUES ('$id0','$nombre_usuario','$zona','$distrito','$modalidad_atencion','$lugar_atencion','$edad_anual','$edad_meses','$fecha_aplicacion', '$aplicado_por')";

$ultimoId = $base->query('SELECT MAX(id_escala_mental) FROM `escala_mental`');
$id = $ultimoId->fetchAll()[0]["MAX(id_escala_mental)"];

$sql2="INSERT INTO pregunta_uno (id_pregunta_uno, dia_estamos,mes_estamos,ano_estamos,dia_semana,hora_estamos,puntuacion_uno,id_escala_mental) VALUES ('$id0','$dia_estamos','$mes_estamos','$ano_estamos','$dia_semana','$hora_estamos','$puntuacion_uno','$id')";

$sql3="INSERT INTO pregunta_dos (id_pregunta_dos, dia_estamos_dos,mes_estamos_dos,ano_estamos_dos,dia_semana_dos,hora_estamos_dos,puntuacion_dos,id_escala_mental) VALUES ('$id0','$dia_estamos_dos','$mes_estamos_dos','$ano_estamos_dos','$dia_semana_dos','$hora_estamos_dos','$puntuacion_dos','$id')";
$sql4="INSERT INTO pregunta_tres (id_pregunta_tres,lugar_estamos,departamento_estamos, barrio_actual,ciudad_estamos,pais_estamos,puntuacion_tres,id_escala_mental) VALUES ('$id0','$lugar_estamos','$departamento_estamos', '$barrio_actual','$ciudad_estamos','$pais_estamos','$puntuacion_tres','$id')";
$sql5="INSERT INTO pregunta_cuatro (id_pregunta_cuatro,repeticion_ensayo,papel,bicicleta,cuchara,puntuacion_cuatro,id_escala_mental) VALUES ('$id0','$repeticion_ensayo','$papel','$bicicleta','$cuchara','$puntuacion_cuatro','$id')";

$sql6="INSERT INTO pregunta_cinco (id_pregunta_cinco, uno,dos,tres,cuatro,cinco,puntuacion_cinco,id_escala_mental) VALUES ('$id0','$uno','$dos','$tres','$cuatro','$cinco','$puntuacion_cinco','$id')";

$sql7="INSERT INTO pregunta_seis (id_pregunta_seis, papel_uno,bicicleta_dos,cuchara_tres,puntuacion_seis,id_escala_mental) VALUES ('$id0','$papel_uno','$bicicleta_dos','$cuchara_tres','$puntuacion_seis','$id')";

$sql8="INSERT INTO pregunta_siete (id_pregunta_siete,mostrarle_lapiz,mostrarle_reloj,puntuacion_siete,id_escala_mental) VALUES ('$id0','$mostrarle_lapiz','$mostrarle_reloj','$puntuacion_siete','$id')";

$sql9="INSERT INTO pregunta_ocho (id_pregunta_ocho,consigna,puntuacion_ocho,id_escala_mental) VALUES ('$id0','$consigna','$puntuacion_ocho','$id')";

$sql10="INSERT INTO pregunta_nueve (id_pregunta_nueve,comprension_ejecucion, doblar_mitad, dejelo_suelo,puntuacion_nueve,id_escala_mental) VALUES ('$id0','$comprension_ejecucion', '$doblar_mitad', '$dejelo_suelo','$puntuacion_nueve','$id')";

$sql11="INSERT INTO pregunta_diez (id_pregunta_diez,pidale_leer, puntuacion_diez,id_escala_mental) VALUES ('$id0','$pidale_leer', '$puntuacion_diez','$id')";

$sql12="INSERT INTO pregunta_once (id_pregunta_once, escriba_frase,puntuacion_once,id_escala_mental) VALUES ('$id0','$escriba_frase','$puntuacion_once','$id')";
$sql13="INSERT INTO pregunta_doce (id_pregunta_doce,copie_dibujo,puntuacion_doce,id_escala_mental) VALUES ('$id0','$copie_dibujo', '$puntuacion_doce','$id')";
$sql14="INSERT INTO total_preguntas (id_total_preguntas,puntuacion_total,id_escala_mental) VALUES ('$id0','$puntuacion_total','$id')";

$sql15="INSERT INTO datos_funcionario (id_datos_funcionario,nombre_funcionario, cargo, registro_profesional,id_escala_mental) VALUES ('$id0','$nombre_funcionario','$cargo','$registro_profesional','$id')";


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
$base->query($sql12);
$base->query($sql13);
$base->query($sql14);
$base->query($sql15);


$_SESSION['message'] = $nombres . ' guardado exitosamente';
Header("Location: ../../views/examen_estadomental.html");