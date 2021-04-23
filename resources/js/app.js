require('./bootstrap');

import Vue from 'vue'

Vue.component('file-management', require('./components/FileManagement.vue').default);
Vue.component('files', require('./components/Files.vue').default);

const app = new Vue({
    el: '#app',
});
