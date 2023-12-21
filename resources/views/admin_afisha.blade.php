

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
            <th>Название</th>
            <th>Цена</th>
            <th>Фото</th>
            <th>Дата</th>
        </tr>
            @foreach($applications as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->image}}</td>
                <td>{{$item->date}}</td>
                <td>
                    <a href="{{ url('update_afisha/'. $item->id)}}">Изменить</a>
                </td>
                <td>
                    <a href="{{ url('delete_afisha/'. $item->id)}}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>
    <h3>ДОБАВИТЬ ПРОДУКТ</h3>
    <form action="{{url("adminadd_afisha")}}"  method="post">
        @csrf
        <p>НАЗВАНИЕ</p>
        <input class="text" type="text" name="title">

        <p>ВЫБРАТЬ ДАТУ</p>
        <input class="file" type="datetime-local" name="date"> <br>

        <p>ЦЕНА</p>
        <input type="text" class="description" name="price">

        <p>ФОТО</p>
        <input class="price" type="file" name="image"> <br> <br>

        <button type="submit">ДОБАВИТЬ ПРОДУКТ</button>
    </form>

    </div>
</body>

</html>