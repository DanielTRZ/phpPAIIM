<!DOCTYPE html>
<html lang="pl">

  <head>

     <meta charset="utf-8">
     <title>Moja witryna</title>

     <meta name="description" content="Wyszukiwanie">
     <meta name="keywords" content="słowa, kluczowe, opisujące, zawartość">
     <meta name="author" content="Jan Programista">

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
          
        echo " <p>$produkt[nazwa] - cena: $produkt[cena] zł </p>";
          }
       }
      else{
          echo "Proszę wpisać nazwe dania";
      }
  
      
  
  ?>
  <form action="wyszukiwaniewbazie.php" method="get">
      <input type="text" name="nazwa" id="">
      <input type="submit" value="wyszukaj">
  </form>

  </body>

</html>