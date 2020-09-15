<template>
  <div>
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="/">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">Our Team</a></li>
      </ul>
    </nav>
    <!--Owner Section-->
    <section class="section">
        <div class="columns">
          <div class="column is-one-fifth">
            <img src="\images\team-members\Caldwell\13-raybigbass.png">
          </div>
          <div class="column">
            <h1 class="title is-2">Ray Caldwell</h1>
            <p>My Name is Ray Caldwell owner of True Image Enterprise. I’m from Longview, Texas and I grew up fishing a lot of different lakes with my dad D.C. Caldwell. We fished lakes like Lake Folk, Lake O’ the pines, Toledo Bend, Sam Raybourn, and Caddo Lake. . .<br>
            <a style="float:right" class="button is-link is-light is-small" href="/ray-caldwell">Read More&raquo;</a>
            </p>
          </div>
        </div>
    </section>
    <!--Team Section-->
    <section class="section">
      <div class="columns">
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Gabriel Diaz" src="\images\team-members\gabriel-diaz.jpg" alt="Fisherman Gabriel Diaz"> 
          <h2 class="title is-4">Gabriel Diaz</h2>
        </div>
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Gregory Halliman" src="\images\team-members\gregory-halliman.jpg" alt="Fisherman Gregory Halliman">
          <h2 class="title is-4">Gregory Halliman</h2>
        </div>
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Brian Nunn" src="\images\team-members\brian-nunn.jpg" alt="Fisherman Brian Nunn">
          <h2 class="title is-4">Brian Nunn</h2>
        </div>
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Melvin Williams" src="\images\team-members\melvin-williams.jpg" alt="Fisherman Melvin Williams">
          <h2 class="title is-4">Melvin Williams</h2>
        </div>
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Kyle Baker" src="\images\team-members\Baker\8-kylebakerlrg.jpg" alt="Fisherman Kyle Baker">
          <h2 class="title is-4">Kyle Baker</h2>
        </div>
      </div>
      <div class="columns">
        <div class="column is-one-fifth">
          <img class="image is-128x1281" title="Chris Garcia" src="\images\team-members\chris-garcia.jpg" alt="Fisherman Chris Garcia">
          <h2 class="title is-4">Chris Garcia</h2>
        </div>
        <!--<div class="column is-one-fifth"></div>
        <div class="column is-one-fifth"></div>
        <div class="column is-one-fifth"></div>
        <div class="column is-one-fifth"></div>-->
      </div>
    </section>


  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>