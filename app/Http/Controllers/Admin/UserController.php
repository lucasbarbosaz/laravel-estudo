<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        User::create($request->validated());

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário criado com sucesso!'); //with é uma sessão flash que exibe uma mensagem de sucesso após a criação do usuário
    }

    public function edit (string $id) {

        $user = User::find($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado!');
        }

        return view('admin.users.edit', compact('user'));
    }

    public function update (UpdateUserRequest $request, string $id) {
        $user = User::find($id);

        if(!$user) {
            return back()->with('message', 'Usuário não encontrado!');
        }

        $data = $request->only('name', 'email');

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function show(string $id) {
        $user = User::find($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado!');
        }

        return view('admin.users.show', compact('user'));
    }

    public function destroy(string $id) {
        $user = User::find($id);

        if(!$user) {
            return redirect()->route('users.index')->with('message', 'Usuário não encontrado!');
        }

        if (Auth::user()->id === $user->id) {
            return back()->with('message', 'Você não pode deletar a si mesmo!');            
        }

        if (Gate::denies('is-admin')) {
            return back()->with('message', 'Você não tem permissão para deletar usuários!');
        }

        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Usuário deletado com sucesso!');
    }
}
