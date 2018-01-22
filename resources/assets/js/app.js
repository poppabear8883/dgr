
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Components
Vue.component('media-section', require('Components/MediaSection.vue'));
Vue.component('divider-section', require('Components/DividerSection.vue'));
Vue.component('tabs', require('Components/Tabs.vue'));

// Admin Views (Pages)
Vue.component('dashboard', require('Views/admin/Dashboard.vue'));
Vue.component('admin-contacts', require('Views/admin/AdminContacts.vue'));
Vue.component('admin-galleries', require('Views/admin/AdminGalleries.vue'));

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

const app = new Vue({
    el: '#app',
});
