<template>
  <div>
    <nav class="breadcrumb" aria-label="breadcrumbs">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">Our Team</a></li>
        <li class="is-active"><a href="#" aria-current="page">Ray Caldwell</a></li>
      </ul>
    </nav>
    <section class="section">
      <h1 class="title is-1">Meet the Owner!</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit accusamus iste nulla vel qui deleniti beatae aspernatur, sunt laborum debitis mollitia dolorem sed magnam libero exercitationem ea ad! Eligendi, praesentium.</p>
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