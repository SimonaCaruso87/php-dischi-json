//destracturing
const { createApp } = Vue 

    createApp({
        data(){
            return{
                dischi : []
            }
        },
        //qui facciamo la nostra chiamata api
        created(){
            // console.log('chiamata api');
            //chiamata a un url php
            axios
                 .get('http://localhost/php-dischi-json/api.php')
                 .then(response => {
                    // console.log(res.data)
                    this.dischi = response.data;
                 });

        }
    }).mount('#app')