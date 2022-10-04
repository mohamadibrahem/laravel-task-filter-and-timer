require('./bootstrap');

import { createApp } from 'vue';
import VueCountdown from '@chenfengyuan/vue-countdown';
//import Select2 from 'vue3-select2-component';
//import { BootstrapVue } from 'bootstrap-vue'
import router from './router/index'


import TimerDown from './components/TimerDown.vue';
import Filter from './components/Filter.vue';

const app = createApp({});
app.component('timer-down', TimerDown);
app.component('filter-component', Filter);
app.component(VueCountdown.name, VueCountdown);
//app.use(BootstrapVue)
//app.component('Select2', Select2)
app.use(router);
app.mount('#app');
