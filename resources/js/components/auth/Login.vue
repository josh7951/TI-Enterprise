<template>
  <section class="section is-medium">
    <div class="box" style="width:60%;margin-left:auto;margin-right:auto;">
      <form @submit.prevent="authSubmit" class="form">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <h1 class="title">User Login</h1>

        <div class="field">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" v-model="fields.email" placeholder="john@domain.com" autocomplete="email">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </p>
          <div v-if="errors && errors.email" class="message is-danger">
            <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
              {{ errors.email[0] }}
            </div>
          </div>
        </div>

        <div class="field">
          <p class="control has-icons-left">
            <input class="input" type="password" name="password" v-model="fields.password" autocomplete="current-password">
            <span class="icon is-small is-left">
              <i class="fas fa-lock"></i>
            </span>
          </p>
          <div v-if="errors && errors.password" class="message is-danger">
            <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
              {{ errors.password[0] }}
            </div>
          </div>
        </div>

        <a :href="forgotpassword">Forgot Password?</a>
        
        <google-re-captcha-v3
          v-model="fields.gRecaptchaResponse"
          ref="captcha"
          :site-key="siteKey"
          id="captcha"
          action="authSubmit"
        ></google-re-captcha-v3>

        <div class="field is-grouped">
          <p class="control">
            <br>
            <button class="button is-success" type="submit">
              Login
            </button>
          </p>
        </div>
        <hr>
        <p>Need to make an account? <a :href="registerroute">Register here</a></p>

      </form>
    </div>  
  </section>
</template>

<script>
  import formMixin from '../../formMixin.js';

  export default {
    mixins: [ formMixin ],
    data() {
      return {
        'action': this.loginroute,
        siteKey: process.env.MIX_SITE_KEY,
      }
    },
    props: [
      'forgotpassword',
      'loginroute',
      'registerroute'
    ],
  }
</script>
