new Vue({
      el: '#app',

  data: {
    album: []
  },
  mounted() {

    axios.get('http://localhost/github/esercizi-php/php-ajax-dischi/app/server.php')
    .then((xhr) => {
      let dataObject = xhr.data;
      this.album = dataObject.response;

    });//end call ajax
  },//end mounted
})//end vue app

Vue.config.devtools = true;
