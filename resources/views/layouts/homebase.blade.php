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
    // Get Modal
    var modal1 = document.getElementById("homeModal1");
    var modal2 = document.getElementById("homeModal2");
    var modal3 = document.getElementById("homeModal3");
    // Get button
    var btn1 = document.getElementById("modalBtn1");
    var btn2 = document.getElementById("modalBtn2");
    var btn3 = document.getElementById("modalBtn3");
    // Modal On Click Function
    btn1.onclick = function () { modal1.style.display = "block"; }
    btn2.onclick = function () { modal2.style.display = "block"; }
    btn3.onclick = function () { modal3.style.display = "block"; }

    var closeBtns = [...document.querySelectorAll(".close")];
    closeBtns.forEach(function(btn){
      btn.onclick = function() {
        var modal = btn.closest('.modal');
        modal.style.display = "none";
      }
    });

    window.onclick = function(event) {
      if (event.target.className == 'modal-background'){
        modal1.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
      }
    }
    </script>
  </body>
</html>