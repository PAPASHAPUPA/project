<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style_reg.css">
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
    @csrf
<div class="container-form">
    <div class="reg-form">
        <label for="email" class="email">Введите вашу почту</label>
        <input type="email" class="email" name="email">
        @error('email')
            {{$message}}
        @enderror
        <label for="name" class="name">Введите ваше имя</label>
        <input type="name" class="name" name="name">
        @error('name')
            {{$message}}
        @enderror
        <label for="password" class="password">Введите пароль</label>
        <input type="password" class="password" name="password">
        @error('password')
            {{$message}}
        @enderror
        <button type="submit" class="button">Зарегистрироваться</button>
        <p class="auth-text">Вы уже есть в системе?<a href="{{route('auth')}}">Авторизироваться</a></p>
    </div>
</div>
</form>
</body>
</html>