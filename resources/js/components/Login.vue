<template>
  <section class="section is-medium">
    <div class="box" style="width:60%;margin-left:auto;margin-right:auto;">
      <form action="">
          <h1 class="title">User Login</h1>

        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </p>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
        </div>

        <a :href="forgotpassword">Forgot Password?</a>
        
        <div class="field is-grouped">
          <p class="control">
            <br>
            <button class="button is-success">
              Login
            </button>
          </p>
        </div>

      </form>
    </div>  
  </section>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.')
    },
    props: [
      'forgotpassword'
    ],
  }
</script>
