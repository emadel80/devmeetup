require('./bootstrap');

window.Vue = require('vue');
Vue.config.productionTip = false;

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import Navbar    from './components/Navbar';
import LoginForm from './components/LoginForm';

const app = new Vue({
    el: '#app',
    components: {
        Navbar,
        LoginForm
    },
    vuetify: new Vuetify()
});
