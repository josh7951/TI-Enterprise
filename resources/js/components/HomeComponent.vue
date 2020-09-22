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
        <button style="float:right" id="modalBtn1" class="button is-link is-small is-outlined">Read More</button>
      </div>
      <br>
      <div class="column">
        <img src="\images\wesley-burnett.jpg" alt="">
        <p>Wesley Burnett is a prime example of careful planning for progress . . .</p>
        <button style="float:right" id="modalBtn2" class="button is-link is-small is-outlined">Read More</button>
      </div>
      <br>
      <div class="column">
        <img src="\images\1-bassoriginal.jpg" alt="">
        <p>For a beginning bass angler, bass fishing can quickly become expensive . . .</p>
        <button style="float:right" id="modalBtn3" class="button is-link is-small is-outlined">Read More</button>
      </div>
      <br>
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
            <p>TI-Enterprise regularly participates in fishing tournaments. Keep up to date by visiting our Tournament Schedule here!<br>
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
      <!--Modal 1-->
      <div id="homeModal1" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <h3 class="modal-card-title">Finding Your Secret Spot</h3>
            <button class="delete close" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <img src="\images\bass-fishing.jpg" alt="">
            <p>Every bass fisherman dream of finding a secret spot that is loaded with bass and sees very little pressure. Many of these spots are on public lands and are easily accessible by anglers that are willing to put in a little work. Follow these easy steps and you are on your way to finding your own secret spot!</p>
            <br>
            <strong>Find Available Public Lands:</strong>
            <br>
            <p>There are lots of opportunities for discovering public lands with fishing hot spots. Conducting a little internet research will help. I will categorize public lands in three different groups and discuss options for researching and finding fishing opportunities for each.</p>
            <br>
            <strong>City &amp; County Lands:</strong>
            <br>
            <p>Many city and county parks have undeveloped lands or wooded areas that contain ponds, rock pits or wetlands that hold bass. Try looking at city and county parks and recreation web sites. As an example, there is a county park located less than 2 miles from my house. This park is visited by hundreds of people each week who enjoy playing sports on the various baseball and soccer fields in the park. An internet search, through a mapping web site, revealed a hidden swampy looking wetland area located in an undeveloped portion of the park. Fishing is incredible! I often go back when I need a quick bass fishing “fix”.</p>
            <br>
            <strong>State Lands (Hunting Lands, State Parks, State Forests, Water Management Lands):</strong>
            <br>
            <p>Many state lands are open to the public. Although fishing is allowed on many of these lands, anglers are usually not the primary user group. On hunting lands, fishing is normally allowed but access may be restricted to certain days. Searching through your state’s Fish &amp; Wildlife Agency web site will help you identify potential properties that can be fished. On other state lands, non-consumptive uses such as hiking, biking, bird watching and horseback riding are usually the most popular forms of recreation. Doing an internet search of the state agency web sites responsible for state forests, state parks and water management district lands will lead you to productive fisheries in your area. As an example, I located a remote rock pit in a state park that is a good mile walk or bike ride from the nearest road. The 5 acre lake is a Crankbait and Worm fisherman’s dream and worth every bit of effort to get there!</p>
            <br>
            <strong>Federal Lands (National Wildlife Refuges and National Parks):</strong>
            <br>
            <p>Many federal lands offer great bass fishing. A thorough internet search through the United States Fish and Wildlife Service or National Park Service websites will reveal properties in your area that have bass fishing potential. As an example, one of the busiest National Wildlife Refuges in my state has several isolated ponds that are off the beaten path. These ponds offer incredible fishing!</p>
            <br>
            <strong>Map It!</strong>
            <br>
            <p>After you find potential public lands, the next step is to thoroughly inspect a map of each property. My favorite way is to use mapping web sites such as Bing Maps and Google Earth. Click on the Satellite or Earth feature to locate water bodies on each property. You can really zoom in to study each area in detail and determine the best and shortest path to and from each body of water. I like to use both Google Earth and Bing to compare the body of water from different aerial photos.</p>
            <br>
            <strong>Check Your Regulations:</strong>
            <p>This is a must. Pay special attention to area specific licensing requirements, days/hours of use, parking/driving restrictions and fishing regulations. By knowing up front what you need to do will often lead to a more enjoyable day. As an example, many National Wildlife Refuges require a no cost Refuge Fishing Permit. This requires the angler to read over and agree to abide by the refuge regulations before signing the permit.</p>
            <br>
            <strong>Go Fishing!</strong>
            <br>
            <p>After you have located your spot and read over the regulations, it’s time to go test out your new spot! A good rule of thumb is to keep your bait selection simple for the first visit. When going to a new spot, sight unseen, I like to bring a medium light spinning rod with 8 lb. fluorocarbon and a small selection of True Image finesse worms. This set up will catch just about anything, large or small. I keep my color selection to light colors such as Blue Flash or 4NS for clear water and darker colors such as Amber Blue or June Bug for darker waters. Once I get familiar with the lake, I will tailor my tackle according to the terrain and vegetation. Don’t be afraid to “Go Big” and upsize your tackle after learning the particulars of your spot! Giant bass will often thrive in little waters!</p>
            <br>
            <p>Doing a little homework and putting in a little effort can be very rewarding when trying to find a secret fishing spot. There is nothing like the excitement of taking that first cast into waters unknown. Join the excitement and take steps to find your own secret spot. You’ll be glad that you did!</p>
          </section>
          <footer class="modal-card-foot">
            <button class="button is-success is-outlined close">Close</button>
          </footer>
        </div>
      </div>
      <!-- End Modal 1-->
      <!--Modal 2-->
      <div id="homeModal2" class="modal">
        <div class="modal-background"></div>
        <div class="modal-card">
          <header class="modal-card-head">
            <h3 class="modal-card-title">What Makes a Pro Bass Fisherman?</h3>
            <button class="delete close" aria-label="close"></button>
          </header>
          <section class="modal-card-body">
            <img src="\images\wesley-burnett.jpg" alt="">
            <strong>Up through the ranks Become a bass professional</strong>
            <br>
            <p>Wesley Burnett is an example of careful planning for progress as a tournament bass angler. Burnett started fishing, as many of us did, as a child. He grew up on a river known for catfish. On one of a series of family vacations, while Burnett was wading in the river, his grandmother said, "He's going to be a fisherman when he grows up." Burnett joined a bass-fishing club when he was 12 years old. As he read about bass fishing, his heroes became those anglers whose profiles appeared in magazines and newspapers.</p>
            <br>
            <p>After experience in regional tournaments, Burnett entered the EverStart Series as a co-angler. His expectation was that he would be able to fish from the rear of the boat and absorb lessons from more experienced anglers and maybe earn some money at the same time. When he won the EverStart Challenge from the back of the boat it was clear that his plan was working.</p>
            <br>
            <p>From there, Burnett fished the Wal-Mart FLW Tour and won Co-angler of the Year. Then Burnett switched to the Pro Division of the FLW Tour and the EverStart Series as well, claiming the EverStart Series Central Division points championship.</p>
            <br>
            <p>His systematic strategy has paid off handsomely.</p>
          </section>
          <footer class="modal-card-foot">
            <button class="button is-success is-outlined close">Close</button>
          </footer>
        </div>
      </div>
      <!-- End Modal 2-->
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
            <button class="button is-success is-outlined close">Close</button>
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
