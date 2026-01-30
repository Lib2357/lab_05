<?php
require_once 'vendor/autoload.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        (new HomeController())->index();
        break;
    case 'product':
        (new ProductController())->list();
        break;
    default:
        echo "404 - Not Found";
}