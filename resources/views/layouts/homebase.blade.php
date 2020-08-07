<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TI-Enterprise</title>
    <link rel="stylesheet" href="\bulma\css\bulma.css">
  </head>
  <body>
  <div id="app">
    <navbar></navbar>
    <div class="container">
      @yield('content')
    </div>
  </div>
  <br>
  <br>
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        Copyright &copy; 2020 - All Rights reserved - TI-Enterprise.com
      </p>
    </div>
  </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="\js\app.js"></script>
    <script>
    //Carousel
    console.log("Carousel Inserted")
  
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("slides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
    }

    autoSlide();
    function autoSlide(n) {
      var i;
      var slides = document.getElementsByClassName("slides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";  
      }
      if(slideIndex > slides.length){ slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      slideIndex++;
      setTimeout(autoSlide, 5000);
    }

    console.log("Modal Testing");
    // Get Modal
    var modal = document.getElementById("homeModal");
    // Get button
    var btn = document.getElementById("modalBtn");

    var close = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
      modal.style.display = "block";
    }

    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
  </body>
</html>