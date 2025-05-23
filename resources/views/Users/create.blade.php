<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>Cadastrar Usuário</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        @method('POST')
        
        <label for="name">Nome: </label>
        <input type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}"><br><br>
        {{-- Show Erro --}}
        @error('name')
            <div style="color: red">{{ $message }}</div>
        @enderror
        
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="e-mail do usuário" value="{{ old('email') }}"><br><br>
        {{-- Shoew Erro --}}
        @error('email')
            <div style="color: red">{{ $message }}</div>            
        @enderror
        
        <label for="password">Senha: </label>
        <input type="password" name="password" placeholder="Senha com no mínimo 6 caracteres" value="{{ old('password') }}"><br><br>
        {{-- Show Erro --}}
        @error('password')
            <div style="color: red">{{ $message }}</div>            
        @enderror
        
        <button type="submit">Cadastrar</button>
        
    </form>
    <hr>
    <br>
    <a href="{{ route('user.index') }}">Listar</a>
</body>
</html>