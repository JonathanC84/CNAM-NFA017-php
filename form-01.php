<?php

require __DIR__.'/vendor/autoload.php';

dump($_POST);

if ($_POST) {
    if (empty($_POST['email'])) {
        echo "vous devez remplir le champ mail<br>\n";
    } else {
        $email = $_POST['email'];
    }
}
