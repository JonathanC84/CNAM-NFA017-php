<?php

/*
Vérifiez que tous les champs ont bien été remplis :
    
- les champs doivent être non vides (sauf le champ commentaire)
- le champ alias doit faire minimum 3 caractères et 16 maximum
- le champ email doit être valide
- le champ mot de passe doit :
    - faire minimum 8 caractères et 255 maximum
    - contenir au moins une lettre minuscule
    - contenir au moins une lettre majuscule
    - contenir au moins un chiffre
    - contenir au moins caractère qui n'est ni une lettre ni un chiffre
- le champ commentaires doit :
    - faire 1000 caractères maximum
    - ne pas contenir de caractères interdits en HTML, c-à-d pas de < > & et "

S'il y a des erreurs, affichez un message d'erreur dans la div au dessus du champ correspondant.

Astuces :

- la fonction strlen() permet de connaître la longueur d'une chaîne de caractères
- la fonction str_contains() permet de vérifie la présence d'une chaîne de caractères dans une autre chaîne de caractères
- l'appel de fonction preg_match("/[a-z]/i", $text) permet de vérifier la présence de lettres minuscules
- l'appel de fonction preg_match("/[A-Z]/i", $text) permet de vérifier la présence de lettres majuscules
- l'appel de fonction preg_match("/[0-9]/i", $text) permet de vérifier la présence de chiffres
- l'appel de fonction preg_match("/[^a-zA-Z0-9]/i", $text) permet de vérifier la présence de caractère qui ne sont ni une lettre ni un chiffre
- l'appel de fonction filter_var($email, FILTER_VALIDATE_EMAIL) permet de valider un email

Pour le moment le message de confirmation s'affiche en permanence.
Vous devez le masquer s'il n'est pas pertinent :

- s'il y a des erreurs, il doit être masqué
- si l'utilisateur n'a envoyé aucune donné, il doit être masqué
*/

require __DIR__.'/vendor/autoload.php';

dump($_POST);

$errors = [];

// on test s'il y a des données utilisateur déjà entrées
if ($_POST) {

    // on teste la validité de l'alias
    if (empty($_POST['alias'])) {
        // le champ alias est vide
        $errors['alias'] = 'Vous devez renseigner ce champ';
    } elseif (strlen($_POST['alias'])<3 || strlen($_POST['alias'])>16) {
        // le champ alias doit faire minimum 3 caractères et 16 maximum
        $errors['alias'] = 'Votre alias doit avoir une longueur comprise entre 3 et 16 caractères';
    }

    // on teste la validité de l'adresse mail
    if (empty($_POST['email'])) {
        // le champ email est vide
        $errors['email'] = 'Vous devez renseigner ce champ';
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Adresse non valide';
    }

    // on teste la validité du mot de passe
    if (empty($_POST['password'])) {
        // le champ password est vide
        $errors['password'] = 'Vous devez renseigner ce champ';
    } elseif (strlen($_POST['password'])<8) {
        // le champ mot de passe doit faire minimum 8 caractères et 255 maximum
        $errors['password'] = 'Votre mot de passe doit faire 8 caractères minimum';
    } elseif (strlen($_POST['password'])>255) {
        $errors['password'] = 'Votre mot de passe ne doit pas excéder 255 caractères';
    } elseif (!preg_match("/[a-z]/i", $_POST['password'])) {
        // doit contenir au moins une minuscule
        $errors['password'] = 'Votre mot de passe doit contenir au moins 1 lettre minuscule';
    } elseif (!preg_match("/[A-Z]/i", $_POST['password'])) {
        // doit contenir au moins une majuscule
        $errors['password'] = 'Votre mot de passe doit contenir au moins 1 lettre majuscule';
    } elseif (!preg_match("/[0-9]/i", $_POST['password'])) {
        // doit contenir au moins un chiffre
        $errors['password'] = 'Votre mot de passe doit contenir au moins 1 chiffre';
    } elseif (!preg_match("/[^a-zA-Z0-9]/i", $_POST['password'])) {
        // doit contenir un caractère spécial
        $errors['password'] = 'Votre mot de passe doit contenir au moins 1 caractère spécial';
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
            <div class="error">
                <?php if (isset($errors['comment'])): ?>
                    <?= $errors['comment'] ?>
                <?php endif ?>
            </div>
            <textarea name="comment" cols="30" rows="10" value="<?= htmlentities($_POST['comment'] ?? '') ?>" placeholder="vos commentaires"></textarea>
        </div>
        <div>
            <button type="submit">Valider</button>
        </div>
    </form>
</body>
</html>