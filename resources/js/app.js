/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue').default;
//Bootstrap Vue
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

//VueRouter
import VueRouter from 'vue-router'
Vue.use(VueRouter)
import {routes} from './routes/routes';
const router = new VueRouter({
    routes,
    mode:'history',
})
//Store import
import store from './store'

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
require('./global-components');
// Instance of vue
const app = new Vue({
    el: '#app',
    router,
    store,
});
