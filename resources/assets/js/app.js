
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// VeeValidator
import VeeValidate from 'vee-validate';
import attributesNl from 'vee-validate/dist/locale/nl.js';

Vue.use(VeeValidate, {
    locale : 'nl',
    dictionary: {
        nl: { messages: attributesNl},
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// initialise the vue app
const app = new Vue({
    el: '#app',
    data : {
      crsf_token : document.head.querySelector('meta[name="csrf-token"]').content
    },
    components : {
        'agenda-component' : require('./components/agenda/AgendaComponent.vue'),
    }
});
