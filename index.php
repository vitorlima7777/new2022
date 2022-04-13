<?php
ob_start();
//armazena os dados em cache
session_start();//iniciar a sessão
if(isset($_SESSION['loginUser'])&&(isset( $_SESSION['senhaUser']))){
  header("Location:home.php");

}
?><!DOCTYPE html>
<html lang="pt_br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agenda JMF| Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Agenda</b>JMF</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Faça Login para cadastrar os contatos</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input  type="email" class="form-control" placeholder="Digite seu Email..." name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Digite sua senha..." name="senha">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
            
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button name="btnlogin" type="submit" class="btn btn-primary btn-block">Acessar Agenda</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
      if(isset($_POST['btnlogin'])){
        $login=$_POST['email'];
        $senha=base64_encode($_POST['senha']);
        $select="SELECT*FROM tabela WHERE emailContato=:emailLogin AND senhaContato=:senhaLogin";
        try{
          $resultLogin=$conect->prepare($select);
          $resultLogin->bindParam(':emailLogin',$login,PDO::PARAM_STR);
          $resultLogin->bindParam(':senhaLogin',$senha,PDO::PARAM_STR);
          $resultLogin->execute();

          $verificar=$resultLogin->rowCount();
          if($verificar>0) {
            $login=$_POST['email'];
            $senha=$_POST['senha'];
            //CRIAR SESSÃO
            $_SESSION['loginUser']=$login;
            $_SESSION['senhaUser']=$senha;
            echo"Você será redirecionado para a agenda :)";
            header("Refresh: 5, home.php");
          }else{
              echo"Email ou senha incorretos";
            }
        }catch (PDOException $e){
          echo"<strong> ERRO DE Login= </strong>". $e->getMessage();
      } 
    }
    ?>

      <div class="social-auth-links text-center mb-3">
        
      <!-- /.social-auth-links -->

     
      <p stle="margin:20px 50px 0 0 ;text-align center"class="mb-0">
        <a href="registro.php" class="text-center">Cadastro para novo usuário</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
