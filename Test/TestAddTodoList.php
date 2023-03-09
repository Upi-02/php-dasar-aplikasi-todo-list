<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodoList("Muhamad");
addTodoList("Luthfi");
addTodoList("Hakim");

var_dump($todoList);

?>