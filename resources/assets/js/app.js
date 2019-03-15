
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

const Vue = window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import VueCarousel from 'vue-carousel';
import VModal from 'vue-js-modal'

Vue.use(VModal);
Vue.use(VueCarousel);

//Components
Vue.component('media-section', require('Components/MediaSection.vue'));
Vue.component('divider-section', require('Components/DividerSection.vue'));
Vue.component('tabs', require('Components/Tabs.vue'));

// Admin Views (Pages)
Vue.component('dashboard', require('Views/admin/Dashboard.vue'));
Vue.component('admin-galleries', require('Views/admin/AdminGalleries.vue'));
Vue.component('admin-photos', require('Views/admin/AdminPhotos.vue'));

// Global Layout Partials
Vue.component('dg-top-bar', require('Views/partials/TopBar.vue'));
Vue.component('dg-nav', require('Views/partials/Nav.vue'));
Vue.component('dg-header', require('Views/partials/Header.vue'));
Vue.component('dg-footer', require('Views/partials/Footer.vue'));

// Page Partials
Vue.component('dg-our-team', require('Views/partials/about/OurTeam.vue'));
Vue.component('dg-featured-services', require('Views/partials/welcome/FeaturedServices.vue'));
Vue.component('dg-call-anytime', require('Views/partials/CallAnytime.vue'));
Vue.component('dg-why-choose-us', require('Views/partials/WhyChooseUs.vue'));
Vue.component('dg-tabbed-services', require('Views/partials/services/TabbedServices.vue'));
Vue.component('dg-contact-form', require('Views/partials/contact/ContactForm.vue'));
Vue.component('dg-refer-form', require('Views/partials/giveaways/ReferForm.vue'));
Vue.component('dg-join-form', require('Views/partials/join/JoinForm.vue'));
Vue.component('dg-galleries', require('Views/partials/Galleries.vue'));
Vue.component('dg-photos', require('Views/partials/Photos.vue'));

const App = new Vue({
  el: '#app',
});
