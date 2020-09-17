<template>
  <div>
   <!--Begin Hero Section--> 
    <section class="hero is-light">
      <div class="hero-body">
        <div class="container">
          <img src="\images\carousel\true-img.png" style="width:100%">
        </div>
      </div>
    </section>
    <hr style="font-weight:bold;">
    <div class="columns">
      <div class="column">
        <img src="\images\bass-fishing.jpg" alt="">
        <p>Every Bass Fisherman dreams of finding a secret spot that is loaded with bass . . .</p>
        <button style="float:right" class="button is-link is-small is-outlined">Read More</button>
      </div>
      <div class="column">
        <img src="\images\test.jpg" alt="">
        <p>Wesley Burnett is a prime example of careful planning for progress . . .</p>
        <button style="float:right" class="button is-link is-small is-outlined">Read More</button>
      </div>
      <div class="column">
        <img src="\images\1-bassoriginal.jpg" alt="">
        <p>For a beginning bass angler, bass fishing can quickly become expensive . . .</p>
        <button style="float:right" id="modalBtn3" class="button is-link is-small is-outlined">Read More</button>
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
              <a style="float:right" class="button is-link is-small is-outlined" href="http://www.basstacklemaster.com/SearchResults.asp?Search=True+Image" target="_blank">Bait Store &raquo;</a>
              </p>
            </div>
          </div>
      </section>
      <!--End Section-->
    <hr>
      <!--Start Tournaments Section-->
      <section class="section">
        <div class="columns">
          <div class="column is-one-fifth">
            <img class="image is-128x128" title="TI-Enterprise Blue Logo" src="\images\LOGO\True-Image-Logo-V1.png" alt="TI Minimalist Logo"> 
          </div>
          <div column="column">
            <p>TI-Enterprise reguraly participates in fishing tourmanets. Keep up to date by visiting our Tournament Schedule here!<br>
            <a style="float:right" class="button is-link is-small is-outlined" href="#" disabled>Coming Soon!</a></p>
          </div>
        </div>
      </section>
      <!--End Section-->
    <hr>
      <!--Start Message from Ray Section Section-->
      <section class="section">
        <div class="columns">
          <div class="column is-one-fifth">
            <img class="image is-128x128" title="Big Ray with a Big Bass" src="\images\team-members\Caldwell\13-raybigbass.png" alt="Ray holding a Big Bass"> 
          </div>
          <div column="column">
              <p>My Name is Ray Caldwell owner of True Image Enterprise. I’m from Longview, Texas and I grew up fishing a lot of different lakes with my dad D.C. Caldwell. We fished lakes like Lake Folk, Lake O’ the pines, Toledo Bend, Sam Raybourn, and Caddo Lake. . .<br>
            <a style="float:right" class="button is-link is-small is-outlined" href="/ray-caldwell">Read On &raquo;</a></p>
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
        <a href="/about"><img class="image is-square team-member-home" title="Team Photo" src="\images\True-Image-Team.jpg" alt="True-Image-Team.jpg" style="padding-top: 0rem;"></a>
        <br>
      <!--Row 1-->
      <div class="columns is-variable is-2 is-mobile">
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Gabriel Diaz" src="\images\team-members\gabriel-diaz.jpg" alt="gabriel-diaz.jpg"> 
            <p class="name-home">Gabriel Diaz</p>
        </div>
        <div class="column is-narrow"></div>
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Gregory Halliman" src="\images\team-members\gregory-halliman.jpg" alt="gregory-halliman.jpg">
          <p class="name-home">Gregory Halliman</p>
        </div> <!--Remove-->
      </div>
      <!--Row 2-->
      <div class="columns is-variable is-2 is-mobile">
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Brian Nunn" src="\images\team-members\brian-nunn2.jpg" alt="brian-nunn.jpg">
          <p class="name-home">Brian Nunn</p> 
        </div>
        <div class="column is-narrow"></div>
        <div class="column">
          <img class="image is-128x128 team-member-home" title="Melvin Williams" src="\images\team-members\melvin-williams.jpg" alt="melvin-williams.jpg">
          <p class="name-home">Melvin Williams</p> 
        </div>
      </div>
        <!--Row 3-->
        <!--<div class="columns is-variable is-2 is-mobile">
          <div class="column">
            <img class="image is-128x128 team-member-home" title="Melvin Williams" src="https://bulma.io/images/placeholders/128x128.png" alt="melvin-williams.jpg">
            <p class="name-home">Melvin Williams</p> 
          </div>
          <div class="column is-narrow"></div>
          <div class="column">
            <img class="image is-128x128 team-member-home" src="https://bulma.io/images/placeholders/128x128.png"> 
            <p class="name-home">First Name Last Name</p>
          </div>
        </div>-->
      </section>
      <!--End Section-->
      <!--Modal 3-->
      <div id="homeModal3" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <h3 class="modal-card-title">Keep it Simple!</h3>
            <button class="delete close" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <img src="\images\1-bassoriginal.jpg" alt="">
            <p>For a beginning bass angler, bass fishing can quickly become expensive and complicated. Deciding what gear to purchase can be an overwhelming task. A stroll down the aisles at Bass Pro Shop or the local tackle store will make your head spin with all of the tackle choices available. There are shakey heads, wacky worms, spinner baits, chatter baits, crank baits, jerk baits, drop shots, beavers, and creatures just to name a few. Then there is bait color selection, which is a very in-depth topic itself. Just ask a group of seasoned anglers their favorite color, everything from cotton candy to swamp grass will be mentioned. Adding to the confusion, there are rod, reel, line and weight selections. Where does an angler begin?</p>
            <br>
            <p>Bass are hard enough to figure out, so keeping gear selection simple will make the learning experience more enjoyable and save money. Here are some basic tips to help get started:</p>
            <br>
            <strong>Rod Selection:</strong>
            <p>While there are many different technique specific rods on the market, almost everything can be done with a 6 ½ - 7-foot medium heavy rod. For casting at close range targets with a square bill crankbait or a spinnerbait, a 6 ½ foot rod is a great tool. For flipping/pitching or longer casting situations, a 7-footer is a better option. There are times, like punching and deep cranking, when a technique specific rods is more effective. However, 90 percent of the bass catching techniques can be done with a rod mentioned above.</p>
            <br>
            <strong>Reel Selection:</strong>
            <p>Reel selection can also be complicated, but most applications can be handled with a middle of the road gear ratio like a 6.4:1. By staying in the middle, it is easier to speed up the retrieve if a faster presentation is needed or slow it down if it needs to be fished slower. It’s more difficult to fish slowly with a 7:1 gear ratio or fast with a 5:1 gear ratio. Faster reels definitely have their place, like when needing to reel up a bunch of line to get a bass out of cover quickly. Slower reels are better for deeper cranking situations. A 6.4:1 is a great reel gear ratio for beginning anglers who need a tool to do it all.</p>
            <br>
            <strong>Line Selection:</strong>
            <p>Line can be a complex topic. There is braid, fluorocarbon, monofilament and a few other types. Line size also needs to be considered for different situations. But this article is for beginners and about keeping it simple, so let’s focus on simplicity.</p>
            <p>If looking to buy only one type and size of line, 17-pound monofilament is versatile and will handle almost every application. It’s tough and can handle pulling bass from most cover, but also small enough to cast lighter baits like square bill cranks. It can also be used for spinnerbaits, top waters and most soft plastics. Fluorocarbon line is an excellent upgrade for an advanced presentation. Fluorocarbon is very sensitive and can detect the subtlest of bites, and its low stretch characteristics allow for optimum hook penetration on the hook set.</p>
            <p>One situation the lines mentioned above will not cover is fishing heavy vegetation like thick grass or lily pads. When throwing frogs around lily pads or grass, 50-65 pound braid is a must. Frogs can be thrown on monofilament but there is a likely chance the fish will be lost when they bury themselves in the pads.</p>
            <br>
            <strong>Weight Selection:</strong>
            <p>Spend the extra money and buy tungsten versus lead weights. Tungsten has several advantages and going cheap in this situation is a big disadvantage. Tungsten weights are smaller than lead, which helps make the presentation smaller and will allow for better hook sets. Tungsten is very dense and helps to transmit vibration through the line, to the rod handle. The increased transmitted vibration enables better bite detection, and determining bottom composition—wood rock, sand, etc. If there is no vegetation, a ¼ ounce weight is a great choice. When fishing around brush or light vegetation, or needing a faster fall, use 5/16th ounce. Beginning anglers can do almost everything with those two weight sizes.</p>
            <br>
            <strong>Bait Color Selection:</strong>
            <p>The key to bait color selection is visibility and natural appearance. The rule of thumb is to use lighter colors in clearer water and darker colors in stained water. Lighter colors appear more natural when the water is clear and darker colors are more visible in stained water.</p>
            <br>
            <p>In most situations, only three colors of Soft Plastics will be need. If the water is clear and the skies are blue, Purple Dust is a great choice. If it’s cloudy or the water is semi-stained Amber Green is hard to beat. If the water is stained to muddy, black and blue is outstanding. If only one color is available, buy Amber Green. It’s very versatile and natural because most prey in the water appear as a hue of green. Yes, there are many other colors out there, and several of them are great, but these three basic colors can be very effective, especially when learning and trying to keep it simple.</p>
            <br>
            <p>When it comes to crankbaits, if the water is clearer go with silver colors to match the shad. If the water is more stained go with brighter colors like chartreuse or fire tiger so the bait is more visible to the fish. For spinnerbaits a white and chartreuse skirt will cover most situations.</p>
            <br>
            <strong><i>See you on the water. Get A Limit!</i></strong>
          </section>
          <footer class="modal-card-foot">
          </footer>
        </div>
        
      </div>
      <!-- End Modal 3-->
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