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
    <div class="card" style="border: #3b09ff 1px solid">
    <div class="card-header" style="background-color: #0c84ff">
        <span style="color: #ffffff ">Si no te llego tu texto, registra tus datos</span>
    </div>
        <form action="controller_form.php" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Unidad Educativa</label>
                            <input type="text" name="unidad_educativa" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Añod de escolaridad</label>
                            <select name="ano_escolaridad" id="" class="form-control">
                                <option value="1er año de Educación Inicial">1er año de Educación Inicial</option>
                                <option value="2do año de Educación Inicial">2do año de Educación Inicial</option>
                                <option value="1ro de Primaria">1ro de Primaria</option>
                                <option value="2do de Primaria">2do de Primaria</option>
                                <option value="3ro de Primaria">3ro de Primaria</option>
                                <option value="4to de Primaria">4to de Primaria</option>
                                <option value="5to de Primaria">5to de Primaria</option>
                                <option value="6to de Primaria">6to de Primaria</option>
                                <option value="1ro de Secundaria">1ro de Secundaria</option>
                                <option value="2do de Secundaria">2do de Secundaria</option>
                                <option value="3ro de Secundaria">3ro de Secundaria</option>
                                <option value="4to de Secundaria">4to de Secundaria</option>
                                <option value="5to de Secundaria">5to de Secundaria</option>
                                <option value="6to de Secundaria">6to de Secundaria</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre completo del estudiante</label>
                            <input type="text" name="estudiante" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Nombre del Director de la Unidad Educativa</label>
                            <input type="text" name="director" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Celular de referencia</label>
                            <input type="text" name="celular" class="form-control" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <center>
                                <button type="submit" class="btn btn-primary btn-block">Enviar registro</button>
                            </center>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


</body>
</html>