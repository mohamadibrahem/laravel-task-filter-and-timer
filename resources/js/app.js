require('./bootstrap');

import { createApp } from 'vue';
import VueCountdown from '@chenfengyuan/vue-countdown';
import router from './router/index'

import TimerDown from './components/TimerDown.vue';
import Filter from './components/Filter.vue';

const app = createApp({});
app.component('timer-down', TimerDown);
app.component('filter-component', Filter);
app.component(VueCountdown.name, VueCountdown);
app.use(router);
app.mount('#app');
