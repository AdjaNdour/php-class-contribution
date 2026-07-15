<?php

require_once(dirname(__DIR__) . "/models/user.model.php");
require_once(dirname(__DIR__) . "/core/session.php");
require_once(dirname(__DIR__) . "/core/validator.php");

function login() {
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = trim($_POST["email"] ?? '');
        $password = trim($_POST["password"] ?? '');

        required('email', $email, $errors);
        required('password', $password, $errors);

        if (empty($errors)) {
            $user = verifyLogin($email, $password);

            if ($user) {
                saveData("user", $user);
                $userRoles = $user["role"] ;
                if (in_array("GERANT", $userRoles)) {
                    header("Location: /gerant/dashboard");
                    exit;
                }
                if (in_array("APPRENANT", $userRoles)) {
                    header("Location: /apprenant/dashboard");
                    exit;
                }

            } else {
                $errors["login"] = "Email ou mot de passe incorrect.";
            }
        }
    }
    require_once(dirname(__DIR__) . "/views/authentification/login.html.php");
}

function logout() {
    destroySession();
    header("Location: /login");
    exit;
}

function inscription() {
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom = trim($_POST["nom"] ?? '');
        $prenom = trim($_POST["prenom"] ?? '');
        $email = trim($_POST["email"] ?? '');
        $password = trim($_POST["password"] ?? '');
        $confirmation = trim($_POST["confirmation"] ?? '');
        // $roles = $_POST["role"] ?? '';

        required('nom', $nom, $errors);
        required('prenom', $prenom, $errors);
        required('email', $email, $errors);
        required('password', $password, $errors);
        required('confirmation', $confirmation, $errors);

        // if (empty($roles)) {
        //     $errors["role"] = "Veuillez choisir un rôle.";
        // }

        if (empty($errors)) {
            isEmail('email', $email, $errors);
            isPassword('password', $password, $errors);
            isPassword('confirmation', $confirmation, $errors);
            same('password', $password, $confirmation, $errors);
        }

        if (empty($errors)) {
            $users = getUsers();
            unicite('email', $email, $users, $errors, "Cette adresse email est déjà utilisée.");
        }

        if (empty($errors)) {
            $newUser = [
                "nom" => $nom,
                "prenom" => $prenom,
                "email" => $email,
                "login" => $login,
                "password" => $password,
                "role" => ["APPRENANT"],
                "dateInscription" => date("Y-m-d"),
                "estActif" => true,
                "estAJour" => true
            ];
            
            saveUser($newUser);
            
            header("Location: /login");
            exit;
        }
    }

    require_once(dirname(__DIR__) . "/views/authentification/inscription.html.php");
}