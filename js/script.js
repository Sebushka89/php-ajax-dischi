Vue.config.devtools = true; //
new Vue(    
    {
        el: '#app',
        data: {
            // array popolato da axios
            discs: []
        },
        created() {
            
            axios.get("http://localhost:80/php-ajax-dischi/php-ajax-dischi/backend/apiCall.php")
                .then((result) => {
                    this.discs = result.data;
            })   
        }
    }
);