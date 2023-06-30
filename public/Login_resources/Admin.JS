$(document).ready(function() {
  var audio = document.getElementById("Musica");
  
  setTimeout(function() {
    $(audio).prop("muted", false);
  }, 2000);

  document.getElementById("Musica").volume = 0.05;
  var audio = document.getElementById("Musica");
  audio.pause();

  setTimeout(function() {
    audio.play();
  }, 3000);

  document.getElementById('userlabel').addEventListener('click', function() {
    var audio = new Audio('/Login_resources/Button_Effect.mp3');
    audio.play();
  });
  
  document.getElementById('texto_contraseña').addEventListener('click', function() {
    var audio = new Audio('/Login_resources/Button_Effect.mp3');
    audio.play();
  });
  

});
