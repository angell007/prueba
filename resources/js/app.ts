// Debes crear un endpoint que permita crear un vehículo y en la misma petición sea
// asociado a un nuevo propietario. Dicho endpoint deberá garantizar la información de forma
// tal que en caso de generarse un error no se almacenen datos &quot;basura&quot; en la base de datos.

window.Vue = require('./vue');

import storePropietarios from "./store/propietarios"
import storevehiculos from "./store/vehiculo"

import Vue from "vue"
import Vuex from 'vuex'
import Vuetify from 'vuetify'
import axios from 'axios'


Vue.use(Vuex)
Vue.use(Vuetify)
Vue.config.productionTip = false

axios.interceptors.response.use(function (response) {
    console.log(['Testeando...', response]);
    return response;
}, function (error) {
    if (error.response.status == 419 || error.response.status == 401) {
        window.location.href = 'http://vehiculos.test/'
    }
});

const store = new Vuex.Store({
    modules: {
        propietario: storePropietarios,
        vehiculo: storevehiculos,
    }
})

const vuetify = new Vuetify()

Vue.component('propietario-component', require('./components/Propietario/CrudPropietarioComponent.vue').default);
Vue.component('vehiculo-component', require('./components/vehiculo/CrudvehiculoComponent.vue').default);

const app = new Vue({
    el: '#app',
    store,
    vuetify,

})