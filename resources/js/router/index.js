import { createRouter, createWebHistory } from 'vue-router'

import TimerDown from '@/components/TimerDown.vue';


const routes = [
    {
        path: '/timer',
        name: 'Timer',
        component: TimerDown
    }
];

export default createRouter({
    history: createWebHistory(),
    routes
})