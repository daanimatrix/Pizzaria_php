<?php
//  echo "chegou";
//  exit;
require 'config.php';
require 'models/Auth.php';

$email =  filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
//Verificar se o login e a senha estão corretos

// echo $email;
// echo $password;
// exit;

if($email && $password){
    
    $auth = new Auth($conexao, $base);
   
    if($auth->validateLogin($email, $password)){
        // header("Location:".$base."/login.php");
        header("Location: http://localhost/pizzaria");
        exit;
    }
}
 
$_SESSION['flash'] = 'E-mail e/ou senha errados.';
// header("Location:".$base."/login.php");
header("Location: ".$base."/login.php");
exit;

?>