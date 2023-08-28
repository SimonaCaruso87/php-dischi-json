//destracturing
const { createApp } = Vue 

    createApp({
        data(){
            return{
                //qui salviamo i dati che mi tornano da un array
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