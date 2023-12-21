

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Продукт</title>
    <link rel="stylesheet" type="text/css" href="style/admin_style.css">
</head>

<body>
    <header>
        <h1>АДМИН ПАНЕЛЬ</h1>

    </header>
    <table>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Фото</th>
            <th>Описание</th>
        </tr>
            @foreach($applications as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->date}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <a href="{{ url('update_news/'. $item->id)}}">Изменить</a>
                </td>
                <td>
                    <a href="{{ url('delete_news/'. $item->id)}}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
    <h3>ДОБАВИТЬ ПРОДУКТ</h3>
    <form action="{{url("adminadd_news")}}"  method="post">
        @csrf
        <p>ДАТА</p>
        <input class="file" type="datetime-local" name="date">

        <p>ВЫБРАТЬ ФОТО</p>
        <input class="price" type="file" name="image"> <br>

        <p>Описание</p>
        <input class="text" type="text" name="description"> <br> <br>

        <button type="submit">ДОБАВИТЬ ПРОДУКТ</button>
    </form>

    </div>
</body>

</html>