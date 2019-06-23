
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueTimepicker from 'vue2-timepicker'

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
// Vue.component('search-bus', require('./components/SearchBus.vue'));
Vue.component('create-seat-layout', require('./components/CreateLayout.vue'));
Vue.component('seat-layout', require('./components/SeatLayouts.vue'));
Vue.component('time-picker', VueTimepicker);
Vue.component('pick-time', require('./components/PickTime'));
Vue.component('agent-ticket-booking', require('./components/AgentTicketBooking'));

const app = new Vue({
    el: '#app'
});



require('./typeahead');
require('./bootstrap-tagsinput.min');

require('./main');
