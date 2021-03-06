/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vuetify from 'vuetify';
import VueRouter from 'vue-router';
import ContentComponent from './components/layouts/ContentComponent';
import Vue from 'vue';
import Vuex from 'vuex'
import task from './modules/task'
import 'material-design-icons-iconfont/dist/material-design-icons.css'


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
Vue.use(Vuetify);
Vue.use(VueRouter);
Vue.use(Vuex);




const store = new Vuex.Store({
    modules:{
        task
    }
})


Vue.component('layout-component', require('./components/LayoutComponent.vue').default);
Vue.component('sidebar-component', require('./components/layouts/SidebarComponent.vue').default);
Vue.component('header-component', require('./components/layouts/HeaderComponent.vue').default);
Vue.component('content-component', require('./components/layouts/ContentComponent.vue').default);
Vue.component('task-component', require('./components/TaskComponent.vue').default);
Vue.component('side-menu-component', require('./components/TailwindCSS/SideMenuComponent.vue').default);
Vue.component('title-with-background', require('./components/home/TitleWithBackgroundComponent.vue').default);
Vue.component('service-card', require('./components/home/ServiceCardComponent.vue').default);
Vue.component('price-card', require('./components/home/PriceCardComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify({
        icons: {
            iconfont: 'md',
          },
    }),
    router: new VueRouter({
        routes: [
            { path: '/:menu', component: ContentComponent, props:true }
        ]
    }
    ),
    store
});
