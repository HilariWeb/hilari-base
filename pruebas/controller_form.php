<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 30/6/2022
 * Time: 16:54
 */

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','dges');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;
try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    //echo "<script>alert('Conexión con exito a la base de datos');</script>";
}catch (PDOException $e){
    //print_r($e);
    // echo "fr";
    echo "<script>alert('error al conectar con la base de datos');</script>";
}

$URL='http://localhost/hilari-base';

date_default_timezone_set("America/Caracas");
$fechaHora =date("Y-m-d H:i:s");
$fecha_del_sistema =date("Y-m-d");
$hora_del_sistema =date("H:i:s");
$estado_del_registro = "1";

$dia_actual = date("d");

$unidad_educativa = $_POST['unidad_educativa'];
$ano_escolaridad = $_POST['ano_escolaridad'];
$estudiante = $_POST['estudiante'];
$director = $_POST['director'];
$celular = $_POST['celular'];

$sentencia = $pdo->prepare('INSERT INTO tb_estudiantes_sin_textos
(unidad_educativa,ano_escolaridad,estudiante,director,celular, fyh_creacion, estado)
VALUES ( :unidad_educativa,:ano_escolaridad,:estudiante,:director,:celular,:fyh_creacion,:estado)');

$sentencia->bindParam(':unidad_educativa',$unidad_educativa);
$sentencia->bindParam(':ano_escolaridad',$ano_escolaridad);
$sentencia->bindParam(':estudiante',$estudiante);
$sentencia->bindParam(':director',$director);
$sentencia->bindParam(':celular',$celular);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

if($sentencia->execute()){
    echo '<h1 style="color: #ffffff">.</h1>';
    ?>
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: '<strong>Se registro los datos de manera correcta.</strong>',
            icon: 'success',

            allowOutsideClick: false,

            showCancelButton: false,
            focusConfirm: false,
            confirmButtonText:
                '<a href="form.php" style="color:#ffffff;text-decoration: none"> Registrar a otro estudiante</a>',
        })
    </script>
    -->
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body>

    <br>

    <div class="container">
        <div class="card" style="border: #12995a 1px solid">
            <div class="card-header" style="background-color: #12995a">
                <center><span style="color: #ffffff ">Gracias por registrarte</span></center>
            </div>
            <div class="card-body">
                <center><h1>Se registro de la manera correcta.</h1></center>
            </div>
        </div>
    </div>


    </body>
    </html>
<?php
//header('Location:' .$URL.'/');
}else{
    echo 'error al registrar a la base de datos';
}



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<br>

<div class="container">
    <div class="card" style="border: #12995a 1px solid">
        <div class="card-header" style="background-color: #12995a">
            <center><span style="color: #ffffff ">Gracias por registrarte</span></center>
        </div>
        <div class="card-body">
            <center><h1>Se registro de la manera correcta.</h1></center>
        </div>
    </div>
</div>


</body>
</html>
