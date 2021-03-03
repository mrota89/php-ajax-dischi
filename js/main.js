new Vue({
      el: '#app',

  data: {
    album: [],
    selected: '',
    options: ['Rock', 'Jazz', 'Pop', 'Metal', 'Alternative Metal'],
  },
  mounted() {
    axios.get('http://localhost/github/esercizi-php/php-ajax-dischi/app/server.php')
    .then((xhr) => {
      let dataObject = xhr.data;
      this.album = dataObject;
    });//end call ajax
  },//end mounted

  methods: {
    selectFunction: function() {
      axios.get(`http://localhost/github/esercizi-php/php-ajax-dischi/app/server.php?genere=${this.selected}`)
      .then((xhr) => {
        let dataObject = xhr.data;
        this.album = dataObject;
      });
    }
  }//end methods
})//end vue app

Vue.config.devtools = true;
