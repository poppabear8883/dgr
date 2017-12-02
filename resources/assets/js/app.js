
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

Vue.component('dg-top-bar', require('Components/TopBar.vue'));
Vue.component('dg-nav', require('Components/Nav.vue'));
Vue.component('dg-header', require('Components/Header.vue'));
Vue.component('dg-footer', require('Components/Footer.vue'));

Vue.component('dashboard', require('Views/admin/Dashboard.vue'));
Vue.component('admin-contacts', require('Views/admin/AdminContacts.vue'));
const app = new Vue({
    el: '#app'
});
