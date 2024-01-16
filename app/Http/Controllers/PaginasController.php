<?php

namespace App\Http\Controllers;

use App\Models\Paginas;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index()
    {
        return Paginas::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'URL' => 'required',
            'Name' => 'required',
            'Descripcion' => 'required',
        ]);
    
        try {
            $persona = Paginas::create($request->all());
    
            return response()->json($persona, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al crear la persona'], 500);
        }
    }

    public function update(Request $request, $id)
    {
        $usuario = Paginas::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->update($request->all());

        Paginas::create([
            'codigo'  => 2, 
            'mensaje' => "Actualización de la pagina {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);

        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Paginas::find($id);

        if (!$usuario) {
            return response()->json(['message' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();

        Paginas::create([
            'codigo'  => 3 ,
            'mensaje' => "Eliminación de la pagina {$id}",
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);

        return response()->json(['message' => 'Usuario eliminado con éxito']);
    }

}
