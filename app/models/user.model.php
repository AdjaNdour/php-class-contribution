<?php

require_once(dirname(__DIR__) . "/core/session.php");

function verifyLogin(string $email, string $password): ?array {
    
    $users = $_SESSION["utilisateurs"] ?? [];
    foreach ($users as $user) {
        $userEmail = $user["email"] ?? '';
        $userPassword = $user["motDePasse"] ?? $user["password"] ?? '';
        
        if (strtolower($userEmail) === strtolower($email) && $userPassword === $password) {
            if (is_array($user["role"])) {
                $user["role"] = $user["role"][0];
            }
            return $user;
        }
    }
    return null;
}

function saveUser(array $newUser): array {
    
    $users = $_SESSION["utilisateurs"] ?? [];
    $newId = count($users) > 0 ? max(array_column($users, 'id')) + 1 : 1;
    $newUser["id"] = $newId;
    $users[] = $newUser;
    $_SESSION["utilisateurs"] = $users;
    
    return $newUser;
}

function getUsers(): array {
    return $_SESSION["utilisateurs"] ?? [];
}