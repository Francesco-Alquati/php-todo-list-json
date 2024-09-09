const { createApp } = Vue;

createApp({
    data(){
        return{
            todolist: [],
            url: 'server.php',
        }
    },
    methods: {
        getTodoList(){
            axios.get(this.url).then((resp) => {
                console.log(resp.data)
            });
        }
    },
    mounted(){
        this.getTodoList();
    }
}).mount('#app');