<?php

function startSession(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function initUtilisateurs(): void {
    startSession();
    if (!isset($_SESSION["utilisateurs"]) || empty($_SESSION["utilisateurs"])) {
        $_SESSION["utilisateurs"] = [
            [
                "id" => 1,
                "nom" => "Diop",
                "prenom" => "Kiki",
                "email" => "kiki@gmail.com",
                "password" => "kiki",
                "role" => ["GERANT","APPRENANT"],
                "dateInscription" => "2026-07-01",
                "estActif" => true,
                "estAJour" => true
            ],
            [
                "id" => 2,
                "nom" => "Ndiaye",
                "prenom" => "Adja",
                "email" => "adja@gmail.com",
                "password" => "adja",
                "role" => ["APPRENANT"],
                "dateInscription" => "2026-07-03",
                "estActif" => true,
                "estAJour" => false
            ],
            [
                "id" => 3,
                "nom" => "Sarr",
                "prenom" => "Fifi",
                "email" => "fifi@gmail.com",
                "password" => "fifi",
                "role" => ["APPRENANT"],
                "dateInscription" => "2026-07-04",
                "estActif" => true,
                "estAJour" => false
            ]
        ];
    }
}

function saveData(string $key, mixed $data): void {
    $_SESSION[$key] = $data;
}

function getData(string $key): mixed {
    return $_SESSION[$key] ?? null;
}

function destroySession(): void {
    startSession();
    session_unset();
    session_destroy();
}