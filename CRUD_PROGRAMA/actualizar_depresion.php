<?php 
    include("../includes/conexion.php");

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
                   
                    <form action="update_depresion.php" method="POST">
                                
                               
                                <input type="text" class="form-control mb-3" name="nombre_usuario" placeholder="nombre_usuario" value="<?php echo $row['nombre_usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="zona" placeholder="zona" value="<?php echo $row['zona']  ?>">
                                <input type="text" class="form-control mb-3" name="distrito" placeholder="distrito" value="<?php echo $row['distrito']  ?>">
                                <input type="text" class="form-control mb-3" name="modalidad_atencion" placeholder="modalidad_atencion" value="<?php echo $row['modalidad_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar_atencion" placeholder="lugar_atencion" value="<?php echo $row['lugar_atencion']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_anual" placeholder="edad_anual" value="<?php echo $row['edad_anual']  ?>">
                                <input type="text" class="form-control mb-3" name="edad_meses" placeholder="edad_meses" value="<?php echo $row['edad_meses']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_aplicacion" placeholder="fecha_aplicacion" value="<?php echo $row['fecha_aplicacion']  ?>">
                                <input type="text" class="form-control mb-3" name="aplicado_por" placeholder="aplicado_por" value="<?php echo $row['aplicado_por']  ?>">
                                <input type="text" class="form-control mb-3" name="satisfecho_vida" placeholder="satisfecho_vida" value="<?php echo $row['satisfecho_vida']  ?>">
                                <input type="text" class="form-control mb-3" name="intereses_actividades" placeholder="intereses_actividades" value="<?php echo $row['intereses_actividades']  ?>">
                                <input type="text" class="form-control mb-3" name="vida_vacia" placeholder="vida_vacia" value="<?php echo $row['vida_vacia']  ?>">


                                <input type="text" class="form-control mb-3" name="aburrido_frecuentemente" placeholder="aburrido_frecuentemente" value="<?php echo $row['aburrido_frecuentemente']  ?>">
                                <input type="text" class="form-control mb-3" name="animo_todo_tiempo" placeholder="animo_todo_tiempo" value="<?php echo $row['animo_todo_tiempo']  ?>">
                                <input type="text" class="form-control mb-3" name="preocupado_malo" placeholder="preocupado_malo" value="<?php echo $row['preocupado_malo']  ?>">
                                <input type="text" class="form-control mb-3" name="feliz_tiempo" placeholder="feliz_tiempo" value="<?php echo $row['feliz_tiempo']  ?>">
                                <input type="text" class="form-control mb-3" name="frecuencia_desamparado" placeholder="frecuencia_desamparado" value="<?php echo $row['frecuencia_desamparado']  ?>">
                                <input type="text" class="form-control mb-3" name="cosas_nuevas" placeholder="cosas_nuevas" value="<?php echo $row['cosas_nuevas']  ?>">
                                <input type="text" class="form-control mb-3" name="problemas_memoria" placeholder="problemas_memoria" value="<?php echo $row['problemas_memoria']  ?>">
                                <input type="text" class="form-control mb-3" name="maravilloso_vivo" placeholder="maravilloso_vivo" value="<?php echo $row['maravilloso_vivo']  ?>">
                                <input type="text" class="form-control mb-3" name="inutil_desprecio" placeholder="inutil_desprecio" value="<?php echo $row['inutil_desprecio']  ?>">
                                <input type="text" class="form-control mb-3" name="lleno_energia" placeholder="lleno_energia" value="<?php echo $row['lleno_energia']  ?>">
                                <input type="text" class="form-control mb-3" name="situacion_actual" placeholder="situacion_actual" value="<?php echo $row['situacion_actual']  ?>">
                                <input type="text" class="form-control mb-3" name="percepcion" placeholder="percepcion" value="<?php echo $row['percepcion']  ?>">
                                 <input type="text" class="form-control mb-3" name="total_todo" placeholder="total_todo" value="<?php echo $row['total_todo']  ?>">

                                <input type="text" class="form-control mb-3" name="nombre_funcionario" placeholder="nombre_funcionario" value="<?php echo $row['nombre_funcionario'] ?>">
                                <input type="text" class="form-control mb-3" name="numero_identificacion_funcionario" placeholder="numero_identificacion_funcionario" value="<?php echo $row['numero_identificacion_funcionario']  ?>">
                                 <input type="text" class="form-control mb-3" name="cargo" placeholder="cargo" value="<?php echo $row['cargo']  ?>">
                                <input type="text" class="form-control mb-3" name="registro_profesional" placeholder="registro_profesional" value="<?php echo $row['registro_profesional'] ?>">
                                 <input type="submit" class="btn btn-primary btn-block" value="Actualizar">