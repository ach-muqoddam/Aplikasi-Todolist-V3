<?php 

require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    // membuat parameter koneksi
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    // $todolistService->addTodolist("Belajar PHP Dasar");
    // $todolistService->addTodolist("Belajar PHP OOP");
    // $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

}

function testAddTodolist(): void 
{
    // membuat parameter koneksi
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    // $todolistService->addTodolist("Belajar PHP Dasar");
    // $todolistService->addTodolist("Belajar PHP OOP");
    // $todolistService->addTodolist("Belajar PHP Database");

   // $todolistService->showTodolist();
}

function testRemoveTodolist(): void 
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    // echo $todolistService->removeTodolist(1);
    // echo $todolistService->removeTodolist(2);
    // echo $todolistService->removeTodolist(3);
    // echo $todolistService->removeTodolist(7);
    // echo $todolistService->removeTodolist(8);
    // echo $todolistService->removeTodolist(9);
}

testShowTodolist();

?>