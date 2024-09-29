<?php 

require_once __DIR__ . "/Config/Database.php";
require_once __DIR__ . "/Entity/Todolist.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodolistRepository.php";
require_once __DIR__ . "/Service/TodolistService.php";
require_once __DIR__ . "/View/TodolistView.php";

use PSpell\Config;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "APLIKASI TODOLIST v2" . PHP_EOL;

// membuat parameter koneksi
$connection = \Config\Database::getConnection();

$todolistRepository = new TodolistRepositoryImpl($connection);
$todolistService = new TodolistServiceImpl($todolistRepository);
$todolistView = new TodolistView($todolistService);

$todolistView->showTodolist();


?>