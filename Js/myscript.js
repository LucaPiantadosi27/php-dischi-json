const app = Vue.createApp({
    data() {
        return {
            albums: []
        };
    },
    mounted() {
        axios.get('mAlbums.php')
            .then(response => {
                this.albums = response.data;
            })
    }
});
  
app.mount('#app');