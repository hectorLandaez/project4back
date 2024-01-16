<?php

// app/Http/Middleware/LogRequests.php

namespace App\Http\Middleware;

use Closure;
use App\Models\Bitacora;

class LogRequests{}
/* { */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('put')) {
            Bitacora::create([
                'codigo'  => 1, 
                'mensaje' => $this->getLogMessage($request),
                'fecha'   => now()->toDateString(),
                'hora'    => now()->toTimeString(),
            ]);
        }
        else if (($request->isMethod('POST'))) {
            Bitacora::create([
                'codigo'  => 2, 
                'mensaje' => $this->getLogMessage($request),
                'fecha'   => now()->toDateString(),
                'hora'    => now()->toTimeString(),
            ]);
        }

        else if (($request->isMethod('DELETE'))) {
            Bitacora::create([
                'codigo'  => 3, 
                'mensaje' => $this->getLogMessage($request),
                'fecha'   => now()->toDateString(),
                'hora'    => now()->toTimeString(),
            ]);
        }

        return $next($request);
    }

    private function getLogMessage($request)
    {
        // Verificar el tipo de solicitud y generar mensajes personalizados
        switch ($request->method()) {
            /* case 'POST':
                return "Login"; */
            
            case 'PUT':
                $numeroUsuario = $request->route('id');
                // Crear el mensaje personalizado
                return "Se actualizó el usuario {$numeroUsuario}";

            case 'DELETE':
                // Obtener el número de usuario de la URL
                $numeroUsuario = $request->route('id');
                // Crear el mensaje personalizado
                return "Eliminación del usuario {$numeroUsuario}";

            default:
                // Devolver un mensaje genérico para otros tipos de solicitud
                return 'Solicitud ' . $request->method() . ' a ' . $request->fullUrl();
        }
    }
/* } */



