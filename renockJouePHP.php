<h1>Renock joue avec le PHP</h1>
<?php
$prenom1 = 'Jérôme';
$nom1 = 'Thunus';
$date1 = 1986;
$prenom2 = 'Renaud';
$nom2 = 'Brigode';
$date2 = 1987;
?>

<?php
echo $prenom1.' '.$nom1.'<br/>';
echo "$prenom2 $nom2 <br/>";
echo "Total des années de naissances:<br/>";
echo "$date1 + $date2 = ".($date1 + $date2);
?>