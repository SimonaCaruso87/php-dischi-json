//destracturing
const { createApp } = Vue 

    createApp({
        data(){
            return{
                dischi : []
            }
        },
        //qui facciamo la nostra chiamara api
        created(){
            // console.log('chiamata api');
            //chiamata a un url php
            axios
                 .get('http://localhost/php-dischi-json/api.php')
                 .then(res => {
                    // console.log(res.data)
                    this.dischi = res.data;
                 });

        }
    }).mount('#app')