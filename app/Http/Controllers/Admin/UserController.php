<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        //$users = User::all();
        $users = User::paginate(20); //paginate facilita na paginação dos dados

        return view('admin.users.index', compact('users'));

    }

    public function create() {
        return view('admin.users.create');
    }

    public function store(StoreUserRequest $request) {
        User::create($request->all());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso!'); //with é uma sessão flash que exibe uma mensagem de sucesso após a criação do usuário
    }
}
