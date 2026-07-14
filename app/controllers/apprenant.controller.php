<?php

require_once(dirname(__DIR__) . "/core/session.php");

function dashboard() {
    startSession();
    $user = getData("user");
    
    if (!$user) {
        header("Location: /login");
        exit;
    }
    $userRoles = is_array($user["role"]) ? $user["role"] : [$user["role"]];
    if (!in_array("APPRENANT", $userRoles)) {
        header("Location: /login");
        exit;
    }
    
    require_once(dirname(__DIR__) . "/views/apprenant/dashboard.html.php");
}
