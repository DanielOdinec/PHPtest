<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>

<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box ".$i."</label><br>";
        $i++;

    }
?>
<h2>2. Tekstkasti tsükliga</h2>
<?php
$i=1;
while($i<=20){
    echo "<input type='text' id='$i' name='cell[]' value='$i'>";
    echo "<label for='$i'>box ".$i."</label><br>";
    $i++;

}
?>

<h2>2. 20 Radionupud tsükliga</h2>
<?php
$l=1;
while($l<=20){
    echo "<input type='radio' id='r.$l' name='radio[]' value='$l'>";
    echo "<label for='r.$l'>radio ".$l."</label><br>";
    $l++;

}
?>
</body>
</html>
