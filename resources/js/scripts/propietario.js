import axios from "axios";

export default {
    data: () => ({
        dialog: false,
        headers: [
            {
                text: "Identificacion",
                align: "start",
                sortable: false,
                filterable: false,
                value: "identificacion",
            },
            { text: "Nombre", value: "nombre" },
            { text: "Apellido", value: "apellido" },
            { text: "Direccion", value: "direccion" },
            { text: "Telefono", value: "telefono" },
            { text: "Vehiculos", value: "vehiculos" },
            { text: "Actions", value: "actions", sortable: false },
        ],

        customFilter:{
            filtro: "",
            query: "",
        },
        mostrar: false,
        editedIndex: -1,
        editedPropietario: {
            nombre: "",
            apellido: "",
            email: "",
            identificacion: "",
            tipo_identificacion: "",
            ciudad: "",
            direccion: "",
            telefono: ""
        },
        editedVehiculo: {
            color: "",
            marca: "",
            modelo: "",
            placa: "",
        },
        defaultVehiculo: {
            color: "",
            marca: "",
            modelo: "",
            placa: "",
        },
        defaultPropietario: {
            nombre: "",
            apellido: "",
            email: "",
            identificacion: "",
            tipo_identificacion: "",
            ciudad: "",
            direccion: "",
            telefono: ""
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1
                ? "Nuevo Propietario"
                : "Editar Propietario";
        },
        propietariosAll() {
            console.log('propiedad conmutada');
            return this.$store.getters.getPropietarios;
        },
    },

    watch: {
        dialog(val) {
            val || this.close();
        },
    },

    created() {
        this.getCambio();
    },

    methods: {
        async getCambio() {
            await this.$store.dispatch("getPropietarios");
        },

        async buscar() {
            if (this.customFilter.filtro && this.customFilter.query) {
                await this.$store.dispatch("getPropietariosFiltrados", this.customFilter);
            }
        },

        edit(item) {
            this.editedIndex = this.propietariosAll.indexOf(item);
            this.editedPropietario = Object.assign({}, item);
            this.dialog = true;
        },

        destroy(item) {
            const index = this.propietariosAll.indexOf(item);
            confirm("Are you sure you want to delete this item?") &&
                this.$store.dispatch("destroyArrendatario", item.id).then((x) => {
                    this.propietariosAll.splice(index, 1);
                    alert("Eliminado correcto");
                    this.getCambio();
                });
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedPropietario = Object.assign({}, this.defaultPropietario);
                this.editedIndex = -1;
            });
        },

        async save() {
            if (this.editedIndex > -1) {
                try {
                    const response = await axios.patch(
                        `https://vehiculos.test/api/propietarios/${this.editedPropietario.id}`,
                        this.editedPropietario
                    );
                    this.getCambio();
                } catch (error) {
                    console.log(error);
                }
            } else {
                try {
                    const response = await axios.post(
                        "https://vehiculos.test/api/propietarios",
                        Object.assign(this.editedPropietario, this.editedVehiculo)
                    );
                    if (response.status == 200) this.close();
                    this.getCambio();
                } catch (error) {
                    console.log(error);
                }
            }
        },
    },
};
