<template>
    <section class="section is-medium">

    <div class="box" style="width:60%;margin-left:auto;margin-right:auto;">
      <div v-if="success" class="message is-success">
        <div class="message-body">
          Password Recovery link sent! An email will be sent to the address associated with your account soon!
        </div>
      </div>
    
      <form @submit.prevent="formSubmit" class="form">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <h1 class="title">Password Recovery</h1>

        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" v-model="fields.email" placeholder="john@domain.com" autocomplete="email">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
          <div v-if="errors && errors.email" class="message is-danger">
            <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
              {{ errors.email[0] }}
            </div>
          </div>
        </div>
        
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
              Send Password Reset Link
            </button>
          </p>
        </div>
        <hr>
        <p><a :href="loginroute">Return to Login</a></p>

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
        'action': this.recoveryroute,
        siteKey: process.env.MIX_SITE_KEY,
      }
    },
    props: [
      'recoveryroute',
      'loginroute'
    ],
  }
</script>
