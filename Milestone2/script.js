new Vue({
   el: '#app',
   data() {
      return {
         arrCards: [],
      }
   },
   created() {
      axios.get('http://localhost/php-ajax-dischi/api.php')
      .then((response) => {
        this.arrCards = response.data.response;
      //   this.arrCardsFiltered = this.arrCards;
      })
      .catch(() => {
        console.log('error');
      });
   }

})  
