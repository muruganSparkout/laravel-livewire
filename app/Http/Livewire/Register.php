<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class Register extends Component
{
    public $form = [
        'name'                  => '',
        'email'                 => '',
        'password'              => '',
        'password_confirmation' => '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.name'     => 'required',
            'form.password' => 'required|confirmed',
        ]);
        //dd($this->form);
        User::create($this->form);
        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.register');
    }
}
