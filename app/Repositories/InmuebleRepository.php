<?php

namespace App\Repositories;

use App\vehiculo;

use App\InterfaceRepos\RepositorioInterface;

class vehiculoRepository implements RepositorioInterface
{

    protected $model;

    /**
     * vehiculoRepository constructor.
     *
     * @param vehiculo $propietario
     */
    public function __construct(vehiculo $propietario)
    {
        $this->model = $propietario;
    }

    public function all()
    {
        // return $this->model->get(['*']);
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
