<?php 
include_once("polaczenie.php");
if(isset($_POST['IMIE']) && isset($_POST['NAZWISKO']) && isset($_POST['EMAIL'])){
   $imie = $_POST['IMIE'];
   $nazwisko = $_POST['NAZWISKO'];
   $email = $_POST['EMAIL'];
   
   echo "$IMIE,$NAZWISKO,$EMAIL";
   $dodaj_do_bazy_danych = "INSERT INTO uczniowie(IMIE,NAZWISKO,EMAIL) values('$imie','$nazwisko','$email');";
   if($polaczenie->exec($dodaj_do_bazy_danych)){
      echo ("Dodano do bazy danych");
      header("Refresh:3; url=index.php");
   }else{
      echo ("Masz blad");
      header("Refresh:3; url=index.php");
   }
}else {
   echo "Co szukasz chopie....";
   header("Refresh:3; url=index.php");
}