
<x-alert /> <!-- inclui o componente de alerta -->
@csrf() <!-- csrf é uma diretiva do blade que gera um token de segurança -->

<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}" /> <!-- old é uma função do Laravel que retorna o valor anterior de um campo -->
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}" />
<input type="password" name="password" placeholder="Senha" />
<button type="submit">Cadastrar</button>