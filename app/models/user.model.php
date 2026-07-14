<?php

require_once(dirname(__DIR__) . "/core/session.php");

function verifyLogin(string $email, string $password): ?array {
    $users = getData("utilisateurs") ?? [];
    foreach ($users as $user) {
        $userEmail = $user["email"] ?? '';
        $userPassword = $user["password"] ?? '';
        if (strtolower($userEmail) === strtolower($email) && $userPassword === $password) {
            return $user;
        }
    }
    return null;
}

function saveUser(array $newUser): array {
    
    $users = getData("utilisateurs");
    $newId = count($users) > 0 ? max(array_column($users, 'id')) + 1 : 1;
    $newUser["id"] = $newId;
    $users[] = $newUser;
    saveData("utilisateurs",$users);
    return $newUser;
}

function getUsers(): array {
    return getData("utilisateurs") ?? [];
}