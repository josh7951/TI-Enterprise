<nav class="navbar is-dark">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img title="TI-Enterprise" src="\images\logo.png" alt="TI-Enterprise.png">
      </a>
      <span class="navbar-burger burger" data-target="navMenu">
        <span></span>
        <span></span>
        <span></span>
      </span>
    </div>
    <div id="navMenu" class="navbar-menu">
      <div class="navbar-start">
        <a href="/about" class="navbar-item">Our Team</a>
        <a href="/team-gallery" class="navbar-item">Gallery</a>
        <a href="/store" class="navbar-item">Bait Store</a>
        <a href="/contact" class="navbar-item">Contact Us</a>
        
      </div>
    </div>
  </div>
</nav>
<script type="text/javascript">
  (function() {
    var burger = document.querySelector('.burger');
    var nav = document.querySelector('#'+burger.dataset.target);

    burger.addEventListener('click', function(){
      burger.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
  })();
</script>