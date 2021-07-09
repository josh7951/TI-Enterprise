<template>
    <section class="section is-medium">
      <div class="box" style="width:60%;margin-left:auto;margin-right:auto;">
        <div v-if="success" class="message is-success">
          <div class="message-body">
            Password Recovery link sent! An email will be sent to the address associated with your account soon!
          </div>
        </div>
      
        <form @submit.prevent="authSubmit" class="form">
          <input type="hidden" name="_token" v-bind:value="csrf">
          <h1 class="title">Password Reset Form</h1>

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

          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" name="password" v-model="fields.password" autocomplete="new-password">
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

          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" name="password_confirmation" v-model="fields.password_confirmation" autocomplete="new-password">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
            </p>
            <div v-if="errors && errors.password_confirmation" class="message is-danger">
              <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
                {{ errors.password_confirmation[0] }}
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
                Reset Password
              </button>
            </p>
          </div>

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
        'action': this.resetpassword,
        siteKey: process.env.MIX_SITE_KEY,
      }
    },
    props: [
      'resetpassword'
    ],
  }
</script>
