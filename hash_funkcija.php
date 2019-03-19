<?php

/*$tekst="Koriscenje HASH funkcija u PHP jeziku.";
echo crypt('$tekst','8ibzrey');
echo "<br>";
echo md5("$tekst",TRUE);
//echo "<br>";
//echo CRYPT_SALT_LENGTH;
echo "<br>";
echo hash("md5","$tekst");
echo "<br>";
echo crypt('test','$2$bilosta');
echo "<br>";
echo CRYPT_SALT_LENGTH;
echo "<br>";
$a= hash_algos();
echo  $a[20];*/
echo "<hr>";
?>
<form action="#" method="post">
Unesite tekst koji zelite da sifrujete: <input type="text" name="tekst" placeholder="tekst za enkripciju">
<input type="submit" name="sifruj" value="Sifruj text">
</form>
<?php
if(isset($_POST['sifruj']))
{
$tekst = $_POST['tekst'];
$sifra = md5($tekst);
echo "<br/>Tekst koji ste upisali:<br/>" . $tekst;
echo "<br/>Kriptovan tekst je:<br/>" . $sifra;
}
echo "<hr>";
//Kriptuje
$x = base64_encode("pozdrav");
echo $x;
echo "<br>";
//Dekriptuje
echo base64_decode($x);




?>