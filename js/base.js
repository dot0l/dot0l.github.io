$(document).ready(function(){/*prepara las funciones para el documento actual
    MUY IMPORTANTE, si esta linea no se include el jquery no funcionara*/
    $("#bloque-izq").click(function(){
        $("#pan-izq").slideToggle(500); //hace un slide de .5s al panel
      });
    $("#bloque-der").click(function(){
        $("#pan-der").slideToggle(500); //hace un slide de .5s al panel
      });
    $("#bloque-ult").click(function(){
        $("#pan-ult").slideToggle(500); //hace un slide de .5s al panel
      });
});