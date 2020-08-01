<template>
  <div>
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="/">Home</a></li>
        <li class="is-active"><a href="#" aria-current="page">Our Team</a></li>
      </ul>
    </nav>
    <section class="section">
          <div class="columns">
            <div class="column is-one-fifth">
              <img class="image is-128x128" src="\images\team-members\Caldwell\13-raybigbass.png">
            </div>
            <div class="column">
              <h1 class="title is-2">Ray Caldwell</h1>
              <p>My Name is Ray Caldwell owner of True Image Enterprise. I’m from Longview, Texas and I grew up fishing a lot of different lakes with my dad D.C. Caldwell. We fished lakes like Lake Folk, Lake O’ the pines, Toledo Bend, Sam Raybourn, and Caddo Lake. . .<br>
              <a style="float:right" class="button is-link is-light is-small" href="/store">Read More&raquo;</a>
              </p>
            </div>
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