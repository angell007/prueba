<?php

namespace App\Repositories;

use App\Propietario;

use App\InterfaceRepos\RepositorioInterface;
use App\Vehiculo;

class PropietarioRepository implements RepositorioInterface
{

    protected $model;

    /**
     * PropietarioRepository constructor.
     *
     * @param Propietario $propietario
     */
    public function __construct(Propietario $propietario)
    {
        $this->model = $propietario;
    }

    public function all()
    {
        return $this->model->with('vehiculos:propietario_id,placa')->get(['*']);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->model->where('id', $id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function find($id)
    {
        $propietario = $this->model->find($id);
        return $propietario;
    }

    public function filtrar($filtro, $query)
    {
        switch ($filtro) {
            case 'Nombre':
                return  Propietario::where('nombre', 'like', '%' . $query . '%')->with('vehiculos')->get(['*']);
                break;
            case 'Marca':
                return   Propietario::with('vehiculos')->whereHas('vehiculos',  function ($q) use ($query) {
                    return $q->where('marca', 'like', '%' . $query . '%');
                })->get();
                break;
            case 'Cedula':
                return  Propietario::where('identificacion', 'like', '%' . $query . '%')->with('vehiculos')->get(['*']);
                break;
        }
    }
}
