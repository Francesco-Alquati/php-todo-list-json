<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.7/axios.min.js" integrity="sha512-DdX/YwF5e41Ok+AI81HI8f5/5UsoxCVT9GKYZRIzpLxb8Twz4ZwPPX+jQMwMhNQ9b5+zDEefc+dcvQoPWGNZ3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>To do list</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row gy-2">
                <div class="col-12">
                    <ul>
                        <!-- TO DO LIST -->
                         <li v-for="todo, index in todoList" :key="index">
                            <span v-if="todo.done" class="completed">{{ todo.name }}</span>
                            <span v-else>{{ todo.name }}</span>
                            <span v-if="todo.done" class="text-success"> - {{ todo.done }}</span>
                            <span v-else class="text-danger"> - {{ todo.done }}</span>
                         </li>
                    </ul>
                </div>
                <div class="col-12">
                    <input type="text" name="todo-item" id="todo-item" placeholder="aggiungi task" class="form-control form-control-sm" v-model="todo_item">
                    <button class="btn btn-sm btn-primary" @click="addTodo">Aggiungi</button>
                </div>
            </div>
        </div>
    </div>
<script src="./js/script.js" type="text/javascript"></script>
</body>
</html>