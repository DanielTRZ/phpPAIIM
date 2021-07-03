<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>Licznik wizyt ciasteczka PHP</title>
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="" content="">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="sesja.css">
  </head>
  <body>
      
  <?php
      
       session_start();
      if(isset($_SESSION['zalogowany'])){
          echo"Zalogowany";
      }else{
          echo"ZALOGOWANY";
      }
   
      ?>

  </body>
</html>
