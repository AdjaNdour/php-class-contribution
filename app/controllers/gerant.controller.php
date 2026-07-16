<?php

require_once dirname(__DIR__) . "/core/validator.php";
require_once dirname(__DIR__) . "/models/user.model.php";

function dashboard()
{
    $headerName = "Tableau de board";
    $currentPage = "Tableau de board";
    $role = "Gerant";
    $apprenantsRetard = getAllAprenantsRetard();
    renderView("base.layout", "gerant/dashboard", [
        "apprenantsRetard" => $apprenantsRetard
    ]);

}

function apprenantActif()
{
    $headerName = "Liste des apprenants actifs";
    $currentPage = "Apprenants actifs";
    $role = "Gerant";

    $apprenantsActif = getAllAprenantsActif();

    renderView("base.layout", "gerant/listeApprenantsActif", [
        "apprenantsActif" => $apprenantsActif
    ]);
}

function marquerAbandon()
{

    startSession();
    $users = getData("utilisateurs");

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
        $idApprenant = (int) $_POST["id"];
        foreach ($users as &$user) {
            if ($user["id"] == $idApprenant) {
                $user["isActif"] = false;
                break;
            }
        }
        unset($user);
        saveData("utilisateurs", $users);
    }

    $apprenants = [];
    foreach ($users as $user) {
        if ($user["isActif"] && in_array("Apprenant", $user["role"])) {
            $apprenants[] = $user;
        }
    }

    $nbrApprenant = count($apprenants);
    $nbrApprenantRetard = 0;
    foreach ($apprenants as $a) {
        if (!$a["estAJour"]) {
            $nbrApprenantRetard++;
        }
    }

    require_once(dirname(__DIR__) . "/views/gerant/listeApprenantsActif.html.php");
}
