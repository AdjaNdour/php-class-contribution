<?php
require_once dirname(__DIR__) . "/core/validator.php";
require_once dirname(__DIR__) . "/models/user.model.php";

function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = trim($_POST['email']) ?? "";
        $password = trim($_POST['password']) ?? "";
        $errors = [];
        $requiredEmail = required($email, "email", $errors);
        $requiredPassword = required($password, "password", $errors);
        isEmail($email, "email", $errors, $requiredEmail);

        validPassword($password, "password", $errors, $requiredPassword);
        if (count($errors) == 0) {
            $userConnect = getUserByEmail($email);
            if ($userConnect !== null) {
                saveData('userConnect', $userConnect);

                $role = in_array('Gerant', $userConnect['role']) ? 'gerant' : 'apprenant';

                header("location: /$role/dashboard");
                exit;
            }
            $errors['errorConnexion'] = 'Login ou mot de passe incorrect';
        }
    }
    require_once dirname(__DIR__) . "/views/authentification/login.html.php";
}

function logout()
{
    removeData("userConnect");
    header("location: /login");
    exit;
}

function inscription()
{
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $nom = trim($_POST["nom"] ?? "");
        $prenom = trim($_POST["prenom"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $password = trim($_POST["password"] ?? "");
        $confirmation = trim($_POST["confirmation"] ?? "");

        $requiredNom = required($nom, "nom", $errors);
        $requiredPrenom = required($prenom, "prenom", $errors);
        $requiredEmail = required($email, "email", $errors);
        $requiredPassword = required($password, "password", $errors);
        $requiredConfirmation = required($confirmation, "confirmation", $errors);

        isEmail($email, "email", $errors, $requiredEmail);
        validPassword($password, "password", $errors, $requiredPassword);

        if ($requiredPassword && $requiredConfirmation && $password !== $confirmation) {
            $errors["confirmation"] = "Les mots de passe ne correspondent pas.";
        }

        if (getUserByEmail($email) !== null) {
            $errors["email"] = "Cet email existe déjà.";
        }

        if (empty($errors)) {

            $newUser = [
                "nom" => $nom,
                "prenom" => $prenom,
                "email" => strtolower($email),
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

    require_once dirname(__DIR__) . "/views/authentification/inscription.html.php";
}