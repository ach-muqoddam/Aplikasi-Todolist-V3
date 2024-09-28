<?php 

require_once __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

//function testShowTodolist(): void
//{
    //$todolistRepository = new TodolistRepositoryImpl();
    //$todolistRepository->todolist[1] = new Todolist("Belajar PHP Dasar");
    //$todolistRepository->todolist[2] = new Todolist("Belajar PHP OOP");
    //$todolistRepository->todolist[3] = new Todolist("Belajar PHP Database");
    //$todolistService = new TodolistServiceImpl($todolistRepository);

    //$todolistService->showTodolist();

//}

function testAddTodolist(): void 
{
    // membuat parameter koneksi
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP Dasar");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

   // $todolistService->showTodolist();
}

function testRemoveTodolist(): void 
{
    $connection = \Config\Database::getConnection();
    $todolistRepository = new TodolistRepositoryImpl($connection);

    $todolistService = new TodolistServiceImpl($todolistRepository);

    echo $todolistService->removeTodolist(6);
    echo $todolistService->removeTodolist(5);
    echo $todolistService->removeTodolist(4);
}

testRemoveTodolist();

?>