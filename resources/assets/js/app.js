window.Vue = require('vue');
Vue.component('event', require('./components/Event.vue').default);
const app = new Vue({
    el: '#app'
});
