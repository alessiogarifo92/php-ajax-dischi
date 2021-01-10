function init() {
  new Vue({
    el: '#app',
    data: {
      albums: [],
      singolo: []
    },

    // quando clicco su pulsante corrispondente a cantante andro a visualizzare gli album dello stesso
    methods: {
      update(choose) {
        console.log(choose);
        axios
          .get('data.php', {
              params: {
                  "singer": choose  //choose  fa riferimento a condizione della funzione upadate
              }
          })
          .then(risposta => this.singolo = risposta.data)
      }
    },

    // ad ogni refresh dara tutti gli album
    mounted: function() {
        axios
        .get('data.php?singer=All') //abbreviazione di params
        .then(risposta =>{
          this.albums = risposta.data; //salviamo in albums tutti gli album
          this.singolo = risposta.data; //salviamo inizialmente tutti gli album in singolo senno ad avvio pagina non da nessun risultato perche array vuoto e poi cliccando su update da ad array valore corrispondente del singolo
        })

    }
  });
}
init();
