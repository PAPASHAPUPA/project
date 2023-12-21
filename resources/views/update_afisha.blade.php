<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/style/admin_style.css">
</head>
<body>
    

<div class="parent_update">
<form action="{{url('update_afisha/'.$update_afisha->id)}}" class="update_form"  method="post">
        @csrf
        <p>ИЗМЕНИТЬ НАЗВАНИЕ</p>
        <input class="text" type="text" name="title" value="{{$update_afisha->title}}">
        @error('title')
        {{$message}}
        @enderror
        <p>ИЗМЕНИТЬ ДАТУ</p>
        <input class="file" type="datetime-local" name="date" value="{{$update_afisha->date}}"> <br>
        @error('date')
        {{$message}}
        @enderror
        <p>ИЗМЕНИТЬ ЦЕНУ</p>
        <input type="text" class="description" name="price" value="{{$update_afisha->price}}">
        @error('price')
        {{$message}}
        @enderror
        <p>ИЗМЕНИТЬ ФОТО</p>
        <input class="price" type="file" name="image" value="{{$update_afisha->image}}"> <br> <br>
        @error('image')
        {{$message}}
        @enderror
        <button type="submit">ДОБАВИТЬ ПРОДУКТ</button>
    </form>
</div>

</body>
</html>