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
       session_start();
      // KASUJEMY WARTOSC ZMIENNEJ $_SESSION['zalogowany'];
      unset($_SESSION['zalogowany']);
            //zakończenie sesji
       session_destroy();
      echo"wylogowany";
      ?>

  </body>

</html>