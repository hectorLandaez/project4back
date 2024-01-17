<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Persona;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);
    
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    
        $user = auth()->user();
    
        $mensaje = "Inicio de sesión {$user->id}";
    
        Bitacora::create([
            'codigo'  => 1, 
            'mensaje' => $mensaje,
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);
    
        return $this->respondWithToken($token);
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        $user = auth()->user();
    
        $mensaje = "cierre de sesion {$user->id}";
        Bitacora::create([
            'codigo'  => 4, 
            'mensaje' => $mensaje,
            'fecha'   => now()->toDateString(),
            'hora'    => now()->toTimeString(),
        ]);

        
    Bitacora::create([
        'codigo'  => 6 ,
        'mensaje' => "El usuario" + $user->id + 'cerro sesion',
        'fecha'   => now()->toDateString(),
        'hora'    => now()->toTimeString(),
    ]);
        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth()->user(),
            'expires_in' => auth()->factory()->getTTL() * 60
            
        ]);
    }

    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required|string|email|max:100|unique:users',
        'password' => 'required|string|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json($validator->errors()->toJson(), 400);
    }

    // Crear usuario en la tabla users
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    // Crear entrada en la tabla personas asociada al usuario
    $persona = Persona::create([
        'idusuario' => $user->id, 
        'nombreDeUsuario' => $user->name,
        'email' => $request->email,
        'idpersona'=> $user->id,
   
    ]);

    Bitacora::create([
        'codigo'  => 5 ,
        'mensaje' => "registro de un nuevo usuario",
        'fecha'   => now()->toDateString(),
        'hora'    => now()->toTimeString(),
    ]);

    return response()->json([
        'message' => '¡Usuario registrado exitosamente!',
        'user' => $user,
        'persona' => $persona, 
    ], 201);
}
}