<?php
require_once dirname(__DIR__)."/core/validator.php";
require_once dirname(__DIR__)."/models/user.model.php";

function dashboard (){
    $headerName = "Tableau de board";
    $currentPage = "Tableau de board";
    $role = "Apprenant";

    renderView("base.layout", "apprenant/dashboard");
}