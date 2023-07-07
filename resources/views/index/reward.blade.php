<!DOCTYPE html>
<html>
<head>
  <title>Gana Recompensas</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      background-image: url('https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2016/03/570458-mejores-equipos-pokemon-pokemon-rojo-azul-amarillo.png?tf=3840x');
      background-size:250px;
    }

    h1 {
      text-align: center;
      font-size: 32px;
      color: #ff0000;
      text-shadow: 2px 2px #000000;
      margin-top: 50px;
      font-weight: 300px;
      font-size: 60px;
    }

    label {
      font-size: 24px;
      display: block;
      text-align: center;
      color: white;
      border: 3px solid black;
      border-radius: 0;
      width: 250px;
      margin-left: 565px;
      margin-bottom: 10px;
      font-weight: bold;
      background-color: rgba(0,0,0, 0.7);
      background-size:180px;
    }

    input {
      padding: 2px;
      font-size: 18px;
      border: 3px solid black;
      border-radius: 5px;
      width: 250px;
      margin-left: 560px;
    }

    button {
      display: block;
      margin: 30px auto;
      padding: 10px 20px;
      font-size: 24px;
      color: #ffffff;
      background-color: #ff0000;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-transform: uppercase;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      margin-left: 579px;
    }

    button:hover {
      background-color: #cc0000;
    }
  </style>
  <script>
    var monedasGeneradas = 0;

    function validarDatos() {
      var correo = document.getElementById("correo").value;
      var contraseña = document.getElementById("contraseña").value;
      var regexCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

      if (!correo.match(regexCorreo)) {
        alert("Por favor, ingresa un correo válido.");
        return;
      }

      if (!contraseña) {
        alert("Por favor, ingresa una contraseña.");
        return;
      }

      // Generar monedas aleatorias
      var monedas = [200, 300, 400, 500,600];
      var monedasGeneradas = monedas[Math.floor(Math.random() * monedas.length)];

      alert("¡Felicidades! Has ganado " + monedasGeneradas + " monedas.");

      document.getElementById("correo").value = "";
      document.getElementById("contraseña").value = "";
    }
  </script>
</head>
<body>
  <h1>LOGIN</h1>
  <label for="correo">Correo Electrónico</label>
  <input type="text" id="correo" name="correo">
  <br><br>
  <label for="contraseña">Contraseña</label>
  <input type="password" id="contraseña" name="contraseñaa">
  <br><br>
  <button onclick="validarDatos()">iniciar sesión</button>
</body>
</html>
