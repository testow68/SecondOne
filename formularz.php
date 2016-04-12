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
        
<section3><h1>WPROWAĆ DANE PRODUKTU</h1>
<form action="addproduct.php" method="post">
	<br /><br /><br /><br />
	Nazwa produktu:
        <input required type="text" name="nazwa" placeholder="wpisz nazwę produktu"/>
	<br /><br />
	Cena:
        <input required type="number" min="1" max="10000" placeholder="1-10 000" name="cena" />
	<br /><br />
        Kod produktu:
        <input required type="number" name="kod" placeholder="wpisz 6 cyfrowy kod produktu" min="000000" max="999999"/>
	<br /><br />
        Liczba dostępnych produktów:
        <input required type="number" name="dostepne" min="0" max="10000" placeholder="wpisz liczbę dostępnych produktów"/>
	<br /><br />
        Dział:
        <input required type="number" name="dzial" min="1" max="5" placeholder="wpisz dział od 1 do 5"/>
	<br /><br />
	<br />
	<input type="submit" value="Dodaj produkt do bazy" />
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</form>
</section3>
        <a href="index.php" class="back">POWRÓT</a>
        <div id="footer">Designed by testow68@gmail.com. Wszystkie prawa zastrzeżone.</div>
    </body>
</html>


