/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('about', require('./components/About.vue').default);
Vue.component('promo', require('./components/Promo.vue').default);
Vue.component('team', require('./components/Team.vue').default);
Vue.component('statistics', require('./components/Statistics.vue').default);
Vue.component('work', require('./components/Work.vue').default);
Vue.component('skill', require('./components/Skill.vue').default);
Vue.component('pricing', require('./components/Pricing.vue').default);
Vue.component('contact', require('./components/Contact.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
