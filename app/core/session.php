<?php

function startSession(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
}

function initUtilisateurs(): void {
    startSession();
    if (!isset($_SESSION["utilisateurs"])) {
        $_SESSION["utilisateurs"] = [
            [
                "id" => 1,
                "nom" => "Diop",
                "prenom" => "Kiki",
                "email" => "kikidiop@gmail.com",
                "motDePasse" => "kiki",
                "role" => ["APPRENANT", "GERANT"],
                "dateInscription" => "2026-07-01",
                "estActif" => true,
                "estAJour" => true
            ],
            [
                "id" => 2,
                "nom" => "Ndiaye",
                "prenom" => "Adja",
                "email" => "adjandiaye@gmail.com",
                "motDePasse" => "adja",
                "role" => ["APPRENANT"],
                "dateInscription" => "2026-07-03",
                "estActif" => true,
                "estAJour" => false
            ],
            [
                "id" => 3,
                "nom" => "Sarr",
                "prenom" => "Fifi",
                "email" => "fifisarr@gmail.com",
                "motDePasse" => "fifi",
                "role" => ["APPRENANT"],
                "dateInscription" => "2026-07-04",
                "estActif" => false,
                "estAJour" => false
            ]

        ];
    }
}

function save(string $key, mixed $data): void {
    $_SESSION[$key] = $data;
}

function getData(string $key): mixed {
    return $_SESSION[$key] ?? null;
}

function destroySession(): void {
    session_destroy();
}