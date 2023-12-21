<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_otziv.css">
     <title>КТОД</title>
</head>
<body>
<div class = "logo">
  <a href="{{route('index')}}"><img src="img/logo.png" alt="logo"></a>
</div>
<h1>КОММЕРЧЕСКИЙ ТЕАТР ОПЕРЫ И ДРАММЫ</h1>
<hr color = "#985454;" />
<nav>
  <a href="{{route('news')}}">НОВОСТИ</a>
          <a href="{{route('afisha')}}">АФИША</a>
          <a href="{{route('teatr')}}">ТЕАТР</a>
          <a href="{{route('staff')}}">ПЕРСОНАЛИИ</a>
          <a href="{{route('otziv')}}">ОТЗЫВЫ</a>
  </nav>


  <form action="#" method="post">
    <label for="firstName">Имя:</label>
    <input type="text" id="firstName" name="firstName" required>

    <label for="lastName">Фамилия:</label>
    <input type="text" id="lastName" name="lastName" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Отзыв:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

     <div class="button-container">
      <button type="submit">Отправить</button>
    </div>
  </form>

  <footer>
    <div>
      <div class="logo2">
        <img src="img/logo2.png" alt="logo2">
      </div>
    </div>
    <div>
        <h4>КТОД ТО Комерческий театр оперы<br>
          и драммы<br>
          Россия, Таврическая область, 299001 г. Севастополь, ул. Сиреневая, 27</h4>
  
    </div>
    <div>
        <h3>МЕНЮ</h3>
        <div class="menu">
          <a href="{{route('news')}}">НОВОСТИ</a>
        <a href="{{route('afisha')}}">АФИША</a>
        <a href="{{route('teatr')}}">ТЕАТР</a>
        <a href="{{route('staff')}}">ПЕРСОНАЛИИ</a>
        <a href="{{route('otziv')}}">ОТЗЫВЫ</a>
      </div>
    </div>
  
  </footer> 
  </body>
  </html>