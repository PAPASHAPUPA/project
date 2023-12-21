<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_index.css">
    <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet">
  <script src="/examples/libs/ui-components/itc-slider/itc-slider.js" defer></script>
   
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
          @guest
          <a href="{{route('reg')}}">РЕГИСТРАЦИЯ</a>
          @endguest
          @auth
          <a href="{{route('logout')}}">ВЫЙТИ</a>
          @endauth
  </nav>
  <div class="slider">
    <img src="img/teatr1.png" alt="Изображение 1" class="slide">
    <img src="img/teatr2.png" alt="Изображение 1" class="slide">
    <img src="img/teatr3.png" alt="Изображение 1" class="slide">
  </div>
  </div>
<script>
let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const slideInterval = 3000;
 
function changeSlide() {
  slides[currentIndex].style.opacity = 0;
  currentIndex = (currentIndex + 1) % slides.length;
  slides[currentIndex].style.opacity = 1;
}
 
setInterval(changeSlide, slideInterval);
</script>

<div class="new">
    
  <h2>ОТЗЫВЫ</h2>

</div>
<div class="container mt-5">
  <div class="row">
      <div class="col-md-4">
          <div class="product">
              <div class="image">
                  <img src="img/teatr2.png" alt="product">
              </div>
              <div class="info">
                  <h3>Александрович Александр Алекдсандров</h3>
                  <div class="info-teatr">
                      <span>Спектакль "Линии судьбы" в театре "Фантазия" - удивительное погружение в мир времени и выборов. 
                        Режиссер Анна Илюшина и талантливый актерский состав создали захватывающее произведение искусства. 
                        Уникальная сценография, глубокий сюжет и мастерство актеров оставляют неизгладимые впечатления. 
                        Этот спектакль - искусство, заставляющее задуматься о смысле жизни и влиянии искусства на наши судьбы. 
                        Незабвенный опыт для всех ценителей театрального искусства.</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="product">
            <div class="image">
                <img src="img/teatr2.png" alt="product">
            </div>
            <div class="info">
                <h3>Александрович Александр Алекдсандров</h3>
                <div class="info-teatr">
                    <span>Спектакль "Линии судьбы" в театре "Фантазия" - удивительное погружение в мир времени и выборов. 
                      Режиссер Анна Илюшина и талантливый актерский состав создали захватывающее произведение искусства. 
                      Уникальная сценография, глубокий сюжет и мастерство актеров оставляют неизгладимые впечатления. 
                      Этот спектакль - искусство, заставляющее задуматься о смысле жизни и влиянии искусства на наши судьбы. 
                      Незабвенный опыт для всех ценителей театрального искусства.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
      <div class="product">
          <div class="image">
              <img src="img/teatr2.png" alt="product">
          </div>
          <div class="info">
              <h3>Александрович Александр Алекдсандров</h3>
              <div class="info-teatr">
                  <span>Спектакль "Линии судьбы" в театре "Фантазия" - удивительное погружение в мир времени и выборов. 
                    Режиссер Анна Илюшина и талантливый актерский состав создали захватывающее произведение искусства. 
                    Уникальная сценография, глубокий сюжет и мастерство актеров оставляют неизгладимые впечатления. 
                    Этот спектакль - искусство, заставляющее задуматься о смысле жизни и влиянии искусства на наши судьбы. 
                    Незабвенный опыт для всех ценителей театрального искусства.</span>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-4">
    <div class="product">
        <div class="image">
            <img src="img/teatr2.png" alt="product">
        </div>
        <div class="info">
            <h3>Александрович Александр Алекдсандров</h3>
            <div class="info-teatr">
                <span>Спектакль "Линии судьбы" в театре "Фантазия" - удивительное погружение в мир времени и выборов. 
                  Режиссер Анна Илюшина и талантливый актерский состав создали захватывающее произведение искусства. 
                  Уникальная сценография, глубокий сюжет и мастерство актеров оставляют неизгладимые впечатления. 
                  Этот спектакль - искусство, заставляющее задуматься о смысле жизни и влиянии искусства на наши судьбы. 
                  Незабвенный опыт для всех ценителей театрального искусства.</span>
            </div>
        </div>
    </div>
</div>
  </div>
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
        <<a href="{{route('news')}}">НОВОСТИ</a>
        <a href="{{route('afisha')}}">АФИША</a>
        <a href="{{route('teatr')}}">ТЕАТР</a>
        <a href="{{route('staff')}}">ПЕРСОНАЛИИ</a>
        <a href="{{route('otziv')}}">ОТЗЫВЫ</a>
    </div>
  </div>

</footer>  
</body>
</html>
