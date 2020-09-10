import axios from 'axios'

class vehiculoService {
    async getAll() {
        const response = axios.get(`https://vehiculos.test/vehiculos`);
        return (await response).data;
    }
    async destroyvehiculo(id: number) {
        const response = axios.delete(`https://vehiculos.test/vehiculos/${id}`);
        return (await response).data;
    }
    async editvehiculo(id: number) {
        const response = axios.get(`https://vehiculos.test/vehiculos/${id}`);
        return (await response).data.data;
    }
}

export default vehiculoService