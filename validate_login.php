<?php
session_start();
$url = $_SERVER['HTTP_HOST'];

$error = '';
$_SESSION['auth'] = false;

$usuarios_app = array(
    array('nome' => 'Admin Nivs', 'email' => 'adm@test.com', 'password' => '123456'),
    array('nome' => 'marcus', 'email' => 'test@test.com', 'password' => '12'),
    array('nome' => 'teta', 'email' => 'teta@teta.com', 'password' => '1'),
);


foreach($usuarios_app as $value => $usuario){

    if(
        $usuario['email'] == $_POST['email'] 
    && 
        $usuario['password'] == $_POST['password']) {

                echo  "Deu bom!";
                $_SESSION['auth'] = true;
                $_SESSION['nome'] = $usuario['nome'];
               
                header('Location: home.php');
                exit();
    }




   
        
        else if(
            $usuario['email'] != $_POST['email'] 
        && 
            $usuario['password'] != $_POST['password']) {
                    if(count($usuarios_app) ==  $value) {     
                            $_SESSION['auth'] = false;
                            echo "Não há  nenhum registro com esses dados.";
                            header('Location: index.php?login=error');
                            exit;
                            break;}
    }



    
    
    
    
    else if ($_POST['email'] == "" || $_POST['password'] == "")
             /**    || (empty($_POST['email']) || empty($_POST['password']))
                || (!isset($_POST['email']) || !isset($_POST['password'])))**/{
                    header('Location: index.php?login=error3');
                    exit;

                }

    else {
        header('Location: index.php?login=error');
        exit;
        break;  
    }
}




if (isset($_GET['login'])){
        
    
    if($_GET['login'] == 'error') {
            $error = "Conta não achada.";
        }

        else {
            $error = '';
        }


    }