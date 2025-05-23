<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index()
    {
        // Carregar a VIEW
        return view('Users.index');
    }

    public function create()
    {
        return view('Users.create');
    }

    public function store(UserRequest $request)
    {
        // Validar o formulário
        $request->validated();

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
    }
}
