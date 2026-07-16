<?php
define("KEY_USER", "utilisateurs");

function startSession(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function saveData(string $key, mixed $data): void
{
    $_SESSION[$key] = $data;
}


function getData(string $key): mixed
{
    return $_SESSION[$key] ?? '';
}

function removeData(string $key)
{
    unset($_SESSION[$key]);
}

// function isApprenant():bool{
//   return isConnect() && in_array("Apprenant", $_SESSION["userConnect"]["role"]);
// }
// function isCoach():bool{
//   return isConnect() && in_array("Coach", $_SESSION["userConnect"]["role"]);
// }
// function isGerant():bool{
//   return isConnect() && in_array("Gerant", $_SESSION["userConnect"]["role"]);
// }

function isConnect(): bool
{
    return isset($_SESSION["userConnect"]);
}
function isGranted(string $role): bool
{
    return isConnect() && in_array($role, $_SESSION["userConnect"]["role"]);
}

function initData(): void
{
  $_SESSION[KEY_USER] = [
    0 => [
      'id' => 1,
      'nom' => 'ndour',
      'prenom' => 'kiki',
      'email' => 'kiki@gmail.com',
      'motDePasse' => 'kiki',
      'role' => ['Gerant','Apprenant'],
      'dateInscription' => '2026-02-23',
      'isActif' => true,
      'estAJour' => true,
    ],
    1 => [
      'id' => 2,
      'nom' => 'cisse',
      'prenom' => 'kya',
      'email' => 'kya@gmail.com',
      'motDePasse' => 'kiki',
      'role' => ['Apprenant'],
      'dateInscription' => '2026-02-23',
      'isActif' => true,
      'estAJour' => false,
    ],
    2 => [
      'id' => 3,
      'nom' => 'athie',
      'prenom' => 'aly',
      'email' => 'aly@gmail.com',
      'motDePasse' => 'kiki',
      'role' => ['Apprenant'],
      'dateInscription' => '2026-02-23',
      'isActif' => false,
      'estAJour' => null,
    ],
    3 => [
      'id' => 4,
      'nom' => 'dieye',
      'prenom' => 'mamadou',
      'email' => 'dieye@gmail.com',
      'motDePasse' => 'kiki',
      'role' => ['Apprenant'],
      'dateInscription' => '2026-02-23',
      'isActif' => true,
      'estAJour' => true,
    ]

  ];
}
