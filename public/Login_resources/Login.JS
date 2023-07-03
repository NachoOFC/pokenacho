
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


  $('#texto_contraseña').on('copy', function() {
    return false;
  });

  document.getElementById('texto_usuario').addEventListener('click', function() {
    var audio = new Audio('/Login_resources/Button_Effect.mp3');
    audio.play();
  });
  
  document.getElementById('texto_contraseña').addEventListener('click', function() {
    var audio = new Audio('/Login_resources/Button_Effect.mp3');
    audio.play();
  });

  document.getElementById('button_iniciar_sesion').addEventListener('click', function() {
    var audio = new Audio('/Login_resources/Login_effect.mp3');
    audio.play();
  });
  


  $('#login').click(function()
{
var username=$("#texto_usuario").val();
var password=$("#texto_contraseña").val();
var dataString = 'username='+username+'&password='+password;
if($.trim(username).length>0 && $.trim(password).length>0)
{
$.ajax({
type: "POST",
url: "ajaxLogin.php",
data: dataString,
cache: false,
beforeSend: function(){ $("#login").val('Connecting...');},
success: function(data){
if(data)
{
$("body").load("home.php").hide().fadeIn(1500).delay(6000);
//or
window.location.href = "home.php";
}
else
{
//Shake animation effect.
$('#box').shake();
$("#login").val('Login')
$("#error").html("<span style='color:#cc0000'>Error:</span> Invalid username and password. ");
}
}
});

}
return false;
});

});






//$(document).ready(function() {
    // Obtén una referencia al elemento de video
//var video = document.getElementById("video");

// Función para iniciar el video en un minuto específico
//function startVideoAtMinute(minute) {
  //video.addEventListener('loadedmetadata', function() {
    //video.currentTime = minute * 413; // Multiplica los minutos por 60 para obtener los segundos
    //video.play(); // Inicia el video
  //});
//}

// Llama a la función para iniciar el video en el minuto 1
//startVideoAtMinute(1);