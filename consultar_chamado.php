<?php

require_once('auth_confirmation.php');

$file = file('datajson.json', FILE_SKIP_EMPTY_LINES);
//$filter_file =  array_diff($file_adjust, array("", 0, null));




?>


<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
             Lista de Tarefas
        </a>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>
                    <?php foreach($file as $i => $value){ 

                        $data =  json_decode($value, true);

               ?>

                    <div class="card-body">

                        <div class="card mb-3 bg-light">
                            <div class="card-body"> <?php $i = 0;  $i++; echo $i ?>
                                <h5 class="card-title"><?php echo $data["titulo"]?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $data["description"]; ?></h6>
                                <p class="card-text"><?php echo $data["category"]; ?></p>

                            </div>
                        </div>

                    </div>

                        <?php  } ?>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a href="home.php"> <button class="btn btn-lg btn-warning btn-block"
                                        type="submit">Voltar</button> </a>
                            </div>
                            <div class="col-6">
                                <a href="abrir_chamado.php"> <button class="btn btn-lg btn-primary btn-block"
                                        type="submit">Criar novo</button> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
