window.Vue = require('vue');
Vue.component('event', require('./components/Event.vue'));
const app = new Vue({
    el: '#app'
});
