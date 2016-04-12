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
<ul>
   <li><a href='home.php'>Home</a></li>
    <li><a href='products.php'>Structure</a></li>
   <li><a href='mapa.php'>Company</a></li>
   <li><a href='loaddb.php'>Products</a></li>
   <li><a href='adres.php'>Contact</a></li>
   <lu><a href='formularz.php'>Add products</a></lu>
</ul>
</div>
        <section>  
            <?php
            include_once 'home.php';
            ?>
        </section> 
        
 

<script type="text/javascript">
  $("li a").click(function(){
    $("section").load(this.href);
    return false;
  })
</script>
        
        
            
<div id="footer">Designed by testow68@gmail.com. Wszystkie prawa zastrzeżone.</div>
    </body>

</html>
