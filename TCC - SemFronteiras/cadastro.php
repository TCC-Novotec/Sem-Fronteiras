<?php
    include('conect.php');
    if(isset($_POST['salvar']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['sex'];
        $pcd = $_POST['pcd'];
        $sql = "INSERT INTO usuarios (nm_nome_usuario, nm_email_usuario	, cd_senha_usuario, ds_genero_usuario, ds_pcd) 
        VALUE ('$nome', '$email', '$senha', '$sexo','$pcd')";

        if(mysqli_query($conexao, $sql))
        {
            echo"<script>alert()</script>";
            header('location:login.html');
        }
        
        else{
            echo"<script>('Erro: ".mysqli_error($conexao)."')</script>";
        }
    }
    else{}
?>