<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropietarioStoreRequest;
use App\Http\Requests\PropietarioUpdateRequest;
use App\Repositories\PropietarioRepository;
use App\Repositories\VehiculoRepository;
use Illuminate\Support\Facades\DB;

class PropietarioController extends Controller
{

    private $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PropietarioRepository $propietarioRepository)
    {
        $this->repository = $propietarioRepository;
    }

    public function index()
    {
        if (request()->wantsJson()) {
            return $this->repository->all();
        }
        return view('propietario.index');
    }

    public function show($id)
    {
        try {
            $propietario = $this->repository->find($id);
            if (null == $propietario) {
                return response()->json(['error' =>  'Propietario no found', 'code' => 404], 404);
            }
            return response()->json(['data' =>  $propietario, 'code' => 200], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(), 'code' => 500], 500);
        }
    }

    public function store(PropietarioStoreRequest $propietarioRequest, VehiculoRepository $vehiculoRepository)
    {
        $dataPropietario = $propietarioRequest->except(['color', 'placa', 'modelo', 'marca']);
        $dataVehiculo = $propietarioRequest->only(['color', 'placa', 'modelo', 'marca']);
        DB::beginTransaction();
        try {
            $propietario = $this->repository->Create($dataPropietario);
            $vehiculo = $vehiculoRepository->Create(array_merge(['propietario_id' => $propietario->id], $dataVehiculo));
            DB::commit();
            return response()->json(['data' => [$propietario, $vehiculo], 'code' => 200], 200);
        } catch (\Throwable $th) {
            DB::rollback();
            return response()->json(['error' => $th->getMessage(), 'code' => 200], 200);
        }
    }

    public function update(PropietarioUpdateRequest $propietarioUpdateRequest, $id)
    {
        try {
            if ($this->repository->update($propietarioUpdateRequest->all(), $id)) {
                return response()->json(['error' =>  'Update Correcto', 'code' => 200], 200);
            }
            return response()->json(['error' =>  'Operacion no realizada. Posible error: Propietario no found', 'code' => 404], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(), 'code' => 500], 500);
        }
    }

    public function destroy($id)
    {
        try {
            if (($this->repository->delete($id))) {
                return response()->json(['data' =>  'Eliminado Correcto', 'code' => 200], 200);
            }
            return response()->json(['error' =>  'Operacion no realizada. Posible error: Propietario no found', 'code' => 404], 404);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(), 'code' => 500], 500);
        }
    }

    public function filtrar()
    {
        try {
            $data = $this->repository->filtrar(request()->get('filtro'), request()->get('query'));
            return response()->json(['data' =>   $data, 'code' => 200], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage(), 'code' => 500], 500);
        }
    }
}
