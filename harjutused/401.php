<?php
// andmed massiivis
$data=[
    "nimi"=>"Daniel Odinec",
    "aadress"=>"Sõpruse pst 184, Tallinn",
    "pilt"=> "img.png",
    "koduleht"=>"https://odinec20.thkit.ee/"

];
?>
<h1>Ülesanne 401/var 1</h1>
<p><b>
        <?=$data["nimi"]?>
    </b></p>
<p><i>

        <?=$data["aadress"]?>
    </i></p>
<img src="<?=$data["pilt"]?>" alt="pildike" width="300">
<a href="<?=$data["koduleht"]?>" target="_blank">Daniel koduleht</a>
<h1>Ülesanne 401/var 2 - array()</h1>
<?php
//massiiv array funktsiooniga

$array=array("Daniel Odinec","Tallinn"," Sõpruse pst 184","img.png","odinec20.thkit.ee");
echo "<b>Nimi:".$array[0]."</b><br>";
echo "<i>Aadress:".$array[1]."</i><br>";
echo "<img src='$array[2]' alt='pildike'>";
echo "<br><a href='https://$array[3]'>Koduleht</a>"
?>
<a href="tekst.php"> tagasi...Ülesannete leht</a>
