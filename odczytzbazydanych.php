<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>PHP odczyt z bazy danych</title>
     <meta name="description" content="Odczyt z Bazy Danych">
     <meta name="keywords" content="Odczyt z Bazy Danych">
     <meta name="PAIIM" content="Programowanie Aplikacji Internetowyc i Mobilnych">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="index.css">
  </head>
  
  <body>
  <h1>Odczyt z Bazy Danych</h1>
  
  <?php
      $host="localhost";
      $nazwabazy="bazakurs";
      $user="root";
      $pass="";
      $kodowanie="utf8";
      $polacz="mysql:host=$host; dbname=$nazwabazy; charset=$kodowanie";
      
      try {
          $p=new PDO($polacz,$user,$pass);
      }
      catch(PDOException $e){
          $e->getMessage();
      }
      
      $zapytanie="SELECT * FROM dania";
      $dane=$p->query($zapytanie);
          
      while($rekord=$dane->fetch()){
         
       
          echo"<p>$rekord[nazwa] - cena: $rekord[3]  zł. </p>";     
      }
      ?>
    
  </body>
</html>
