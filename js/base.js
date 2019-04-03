$(document).ready(function(){/*prepara las funciones para el documento actual
    MUY IMPORTANTE, si esta línea no se incluye el jquery no funcionará*/

    //código para la versión desktop del menú de la página principal
    $("#bloque-izq").click(function(){
        $("#pan-izq").slideToggle(500); //hace un slide de .5s al panel
      });
    $("#bloque-der").click(function(){
        $("#pan-der").slideToggle(500);
      });
    $("#bloque-ult").click(function(){
        $("#pan-ult").slideToggle(500);
      });

    //código para la versión móvil
    var acc = document.getElementsByClassName("acc-mob");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
});