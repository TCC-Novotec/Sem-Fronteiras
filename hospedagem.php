<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sem Fronteiras</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="imagem/Sem.png">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

        <?php
        session_start();
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
        {
            header('location:login.html');
        }
        $logado = $_SESSION['email'];
        ?>
    </head> 
    <body>      
      
      <header>
        <a href="index.html" class="logo"><i class="ri-home-heart-fill"></i><span>Logo</span></a>
        <ul class="navbar">
          <li><a href="transporte.html">Transportes</a></li>
          <li><a href="restaurantes.html">Restaurantes</a></li>
          <li><a href="hospedagem.html">Hospedagens</a></li>
        </ul>
        <div class="main">
          <?php
            echo"<div id='logado'><p>".$logado."</p></div>";
          ?>
          <div class="bx bx-menu" id="menu-icon"></div>
        </div>
      </header>
      <!--js link-->
      <script type="text/javascript" src="js/script.js"></script>
      <div class="carvalho">
        <p tag="titlu">Bem-vindo ao nosso guia de hotéis acessíveis no Brasil!.</p><br>
      </div>
      <div>
        <p tag="objeto">Nesta página, você encontrará informações detalhadas
        sobre hotéis que priorizam a acessibilidade e se dedicam a tornar a 
        hospedagem uma experiência verdadeiramente agradável e acessível para todos os viajantes.</p>
      </div>
      <div class="mapa">
        <iframe src="https://www.google.com/maps/d/embed?mid=1HcwlSh4FCje6vK5THH1uVDuZ1GE9qpg&ehbc=2E312F&noprof=1" width="640" height="600"></iframe>
      </div>
      </body>
</html>