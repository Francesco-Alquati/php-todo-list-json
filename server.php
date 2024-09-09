<?php
    $string = file_get_contents('./data/todo-list.json');
    $todolist = json_decode($string);

    if(isset($_POST['todoItem'])){
        $todo_item = $_POST['todoItem'];
        array_push($todolist, ["name" => $todo_item]);

        file_put_contents('./data/todo-list.json', json_encode($todolist));
    }

    header('Content-type: application/json');
    echo json_encode($todolist);
?>