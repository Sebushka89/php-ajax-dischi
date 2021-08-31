Vue.config.devtools = true; //

new Vue(    
    {
        el: '#app',
        data: {
            // array popolato da axios
            discs: [],
            filter: '',
        },
        created() {
            
            axios.get("http://localhost/php-ajax-dischi/php-ajax-dischi/backend/apiCall.php")
                .then((result) => {
                    this.discs = result.data;
            })   
        },
        methods: {
            newApiCall(){
                if(this.filter === "All"){
                    return "http://localhost/php-ajax-dischi/php-ajax-dischi/backend/apiCall.php"
                }
                return "http://localhost/php-ajax-dischi/php-ajax-dischi/backend/apiCallFiltered.php" + "?genre=" + this.filter
            },
            filteredDiscs(){
                axios.get(this.newApiCall()).then((result) =>{
                    this.discs = result.data;
                })
            }
        }
    }
);