<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Two Numbers</h1>
    <hr/>
    <form action="{{url('add-value')}}" method="post">
        @csrf
        Enter First Number : <input type="text" name="num1"><br><br>
       Enter Second Number :  <input type="text" name="num2"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>