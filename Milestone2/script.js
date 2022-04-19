const app = new Vue({
   el: '#app',
   data() {
      return {
         apiUrl: 'http://localhost/php-ajax-dischi/api.php',
         arrCards: [],
      }
   },
   created() {
      axios.get(this.apiUrl)
      .then((response) => {
        this.arrCards = response.data.arr_dischi;
      //   this.arrCardsFiltered = this.arrCards;
      })
      .catch(() => {
        console.log('error');
      });
   }

})  
