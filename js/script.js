const App = new Vue(
    {
      el: '#app',
      data: {
        cars: [],
      },
      created() {
        axios.get('http://localhost/PHP/04-02-2022_snack8_esercitazione/php-snacks-b1/server/controller.php') .then((result) => {
          this.cars= result.data.results;
          console.log(cars);
        }).catch((error) => { console.log(error); });
      },
  }
);