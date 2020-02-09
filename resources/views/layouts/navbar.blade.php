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
      <div class="navbar-end">
        <a href="/about" class="navbar-item">Our Team</a>
        <a href="/team-gallery" class="navbar-item">Gallery</a>
        <a href="#" class="navbar-item">Tournaments</a>
        <a href="/store" class="navbar-item">Bait Store</a>
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">Resources</a>
        <div class="navbar-dropdown">
          <a class="navbar-item" href="https://americanbass.com/" target="_blank">American Bass</a>
          <a class="navbar-item" href="https://www.bassmaster.com/" target="_blank">Bass Master</a>
          <a class="navbar-item" href="https://www.bassresource.com/" target="_blank">Bass Resource - Fishing Guide</a>
          <a class="navbar-item" href="https://www.flwfishing.com/" target="_blank">Fishing League Worldwide</a>
          <a class="navbar-item" href="https://www.gamakatsu.com/" target="_blank">Gamakatsu Hooks</a>
          <a class="navbar-item" href="https://www.lakesideboatsinc.com/" target="_blank">Lakeside Boat & Marine</a>
          <a class="navbar-item" href="https://www.ownerhooks.com/" target="_blank">Owner Hooks</a>
          <a class="navbar-item" href="https://www.tacklewarehouse.com/" target="_blank">Tackle Warehouse</a>
          <a class="navbar-item" href="https://tearshot.com/" target="_blank">Team Davies Tackles</a>
          <a class="navbar-item" href="http://wonbass.com/" target="_blank">WON Bass Tournaments</a>
          <hr class="navbar-divider">
          <a class="navbar-item" href="/contact" style="color:#41CAE5; font-weight: bold;">Contact Us</a>
        </div>
      </div>
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