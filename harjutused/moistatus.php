<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> ... mõistatus</h1>



<?php

echo "<h1>Tere hommikust!</h1>";
$tekst = "Täna on esimene PHP tund";
echo $tekst;
echo "<br>";
echo "<h2>Matemaatika tehed. Mõistatus.</h2>";
echo "<h3>Arva ära kaks arvu!</h3>";
$arv1 = 3;
$arv2 = 6;
//kahe arvude liitmine +
echo "Kui liidame kokku, vastus on " . ($arv1 + $arv2);
echo "<br>";
//jagamine
echo "Kui esimene arv jagame teise arvuga, siis vastuseks on " . ($arv1 / $arv2);
echo "<br>";
//esimene arv ruudus
echo "Esimene arv ruudus on ".pow($arv1, 2);
echo "<br>";
// lahutamine
echo "Kui lahutame kaks arvu omavahel,siis vastus on " . ($arv1 - $arv2);
echo "<br>";
//korrutis
echo "Kui esimene arv korrutame teise arvuga, siis vastuseks on " . ($arv1 * $arv2);
echo "<br>";

echo "<a href='vastus.php'>Õiged vastused</a>";

echo "<br>";
echo "<h2> Arva ära EESTI LINNANIMI</h2>";
echo "<br>";
$nimi="Tartu";
//teksti pikkus
echo "<br>Linnanimi pikkus: ".strlen($nimi);

//esimene täht
echo "<br>Linnanimi 1.täht: ".substr($nimi, 0, 1);

//

echo '<br>Linnanimi tähed on erinevas järjekorras: '.str_shuffle($nimi);

echo '<br>Linnanimi on tagurpidi: '.strrev($nimi);




?>

</body>
</html>