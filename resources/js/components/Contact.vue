<template>
<div>
  <nav class="breadcrumb" aria-label="breadcrumbs">
    <ul>
      <li><a href="/">Home</a></li>
      <li class="is-active"><a href="#" aria-current="page">Contact Us</a></li>
    </ul>
  </nav>

  <div class="columns">
    <!--left column-->
    <div class="column is-half">
      <h1 class="title is-1"> True Image Enterprise</h1>
      <hr>
      <p>Interested in joining our team? Send us an email or give us a call! We look forward to working with you! For all order inquiries, please email us at <a href="mailto:orders@ti-enterprises.com?Subject=Order%20Inquiry" target="_top">orders@ti-enterprises.com</a>.</p>
      <br><br>
      <p>209 W Ridgecrest Blvd. Suite 132<br>Ridgecrest, California 93555</p>
      <p><a href="mailto:ray@ti-enterprises.com?Subject=TI-Enterprise%20Inquiry" target="_top">ray@ti-enterprise.com</a></p>
      <p><a href="tel:+1-760-382-1022">(760)382-1022</a></p>
    </div>
    <!--right column-->
    <div class="column is-two-fifths">
      <div v-if="success" class="message is-success">
        <div class="message-body">
          Message sent! We have received your message and would like to thank you for writing to us. We will get back to you as soon as possible!
        </div>
      </div>
      <form @submit.prevent="formSubmit" class="form">
        <input type="hidden" name="_token" v-bind:value="csrf">
        <!--Start Contact Form-->
        <!--Name Field-->
        <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" name="name" v-model="fields.name" placeholder="Your Name">
          </div>
          <div v-if="errors && errors.name" class="message is-danger">
            <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
              {{ errors.name[0] }}
            </div>
          </div>
        </div>
        <!--Email Field-->
        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input" type="email" name="email" v-model="fields.email" placeholder="hello@example.com">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
          </div>
          <div v-if="errors && errors.email" class="message is-danger">
            <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
              {{ errors.email[0] }}
            </div>
          </div>
        </div>
        <!--Message Area-->
        <div class="field">
          <label class="label">Message</label>
          <div class="control">
            <textarea name="message" v-model="fields.message" class="textarea" placeholder="Your message here . . . "></textarea>
            <div v-if="errors && errors.message" class="message is-danger">
              <div class="message-body" style="padding:.25em .75em;margin-top:.25em;">
                {{ errors.message[0] }}
              </div>
            </div>
          </div>
        </div>
          <div>
            <google-re-captcha-v3
              v-model="fields.gRecaptchaResponse"
              ref="captcha"
              :site-key="siteKey"
              id="captcha"
              action="formSubmit"
            ></google-re-captcha-v3> <!-- removed inline -->
          </div>
        <button class="button is-info">Send Message</button>
      </form>
    </div>
  </div>
  <br>
</div>
</template>

<script>
  import formMixin from '../formMixin.js';

  export default {
    mixins: [ formMixin ],
    data() {
      return {
        'action': '/contact',
        siteKey: process.env.MIX_SITE_KEY,
        
      }
    }

  }
</script>