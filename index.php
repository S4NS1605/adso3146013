<?php

require "controller.php";
$controller = new controller;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $controller->guardar();
} else {
    $controller->index();
}