<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style_staff.css">
    <title>КТОД</title>
</head>

<body>
    <div class = "logo">
        <a href="{{ route('index') }}"><img src="img/logo.png" alt="logo"></a>
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

    <div class="style_button">
      <button onclick="showCategory('leaders')">РУКОВОДИТЕЛИ</button>
      <button onclick="showCategory('employees')">РЕЖИСЕРЫ</button>
      <button onclick="showCategory('orchestra')">ОРКЕСТР</button>
      <button onclick="showCategory('choreographers')">ХОРЕОГРАФЫ</button>
     
    </div>
    

    <div class="staff">
      <div class="d-flex category-leaders active">
        <div class="lead1">
          <h2>Александр Иванович Баранов</h2>
          <img src="img/men1.png" alt="leader1">
        </div>
        <div class="lead2">
          <h2>Дмитрий Алексеевич Кузнецов</h2>
          <img src="img/men2.png" alt="leader2">
        </div>
      </div>
    
      <div class="d-flex category-employees">
        <div class="lead1">
          <h2>Александр Иванович Баранов</h2>
          <img src="img/girl.png" alt="leader3">
        </div>
        <div class="lead2">
          <h2>Дмитрий Алексеевич Кузнецов</h2>
          <img src="img/men2.png" alt="leader2">
        </div>
      </div>

      
      <div class="d-flex category-orchestra">
        <div class="lead1">
          <h2>Александр Иванович Баранов</h2>
          <img src="img/men1.png" alt="leader1">
        </div>
        <div class="lead2">
          <h2>Дмитрий Алексеевич Кузнецов</h2>
          <img src="img/men2.png" alt="leader2">
        </div>
      </div>

      <div class="d-flex category-choreographers">
        <div class="lead1">
          <h2>Александр Иванович Баранов</h2>
          <img src="img/girl.png" alt="leader1">
        </div>
        <div class="lead2">
          <h2>Дмитрий Алексеевич Кузнецов</h2>
          <img src="img/men2.png" alt="leader2">
        </div>
      </div>
    
    </div>
   
    
    <script>
      // Функция для плавного переключения между категориями
      function showCategory(categoryName) {
        // Скрыть все категории
        const categories = document.querySelectorAll('.staff .category-leaders, .staff .category-employees, .staff .category-orchestra, .staff .category-choreographers');
        categories.forEach(category => {
          category.classList.remove('active');
        });
    
        // Показать выбранную категорию
        const selectedCategory = document.querySelector(`.staff .category-${categoryName}`);
        selectedCategory.classList.add('active');
      }
    </script>
    
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
