<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\User;


class personaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function indexUsuario()
    {
        return User::all();
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombreDeUsuario' => 'required|unique:personas,nombreDeUsuario',
            'primernombre' => 'required',
            'segundonombre' => 'required',
            'primerapellido' => 'required',
            'segundoapellido' => 'required',
        ]);
    
        try {
            $persona = Persona::create($request->all());
    
            return response()->json($persona, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la persona'], 500);
        }
    }


    public function show($id)
    {
        $persona = Persona::find($id);
    
        if ($persona) {
            return $persona;
        } else {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $usuario = Persona::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->update($request->all());

        Bitacora::create([
            'codigo'  => 2, 
            'mensaje' => "Actualización del usuario {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);

        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Persona::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();

        Bitacora::create([
            'codigo'  => 3 ,
            'mensaje' => "Eliminación del usuario {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);

        return response()->json(['message' => 'Usuario eliminado con éxito']);
    }

    public function cambiarEstado($id)
    {
        $persona = Persona::findOrFail($id);
         $persona->habilitado = $persona->habilitado === 'si' ? 'no' : 'si';
        $persona->save();

        Bitacora::create([
            'codigo'  => 4 ,
            'mensaje' => "cambio en los permisos del ususario {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]); 
        return $persona;
    }

}
