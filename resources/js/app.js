require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import Navbar from './components/NavBar';

const app = new Vue({
    el: '#app',
    components: {
        Navbar
    },
    vuetify: new Vuetify()
});
