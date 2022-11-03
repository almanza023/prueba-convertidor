<?php

namespace App\Http\Livewire\Usuario;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Registro extends Component
{
    public $email, $password, $name;
    public function render()
    {
        return view('livewire.usuario.registro');
    }

    public function resetInputFields(){
        $this->name="";
        $this->password="";
        $this->email="";
    }


    public function store(){
        $validated = $this->validate([
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
        ]);

            User::create(
                [
                    'name' => ($this->name),
                    'email' =>  ($this->email),
                    'password' =>  Hash::make($this->password),
                ]);
            session()->flash('message', 'DATOS REGISTRADOS EXITOSAMENTE.');
            $this->resetInputFields();
    }
}
