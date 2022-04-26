<?php 
    include("conexion.php");

//$con=conectar();

$numero_identificacion= $_GET['id'];

$cmt=$base->query("SELECT * FROM pacientes where numero_identificacion = '".$numero_identificacion."'");

//$sql="SELECT * FROM pacientes WHERE NUMERO_DE_IDENTIFICACION='$NUMERO_DE_IDENTIFICACION'";


//$query=mysqli_query($sql);

$row = $cmt->fetch()
//$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                   
                    <form action="update_instrumento.php" method="POST">
                                
                                
                                <input type="text" class="form-control mb-3" name="fecha_digilenciamiento" placeholder="fecha_digilenciamiento" value="<?php echo $row['fecha_digilenciamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_apellidos" placeholder="nombres_apellidos" value="<?php echo $row['nombres_apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="sexo" placeholder="sexo" value="<?php echo $row['sexo']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_residencial" placeholder="direccion_residencial" value="<?php echo $row['direccion_residencial']  ?>">
                                <input type="text" class="form-control mb-3" name="barrio" placeholder="barrio" value="<?php echo $row['barrio']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion" placeholder="numero_identificacion" value="<?php echo $row['numero_identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_nacimiento_dia" placeholder="fecha_nacimiento_dia" value="<?php echo $row['fecha_nacimiento_dia']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_nacimiento_mes" placeholder="fecha_nacimiento_mes" value="<?php echo $row['fecha_nacimiento_mes']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_nacimiento_ano" placeholder="fecha_nacimiento_ano" value="<?php echo $row['fecha_nacimiento_ano']  ?>">
                                <input type="text" class="form-control mb-3" name="procedencia" placeholder="procedencia" value="<?php echo $row['procedencia']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar" placeholder="lugar" value="<?php echo $row['lugar']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento" placeholder="departamento" value="<?php echo $row['departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="estado_civil" placeholder="estado_civil" value="<?php echo $row['estado_civil']  ?>">
                                <input type="text" class="form-control mb-3" name="educacion" placeholder="educacion" value="<?php echo $row['educacion']  ?>">
                                <input type="text" class="form-control mb-3" name="profesion" placeholder="profesion" value="<?php echo $row['profesion']  ?>">
                                <input type="text" class="form-control mb-3" name="otros_oficios" placeholder="otros_oficios" value="<?php echo $row['otros_oficios']  ?>">
                                <input type="text" class="form-control mb-3" name="se_encuentra_afiliado_eps" placeholder="se_encuentra_afiliado_eps" value="<?php echo $row['se_encuentra_afiliado_eps']  ?>">
                                <input type="text" class="form-control mb-3" name="sisben" placeholder="sisben" value="<?php echo $row['sisben']  ?>">
                                <input type="text" class="form-control mb-3" name="cual_sisben" placeholder="cual_sisben" value="<?php echo $row['cual_sisben']  ?>">
                                <input type="text" class="form-control mb-3" name="eps" placeholder="eps" value="<?php echo $row['eps']  ?>">
                                <input type="text" class="form-control mb-3" name="cual_eps" placeholder="cual_eps" value="<?php echo $row['cual_eps']  ?>">
                                <input type="text" class="form-control mb-3" name="otro_servicio" placeholder="otro_servicio" value="<?php echo $row['otro_servicio']  ?>">
                                <input type="text" class="form-control mb-3" name="tenencia" placeholder="tenencia" value="<?php echo $row['tenencia']  ?>">
                                <input type="text" class="form-control mb-3" name="otra_tenencia" placeholder="otra_tenencia" value="<?php echo $row['otra_tenencia']  ?>"> 
                                <input type="text" class="form-control mb-3" name="tipo_vivienda" placeholder="tipo_vivienda" value="<?php echo $row['tipo_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="otro_tipo" placeholder="otro_tipo" value="<?php echo $row['otro_tipo']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion" placeholder="numero_identificacion" value="<?php echo $row['numero_identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="ruido" placeholder="ruido" value="<?php echo $row['ruido']  ?>">
                                <input type="text" class="form-control mb-3" name="iluminacion" placeholder="iluminacion" value="<?php echo $row['iluminacion']  ?>">
                                <input type="text" class="form-control mb-3" name="ventilacion" placeholder="ventilacion" value="<?php echo $row['ventilacion']  ?>">
                                <input type="text" class="form-control mb-3" name="humedad" placeholder="humedad" value="<?php echo $row['humedad']  ?>">
                                <input type="text" class="form-control mb-3" name="accesibilidad_escaleras" placeholder="accesibilidad_escaleras" value="<?php echo $row['accesibilidad_escaleras']  ?>">
                                <input type="text" class="form-control mb-3" name="pisos" placeholder="pisos" value="<?php echo $row['pisos']  ?>">
                                <input type="text" class="form-control mb-3" name="vias_acceso" placeholder="vias_acceso" value="<?php echo $row['vias_acceso']  ?>">
                                <input type="text" class="form-control mb-3" name="transporte" placeholder="transporte" value="<?php echo $row['transporte']  ?>">
                                <input type="text" class="form-control mb-3" name="agua" placeholder="agua" value="<?php echo $row['agua']  ?>">
                                <input type="text" class="form-control mb-3" name="luz" placeholder="luz" value="<?php echo $row['luz']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="gas" placeholder="gas" value="<?php echo $row['gas']  ?>">
                                <input type="text" class="form-control mb-3" name="alcantarillado" placeholder="alcantarillado" value="<?php echo $row['alcantarillado']  ?>">
                                <input type="text" class="form-control mb-3" name="material_vivienda" placeholder="material_vivienda" value="<?php echo $row['material_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="hipertension" placeholder="hipertension" value="<?php echo $row['hipertension']  ?>">
                                <input type="text" class="form-control mb-3" name="diabetes" placeholder="diabetes" value="<?php echo $row['diabetes']  ?>">
                                <input type="text" class="form-control mb-3" name="enfermedades_cardiacas" placeholder="enfermedades_cardiacas" value="<?php echo $row['enfermedades_cardiacas']  ?>">
                                <input type="text" class="form-control mb-3" name="osteoporosis" placeholder="osteoporosis" value="<?php echo $row['osteoporosis']  ?>">
                                <input type="text" class="form-control mb-3" name="asma" placeholder="asma" value="<?php echo $row['asma']  ?>">
                                <input type="text" class="form-control mb-3" name="artritis" placeholder="artritis" value="<?php echo $row['artritis']  ?>">
                                <input type="text" class="form-control mb-3" name="cancer" placeholder="cancer" value="<?php echo $row['cancer']  ?>">
                                <input type="text" class="form-control mb-3" name="demencia" placeholder="demencia" value="<?php echo $row['demencia']  ?>">
                                <input type="text" class="form-control mb-3" name="otras" placeholder="otras" value="<?php echo $row['otras']  ?>">
                                <input type="text" class="form-control mb-3" name="dolor_articulaciones" placeholder="dolor_articulaciones" value="<?php echo $row['dolor_articulaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="mareos_vahidos" placeholder="mareos_vahidos" value="<?php echo $row['mareos_vahidos']  ?>">
                                <input type="text" class="form-control mb-3" name="tos_catarro_gripe" placeholder="tos_catarro_gripe" value="<?php echo $row['tos_catarro_gripe']  ?>">
                                <input type="text" class="form-control mb-3" name="tobillos_inflamados" placeholder="tobillos_inflamados" value="<?php echo $row['tobillos_inflamados']  ?>">
                                <input type="text" class="form-control mb-3" name="cansancio" placeholder="cansancio" value="<?php echo $row['cansancio']  ?>">
                                <input type="text" class="form-control mb-3" name="dificultad_para_dormir" placeholder="dificultad_para_dormir" value="<?php echo $row['dificultad_para_dormir']  ?>">
                                <input type="text" class="form-control mb-3" name="flojedad_piernas" placeholder="flojedad_piernas" value="<?php echo $row['flojedad_piernas']  ?>">
                                <input type="text" class="form-control mb-3" name="dificultad_respirar" placeholder="dificultad_respirar" value="<?php echo $row['dificultad_respirar']  ?>">
                                <input type="text" class="form-control mb-3" name="palpitaciones" placeholder="palpitaciones" value="<?php echo $row['palpitaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="dolor_pecho" placeholder="dolor_pecho" value="<?php echo $row['dolor_pecho']  ?>">
                                <input type="text" class="form-control mb-3" name="manos_pies_frios" placeholder="manos_pies_frios" value="<?php echo $row['manos_pies_frios']  ?>">
                                <input type="text" class="form-control mb-3" name="adormilado" placeholder="adormilado" value="<?php echo $row['adormilado']  ?>">
                                <input type="text" class="form-control mb-3" name="boca_seca" placeholder="boca_seca" value="<?php echo $row['boca_seca']  ?>">
                                <input type="text" class="form-control mb-3" name="hormigueo_manos_pies" placeholder="hormigueo_manos_pies" value="<?php echo $row['hormigueo_manos_pies']  ?>">
                                <input type="text" class="form-control mb-3" name="consume_medicamentos" placeholder="consume_medicamentos" value="<?php echo $row['consume_medicamentos']  ?>">
                                <input type="text" class="form-control mb-3" name="cuantos_medicamentos" placeholder="cuantos_medicamentos" value="<?php echo $row['cuantos_medicamentos']  ?>">
                                <input type="text" class="form-control mb-3" name="cuales_medicamentos" placeholder="cuales_medicamentos" value="<?php echo $row['cuales_medicamentos']  ?>">
                                <input type="text" class="form-control mb-3" name="recibe_tratamiento" placeholder="recibe_tratamiento" value="<?php echo $row['recibe_tratamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="cual_tratamiento" placeholder="cual_tratamiento" value="<?php echo $row['cual_tratamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="frecuencia_visita_medico" placeholder="frecuencia_visita_medico" value="<?php echo $row['frecuencia_visita_medico']  ?>">
                                <input type="text" class="form-control mb-3" name="otros_datos" placeholder="otros_datos" value="<?php echo $row['otros_datos']  ?>">
                                <input type="text" class="form-control mb-3" name="medicamentos_no_prescritos" placeholder="medicamentos_no_prescritos" value="<?php echo $row['medicamentos_no_prescritos']  ?>">
                                <input type="text" class="form-control mb-3" name="cuales_no_prescritos" placeholder="cuales_no_prescritos" value="<?php echo $row['cuales_no_prescritos']  ?>">
                                <input type="text" class="form-control mb-3" name="cambio_habitos_alimenticios" placeholder="cambio_habitos_alimenticios" value="<?php echo $row['cambio_habitos_alimenticios']  ?>">
                                <input type="text" class="form-control mb-3" name="come_menos_dos_veces" placeholder="come_menos_dos_veces" value="<?php echo $row['come_menos_dos_veces']  ?>">
                                <input type="text" class="form-control mb-3" name="tiene_problemas_dentales" placeholder="tiene_problemas_dentales" value="<?php echo $row['tiene_problemas_dentales']  ?>">
                                <input type="text" class="form-control mb-3" name="come_pocas_frutas" placeholder="come_pocas_frutas" value="<?php echo $row['come_pocas_frutas']  ?>">
                                <input type="text" class="form-control mb-3" name="come_solo" placeholder="come_solo" value="<?php echo $row['come_solo']  ?>">
                                <input type="text" class="form-control mb-3" name="realiza_ejercicio" placeholder="realiza_ejercicio" value="<?php echo $row['realiza_ejercicio']  ?>">
                                <input type="text" class="form-control mb-3" name="frecuencia_realiza_ejercicio" placeholder="frecuencia_realiza_ejercicio" value="<?php echo $row['frecuencia_realiza_ejercicio']  ?>">
                                <input type="text" class="form-control mb-3" name="fuma" placeholder="fuma" value="<?php echo $row['fuma']  ?>">
                                <input type="text" class="form-control mb-3" name="cuantos_cigarrillos" placeholder="cuantos_cigarrillos" value="<?php echo $row['cuantos_cigarrillos']  ?>">
                                <input type="text" class="form-control mb-3" name="consume_licor" placeholder="consume_licor" value="<?php echo $row['consume_licor']  ?>">
                                <input type="text" class="form-control mb-3" name="frecuencia_consume_licor" placeholder="frecuencia_consume_licor" value="<?php echo $row['frecuencia_consume_licor']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad_consume_licor" placeholder="cantidad_consume_licor" value="<?php echo $row['cantidad_consume_licor']  ?>">
                                <input type="text" class="form-control mb-3" name="cuidar_aspecto_fisico" placeholder="cuidar_aspecto_fisico" value="<?php echo $row['cuidar_aspecto_fisico']  ?>">
                                <input type="text" class="form-control mb-3" name="realizar_tareas_caseras" placeholder="realizar_tareas_caseras" value="<?php echo $row['realizar_tareas_caseras']  ?>">
                                <input type="text" class="form-control mb-3" name="caminar" placeholder="caminar" value="<?php echo $row['caminar']  ?>">
                                <input type="text" class="form-control mb-3" name="realizar_tareas_fuera" placeholder="realizar_tareas_fuera" value="<?php echo $row['realizar_tareas_fuera']  ?>">
                                <input type="text" class="form-control mb-3" name="puede_valerse" placeholder="puede_valerse" value="<?php echo $row['puede_valerse']  ?>">
                                 <input type="text" class="form-control mb-3" name="parientes_longevos" placeholder="parientes_longevos" value="<?php echo $row['parientes_longevos']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_madre_padre" placeholder="edad_madre_padre" value="<?php echo $row['edad_madre_padre'] ?>">
                                <input type="text" class="form-control mb-3" name="edad_abuelo_abuela" placeholder="edad_abuelo_abuela" value="<?php echo $row['edad_abuelo_abuela']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_tio_tia" placeholder="edad_tio_tia" value="<?php echo $row['edad_tio_tia']  ?>">
                                <input type="text" class="form-control mb-3" name="siente_deprimido" placeholder="siente_deprimido" value="<?php echo $row['siente_deprimido']  ?>">
                                <input type="text" class="form-control mb-3" name="siente_desesperado" placeholder="siente_desesperado" value="<?php echo $row['siente_desesperado']  ?>">
                                <input type="text" class="form-control mb-3" name="olvida_dia_que_se_encuentra" placeholder="olvida_dia_que_se_encuentra" value="<?php echo $row['olvida_dia_que_se_encuentra']  ?>">
                                <input type="text" class="form-control mb-3" name="olvida_oficios" placeholder="olvida_oficios" value="<?php echo $row['olvida_oficios']  ?>">
                                <input type="text" class="form-control mb-3" name="olvida_objetos_personales" placeholder="olvida_objetos_personales" value="<?php echo $row['olvida_objetos_personales']  ?>">
                                <input type="text" class="form-control mb-3" name="se_pierde_en_algun_lugar" placeholder="se_pierde_en_algun_lugar" value="<?php echo $row['se_pierde_en_algun_lugar']  ?>">
                                <input type="text" class="form-control mb-3" name="falta_interes" placeholder="falta_interes" value="<?php echo $row['falta_interes']  ?>">
                                <input type="text" class="form-control mb-3" name="preocupa_higiene_personal" placeholder="preocupa_higiene_personal" value="<?php echo $row['preocupa_higiene_personal']  ?>">
                                <input type="text" class="form-control mb-3" name="satisfecho_como_ocupa_eltiempo" placeholder="satisfecho_como_ocupa_eltiempo" value="<?php echo $row['satisfecho_como_ocupa_eltiempo']  ?>">
                                 <input type="text" class="form-control mb-3" name="esta_satisfecho_con_la_vida" placeholder="esta_satisfecho_con_la_vida" value="<?php echo $row['esta_satisfecho_con_la_vida']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones'] ?>">
                                <input type="text" class="form-control mb-3" name="personas_viven" placeholder="personas_viven" value="<?php echo $row['personas_viven']  ?>">
                                <input type="text" class="form-control mb-3" name="con_quien_vive" placeholder="con_quien_vive" value="<?php echo $row['con_quien_vive']  ?>">
                                <input type="text" class="form-control mb-3" name="tuvo_hijos" placeholder="tuvo_hijos" value="<?php echo $row['tuvo_hijos']  ?>">
                                <input type="text" class="form-control mb-3" name="cuantos_hijos" placeholder="cuantos_hijos" value="<?php echo $row['cuantos_hijos']  ?>">
                                <input type="text" class="form-control mb-3" name="rol_nucleo_familiar" placeholder="rol_nucleo_familiar" value="<?php echo $row['rol_nucleo_familiar']  ?>">
                                <input type="text" class="form-control mb-3" name="actividades_que_participa" placeholder="actividades_que_participa" value="<?php echo $row['actividades_que_participa']  ?>">
                                <input type="text" class="form-control mb-3" name="otras_actividades" placeholder="otras_actividades" value="<?php echo $row['otras_actividades']  ?>">
                                <input type="text" class="form-control mb-3" name="participa_en_decisiones" placeholder="participa_en_decisiones" value="<?php echo $row['participa_en_decisiones']  ?>">
                                <input type="text" class="form-control mb-3" name="como_participa" placeholder="como_participa" value="<?php echo $row['como_participa']  ?>">
                                <input type="text" class="form-control mb-3" name="mencione_participacion" placeholder="mencione_participacion" value="<?php echo $row['mencione_participacion']  ?>">
                                <input type="text" class="form-control mb-3" name="que_aportes_recibe" placeholder="que_aportes_recibe" value="<?php echo $row['que_aportes_recibe']  ?>">
                                 <input type="text" class="form-control mb-3" name="otros_aportes" placeholder="otros_aportes" value="<?php echo $row['otros_aportes']  ?>">
                                <input type="text" class="form-control mb-3" name="esta_satisfecho" placeholder="esta_satisfecho" value="<?php echo $row['esta_satisfecho'] ?>">
                                <input type="text" class="form-control mb-3" name="por_que_satisfecho" placeholder="por_que_satisfecho" value="<?php echo $row['por_que_satisfecho']  ?>">
                                <input type="text" class="form-control mb-3" name="comunicacion_con_quien_vive" placeholder="comunicacion_con_quien_vive" value="<?php echo $row['comunicacion_con_quien_vive']  ?>">
                                <input type="text" class="form-control mb-3" name="por_que_comunica" placeholder="por_que_comunica" value="<?php echo $row['por_que_comunica']  ?>">
                                <input type="text" class="form-control mb-3" name="como_califica_relaciones" placeholder="como_califica_relaciones" value="<?php echo $row['como_califica_relaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="por_que_relaciona" placeholder="por_que_relaciona" value="<?php echo $row['por_que_relaciona']  ?>">
                                <input type="text" class="form-control mb-3" name="hijos_que_no_viven_con_usted" placeholder="hijos_que_no_viven_con_usted" value="<?php echo $row['hijos_que_no_viven_con_usted']  ?>">
                                <input type="text" class="form-control mb-3" name="nietos_que_no_viven_con_usted" placeholder="nietos_que_no_viven_con_usted" value="<?php echo $row['nietos_que_no_viven_con_usted']  ?>">
                                <input type="text" class="form-control mb-3" name="familiares_no_viven_con_usted" placeholder="familiares_no_viven_con_usted" value="<?php echo $row['familiares_no_viven_con_usted']  ?>">
                                <input type="text" class="form-control mb-3" name="vecinos" placeholder="vecinos" value="<?php echo $row['vecinos']  ?>">
                                <input type="text" class="form-control mb-3" name="amigos_no_vecinos" placeholder="amigos_no_vecinos" value="<?php echo $row['amigos_no_vecinos']  ?>">
                                <input type="text" class="form-control mb-3" name="conyuge" placeholder="conyuge" value="<?php echo $row['conyuge']  ?>">
                                 <input type="text" class="form-control mb-3" name="hijos" placeholder="hijos" value="<?php echo $row['hijos']  ?>">
                                <input type="text" class="form-control mb-3" name="nietos" placeholder="nietos" value="<?php echo $row['nietos'] ?>">
                                <input type="text" class="form-control mb-3" name="otros_familiares" placeholder="otros_familiares" value="<?php echo $row['otros_familiares']  ?>">
                                <input type="text" class="form-control mb-3" name="vecinos" placeholder="vecinos" value="<?php echo $row['vecinos']  ?>">
                                <input type="text" class="form-control mb-3" name="amigos_no_vecinos" placeholder="amigos_no_vecinos" value="<?php echo $row['amigos_no_vecinos']  ?>">
                                <input type="text" class="form-control mb-3" name="participa_en_grupos" placeholder="participa_en_grupos" value="<?php echo $row['participa_en_grupos']  ?>">
                                <input type="text" class="form-control mb-3" name="cuales_grupos" placeholder="cuales_grupos" value="<?php echo $row['cuales_grupos']  ?>">
                                <input type="text" class="form-control mb-3" name="con_que_frecuencia" placeholder="con_que_frecuencia" value="<?php echo $row['con_que_frecuencia']  ?>">
                                <input type="text" class="form-control mb-3" name="nunca_explique_razones" placeholder="nunca_explique_razones" value="<?php echo $row['nunca_explique_razones']  ?>">
                                <input type="text" class="form-control mb-3" name="trabajado_durante_su_vida" placeholder="trabajado_durante_su_vida" value="<?php echo $row['trabajado_durante_su_vida']  ?>">
                                <input type="text" class="form-control mb-3" name="labora_actualmente" placeholder="labora_actualmente" value="<?php echo $row['labora_actualmente']  ?>">
                                <input type="text" class="form-control mb-3" name="cual_actividad" placeholder="cual_actividad" value="<?php echo $row['cual_actividad']  ?>">
                                <input type="text" class="form-control mb-3" name="leer" placeholder="leer" value="<?php echo $row['leer']  ?>">
                                 <input type="text" class="form-control mb-3" name="visitar_amigos" placeholder="visitar_amigos" value="<?php echo $row['visitar_amigos']  ?>">
                                <input type="text" class="form-control mb-3" name="ver_television" placeholder="ver_television" value="<?php echo $row['ver_television'] ?>">
                                <input type="text" class="form-control mb-3" name="escuchar_radio" placeholder="escuchar_radio" value="<?php echo $row['escuchar_radio']  ?>">
                                <input type="text" class="form-control mb-3" name="caminar" placeholder="caminar" value="<?php echo $row['caminar']  ?>">
                                <input type="text" class="form-control mb-3" name="juegos_actividades" placeholder="juegos_actividades" value="<?php echo $row['juegos_actividades']  ?>">
                                <input type="text" class="form-control mb-3" name="cuidar_ninos" placeholder="cuidar_ninos" value="<?php echo $row['cuidar_ninos']  ?>">
                                <input type="text" class="form-control mb-3" name="hacer_manualidades" placeholder="hacer_manualidades" value="<?php echo $row['hacer_manualidades']  ?>">
                                <input type="text" class="form-control mb-3" name="hacer_mandados" placeholder="hacer_mandados" value="<?php echo $row['hacer_mandados']  ?>">
                                <input type="text" class="form-control mb-3" name="ir_compras" placeholder="ir_compras" value="<?php echo $row['ir_compras']  ?>">
                                <input type="text" class="form-control mb-3" name="viajar" placeholder="viajar" value="<?php echo $row['viajar']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones_generales" placeholder="observaciones_generales" value="<?php echo $row['observaciones_generales']  ?>">
                                <input type="text" class="form-control mb-3" name="impresion_diagnostica" placeholder="impresion_diagnostica" value="<?php echo $row['impresion_diagnostica']  ?>">
                                <input type="text" class="form-control mb-3" name="concepto_gerontologico" placeholder="concepto_gerontologico" value="<?php echo $row['concepto_gerontologico']  ?>">
                                <input type="text" class="form-control mb-3" name="plan" placeholder="plan" value="<?php echo $row['plan']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                <input type="text" class="form-control mb-3" name="concepto_gerontologico" placeholder="concepto_gerontologico" value="<?php echo $row['concepto_gerontologico']  ?>">
                                <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

                           

                    </form>
                    
                </div>
    </body>
</html>