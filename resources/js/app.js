require('./bootstrap');

window.Vue = require('vue');

Vue.component('homepage', require('./components/HomepageComponent.vue').default);

import VueClazyLoad from 'vue-clazy-load';

Vue.use(VueClazyLoad);

const app = new Vue({
    el: '#app',
});
