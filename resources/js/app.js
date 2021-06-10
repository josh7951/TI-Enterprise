/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
/** Components used on brochure site */
Vue.component('home-content', require('./components/HomeComponent.vue').default);
Vue.component('team-content', require('./components/TeamComponent.vue').default);
Vue.component('store-content', require('./components/StoreComponent.vue').default);
Vue.component('contact-content', require('./components/Contact.vue').default);
Vue.component('caldwell-content', require('./components/CaldwellComponent.vue').default);
Vue.component('navbar', require('./components/Navbar.vue').default);

/** Components for admin panel */
Vue.component('dashbar', require('./components/NavbarDash.vue').default);
Vue.component('aside-menu', require('./components/AsideMenu.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
