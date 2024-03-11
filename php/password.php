<?php

$password = "secret123";
// Hacher le mot de passe
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
echo $passwordHash;
echo PHP_EOL;
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
echo $passwordHash;
echo PHP_EOL;
$passwordHash = password_hash($password, PASSWORD_ARGON2I);
echo $passwordHash;
echo PHP_EOL;

if (password_verify($password, $passwordHash)) {
    echo "Le mot de passe est valide";
} else {
    echo "Le mot de passe est invalide";
}