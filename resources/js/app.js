require('./bootstrap');

import Vue from 'vue'

Vue.component('file-management', require('./components/FileManagement.vue').default);
Vue.component('files', require('./components/Files.vue').default);
Vue.component('activity', require('./components/Activity.vue').default);


import store from './store/index';

const app = new Vue({
    el: '#app',
    store
});
