<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style_news.css">
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
          <a href="{{route('otziv')}}">ОТЗЫВЫ</a>
  </nav>

  <div class="news">
    
    <h2>ПОСЛЕДНИЕ СОБЫТИЯ</h2>
  </div>

  <div class="container mt-5">
  <div class="row">
      <div class="col-md-4">
        @foreach ($all_news as $news)
          <div class="product">
            <div class="date">
              {{$news->date}}
            </div>
              <div class="image">
                  <img src="img/{{$news->image}}" alt="product">
              </div>         
                  <div class="info_teatr">
                    <div class="backgroundd">
                      <span>{{$news->description}}</span>
                    </div>

                  </div>              
          </div>
          @endforeach
     
      </div>
  </div>
  </div>
  <div class="pagination">
    {{ $all_news->links('pagination::bootstrap-5') }}
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