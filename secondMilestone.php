<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Milestone</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
</head>
<body>

    <div id="app">

        <header>
            <div class="logo-spotify">
                <img src="./img/spotify-logo.png" alt="Spotify Logo">
            </div>
            <div class="ricerca">
            <select v-model="filter" @change="filteredDiscs()" name="genre" id="genre">
                    <option value="All">Tutti i generi  </option>
                    <option value="Rock">Rock</option>
                    <option value="Metal">Metal</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Pop">Pop</option>
                </select>
            </div>
        </header>
    
        <main>
            <section class="discs-container">
    
                <div class="album-container" v-for="disc in discs">
                    
                    <div class="inner">
                        <img class="cover" :src="disc.poster" alt="">
                        <h3> {{disc.title}} </h3>
                        <p> {{disc.author}} </p>
                        <p> {{disc.year}} </p>
                    </div>
        
                </div>
    
            </section>
    
        </main>

    </div>
    
    <script src="js/script.js"></script> 
</body>
</html>