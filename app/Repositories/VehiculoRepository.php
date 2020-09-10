<?php

namespace App\Repositories;

use App\Vehiculo;

use App\InterfaceRepos\RepositorioInterface;

class VehiculoRepository implements RepositorioInterface
{

    protected $model;

    /**
     * VehiculoRepository constructor.
     *
     * @param Vehiculo $propietario
     */
    public function __construct(Vehiculo $propietario)
    {
        $this->model = $propietario;
    }

    public function all()
    {
        return $this->model->with('propietario:id,nombre,apellido,full_name')->get(['*']);
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
}
