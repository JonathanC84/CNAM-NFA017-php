<?php

$text1 = 'foo';

//concaténation

$text2 = $text1.' bar';

//utilisation des "" pour inclure /n (qui saute une ligne dans le code source html).
echo $text1."<br>\n";
echo $text2."<br>\n";

//interpolation (obligatoirement avec "")
$temperature = 10.5;
$report = "La température actuelle est de $temperature °C";

echo $report."<br>\n";

//variante avec {} si l'on doit coller du texte à la variable
$report = "La température actuelle est de {$temperature}°C";

echo $report."<br>\n";

//remplacement du point par une virgule (fonction ajoutée à echo)
echo str_replace('.',',', $report."<br>\n");