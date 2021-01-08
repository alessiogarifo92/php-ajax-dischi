function init() {
  new Vue({
    el: '#app',
    data: {
      albums: [],
    },

    mounted: function() {
      axios
        .get('data.php')
        .then((risposta) => {
          this.albums = risposta.data;
          console.log(this.albums);
        });
    },
  });
}
init();
