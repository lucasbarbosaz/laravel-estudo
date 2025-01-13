@if (session()->has('success')) <!-- session é uma variável global do Laravel que contém as mensagens de sessão -->
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session()->has('message')) <!-- session é uma variável global do Laravel que contém as mensagens de sessão -->
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error')) <!-- session é uma variável global do Laravel que contém as mensagens de sessão -->
    <div class="bg-danger-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        {{ session('message') }}
    </div>
@endif

@if ($errors->any()) <!-- errors é uma variável global do Laravel que contém os erros de validação -->
    <ul>
        @foreach ($errors->all() as $error)
            <li class="text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif