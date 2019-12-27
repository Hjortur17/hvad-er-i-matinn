require('./bootstrap');

window.Vue = require('vue');

Vue.component('survey', require('./components/SurveyComponent.vue').default);

const app = new Vue({
    el: '#app',
});
