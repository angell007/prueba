import vehiculoService from '../services/vehiculoService'

export default ({
    state: {
        vehiculos: new Array,
        vehiculo: Object,
    },

    getters: {
        getvehiculos(state: any) {
            return state.vehiculos
        },
        getvehiculo(state: any) {
            return state.vehiculo;
        },
    },

    actions: {

        getvehiculos: async function (context: any) {
            const vehiculos = new vehiculoService;
            const data = await vehiculos.getAll()
            context.commit("vehiculos", data)

        },

        destroyvehiculo: async function (context: any, id: number) {
            const vehiculos = new vehiculoService;
            const data = await vehiculos.destroyvehiculo(id);
        },

        editvehiculo: async function (context: any, id: number) {
            const vehiculos = new vehiculoService;
            const resp = vehiculos.editvehiculo(id);
            context.commit("vehiculo", resp);
        }
    },

    mutations: {
        vehiculos(state: any, data: Array<string>) {
            console.log(['muations', data]);
            return state.vehiculos = data
        },
        vehiculo(state: any, data: any) {
            return state.vehiculo = data
        }
    },

    modules: {
    }
})
