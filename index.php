<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <title>AUTO</title>
</head>
<body>
<main id="app">
<div class="row mt-5">
        <div class="col-4 mb-5" v-for="car in cars">
            <img v-bind:src="car.foto" alt="">
            <div class="text">
                <h1>Marca: {{ car.marca }} </h1>
                <span> Modello: {{ car.modello }} </span>
                <span> Id_auto: {{ car.id_auto }} </span>
                <span> Codice telaio: {{ car.codice_telaio }} </span>
                <span> Numero porte {{ car.numero_porte }} </span>
                <span> Cilindrata {{ car.cilindrata }} </span>
                <span> Targa {{ car.targa }} </span>
                <span> Km {{ car.km }} </span>
                <span> Prezzo: {{ car.costo }} € </span>
                <span> Colore: {{ car.colore }} </span>
                <span> Kw: {{ car.kilowatt }} </span>
                <span> Peso {{ car.peso }} </span>
                <span> Patente {{ car.patente }} </span>
                <span> Carburante {{ car.carburante }} </span>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>