<?php session_start();


?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Lista de Tarefas - By github.com/nivslive</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Lista de Tarefas - By github.com/nivslive
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
     
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="validate_login.php" method="post" >

              <?php 
              if(isset($_GET['login'])){
              if($_GET['login'] == 'error'){
               ?> <h4 style="color: red;"> Email ou Senha incorreta. </h4> <?php 
              }} ?>


            <?php 
              if(isset($_GET['login'])){
              if($_GET['login'] == 'error2'){
               ?> <h4 style="color: red;"> Se logue antes. Por favor meu amigo. </h4> <?php 
              }} ?>

<?php 
              if(isset($_GET['login'])){
              if($_GET['login'] == 'error3'){
               ?> <h4 style="color: red;"> Escreva algo, cacete. </h4> <?php 
              }} ?>


              
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" value="
                  
                  <?php if(isset($_POST['email'])) {
                                              $_SESSION['email'] = $_POST['email'];
                                              $email = $_SESSION['email'];
                                              echo $email;}
                                      else {
                                              $email = '';
                                              echo $email;
                                      }?>">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>