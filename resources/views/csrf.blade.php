<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSRF</title>
</head>
<body>
    <form action="/csrf" method="post">
    Email: <input type="text" name="email">
    <input type="submit"></input>
    </form>
    @foreach($result as $row)
    Username: {{$row->username}}</br>
    Email: {{$row->email}}
    @endforeach
   
</body>
</html>