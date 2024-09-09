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
            const data  = {
                todoItem: this.todo_item
            }
            axios.post(this.url, data, { headers: { 'Content-Type': 'multipart/form-data'}}).then((resp) => {
                this.todo_item = '';
                this.todoList = resp.data;
            })
        }
    },
    mounted(){
        this.getTodoList();
    }
}).mount('#app');