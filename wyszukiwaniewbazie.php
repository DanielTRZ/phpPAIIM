<!DOCTYPE html>
<html lang="pl">

  <head>
     <meta charset="utf-8">
     <title>Wyszukiwanie w bazie</title>
     <meta name="description" content="Wyszukiwanie">
     <meta name="keywords" content="wYSZUKIWANIE W BAZIE">
     <meta name="author" content="PAIIM">
     <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
     <link rel="stylesheet" href="index.css">
  </head>
  <body>
  <h1>Wyszukiwanie w bazie</h1>
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
      
      if(isset($_GET['nazwa'])){
        $danie=$_GET['nazwa'];
   
      $zapytanie="SELECT * FROM dania WHERE dania.nazwa LIKE '%$danie%'";
      $dane=$p->query($zapytanie);
          
      while($produkt=$dane->fetch()){
          
        echo " <p>$produkt[nazwa] - cena: $produkt[cena] zł. </p>";
          }
      }
      else{
          echo "Proszę wpisać nazwę dania";
      }
  ?>
  <form action="wyszukiwaniewbazie.php" method="get">
      <input type="text" name="nazwa" id="">
      <input type="submit" value="wyszukaj">
  </form>

  </body>
</html>
