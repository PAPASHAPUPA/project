<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style_afisha.css">
    
     <title>КТОД</title>
</head>
<body>
<div class = "logo">
  <a href="{{route('index')}}"><img src="img/logo.png" alt="logo"></a>
</div>
<a href="{{route('index')}}"><h1>КОММЕРЧЕСКИЙ ТЕАТР ОПЕРЫ И ДРАММЫ</h1></a>
<hr color = "#985454;" />
<nav>
  <a href="{{route('news')}}">НОВОСТИ</a>
  <a href="{{route('afisha')}}">АФИША</a>
    <a href="{{route('teatr')}}">ТЕАТР</a>
    <a href="{{route('staff')}}">ПЕРСОНАЛИИ</a>
    <a href="#">ОТЗЫВЫ</a>
    @guest
    <a href="{{route('reg')}}">РЕГИСТРАЦИЯ</a>
    @endguest
    @auth
    <a href="{{route('logout')}}">ВЫЙТИ</a>
    @endauth
  </nav>

  <div class="afisha">
    
    <h2>АФИША</h2>
  </div>

  <div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
          @foreach ($all_theatrs as $theatr)
            <div class="product">
                <div class="image">
                    <img src="img/{{$theatr->image}}" alt="product">
                </div>
                <div class="info">
                    <h3>{{$theatr->title}}</h3>
                    <div class="info-teatr">
                        <span>{{$theatr->date}}</span>
                    </div>
                    <div class="price">
                    <h3>{{$theatr->price}} РУБ</h3>
                  </div>
                  @auth
                    <a href="{{route('oplata')}}"><button type="submit" onclick="purchaseTicket()">Купить билеты</button></a>
                  @endauth
                  @guest
                  <a href="{{route('reg')}}">РЕГИСТРАЦИЯ</a>
                  @endguest
                  </div>
            </div>
            @endforeach
            

          </div>
      </div>
  </div>
</div>
<div class="pagination">
  {{ $all_theatrs->links('pagination::bootstrap-5') }}
</div>
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