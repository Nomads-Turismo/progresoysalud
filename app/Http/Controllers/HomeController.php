<?php

namespace App\Http\Controllers;

use App\Http\Repository\BFSRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Client;
use App\Models\Category;
use App\Models\Rent;
use App\Models\Pack;
use App\Models\Course;
use App\Models\Extra;
use App\Models\RentRel;
use App\Models\UserRel;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\RedsysController;
use App\Models\Payments;
use App\Models\ParticularRequest;
use GuzzleHttp\Psr7\Message;

class HomeController extends Controller
{
    /**
     * Muestra la vista de login
     * @return \Illuminate\View\View
     */
    public function login(){
        // Si el usuario está autenticado, redirige a la vista principal del panel
        if (Auth::check()) {
            dd(Auth::User());
            return redirect()->route('panel');
        }

        // Si el usuario no está autenticado, muestra la vista de login
        return view('auth.login');
    }

    /**
     * Autentica al usuario
     * @param Request $request
     * @return Response $response
     */
    public function do_login(Request $request){
        // Valida los datos del formulario de login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intenta autenticar al usuario
        if (Auth::attempt($credentials)) {
            // Redirige al usuario a la vista principal del panel
            return response()->json(['success' => Auth::User()->role], 200);
        }

        // Si la autenticación falla, muestra un error
        return response()->json(['error' => 'Los datos ingresados son incorrectos.'], 401);
    }

    /**
     * Cierra la sesión del usuario
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(){
        // Cierra la sesión del usuario
        Auth::logout();

        // Redirige al usuario a la vista de login
        return redirect()->route('login');
    }

    /**
     * Muestra la vista de registro
     * @return \Illuminate\View\View
     */
    public function register(){
        // Muestra la vista de registro
        return view('auth.register');
    }

    /**
     * Registra un nuevo usuario
     * @param Request $request
     * @return String $role
     */
    public function do_register(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:255',
            'password' => 'required|string|max:8',
            'apellidos' => 'required|string|max:255',
            'entidad' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'tipologia' => 'required|string',
            'dni' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'experiencia_cpi' => 'required|string',
            'anios_experiencia' => 'nullable|integer|min:0',
            'conoce_mdt' => 'required|string',
            'acepta_tratamiento_datos' => 'required|boolean',
        ]);

        $user = new User();
        $user->nombre = $request->nombre;
        $user->apellidos = $request->apellidos;
        $user->password = $request->password;
        $user->entidad = $request->entidad;
        $user->cargo = $request->cargo;
        $user->tipologia = $request->tipologia;
        $user->dni = $request->dni;
        $user->telefono = $request->telefono;
        $user->email = $request->email;
        $user->experiencia_cpi = $request->experiencia_cpi;
        $user->anios_experiencia = $request->anios_experiencia;
        $user->conoce_mdt = $request->conoce_mdt;
        $user->acepta_tratamiento_datos = $request->acepta_tratamiento_datos;
        $user->save();

        Auth::login($user);

        return response()->json(['sucess' => true, "message"=>('Inscripción correcta')]);
    }

    /**
     * Muestra la vista principal del panel Admin
     * @return \Illuminate\View\View
     */
    public function adminPanel(){
        
        return view('admin.adminPanel',[]);   
    }


    public function reserva(){
        $admin['section'] = 'reserva';
        return view('front.reserva',['admin' => $admin]);
    }

   public function home(){
        return view('front.home',[]);
   }
}
