<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>Licznik wizyt ciasteczka PHP</title>

     <meta name="description" content="Test Ciasteczko">
     <meta name="keywords" content="ciasteczko">
     <meta name="Ciastek" content="Ciasteczkowy Potwór">

     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="arkusz.css">
     

  </head>
  <body>
  
  <?php
      //ABY DZIAŁAŁA SESJA MUSIMY JA WYSTARTOWAĆ
      session_start();
     if(isset($_SESSION['zalogowany'])){
          echo"Zalogowany";
      }else{
          echo"Nie zalogowany";
      }
   
      
      ?>

  </body>

</html>