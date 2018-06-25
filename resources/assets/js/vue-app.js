import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import VueAxios from 'vue-axios'

import {messages} from 'vue-bootstrap4-calendar';

// All template components
import NavbarComponent from './components/pages/NavbarComponent'
import FooterComponent from './components/pages/FooterComponent'
import LoginComponent from './components/auth/LoginComponent'
import ModalComponent from './components/templates/ModalComponent'

// All Dashboard components
import CalendarComponent from './components/pages/CalendarComponent'

import { routes } from './routes'

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

axios.defaults.baseURL = 'http://zkag.local/api';

const router = new VueRouter({
  mode: 'history',
  routes
});

Vue.router = router;

Vue.use(require('@websanova/vue-auth'), {
  auth : require('@websanova/vue-auth/drivers/auth/bearer.js'),
  http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
  router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js'),
});

new Vue({
  el: '#app',
  components: {
    NavbarComponent,
    FooterComponent,
    LoginComponent,
    ModalComponent,
    // Dashboard components
    CalendarComponent
  },
  router : router
});