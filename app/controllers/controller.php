<?php

function renderView(string $pathLayout, string $pathView, array $data = []): void{
    ob_start();
    $viewData = $data;
    require_once dirname(__DIR__)."/views/$pathView.html.php";
    $contentForView = ob_get_clean();
    require_once dirname(__DIR__)."/views/layout/$pathLayout.html.php";
}