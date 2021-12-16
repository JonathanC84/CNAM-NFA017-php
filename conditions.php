<?php


declare (strict_types = 1);
require __DIR__.'/vendor/autoload.php';

//création d'une variable aléatoire comprise entre 0 et 1, puis transformée en booléen.

$isWaterOff = (bool) random_int (0,1);

$isGasOff = (bool) random_int (0,1);

dump($isWaterOff);
dump($isGasOff);

if ($isWaterOff&&$isGasOff) {
    echo 'Vous pouvez partir en vacances l\'esprit tranquille.<br>';
}
else if (!$isGasOff&&$isWaterOff) {
    echo 'Vous avez oublié de couper le gaz !<br>';
}
else if (!$isWaterOff&&$isGasOff) {
    echo 'Vous avez oublié de couper l\'eau !<br>';
}
else {
    echo 'Vous n\'avez rien coupé du tout, espèce d\'inconscient !<br>';
}
