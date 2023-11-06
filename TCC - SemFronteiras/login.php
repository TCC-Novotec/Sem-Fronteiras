<?php
    session_start();
    $local = 'localhost';
    $user = 'root';
    $pass = 'usbw';
    $bd = 'tcc_sf';
    $conexao = mysqli_connect($local,$user,$pass,$bd);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $botao = $_POST['entrar'];
    if(isset($_POST['entrar']))
    {
        $sql = "SELECT * FROM usuarios WHERE nm_email_usuario = '$email' AND cd_senha_usuario = '$senha'";
        $result = mysqli_query($conexao,$sql);
        if(mysqli_num_rows($result) > 0)
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('location:hospedagem.html');
            
        }
        else
        {
            unset ($_SESSION['email']);
            unset ($_SESSION['senha']);
            echo"<script>alert('Login e/ou senha incorreta!!'); window.location.href='login.html';</script>";
        }
    }
    else{}
?>