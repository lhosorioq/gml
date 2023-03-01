<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;
    protected $queryString = [
        'buscar' => ['except' => ''],
        'porPagina' => ['except' => '4']
    ];

    public $buscar = '';
    public $pagina = '1';
    public $porPagina = '4';

    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::where('nombres', 'LIKE', "%{$this->buscar}%")
                ->orWhere('apellidos', 'LIKE', "%{$this->buscar}%")
                ->orWhere('email', 'LIKE', "%{$this->buscar}%")
                ->paginate($this->porPagina)
        ]); // ->layout('shared.app')
    }

    public function limpiar()
    {
        $this->buscar = '';
        $this->pagina = '1';
        $this->porPagina = '4';
    }
}
