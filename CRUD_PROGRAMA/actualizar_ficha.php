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
                   
                    <form action="update_ficha.php" method="POST">
                                
                                
                                <input type="text" class="form-control mb-3" name="nombre_programa" placeholder="nombre_programa" value="<?php echo $row['nombre_programa']  ?>">
                                <input type="text" class="form-control mb-3" name="vigencia" placeholder="vigencia" value="<?php echo $row['vigencia']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_digilenciamiento" placeholder="fecha_digilenciamiento" value="<?php echo $row['fecha_digilenciamiento']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_identificacion" placeholder="tipo_identificacion" value="<?php echo $row['tipo_identificacion']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_expedicion" placeholder="fecha_expedicion" value="<?php echo $row['fecha_ingreso']  ?>">
                                <input type="text" class="form-control mb-3" name="dpto_municipio_expedicion" placeholder="dpto_municipio_expedicion" value="<?php echo $row['dpto_municipio_expedicion']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="primer_apellido" placeholder="primer_apellido" value="<?php echo $row['primer_apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="segundo_apellido" placeholder="segundo_apellido" value="<?php echo $row['segundo_apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="edad" placeholder="edad" value="<?php echo $row['edad']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_residencial" placeholder="direccion_residencial" value="<?php echo $row['direccion_residencial']  ?>">
                                <input type="text" class="form-control mb-3" name="departamento" placeholder="departamento" value="<?php echo $row['departamento']  ?>">
                                <input type="text" class="form-control mb-3" name="municipio" placeholder="municipio" value="<?php echo $row['municipio']  ?>">
                                <input type="text" class="form-control mb-3" name="barrio_vereda" placeholder="barrio_vereda" value="<?php echo $row['barrio_vereda']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="celular" placeholder="celular" value="<?php echo $row['celular']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_familiar_acudiente" placeholder="nombre_familiar_acudiente" value="<?php echo $row['nombre_familiar_acudiente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres_apellidos" placeholder="nombres_apellidos" value="<?php echo $row['nombres_apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="parentesco" placeholder="parentesco" value="<?php echo $row['parentesco']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion_domicilio" placeholder="direccion_domicilio" value="<?php echo $row['direccion_domicilio']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="barrio_vereda" placeholder="barrio_vereda" value="<?php echo $row['barrio_vereda']  ?>">

                                <input type="text" class="form-control mb-3" name="celular" placeholder="celular" value="<?php echo $row['celular']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones" placeholder="observaciones" value="<?php echo $row['observaciones']  ?>">
                                <input type="text" class="form-control mb-3" name="regimen_afiliacion" placeholder="regimen_afiliacion" value="<?php echo $row['regimen_afiliacion']  ?>">
                                <input type="text" class="form-control mb-3" name="eps" placeholder="eps" value="<?php echo $row['eps']  ?>">
                                <input type="text" class="form-control mb-3" name="afiliado" placeholder="afiliado" value="<?php echo $row['afiliado']  ?>">
                                <input type="text" class="form-control mb-3" name="diagnostico_medico" placeholder="diagnostico_medico" value="<?php echo $row['diagnostico_medico']  ?>">
                                <input type="text" class="form-control mb-3" name="entidad_certifica" placeholder="entidad_certifica" value="<?php echo $row['entidad_certifica']  ?>">
                                <input type="text" class="form-control mb-3" name="observaciones_medicas" placeholder="observaciones_medicas" value="<?php echo $row['observaciones_medicas']  ?>">
                                <input type="text" class="form-control mb-3" name="compromisos_condiciones" placeholder="compromisos_condiciones" value="<?php echo $row['compromisos_condiciones']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_adulto_mayor_acudiente" placeholder="nombre_adulto_mayor_acudiente" value="<?php echo $row['nombre_adulto_mayor_acudiente']  ?>">
                               
                                <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">

  
