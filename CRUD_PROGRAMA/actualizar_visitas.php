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
                   
                    <form action="update_visitas.php" method="POST">
                                
                                
                
                                <input type="text" class="form-control mb-3" name="fecha_visita" placeholder="fecha_visita" value="<?php echo $row['fecha_visita']  ?>">
                                <input type="text" class="form-control mb-3" name="solicitante" placeholder="solicitante" value="<?php echo $row['solicitante']  ?>">
                                <input type="text" class="form-control mb-3" name="datos_visita" placeholder="datos_visita" value="<?php echo $row['datos_visita']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_completo" placeholder="nombre_completo" value="<?php echo $row['nombre_completo']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_atiende_visita" placeholder="nombres_atiende_visita" value="<?php echo $row['nombres_atiende_visita']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_numero_documento" placeholder="tipo_numero_documento" value="<?php echo $row['tipo_numero_documento']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_nacimiento" placeholder="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_persona" placeholder="edad_persona" value="<?php echo $row['edad_persona']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_residencial" placeholder="direccion_residencial" value="<?php echo $row['direccion_residencial']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_apellidos" placeholder="nombres_apellidos" value="<?php echo $row['nombres_apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="parentesco" placeholder="parentesco" value="<?php echo $row['parentesco']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">

                                <input type="text" class="form-control mb-3" name="escolaridad" placeholder="escolaridad" value="<?php echo $row['escolaridad']  ?>">
                                <input type="text" class="form-control mb-3" name="estado_civil" placeholder="estado_civil" value="<?php echo $row['estado_civil']  ?>">
                                <input type="text" class="form-control mb-3" name="actividad" placeholder="actividad" value="<?php echo $row['actividad']  ?>">
                                <input type="text" class="form-control mb-3" name="ocupacion" placeholder="ocupacion" value="<?php echo $row['ocupacion']  ?>">
                                <input type="text" class="form-control mb-3" name="desarrollo" placeholder="desarrollo" value="<?php echo $row['desarrollo']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_vivienda" placeholder="tipo_vivienda" value="<?php echo $row['tipo_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="tenencia_vivienda" placeholder="tenencia_vivienda" value="<?php echo $row['tenencia_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="estrato" placeholder="estrato" value="<?php echo $row['estrato']  ?>">
                                <input type="text" class="form-control mb-3" name="ubicacion" placeholder="ubicacion" value="<?php echo $row['ubicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="tiempo_permanencia_vivienda" placeholder="tiempo_permanencia_vivienda" value="<?php echo $row['tiempo_permanencia_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="acueducto" placeholder="acueducto" value="<?php echo $row['acueducto']  ?>">
                                <input type="text" class="form-control mb-3" name="energia" placeholder="energia" value="<?php echo $row['energia']  ?>">
                                <input type="text" class="form-control mb-3" name="manejo_basuras" placeholder="manejo_basuras" value="<?php echo $row['manejo_basuras']  ?>">
                                <input type="text" class="form-control mb-3" name="gas_domiciliario" placeholder="gas_domiciliario" value="<?php echo $row['gas_domiciliario']  ?>">

                                <input type="text" class="form-control mb-3" name="television" placeholder="television" value="<?php echo $row['television']  ?>">
                                <input type="text" class="form-control mb-3" name="internet" placeholder="internet" value="<?php echo $row['internet']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_habitaciones" placeholder="numero_habitaciones" value="<?php echo $row['numero_habitaciones']  ?>">

                                <input type="text" class="form-control mb-3" name="numero_residentes" placeholder="numero_residentes" value="<?php echo $row['numero_residentes']  ?>">
                                <input type="text" class="form-control mb-3" name="otros_espacios" placeholder="otros_espacios" value="<?php echo $row['otros_espacios']  ?>">
                                <input type="text" class="form-control mb-3" name="descripcion_vivienda" placeholder="descripcion_vivienda" value="<?php echo $row['descripcion_vivienda']  ?>">
                                <input type="text" class="form-control mb-3" name="apropiacion_recursos" placeholder="apropiacion_recursos" value="<?php echo $row['apropiacion_recursos']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones_adicionales" placeholder="observaciones_adicionales" value="<?php echo $row['observaciones_adicionales']  ?>">
                                <input type="text" class="form-control mb-3" name="concepto" placeholder="concepto" value="<?php echo $row['concepto']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion" placeholder="numero_identificacion" value="<?php echo $row['numero_identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="residencia" placeholder="residencia" value="<?php echo $row['residencia']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_inicio_proceso" placeholder="fecha_inicio_proceso" value="<?php echo $row['fecha_inicio_proceso']  ?>">
                                <input type="text" class="form-control mb-3" name="profesional_encargado" placeholder="profesional_encargado" value="<?php echo $row['profesional_encargado']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">
                                 <input type="submit" class="btn btn-primary btn-block" value="Actualizar">


