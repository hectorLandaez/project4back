<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Rol::all();
    }

    public function create(Request $request)
    {
        $request->validate([
            'rol' => 'required|unique:roles,rol',
            'estado' => 'required',
        ]);

        try {
            $rol = Rol::create($request->all());

            return response()->json($rol, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear el rol'], 500);
        }
    }
    public function cambiarEstado($id)
{
    try {
        $rol = Rol::findOrFail($id);

        $rol->estado = $rol->estado === 'activo' ? 'inactivo' : 'activo';
        $rol->save();

        return response()->json(['message' => 'Estado del rol cambiado exitosamente.']);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al cambiar el estado del rol.', 'details' => $e->getMessage()], 500);
    }
}

}
