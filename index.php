<?php
// Simple MVC routing for single page application
require_once 'controllers/HomeController.php';

$controller = new HomeController();
$controller->index();
?>