<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style_auth.css">
    <title>Document</title>
</head>
<body>
    <form action="{{route('auth')}}" method="POST">
        @csrf
        <h2>Авторизация</h2>
        <label for="email">Почта:</label>
        <input type="email" id="email" name="email" placeholder="======" required>
    
        <label for="password">пароль:</label>
        <input type="password" id="password" name="password" placeholder="********" required>
    
        <button type="submit">Авторизироваться</button>
      </form>
</body>
</html>