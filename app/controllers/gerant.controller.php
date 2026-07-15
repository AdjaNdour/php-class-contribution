<?php

require_once(dirname(__DIR__) . "/core/session.php");

function dashboard() {
    startSession();
    $user = getData("user");
    
    if (!$user) {
        header("Location: /login");
        exit;
    }
    $userRoles = $user["role"];
    if (!in_array("GERANT", $userRoles)) {
        header("Location: /login");
        exit;
    }
    require_once(dirname(__DIR__) . "/views/gerant/dashboard.html.php");
}

function marquerAbandon(){

    startSession();
    $users = getData("utilisateurs");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
        $idApprenant = (int) $_POST["id"];
        foreach ($users as &$user) {
            if ($user["id"] == $idApprenant) {
                $user["estActif"] = false;
                break;
            }
        }
        unset($user);
        saveData("utilisateurs", $users);
    }

    $apprenants = [];
    foreach ($users as $user) {
        if($user["estActif"] && in_array("APPRENANT",$user["role"])){
            $apprenants[]= $user;
        }
    }

    $nbrApprenant = count($apprenants);
    $nbrApprenantRetard=0;
    foreach ($apprenants as $a) {
        if (!$a["estAJour"]) {
            $nbrApprenantRetard ++;
        }
    }

    require_once(dirname(__DIR__) . "/views/gerant/apprenants.html.php");

}