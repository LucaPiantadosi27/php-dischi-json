<!-- 
Descrizione
Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
Stack
Html, CSS, VueJS (importato tramite CDN), axios, PHP
Consigli
Nello svolgere l’esercizio seguite un approccio graduale.
Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare correttamente con il vostro script PHP (le vostre “API”).
Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.
Bonus
Al click su un disco, recuperare e mostrare i dati del disco selezionato.
(Fare una chiamata api che passi un altro parametro: discIndex, nel server.php dovremo gestire la possibilità di ricevere questo parametro e inviare solo i dati di quel determinato disco)
Il primo screenshot riguarda l'esercizio senza bonus.
Il secondo screenshot riguarda l'esercizio con bonus, mostrate nella lista album solo la copertina, al click della copertina fate partire la nuova chiamata api dove vi verranno inviati i dati specifici da mostrare
 -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- css -->
<link rel="stylesheet" href="css/style.css">
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!-- vue 3 -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<title>Php - Dischi</title>


</head>


<body>
    <div id="app">

        <nav class="d-flex align-items-center    ">
           <div class ="logoContainer"><img class="spoty-logo" src="./img/spotify-logo.png" alt=""></div>
            <h1 class="container">Php Dischi Collection</h1>   
        </nav>

        <div class= "wrapper">

            <div class="container">
                
                <div class="row ">

                    <div v-for="album in albums" class="col-4 text-center">
                        <div id="albumCard">
                            <div id="albumImage">
                            <img :src="album.poster" alt="Album Poster">
                            </div>
                            <h3>{{ album.title }}</h3>
                            <p>{{ album.author }}</p>
                            <p>{{ album.year }}</p> 
                        </div>
                    </div>

                </div>  
                
            </div>
        </div>

    </div>


 <!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- JS -->
<script src="./Js/myscript.js"></script>
</body>
</html>