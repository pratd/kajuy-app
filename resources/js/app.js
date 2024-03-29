/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
import Vuetify from 'vuetify';
Vue.use(Vuetify);
Vue.use(VueRouter);

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
Vue.component('welcome-vue', require('./components/Welcome.vue').default);
Vue.component('slider-vue', require('./components/Slider.vue').default);
Vue.component('profile-vue', require('./components/Profile.vue').default);
Vue.component('login-vue', require('./components/Login.vue').default);
Vue.component('edit-service-vue', require('./components/Edit-service.vue').default);
Vue.component('category-vue', require('./components/Category-details.vue').default);
Vue.component('categories-vue', require('./components/Categories.vue').default);
Vue.component('bookings-vue', require('./components/Bookings.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const router = new VueRouter({
    mode:'history',
    routes:[
        // {
        //     path: '/',
        //     name:'home',
        //     component: welcome-vue
        // },
        // {

        // }

    ],
});
const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify(),
});
