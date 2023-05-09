//slideIndex is de nummer van de slider.
let slideIndex = 0;
showSlides(slideIndex);

// Dit funcion voert de punten (als je op de punten klikt dan komt een foto)
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//
function showSlides() {
  let i;
  // Haal het alle waarde uit een class naam (slides), (dots).
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  // foto ++
  slideIndex++;
  //
  if (slideIndex > slides.length) {slideIndex = 1}
  //
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  //
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function startTimer(){
  setInterval(showSlides, 5000);
}

