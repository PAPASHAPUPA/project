<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/oplata_style.css">
  <title>ОПЛАТА</title>
</head>
<body>

  <form action="{{url ('make_order')}}" method="POST">
    @csrf
    <h2>Купить билет</h2>
    <label for="cardNumber">Оплата билета:</label>
    <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" required>
    <input type="hidden" name="id_user" value="{{Auth::user()->id}}">

    <label for="expirationDate">Срок действия:</label>
    <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/YY" required>

    <label for="cvv">CVV:</label>
    <input type="text" id="cvv" name="cvv" placeholder="123" required>
<div class="buttom-container">
    <button type="submit">Оплатить</button>
</div>
  </form>


</body>
</html>
