require('./bootstrap');

import Vue from 'vue'

import Segments from './components/SegmentsComponent.vue'
import Subscription from './components/SubscriptionComponent.vue'

const app = new Vue({
    el: '#app',
    components: {
        Segments: Segments,
        Subscription: Subscription,
    },
});