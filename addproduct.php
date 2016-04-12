<?php
if (empty($_POST['nazwa'])) { 
        echo "<script>alert('Nie wypełniono prawidłowo formularza.'); "
    . " document.location.href='index.php';</script>"; 
} 
else 
{  
 require_once 'connect.php';

@$dbg = new mysqli($mysql_host, $mysql_user, $mysql_password, $dbg) or die();

@$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, 'secondstepdb');
$conn->set_charset('utf8');
}

if (!@$conn) {
    echo "<script>alert('Nie nawiązano połączenia z bazą danych !'); document.location.href='home.php';
    </script>";
}
else{

echo<<<END
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
  <link rel="stylesheet" href="secondstep.css" type="text/css" />
<link href='/SecondStep/Oswald-Regular.ttf' rel='stylesheet' type='text/css'>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="http://ciasteczka.eu/cookiesEU-latest.min.js"></script>
    </head>
    <body>
        <header>
            TYTUŁ STORNY
        </header>
      <div id='cssmenu'>

</div>
        <section>  
<section3><h1>REJESTRACJA PRODUKTU PRZEBIEGŁA POMYŚLNIE</h1>
 
  <br /> 
  <br />
  <br />
  <br /><br />
  <br />
    Produkt znalazł się w bazie danych. Można to sprawdzić w zakładce "Products"
  <br />
  <br />

   <br />
  <br />
  <br />
  <br />
   <br />
  <br />
  


</section3>
 </section> 
        
 


        
        
        
        
        
        <footer>Designed by testow68@gmail.com. Wszystkie prawa zastrzeżone.</footer>
    </body>
</html>


END;







@$sql = mysqli_query($conn,"INSERT INTO secondtabela (nazwa, cena, kod, dostepne, dzial)
VALUES ('$_POST[nazwa]', '$_POST[cena]', '$_POST[kod]', '$_POST[dostepne]', '$_POST[dzial]')") or die();




echo "<script>alert('Twoje dane znalazły się w bazie danych !'); 
    </script>";

 $conn->close();
 $result->free();
 exit();
} 
  



?>


