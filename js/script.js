const { createApp } = Vue;

createApp({
    data(){
        return{
            todoList: [],
            url: 'server.php',
            todo_item : '',
            
        }
    },
    methods: {
        getTodoList(){
            axios.get(this.url).then((resp) => {
                this.todoList = resp.data;
            });
        },
        addTodo(){
            const newTodo = {
                name: this.todo_item,
                done: false
            };
            axios.post(this.url, newTodo, { headers: { 'Content-Type': 'multipart/form-data'}}).then((resp) => {
                this.todoList.push(newTodo);
                this.todo_item = '';
            })
        },
        toggleComplete(todo) {
            todo.done = !todo.done;
        },
        deleteTodo(index) {
            this.todoList.splice(index, 1);
        },
    },
    mounted(){
        this.getTodoList();
    }
}).mount('#app');