
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('faixa-escola', require('./components/Faixa.vue'));

/* Area carrosel */ 
Vue.component('carrosel', require('./components/carrossel/Carrossel.vue'));
Vue.component('carrosel-page', require('./components/carrossel/CarrosselPage'));
/* Fim area carrosel */


Vue.component('destaques-home', require('./components/Destaques.vue'));
Vue.component('colapse', require('./components/Colapse.vue'));


/* area do cronograma */
Vue.component('cronograma-home', require('./components/cronograma/Cronograma.vue'));
Vue.component('calendario', require('./components/cronograma/Calendario.vue'));
Vue.component('footer-cronograma', require('./components/cronograma/FooterCronograma.vue'));
Vue.component('adicionar-cronograma', require('./components/cronograma/AdicionarTarefaCronograma.vue'));


/* area admin cronograma */

Vue.component('cronograma-admin', require('./components/cronograma/admin/CronogramaAdmin.vue'));

/* fim da area-cronograma admin */


/* area painel */

Vue.component('painel-adiciona-banner', require('./components/painel/PainelAdicionaBanner.vue'));
Vue.component('painel-adicionar-user', require('./components/painel/PainelAdicionarUser.vue'));
Vue.component('painel-adicionar-evento', require('./components/painel/PainelAdicionarEvento.vue'));
Vue.component('painel-destaque', require('./components/painel/PainelDestaque.vue'));

/*fim area painel */



Vue.component('formulario-banner', require('./components/FormularioBanner.vue'));

Vue.component('menu-vertical', require('./components/MenuVertical.vue'));
Vue.component('tabela-banner', require('./components/TabelaBanner.vue'));
Vue.component('formulario-destaque', require('./components/FormularioDestaque.vue'));


/* importando as tabs */ 
    import {Tabs, Tab} from 'vue-tabs-component';
    Vue.component('tabs', Tabs);
    Vue.component('tab', Tab);
/* fim do import as tabs */




import vmodal from 'vue-js-modal'
Vue.use(vmodal)

import Notifications from 'vue-notification'
Vue.use(Notifications);

import VueCarousel from 'vue-carousel';
Vue.use(VueCarousel);


import 'vue-awesome/icons/flag';
import 'vue-awesome/icons';
import Icon from 'vue-awesome/components/Icon';

Vue.component('v-icon', Icon)


const app = new Vue({
    el: '#app'
});
