import axios from 'axios'

class PropietarioService {
    async getAll() {
        const response = axios.get(`https://vehiculos.test/propietarios`);
        return (await response).data;
    }

    async getAllFiltrados(filtro: string, query: string) {
        const response = axios.get(
            `https://vehiculos.test/api/propietarios/filtrados/q?filtro=${filtro}&query=${query}`);
        return (await response).data.data;
    }
    async destroyPropietario(id: number) {
        const response = axios.delete(`https://vehiculos.test/propietarios/${id}`);
        return (await response).data;
    }
    async editPropietario(id: number) {
        const response = axios.get(`https://vehiculos.test/propietarios/${id}`);
        return (await response).data.data;
    }
}

export default PropietarioService