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
   <h1>Licznik twoich odwiedzin na stronie po odświeżeniu</h1>
  <?php
      
     // setcookie("kurs12","test",time()+3600);
      
      // jak jestem pierwszy raz na stronie - kom. strona uzywa ciasteczek
      //w przypadku wyp. witaj ponownie
      //po odświeżeniu liczy wizyty na stronie
      if(isset($_COOKIE['kurs12'])){
          echo "<h2>Witaj ponownie</h2>";
         
          $ile=$_COOKIE['kurs12'];
          echo" Twoja wizyta nr : $ile";
          $ile++;
          setcookie("kurs12",$ile,time()+3600);
          
      }
      else{
          setcookie("kurs12",1,time()+3600);
          echo"<h1> Jesteś pierszy raz na stronie</h1>";
      }
      
      ?>

  </body>

</html>