<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Usuários</h1>

    <a href="{{ route('users.create') }} ">Adicionar usuário</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user) <!-- forelse é basicamente um foreach porém com um tratamento se não tiver registros -->
                <tr>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        -
                    </td>
                </tr>
            @empty <!-- caso não tenha encontrado nenhum registro -->
                <tr>
                    <td colspan="100">Nenhum usuário encontrado.</td>
                </tr>
            @endforelse <!-- finaliza o forelse -->
        </tbody>
    </table>

    Total de registros: {{ $users->total() }}
    Página atual: {{ $users->currentPage() }}
    {{ $users->links() }} <!-- links() é um método que gera a paginação -->
</body>
</html>