<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>Zaloguj Sesje</title>
     <meta name="description" content="Test Sesja">
     <meta name="keywords" content="Sesja">
     <meta name="Sesjon" content="Sesja">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="sesja.css">
  </head>
  <body>
  
  <?php
      session_start(); //wysyła unikalne id sesji startuje sesje
      // echo sesion_ig(); id sesji
      // wsysłamy zmienną sesyjną
      echo "Zaloguj się";
      ?>

  </body>
</html>
