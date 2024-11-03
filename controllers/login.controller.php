<?php
// Autenticação

// Receber o formulário com email e senha
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $validacao= Validacao::validar([
    'email' => ['required', 'email'],
    'senha' => ['required']
], $_POST);
  
if($validacao->naoPassou('login')){
   
    header('location: /login');
    exit();
}


   // Fazer uma consulta no banco de dados com email e senha
$usuario = $database->query(query: "select * from usuarios where email = :email",
class: Usuario::class,
params: compact('email')
)->fetch();


// se existir, 
if ($usuario) {

// validar a senha
if (! password_verify($_POST['senha'],$usuario->senha) ){
  flash()->push('validacoes_login', ['Usuário ou senha não encontrados']);
  header('location: /login');
  exit();
}


    //adicionar na sessão que o usuário está autenticado
  $_SESSION['auth'] = $usuario ;
  flash()->push('mensagem', 'Seja bem vindo'.$usuario->nome.'!');
// $_SESSION['mensagem'] = 'Seja bem vindo'.$usuario->nome.'!';
  header('location: /');
  
  exit();

}
// mudar a informação mo nosso navbar mostrar o nome do usuário 
}




view('login');