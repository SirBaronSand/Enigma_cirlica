<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enigma</title>
</head>
<body>
    
<?php

error_reporting(0);
$prijevod = $_GET["text"];

?>

<form>

    <input type="text" name="text" placeholder="Unesite tekst na čirilici">
        <br>
    <button type="submit" name="prevedi" value="prevedi" > Prevedi </button>

</form>

<p>  Prijevod:  </p>

<?php

echo strtr($prijevod, array(
    "Б" => "B", "В" => "V", "Г" => "G", "Д" => "D", "Ђ" => "Đ", "Ж" => "Ž",
     "З" => "Z", "И" => "I", "Л" => "L", "Љ" => "Lj", "H" => "N", "Њ" => "Nj",
       "P" => "R", "П" => "P", "С" => "S", "Ћ" => "Ć", "У" => "U", "Ф" => "F",
    "X" => "H", "Ц" => "C", "Ч" => "Č", "Џ" => "Dž", "Ш" => "Š",

    "б" => "b", "в" => "v", "г" => "g", "д" => "d", "ђ" => "đ", "ж" => "ž",
    "з" => "z", "и" => "i", "л" => "l", "љ" => "lj", "н" => "n", "њ" => "nj",
      "р" => "r", "п" => "p", "с" => "s", "ћ" => "ć", "у" => "u", "ф" => "f",
   "x" => "h", "ц" => "c", "ч" => "č", "џ" => "dž", "ш" => "š", "м" => "m", "т" => "t"));

?>

</body>
</html>