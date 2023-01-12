//Mi propio JS
function toggleMenu() {
  var menu = document.getElementById("menu");
  if (menu.style.display === "block") {
    menu.style.display = "none";
  } else {
    menu.style.display = "block";
  }
}

  //CODIGO EXTERNO

 // Obtener todas las diapositivas
 var slides = document.querySelectorAll(".slide");
 // Inicialmente, mostrar la primera diapositiva
 var currentSlide = 0;
 slides[currentSlide].style.display = "block";

 // Función para avanzar a la siguiente diapositiva
 function nextSlide() {
   // Ocultar la diapositiva actual
   slides[currentSlide].style.display = "none";
   // Incrementar el índice de la diapositiva actual
   currentSlide++;
   // Si llegamos al final, volver al primer slide
   if (currentSlide >= slides.length) {
     currentSlide = 0;
   }
   // Mostrar la diapositiva actual
   slides[currentSlide].style.display = "block";
 }

 // Ejecutar la función "nextSlide" cada 4 segundos (4000 milisegundos)
 setInterval(nextSlide, 4000);