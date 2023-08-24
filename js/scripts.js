//destracturing
const { createApp } = Vue 

    createApp({
        data(){
            return{
                message : 'Hello Vue'
            }
        },
        //qui facciamo la nostra chiamara api
        created(){
            // console.log('chiamata api');
            axios
                 .get('http://localhost/php-dischi-json/api.php')
                 .then(res => {
                    console.log(res.data)
                 });
        }
    }).mount('#app')