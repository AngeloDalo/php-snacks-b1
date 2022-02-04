const App = new Vue(
    {
      el: '#app',
      data: {
        cars: [],
        textSearch: 'all',
      },
      created() {
        axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snacks-b1/server/controller.php?carburante=' + this.textSearch) .then((result) => {
          this.cars= result.data.results;
          console.log(cars);
        }).catch((error) => { console.log(error); });
      },

      methods: {
        changeAuto: function (textSearch) {
          console.log(this.textSearch);
          axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snacks-b1/server/controller.php?carburante=' + textSearch) .then((result) => {
            this.cars = result.data.results;
          }).catch((error) => { console.log(error); });
        }
     }
  }
);