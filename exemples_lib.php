<?php
require __DIR__.'/lib-user-input.php';
$answer = user_input_get_answer('Comment vous appelez-vous ?');
$choices = ['foo', 'bar', 'baz'];
$default_value = 'foo';
$choice = user_input_get_choice('Quelle option ?', $choices, $default);
$answers = ['o', 'n'];
$default_value = 'n';
$confirmation = 'o';
user_input_get_confirmation('Êtes-vous ok ?', $answers, $default_value, $confirmation);