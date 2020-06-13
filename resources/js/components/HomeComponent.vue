<template>
  <div>
   <!--Begin Section--> 
   <div class="slideshow-container">
      <!--Slide 1-->
      <div class="slides fade">
        <img src="\images\carousel\true-img.png" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="slides fade">
        <img src="\images\carousel\slide1.jpg" style="width:100%">
        <div class="text">Caption Text</div>
      </div>

      <div class="slides fade">
        <img src="\images\carousel\slide2.jpg" style="width:100%">
        <div class="text">Caption Two</div>
      </div>
      <!--Slide 3-->
      <div class="slides fade">
        <img src="\images\carousel\slide3.jpg" style="width:100%">
        <div class="text">Caption Test</div>
      </div>
      <!--Nav Cursors-->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      <!--Nav Dots-->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
        <span class="dot" onclick="currentSlide(4)"></span> 
      </div>
    <hr style="font-weight:bold;">
    <div class="columns">
      <div class="column">
        <img src="\images\bass-fishing.jpg" alt="">
        <p>Every Bass Fisherman dreams of finding a secret spot that is loaded with bass . . .</p>
        <button style="float:right" id="modalBtn" class="button is-link is-light is-small">Read More</button>
      </div>
      <div class="column">
        <img src="\images\test.jpg" alt="">
        <p>Wesley Burnett is a prime example of careful planning for progress . . .</p>
        <button style="float:right" class="button is-link is-light is-small">Read More</button>
      </div>
      <div class="column">
        <img src="\images\1-bassoriginal.jpg" alt="">
        <p>For a beginning bass angler, bass fishing can quickly become expensive . . .</p>
        <button style="float:right" class="button is-link is-light is-small">Read More</button>
      </div>
    </div>
    <hr>
  <div class="columns">
    <div class="column is-8">
      <!--Start Bait Store Section-->
      <section class="section">
          <div class="columns">
            <div class="column is-one-fifth">
                <img class="image is-128x128" src="\images\homestore.jpg">
            </div>
            <div class="column">
              <p>Visit the TI-Enterprise True Image Bait Shop. True Image worms are supple for maximum action yet tough enough to catch multiple fish without tearing. Technologically advanced color patterns with powerful scents in multiple styles and sizes for all bass fishing techniques make True Image worms the strongest on the market.<br>
              <a style="float:right" class="button is-link is-light is-small" href="/store">Bait Store&raquo;</a>
              </p>
            </div>
          </div>
      </section>
      <!--End Section-->
    <hr>
      <!--Start blahblah Section-->
      <section class="section">
        <div class="columns">
          <div class="column is-one-fifth">
            <img class="image is-128x128" src="https://bulma.io/images/placeholders/128x128.png"> 
          </div>
          <div column="column">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum minima fuga excepturi velit, distinctio, sapiente esse quod veniam natus ipsam magni? Maiores porro necessitatibus libero fuga sapiente beatae quasi exercitationem!<br>
            <a style="float:right" class="button is-link is-light is-small" href="/">Temp Button&raquo;</a></p>
          </div>
        </div>
      </section>
      <!--End Section-->
    <hr>
      <!--Start blahblah Section-->
      <section class="section">
        <div class="columns">
          <div class="column is-one-fifth">
            <img class="image is-128x128" src="https://bulma.io/images/placeholders/128x128.png"> 
          </div>
          <div column="column">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum minima fuga excepturi velit, distinctio, sapiente esse quod veniam natus ipsam magni? Maiores porro necessitatibus libero fuga sapiente beatae quasi exercitationem!<br>
            <a style="float:right" class="button is-link is-light is-small" href="/">Temp Button&raquo;</a></p>
          </div>
        </div>
      </section>
      <!--End Section-->
      <hr>
    </div>
    <!--Start Team Member Section-->
    <section class="section has-background-white-ter">
      <h1 class="subtitle is-3" style="text-align: center; font-weight: bold;">True Image Bass Team</h1>
      <hr>
        <img class="image is-square team-member-home" title="Team Photo" src="\images\True-Image-Team.jpg" alt="True-Image-Team.jpg" style="padding-top: 0rem;">
        <br>
      <!--Row 1-->
      <div class="columns is-variable is-2 is-mobile">
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Gabriel Diaz" src="\images\team-members\gabriel-diaz.jpg" alt="gabriel-diaz.jpg"> 
            <p class="name-home">Gabriel Diaz</p>
        </div>
        <div class="column is-narrow"></div>
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Chris Garcia" src="\images\team-members\chris-garcia.jpg" alt="chris-garcia.jpg">
          <p class="name-home">Chris Garcia</p>
        </div>
      </div>
      <!--Row 2-->
      <div class="columns is-variable is-2 is-mobile">
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Gregory Halliman" src="\images\team-members\gregory-halliman.jpg" alt="gregory-halliman.jpg">
          <p class="name-home">Gregory Halliman</p>
        </div>
        <div class="column is-narrow"></div>
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Brian Nunn" src="\images\team-members\brian-nunn.jpg" alt="brian-nunn.jpg">
          <p class="name-home">Brian Nunn</p> 
        </div>
      </div>
        <!--Row 3-->
      <div class="columns is-variable is-2 is-mobile">
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Melvin Williams" src="\images\team-members\melvin-williams.jpg" alt="melvin-williams.jpg">
          <p class="name-home">Melvin Williams</p> 
        </div>
        <div class="column is-narrow"></div>
        <div class="column">
          <img class="image is-128x128 team-member-home" src="https://bulma.io/images/placeholders/128x128.png"> 
          <p class="name-home">First Name Last Name</p>
        </div>
      </div>
    </section>
    <!--End Section-->
        <!--Modal 1-->
    <div id="homeModal" class="modal">
      <div class="modal-background"></div>
      <div class="modal-card">
        <header class="modal-card-head">
          <p class="modal-card-title">Modal title</p>
          <button class="delete" aria-label="close"></button>
        </header>
        <section class="modal-card-body">
          <!-- Content ... -->
        </section>
        <footer class="modal-card-foot">
          <button class="button is-success">Save changes</button>
          <button class="button">Cancel</button>
        </footer>
      </div>
    </div>
  </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Home Component mounted.')
    }
  }
</script>