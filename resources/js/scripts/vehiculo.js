export default {
    data: () => ({
        dialog: false,
        headers: [
            { text: "Propietario", value: "propietario.nombre" },
            { text: "Marca", value: "marca" },
            { text: "Modelo", value: "modelo" },
            { text: "Color", value: "color" },
            { text: "Placa", value: "placa" },
        ],
        loading: true,
        search: "",
        mostrar: false,
        editedIndex: -1,
        editedItem: {
            nombre: "",
            identificacion: "",
            apellido: "",
            tipo_identificacion: "",
        },
        defaultItem: {
            nombre: "",
            identificacion: "",
            apellido: "",
            tipo_identificacion: "",
        },
    }),

    computed: {
        formTitle() {
            return this.editedIndex === -1
                ? "Nuevo vehiculo"
                : "Editar vehiculo";
        },
        vehiculosAll() {
            this.loading = false
            return this.$store.getters.getvehiculos;
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
            await this.$store.dispatch("getvehiculos");
        },

        edit(item) {
            this.editedIndex = this.vehiculosAll.indexOf(item);
            this.editedItem = Object.assign({}, item);
            this.dialog = true;
        },

        destroy(item) {
            const index = this.vehiculosAll.indexOf(item);
            confirm("Are you sure you want to delete this item?") &&
                this.$store.dispatch("destroyArrendatario", item.id).then((x) => {
                    this.vehiculosAll.splice(index, 1);
                    alert("Eliminado correcto");
                    this.getCambio();
                });
        },

        close() {
            this.dialog = false;
            this.$nextTick(() => {
                this.editedItem = Object.assign({}, this.defaultItem);
                this.editedIndex = -1;
            });
        },

        async save() {
            if (this.editedIndex > -1) {
                console.log([this.editedItem.id, this.editedIndex]);
                try {
                    const response = await axios.patch(
                        `https://vehiculos.test/vehiculos/${this.editedItem.id}`,
                        this.editedItem
                    );
                    this.getCambio();
                } catch (error) {
                    console.log(error);
                }
            } else {
                try {
                    const response = await axios.post(
                        "https://vehiculos.test/vehiculos",
                        this.editedItem
                    );
                    this.getCambio();
                } catch (error) {
                    console.log(error);
                }
            }
            this.close();
        },
    },
};
