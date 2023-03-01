<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categoria;
use App\Mail\MensajeCorreo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PaisController as Paises;

class UserController extends Controller
{
    protected $paises;

    public function __construct(Paises $paises)
    {
        $this->paises = $paises;
    }

    public function index(Request $request)
    {
        if ( isset ( $request->buscar ) ) {
            $users = User::where("nombres",'like', "%" . $request->buscar . "%")->take(10)->get();
        } else {
            $users = User::paginate(12);
        }

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function table()
    {
        $users = User::paginate();

        return view('user.table', [
            'users' => $users
        ]);
    }

    public function new()
    {
        $paises = $this->paises->all();
        $categorias = Categoria::all();

        return view('user.new', [
            'paises' => $paises,
            'categorias' => $categorias,
        ]);
        //return User::all();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombres'   => 'required|max:100|min:5|not_in:0,1,2,3,4,5,6,7,8,9',
            'apellidos' => 'required|max:100|not_in:0,1,2,3,4,5,6,7,8,9',
            'cedula'    => 'numeric|required|unique:users',
            'email'     => 'required|email|max:150|unique:users',
            'direccion' => 'max:180',
            'celular'   => [
                'required',
                'numeric',
                'max:3999999999',
                'min:3000000000',
            ],
        ]);

        User::create([
            'nombres'   => $request->nombres,
            'apellidos' => $request->apellidos,
            'cedula'    => $request->cedula,
            'email'     => $request->email,
            'direccion' => $request->direccion,
            'categoria_id' => $request->categoria,
            'pais'      => $request->pais,
            'celular'   => $request->celular,
            'password'  => Hash::make($request->cedula),
        ]);

        $this->correoAdmin('lhosorio@gmail.com'); // administrador del sistema

        $mensajeUsuario = [
            'tipo' => 'usuario',
            'mensaje' => $request->nombres . ' ' . $request->apellidos
        ];
        $this->correoUsuario($request->email, $mensajeUsuario);
        
        return redirect()->route('index');
    }

    public function correoAdmin($to)
    {
        $users = User::select('pais', DB::raw('count(*) as total'))
            ->groupBy('pais')
            ->pluck('total','pais')
            ->toArray();

            // dd($users);
        $mensajeUsuario = [
            'tipo' => 'admin',
            'mensaje' => $users
        ];

        Mail::to($to)
            ->queue(new MensajeCorreo($mensajeUsuario));
    }

    public function correoUsuario($to, $msg)
    {
        Mail::to($to)
            ->queue(new MensajeCorreo($msg));
    }

    public function edit(User $user)
    {
        $paises = $this->paises->all();
        $categorias = Categoria::all();
        
        return view('user.edit', [
            'user'       => $user,
            'paises'     => $paises,
            'categorias' => $categorias,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'nombres'   => 'required|max:100|min:5|not_in:0,1,2,3,4,5,6,7,8,9',
            'apellidos' => 'required|max:100|not_in:0,1,2,3,4,5,6,7,8,9',
            'cedula'    => 'numeric|required',
            'email'     => 'required|email|max:150',
            'direccion' => 'max:180',
            'celular'   => [
                'required',
                'numeric',
                'max:3999999999',
                'min:3000000000',
            ],
        ]);

        // $user = User::find($user);
        $user->nombres   = $request->nombres;
        $user->apellidos = $request->apellidos;
        $user->cedula    = $request->cedula;
        $user->email     = $request->email;
        $user->direccion = $request->direccion;
        $user->categoria_id = $request->categoria;
        $user->pais      = $request->pais;
        $user->celular   = $request->celular;
        $user->save();

        return redirect()->route('index');
    }

    public function destroy(User $user)
    {
        //
    }

}
