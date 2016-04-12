<?php
$conn = mysqli_connect('localhost', 'root', 'piwo102', 'secondstepdb', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
mysqli_query($conn,"INSERT INTO secondtabela (nazwa, cena, kod, dostepne, dzial)
VALUES ('$_POST[nazwa]', '$_POST[cena]', '$_POST[kod]', '$_POST[dostepne]', '$_POST[dzial]')") or die();
echo "<script>alert('Twoje dane znalazły się w bazie danych !'); 
    </script>";
mysqli_close($conn);
