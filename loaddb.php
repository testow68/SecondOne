<section2>
    <article>
        <br>
<?php
echo '<table border="3" cellpadding="10" cellspacing="0">';
    echo '<tr>';
        echo '<th>Nazwa produktu</th>';
        echo '<th>Cena za sztukę</th>';
        echo '<th>Kod serii</th>';
        echo '<th>Dostępnych</th>';
        echo '<th>Dział</th>';
        echo '</tr>';
        require_once 'connect.php';
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, 'secondstepdb');
    $result = mysqli_query($conn, 'SELECT nazwa, cena, kod, dostepne, dzial FROM secondtabela');
    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr>';
        echo '<td>' . $row['nazwa'] . '</td>';
        echo '<td>' . $row['cena'] . '</td>';
        echo '<td>' . $row['kod'] . '</td>';
        echo '<td>' . $row['dostepne'] . '</td>';
        echo '<td>' . $row['dzial'] . '</td>';
        echo '</tr>';
    }
    mysqli_free_result($result);
    echo '</table>';
 ?>
    </article>
</section2>