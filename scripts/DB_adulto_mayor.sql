CREATE TABLE ficha_programa (
    id_ficha_programa INT PRIMARY KEY AUTO_INCREMENT AUTO_INCREMENT,
    nombre_programa VARCHAR(50),
    vigencia DATE,
    fecha_digilenciamiento DATE
);

CREATE TABLE ficha_datos_adulto_mayor (
    numero_identificacion VARCHAR(15) PRIMARY KEY,
    tipo_identificacion VARCHAR(5),
    fecha_expedicion DATE,
    dpto_municipio_expedicion VARCHAR(100),
    nombres VARCHAR(60),
    primer_apellido VARCHAR(40),
    segundo_apellido VARCHAR(40),
    edad INT,
    id_ficha_programa INT,
    foreign key (id_ficha_programa) references ficha_programa(id_ficha_programa)
);

CREATE TABLE ficha_datos_ubicacion_contacto_adulto_mayor (
    id_ficha_datos_ubicacion_contacto_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    direccion_residencial VARCHAR(60),
    departamento VARCHAR(40),
    municipio VARCHAR(40),
    barrio_vereda VARCHAR(50),
    telefono VARCHAR(15),
    celular VARCHAR(15),
    nombre_familiar_acudiente VARCHAR (60),
    numero_identificacion VARCHAR(15),
    foreign key (numero_identificacion) references ficha_datos_adulto_mayor(numero_identificacion)
);

CREATE TABLE ficha_datos_familiar_acudiente_adulto_mayor (
    id_ficha_datos_familiar_acudiente_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    nombres_apellidos VARCHAR(80),
    parentesco VARCHAR(20),
    direccion_domicilio VARCHAR(60),
    telefono VARCHAR(15),
    barrio_vereda VARCHAR(50),
    celular VARCHAR(15),
    observaciones TEXT,
    numero_identificacion VARCHAR(15),
    foreign key (numero_identificacion) references ficha_datos_adulto_mayor(numero_identificacion)
);

CREATE TABLE ficha_informacion_salud_adulto_mayor (
    id_ficha_informacion_salud_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    regimen_afiliacion VARCHAR(20),
    eps VARCHAR(40),
    afiliado BIT,
    diagnostico_medico VARCHAR(60),
    entidad_certifica VARCHAR(40),
    observaciones_medicas TEXT,
    numero_identificacion VARCHAR(15),
    foreign key (numero_identificacion) references ficha_datos_adulto_mayor(numero_identificacion)
);

CREATE TABLE ficha_compromiso_condiciones_especificas_adulto_mayor (
    id_ficha_compromiso_condiciones_especificas_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    compromisos_condiciones TEXT,
    nombre_adulto_mayor_acudiente VARCHAR(80),
    numero_identificacion VARCHAR(15),
    foreign key (numero_identificacion) references ficha_datos_adulto_mayor(numero_identificacion)
);

CREATE TABLE ficha_funcionario (
    id_ficha_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(80),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    numero_identificacion VARCHAR(15),
    id_ficha_programa INT,
    foreign key (id_ficha_programa) references ficha_programa(id_ficha_programa)
);

CREATE TABLE historia_programa (
    id_historia_programa INT PRIMARY KEY AUTO_INCREMENT,
    fecha_apertura DATE
);

CREATE TABLE historia_datos_adulto_mayor (
    id_historia_datos_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    nombres_apellidos VARCHAR(120),
    fecha_nacimiento VARCHAR(100),
    direccion_residencial VARCHAR(60),
    telefono VARCHAR(15),
    numero_identificacion VARCHAR(15),
    edad INT,
    sexo VARCHAR (20),
    estado_civil VARCHAR(15),
    grado_escolaridad VARCHAR(20),
    grupo_sisben VARCHAR(5),
    eps VARCHAR(40),
    regimen_actual VARCHAR(15),
    fecha_ingreso DATE,
    motivo_ingreso VARCHAR(30),
    consume_alcohol BIT,
    hace_cuanto_consume_alcohol VARCHAR(20),
    fumador BIT,
    hace_cuanto_fuma VARCHAR(50),
    consume_drogas BIT,
    hace_cuanto_consume_drogas VARCHAR(20),
    tipo_droga VARCHAR(20),
    nombre_acudiente VARCHAR(120),
    parentesco_acudiente VARCHAR(20),
    direccion_acudiente VARCHAR(60),
    telefono_acudiente VARCHAR(15),
    id_historia_programa INT,
    foreign key (id_historia_programa) references historia_programa(id_historia_programa)
);

CREATE TABLE valoracion_fisica(
    id_valoracion_fisica INT PRIMARY KEY AUTO_INCREMENT,
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE valoracion_fisica_ojos (
    id_valoracion_fisica_ojos INT PRIMARY KEY AUTO_INCREMENT,
    cataratas BIT,
    pterigios BIT,
    lentes BIT,
    parpados BIT,
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE valoracion_fisica_boca (
    id_valoracion_fisica_boca INT PRIMARY KEY AUTO_INCREMENT,
    dentadura BIT,
    protesis BIT,
    protesis_total BIT,
    protesis_parcial BIT,
    dientes_naturales BIT,
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE valoracion_fisica_oidos (
    id_valoracion_fisica_oidos INT PRIMARY KEY AUTO_INCREMENT,
    deficiencia VARCHAR(10),
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE valoracion_fisica_piel(
    id_valoracion_fisica_piel INT PRIMARY KEY AUTO_INCREMENT,
    alergias BIT,
    tipo_alergias BIT,
    resequedad BIT,
    lesiones BIT,
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE valoracion_fisica_ugnas(
    id_valoracion_fisica_piel INT PRIMARY KEY AUTO_INCREMENT,
    alteraciones_unas BIT,
    hongos BIT,
    cambio_color BIT,
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE sistema_musculo_esqueletico(
    id_sistema_musculo_esqueletico INT PRIMARY KEY AUTO_INCREMENT,
    disminucion_muscular VARCHAR(20),
    paralisis_algun_lado_del_cuerpo BIT,
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE antrotometria(
    id_antrotometria INT PRIMARY KEY AUTO_INCREMENT,
    fecha DATE,
    edad int,
    peso FLOAT,
    talla FLOAT,
    pe VARCHAR(20),
    te VARCHAR(20),
    imc FLOAT,
    analis TEXT,
    te2 VARCHAR(20),
    id_valoracion_fisica INT,
    foreign key (id_valoracion_fisica) references valoracion_fisica(id_valoracion_fisica)
);

CREATE TABLE valoracion_psicologica (
    id_valoracion_psicologica INT PRIMARY KEY AUTO_INCREMENT,
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE area_personal (
    id_area_personal INT PRIMARY KEY AUTO_INCREMENT,
    apariencia_fisica VARCHAR (100),
    presentacion_personal VARCHAR (100),
    actitud_entrevista VARCHAR (100),
    id_valoracion_psicologica INT,
    foreign key (id_valoracion_psicologica) references valoracion_psicologica(id_valoracion_psicologica)
);

CREATE TABLE area_cognitiva (
    id_area_cognitiva INT PRIMARY KEY AUTO_INCREMENT,
    memoria_presente BIT,
    memoria_pasada BIT,
    atencion BIT,
    lectoescritura BIT,
    lenguaje_hablado BIT,
    curso_pensamiento BIT,
    razonamiento BIT,
    id_valoracion_psicologica INT,
    foreign key (id_valoracion_psicologica) references valoracion_psicologica(id_valoracion_psicologica)
);

CREATE TABLE area_emocional (
    id_area_emocional INT PRIMARY KEY AUTO_INCREMENT,
    angustia BIT,
    llanto BIT,
    manifiesta_no_institucion BIT,
    ideas_suicidas BIT,
    manifiesta_agresividad BIT,
    observa_tranquilo BIT,
    proyecto_vida BIT,
    espera_muerte BIT,
    id_valoracion_psicologica INT,
    foreign key (id_valoracion_psicologica) references valoracion_psicologica(id_valoracion_psicologica)
);

CREATE TABLE area_sociofamiliar (
    id_area_emocional INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(120),
    parentesco VARCHAR(60),
    direccion VARCHAR(100),
    telefono VARCHAR(15),
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE sistema_relaciones (
    id_sistema_relaciones INT PRIMARY KEY AUTO_INCREMENT,
    hace_amigos BIT,
    pertenece_grupos BIT,
    maneja_relaciones BIT,
    manifiesta_preocupaciones BIT,
    facilidad_comunicarse BIT,
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE intereses (
    id_intereses INT PRIMARY KEY AUTO_INCREMENT,
    religiosos BIT,
    cultural BIT,
    intelectual_cientifico BIT,
    manuales BIT,
    actitudes BIT,
    dibujo BIT,
    pintar BIT,
    danzar BIT,
    bailar BIT,
    teatro BIT,
    poesia BIT,
    canto BIT,
    escritura BIT,
    deportivas BIT,
    liderazgo BIT,
    humanisticas BIT,
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE intervencion_gerontologica (
    id_intervencion_gerontologica INT PRIMARY KEY AUTO_INCREMENT,
    intervencion_gerontologica TEXT,
    id_historia_datos_adulto_mayor INT,
    foreign key (id_historia_datos_adulto_mayor) references historia_datos_adulto_mayor(id_historia_datos_adulto_mayor)
);

CREATE TABLE historia_funcionario (
    id_historia_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    numero_identificacion_funcionario VARCHAR(15),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    aprobada_por VARCHAR(20),
    id_historia_programa INT,
    foreign key (id_historia_programa) references historia_programa(id_historia_programa)
);

CREATE TABLE escala_lawton_brody(
    id_escala_lawton_brody INT PRIMARY KEY AUTO_INCREMENT,
    nombre_adulto VARCHAR (120),
    zona VARCHAR(10),
    distrito VARCHAR(15),
    modalidad_atencion VARCHAR(15),
    lugar_atencion VARCHAR(30),
    edad_anual INT,
    edad_meses INT,
    fecha_aplicacion DATE,
    aplicado_por VARCHAR(60)
);

CREATE TABLE pregunta_uno_lawton (
    id_pregunta_uno_lawton INT PRIMARY KEY AUTO_INCREMENT,
    capacidad_telefono BIT,
    marcar_numeros BIT,
    contestar_telefono BIT,
    total_uno INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_dos_lawton (
    id_pregunta_dos_lawton INT PRIMARY KEY AUTO_INCREMENT,
    realiza_compras_necesarias BIT,
    compras_independiente BIT,
    acompanado_compra BIT,
    incapaz_comprar BIT,
    total_dos INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_tres_lawton (
    id_pregunta_tres_lawton INT PRIMARY KEY AUTO_INCREMENT,
    organiza_comida BIT,
    adecuadamente_comida BIT,
    sirve_comida BIT,
    necesita_comida BIT,
    total_tres INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_cuatro_lawton (
    id_pregunta_cuatro_lawton INT PRIMARY KEY AUTO_INCREMENT,
    mantiene_casa_solo BIT,
    realiza_tareas_ligeras BIT,
    nivel_bajo_limpieza BIT,
    ayuda_labores BIT,
    no_labora_casa BIT,
    total_cuatro INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_cinco_lawton (
    id_pregunta_cinco_lawton INT PRIMARY KEY AUTO_INCREMENT,
    lava_ropa BIT,
    lava_pequenas_prendas BIT,
    lava_otro BIT,
    total_cinco INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_seis_lawton (
    id_pregunta_seis_lawton INT PRIMARY KEY AUTO_INCREMENT,
    viaja_solo BIT,
    coge_taxi BIT,
    transporte_publico BIT,
    utiliza_automovil BIT,
    no_viaja BIT,
    total_seis INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_siete_lawton (
    id_pregunta_siete_lawton INT PRIMARY KEY AUTO_INCREMENT,
    medicacion_solo BIT,
    medicacion_previa BIT,
    no_administra_medicacion BIT,
    total_siete INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE pregunta_ocho_lawton (
    id_pregunta_ocho_lawton INT PRIMARY KEY AUTO_INCREMENT,
    economicos_solo BIT,
    compras_ayuda BIT,
    economicos_ayuda BIT,
    total_ocho INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE total_lawton_brody (
    id_total_lawton_brody INT PRIMARY KEY AUTO_INCREMENT,
    total_todo INT,
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE lawton_brody_funcionario (
    id_datos_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    numero_identificacion_funcionario VARCHAR(15),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    id_escala_lawton_brody INT,
    foreign key (id_escala_lawton_brody) references escala_lawton_brody(id_escala_lawton_brody)
);

CREATE TABLE escala_mental (
    id_escala_mental INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR (120),
    zona VARCHAR(10),
    distrito VARCHAR(15),
    modalidad_atencion VARCHAR(15),
    lugar_atencion VARCHAR(30),
    edad_anual INT,
    edad_meses INT,
    fecha_aplicacion DATE,
    aplicado_por VARCHAR(60)
);

CREATE TABLE pregunta_uno (
    id_pregunta_uno INT PRIMARY KEY AUTO_INCREMENT,
    dia_estamos BIT,
    mes_estamos BIT,
    ano_estamos BIT,
    dia_semana BIT,
    hora_estamos BIT,
    puntuacion_uno INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_dos(
    id_pregunta_dos INT PRIMARY KEY AUTO_INCREMENT,
    dia_estamos_dos BIT,
    mes_estamos_dos BIT,
    ano_estamos_dos BIT,
    dia_semana_dos BIT,
    hora_estamos_dos BIT,
    puntuacion_dos INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_tres(
    id_pregunta_tres INT PRIMARY KEY AUTO_INCREMENT,
    lugar_estamos BIT,
    departamento_estamos BIT,
    barrio_actual BIT,
    ciudad_estamos BIT,
    pais_estamos BIT,
    puntuacion_tres INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_cuatro (
    id_pregunta_cuatro INT PRIMARY KEY AUTO_INCREMENT,
    repeticion_ensayo BIT,
    papel BIT,
    bicicleta BIT,
    cuchara BIT,
    puntuacion_cuatro INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_cinco(
    id_pregunta_cinco INT PRIMARY KEY AUTO_INCREMENT,
    uno BIT,
    dos BIT,
    tres BIT,
    cuatro BIT,
    cinco BIT,
    puntuacion_cinco INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_seis(
    id_pregunta_seis INT PRIMARY KEY AUTO_INCREMENT,
    papel_uno BIT,
    bicicleta_dos BIT,
    cuchara_tres BIT,
    puntuacion_seis INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_siete(
    id_pregunta_siete INT PRIMARY KEY AUTO_INCREMENT,
    mostrarle_lapiz BIT,
    mostrarle_reloj BIT,
    puntuacion_siete INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_ocho(
    id_pregunta_ocho INT PRIMARY KEY AUTO_INCREMENT,
    consigna BIT,
    puntuacion_ocho INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_nueve(
    id_pregunta_nueve INT PRIMARY KEY AUTO_INCREMENT,
    comprension_ejecucion BIT,
    doblar_mitad BIT,
    dejelo_suelo BIT,
    puntuacion_nueve INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_diez(
    id_pregunta_diezpregunta_diez INT PRIMARY KEY AUTO_INCREMENT,
    pidale_leer BIT,
    puntuacion_diez INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_once(
    id_pregunta_once INT PRIMARY KEY AUTO_INCREMENT,
    escriba_frase BIT,
    puntuacion_once INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE pregunta_doce(
    id_pregunta_doce INT PRIMARY KEY AUTO_INCREMENT,
    copie_dibujo BIT,
    puntuacion_doce INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE total_preguntas(
    id_total_preguntas INT PRIMARY KEY AUTO_INCREMENT,
    puntuacion_total INT,
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE datos_funcionario (
    id_datos_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    numero_identificacion_funcionario VARCHAR(15),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    id_escala_mental INT,
    foreign key (id_escala_mental) references escala_mental(id_escala_mental)
);

CREATE TABLE escala_depresion (
    id_escala_depresion INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR (120),
    zona VARCHAR(10),
    distrito VARCHAR(15),
    modalidad_atencion VARCHAR(15),
    lugar_atencion VARCHAR(30),
    edad_anual INT,
    edad_meses INT,
    fecha_aplicacion DATE,
    aplicado_por VARCHAR(60)
);

CREATE TABLE preguntas_escala_depresion (
    id_preguntas_escala_depresion INT PRIMARY KEY AUTO_INCREMENT,
    satisfecho_vida VARCHAR(10),
    intereses_actividades VARCHAR(10),
    vida_vacia VARCHAR(10),
    aburrido_frecuentemente VARCHAR(10),
    animo_todo_tiempo VARCHAR(10),
    preocupado_malo VARCHAR(10),
    feliz_tiempo VARCHAR(10),
    frecuencia_desamparado VARCHAR(10),
    cosas_nuevas VARCHAR(10),
    problemas_memoria VARCHAR(10),
    maravilloso_vivo VARCHAR(10),
    inutil_desprecio VARCHAR(10),
    lleno_energia VARCHAR(10),
    situacion_actual VARCHAR(10),
    percepcion VARCHAR(10),
    total_todo VARCHAR(20),
    id_escala_depresion INT,
    foreign key (id_escala_depresion) references escala_depresion(id_escala_depresion)
);

CREATE TABLE datos_funcionario_despresion (
    id_datos_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    numero_identificacion_funcionario VARCHAR(15),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    id_escala_depresion INT,
    foreign key (id_escala_depresion) references escala_depresion(id_escala_depresion)
);

CREATE TABLE instrumento_programa (
    id_instrumento_programa INT PRIMARY KEY AUTO_INCREMENT,
    fecha_digilenciamiento DATE
);

CREATE TABLE instrumento_datos_adulto_mayor (
    id_instrumento_datos_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    nombres_apellidos VARCHAR(120),
    sexo VARCHAR (20),
    direccion_residencial VARCHAR(60),
    barrio VARCHAR(50),
    telefono VARCHAR(15),
    numero_identificacion VARCHAR(15),
    fecha_nacimiento_dia DATE,
    fecha_nacimiento_mes DATE,
    fecha_nacimiento_ano DATE,
    procedencia VARCHAR(10),
    lugar VARCHAR(15),
    departamento VARCHAR(20),
    estado_civil VARCHAR(15),
    educacion VARCHAR(25),
    profesion VARCHAR(20),
    otros_oficios VARCHAR(20),
    se_encuentra_afiliado_eps BIT,
    sisben VARCHAR(5),
    cual_sisben VARCHAR(10),
    eps VARCHAR(5),
    cual_eps VARCHAR(40),
    otro_servicio VARCHAR(10),
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE instrumento_datos_ambiente_servicios_vivienda (
    id_instrumento_datos_ambiente_servicios_vivienda INT PRIMARY KEY AUTO_INCREMENT,
    tenencia VARCHAR(10),
    otra_tenencia VARCHAR(20),
    tipo_vivienda VARCHAR(15),
    otro_tipo VARCHAR(15),
    numero_identificacion VARCHAR(15),
    ruido VARCHAR (10),
    iluminacion VARCHAR (10),
    ventilacion VARCHAR (10),
    humedad VARCHAR (10),
    accesibilidad_escaleras VARCHAR (10),
    pisos VARCHAR (10),
    vias_acceso VARCHAR (10),
    transporte VARCHAR (10),
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE servicios_vivienda(
    id_servicios_vivienda INT PRIMARY KEY AUTO_INCREMENT,
    agua BIT,
    luz BIT,
    telefono BIT,
    gas BIT,
    alcantarillado BIT,
    material_vivienda VARCHAR (40),
    id_instrumento_datos_ambiente_servicios_vivienda INT,
    foreign key (id_instrumento_datos_ambiente_servicios_vivienda) references instrumento_datos_ambiente_servicios_vivienda(id_instrumento_datos_ambiente_servicios_vivienda)
);

CREATE TABLE aspecto_biologico(
    id_aspecto_biologico INT PRIMARY KEY AUTO_INCREMENT,
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE instrumento_patologias (
    id_instrumento_estado_salud_patologias INT PRIMARY KEY AUTO_INCREMENT,
    hipertension BIT,
    diabetes BIT,
    enfermedades_cardiacas BIT,
    osteoporosis BIT,
    asma BIT,
    artritis BIT,
    cancer BIT,
    demencia BIT,
    otras VARCHAR(20),
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE instrumento_síntomas (
    id_instrumento_síntomas INT PRIMARY KEY AUTO_INCREMENT,
    numero_identificacion BIT,
    dolor_articulaciones BIT,
    mareos_vahidos BIT,
    tos_catarro_gripe BIT,
    tobillos_inflamados BIT,
    cansancio BIT,
    dificultad_para_dormir BIT,
    flojedad_piernas BIT,
    dificultad_respirar BIT,
    palpitaciones BIT,
    dolor_pecho BIT,
    manos_pies_frios BIT,
    adormilado BIT,
    boca_seca BIT,
    hormigueo_manos_pies BIT,
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE instrumento_consumo_medicamentos (
    id_instrumento_consumo_medicamentos INT PRIMARY KEY AUTO_INCREMENT,
    consume_medicamentos BIT,
    cuantos_medicamentos VARCHAR(10),
    cuales_medicamentos VARCHAR(60),
    recibe_tratamiento BIT,
    cual_tratamiento VARCHAR(20),
    frecuencia_visita_medico VARCHAR(20),
    otros_datos VARCHAR(20),
    medicamentos_no_prescritos BIT,
    cuales_no_prescritos VARCHAR(60),
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE instrumento_habitos_adulto_mayor (
    id_instrumento_habitos_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    cambio_habitos_alimenticios BIT,
    come_menos_dos_veces BIT,
    tiene_problemas_dentales BIT,
    come_pocas_frutas BIT,
    come_solo BIT,
    realiza_ejercicio BIT,
    frecuencia_realiza_ejercicio VARCHAR(15),
    fuma BIT,
    cuantos_cigarrillos VARCHAR(15),
    consume_licor BIT,
    frecuencia_consume_licor VARCHAR(15),
    cantidad_consume_licor VARCHAR(15),
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE instrumento_funcionalidad_adulto_mayor (
    id_instrumento_funcionalidad_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    cuidar_aspecto_fisico VARCHAR(10),
    realizar_tareas_caseras VARCHAR(10),
    caminar VARCHAR(10),
    realizar_tareas_fuera VARCHAR(10),
    puede_valerse VARCHAR(10),
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE instrumento_longevidad_adulto_mayor (
    id_instrumento_longevidad_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    parientes_longevos BIT,
    edad_madre_padre INT,
    edad_abuelo_abuela INT,
    edad_tio_tia INT,
    id_aspecto_biologico INT,
    foreign key (id_aspecto_biologico) references aspecto_biologico(id_aspecto_biologico)
);

CREATE TABLE ficha_psicologia_adulto_mayor (
    id_ficha_psicologia_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    siente_deprimido VARCHAR(15),
    siente_desesperado VARCHAR(15),
    olvida_dia_que_se_encuentra VARCHAR(15),
    olvida_oficios VARCHAR(15),
    olvida_objetos_personales VARCHAR(15),
    se_pierde_en_algun_lugar VARCHAR(15),
    falta_interes VARCHAR(15),
    preocupa_higiene_personal VARCHAR(15),
    satisfecho_como_ocupa_eltiempo VARCHAR (15),
    esta_satisfecho_con_la_vida VARCHAR(10),
    observaciones TEXT,
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE aspecto_social(
    id_aspecto_social INT PRIMARY KEY AUTO_INCREMENT,
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE relaciones_familiares (
    id_relaciones_familiares INT PRIMARY KEY AUTO_INCREMENT,
    personas_viven INT,
    con_quien_vive VARCHAR(60),
    tuvo_hijos BIT,
    cuantos_hijos INT,
    rol_nucleo_familiar VARCHAR(40),
    actividades_que_participa VARCHAR(15),
    otras_actividades VARCHAR(40),
    participa_en_decisiones BIT,
    como_participa VARCHAR(10),
    mencione_participacion VARCHAR(20),
    que_aportes_recibe VARCHAR(30),
    otros_aportes VARCHAR(30),
    esta_satisfecho BIT,
    por_que_satisfecho VARCHAR(40),
    comunicacion_con_quien_vive VARCHAR(15),
    por_que_comunica VARCHAR(40),
    como_califica_relaciones VARCHAR(15),
    por_que_relaciona VARCHAR(40),
    id_aspecto_social INT,
    foreign key (id_aspecto_social) references aspecto_social(id_aspecto_social)
);

CREATE TABLE relaciones_interpersonales (
    id_relaciones_interpersonales INT PRIMARY KEY AUTO_INCREMENT,
    hijos_que_no_viven_con_usted VARCHAR (30),
    nietos_que_no_viven_con_usted VARCHAR (30),
    familiares_no_viven_con_usted VARCHAR (30),
    vecinos VARCHAR (30),
    amigos_no_vecinos VARCHAR (30),
    conyuge VARCHAR (20),
    hijos VARCHAR (20),
    nietos VARCHAR (20),
    otros_familiares VARCHAR (20),
    vecinos2 VARCHAR (20),
    amigos_no_vecinos2 VARCHAR (20),
    id_aspecto_social INT,
    foreign key (id_aspecto_social) references aspecto_social(id_aspecto_social)
);

CREATE TABLE relaciones_social(
    id_relaciones_social INT PRIMARY KEY AUTO_INCREMENT,
    participa_en_grupos BIT,
    cuales_grupos VARCHAR(40),
    con_que_frecuencia VARCHAR(15),
    nunca_explique_razones TEXT,
    id_aspecto_social INT,
    foreign key (id_aspecto_social) references aspecto_social(id_aspecto_social)
);

CREATE TABLE instrumento_actividad_ocio_adulto_mayor (
    id_instrumento_actividad_ocio_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    ntrabajado_durante_su_vida VARCHAR(100),
    labora_actualmente BIT,
    cual_actividad VARCHAR(50),
    leer VARCHAR(20),
    visitar_amigos VARCHAR(20),
    ver_television VARCHAR(20),
    escuchar_radio VARCHAR(20),
    caminar VARCHAR(20),
    juegos_actividades VARCHAR(20),
    cuidar_ninos VARCHAR(20),
    hacer_manualidades VARCHAR(20),
    hacer_mandados VARCHAR(20),
    ir_compras VARCHAR(20),
    viajar VARCHAR(20),
    observaciones_generales TEXT,
    impresion_diagnostica TEXT,
    concepto_gerontologico TEXT,
    plan TEXT,
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE datos_funcionario_instrumento (
    id_datos_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    numero_identificacion_funcionario VARCHAR(15),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    id_instrumento_programa INT,
    foreign key (id_instrumento_programa) references instrumento_programa(id_instrumento_programa)
);

CREATE TABLE visitas_programa (
    id_visitas_programa INT PRIMARY KEY AUTO_INCREMENT,
    fecha_visita DATE,
    solicitante VARCHAR(60),
    datos_visita VARCHAR(60)
);

CREATE TABLE visitas_datos_adulto_mayor (
    id_visitas_datos_adulto_mayor INT PRIMARY KEY AUTO_INCREMENT,
    nombre_completo VARCHAR(120),
    edad INT,
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_programa(id_visitas_programa)
);

CREATE TABLE datos_atiende_visita (
    id_datos_atiende_visita INT PRIMARY KEY AUTO_INCREMENT,
    nombres_atiende_visita VARCHAR(20),
    tipo_numero_documento VARCHAR(20),
    fecha_nacimiento DATE,
    edad INT,
    direccion_residencial VARCHAR(60),
    telefono VARCHAR(15),
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE visita_objetivo (
    id_visita_objetivo INT PRIMARY KEY AUTO_INCREMENT,
    objetivo TEXT,
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE composion_familiar (
    id_composion_familiar INT PRIMARY KEY AUTO_INCREMENT,
    nombres_apellidos VARCHAR(120),
    parentesco VARCHAR(30),
    edad INT,
    escolaridad VARCHAR (50),
    estado_civil VARCHAR (30),
    actividad VARCHAR (100),
    ocupacion VARCHAR (100),
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE visita_desarrollo (
    id_visita_desarrollo INT PRIMARY KEY AUTO_INCREMENT,
    desarrollo TEXT,
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE condiciones_habitacionales_economicos(
    id_condiciones_habitacionales_economicos INT PRIMARY KEY AUTO_INCREMENT,
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE visitas_vivenda(
    id_visitas_vivenda INT PRIMARY KEY AUTO_INCREMENT,
    tipo_vivienda VARCHAR(15),
    tenencia_vivienda BIT,
    estrato INT,
    ubicacion VARCHAR(10),
    tiempo_permanencia_vivienda VARCHAR(20),
    id_condiciones_habitacionales_economicos INT,
    foreign key (id_condiciones_habitacionales_economicos) references condiciones_habitacionales_economicos(id_condiciones_habitacionales_economicos)
);

CREATE TABLE vistas_servicios_vivienda(
    id_vistas_servicios_vivienda INT PRIMARY KEY AUTO_INCREMENT,
    acueducto BIT,
    energia BIT,
    manejo_basuras BIT,
    gas_domiciliario BIT,
    television BIT,
    internet BIT,
    id_visitas_vivenda INT,
    foreign key (id_visitas_vivenda) references visitas_vivenda(id_visitas_vivenda)
);

CREATE TABLE visitas_distribucion_espacios (
    id_visitas_distribucion_espacios INT PRIMARY KEY AUTO_INCREMENT,
    numero_habitaciones INT,
    numero_residentes INT,
    otros_espacios VARCHAR(20),
    descripcion_vivienda TEXT,
    id_visitas_vivenda INT,
    foreign key (id_visitas_vivenda) references visitas_vivenda(id_visitas_vivenda)
);

CREATE TABLE visitas_recursos_economicos(
    id_visitas_recursos_economicos INT PRIMARY KEY AUTO_INCREMENT,
    apropiacion_recursos TEXT,
    id_condiciones_habitacionales_economicos INT,
    foreign key (id_condiciones_habitacionales_economicos) references condiciones_habitacionales_economicos(id_condiciones_habitacionales_economicos)
);

CREATE TABLE visitas_observaciones_adicionales(
    id_visitas_observaciones_adicionales INT PRIMARY KEY AUTO_INCREMENT,
    observaciones_adicionales TEXT,
    id_condiciones_habitacionales_economicos INT,
    foreign key (id_condiciones_habitacionales_economicos) references condiciones_habitacionales_economicos(id_condiciones_habitacionales_economicos)
);

CREATE TABLE visitas_concepto(
    id_visitas_concepto INT PRIMARY KEY AUTO_INCREMENT,
    concepto TEXT,
    id_condiciones_habitacionales_economicos INT,
    foreign key (id_condiciones_habitacionales_economicos) references condiciones_habitacionales_economicos(id_condiciones_habitacionales_economicos)
);

CREATE TABLE informe_valoracion(
    id_informe_valoracion INT PRIMARY KEY AUTO_INCREMENT,
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);

CREATE TABLE datos_persona_realizo_evaluacion (
    id_datos_persona_realizo_evaluacion INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20),
    numero_identificacion VARCHAR(15),
    residencia VARCHAR(30),
    edad INT,
    telefono VARCHAR(15),
    id_informe_valoracion INT,
    foreign key (id_informe_valoracion) references informe_valoracion(id_informe_valoracion)
);

CREATE TABLE descripcion_actividad (
    id_descripcion_actividad INT PRIMARY KEY AUTO_INCREMENT,
    fecha_inicio_proceso DATE,
    profesional_encargado VARCHAR(60),
    observaciones TEXT,
    id_informe_valoracion INT,
    foreign key (id_informe_valoracion) references informe_valoracion(id_informe_valoracion)
);

CREATE TABLE visitas_funcionario (
    id_visitas_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nombre_funcionario VARCHAR(80),
    cargo VARCHAR(30),
    registro_profesional VARCHAR(20),
    numero_identificacion VARCHAR(15),
    id_visitas_programa INT,
    foreign key (id_visitas_programa) references visitas_datos_adulto_mayor(id_visitas_programa)
);