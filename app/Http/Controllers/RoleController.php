<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
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

        Bitacora::create([
            'codigo'  => 2 ,
            'mensaje' => "se ha creado un nuevo rol",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);
    }
    public function cambiarEstado($id)
    {
        $rol = Rol::findOrFail($id);
        $rol->estado = $rol->estado === 'activo' ? 'inactivo' : 'activo';
        $rol->save();

        Bitacora::create([
            'codigo'  => 4 ,
            'mensaje' => "cambio en los permisos del rol {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]); 
        return $rol;
    }
}
