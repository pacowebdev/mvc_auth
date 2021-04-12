<?php

    // ROUTER

    parse_str($_SERVER["QUERY_STRING"], $qs);    // récupère les "query string" et les range en tableau
    $keys = array_keys($qs);                            // extrait le nom des clés du tableau
    $route = array_shift($keys);                 // extrait le nom de la première clé

    switch ($route) {

        case "admin":
            include("controllers/ctrl.admin.php");
            break;

        case "signin":
            include("controllers/ctrl.signin.php");
            break;

        case "login":
            include("controllers/ctrl.login.php");
            break;

        default:
            include("controllers/ctrl.home.php");
            break;
    }

