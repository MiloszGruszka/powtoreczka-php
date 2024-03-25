<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
<div class="formularz">
      <fieldest>
         <legend>Dodaj do bazy danych</legend>
         <form action="dodaj_do_bazy_danych.php" method="post">
            <input type="text" name="IMIE" placeholder="Podaj imie" required />
            <input type="text" name="NAZWISKO" placeholder="Podaj nazwisko" required />
            <input type="text" name="EMAIL" placeholder="Podaj email" required />
            <input type="submit" name="submit" value="Dodaj" />
</form>
</fieldest>
</div>
   <?php include_once("polaczenie.php") ?>
   <br />
   <hr />
   <div class="box">
    <?php 
    $zapytanie = "SELECT IMIE,NAZWISKO,EMAIL FROM uczniowie";
    echo "<table border=1>";
    echo "<tr class='table_head'><td>IMIE</td><td>NAZWISKO</td><td>EMAIL</td></tr>";
    foreach($polaczenie->query($zapytanie) as $wiersz){
      echo "<tr><td>".$wiersz['IMIE']."</td><td>".$wiersz['NAZWISKO']."</td><td>".$wiersz['EMAIL']."</td></tr>";
    }
    echo"</table>";
    ?>
   </div>
   <?php $polaczenie=null ?>
</body>
</html>

