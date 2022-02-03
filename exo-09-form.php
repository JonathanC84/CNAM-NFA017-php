<?php

/*
Vérifiez que tous les champs ont bien été remplis.
S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.

Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquez s'il n'est pas pertinent :

- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

require __DIR__.'/vendor/autoload.php';

dump($_POST);

$errors = [];

if ($_POST) {
    if (empty($_POST['alias'])) {
        // le champ alias est vide
        $errors['alias'] = 'Vous devez renseigner ce champ';
    }
    if (empty($_POST['email'])) {
        // le champ email est vide
        $errors['email'] = 'Vous devez renseigner ce champ';
    }
    if (empty($_POST['password'])) {
        // le champ password est vide
        $errors['password'] = 'Vous devez renseigner ce champ';
    }
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Nouvel utilisateur</h1>

    <div class="confirmation">
        <?php if ($_POST && !$errors):?>
            <p>Votre compte a bien été enregistré.</p>
        <?php endif ?>
    </div>

    <form action="" method="post">
        <div>
            <div class="error">
                <?php if (isset($errors['alias'])): ?>
                    <?= $errors['alias'] ?>
                <?php endif ?>
            </div>
            <input type="text" name="alias" value="<?= htmlentities($_POST['alias'] ?? '') ?>" placeholder="votre nom d'utilisateur">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['email'])): ?>
                    <?= $errors['email'] ?>
                <?php endif ?>
            </div>
            <input type="email" name="email" value="<?= htmlentities($_POST['email'] ?? '') ?>" placeholder="votre mail">
        </div>
        <div>
            <div class="error">
                <?php if (isset($errors['password'])): ?>
                    <?= $errors['password'] ?>
                <?php endif ?>
            </div>
            <input type="password" name="password" value="<?= htmlentities($_POST['password'] ?? '') ?>" placeholder="votre mot de passe">
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>