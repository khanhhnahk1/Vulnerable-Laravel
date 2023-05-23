<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XSS</title>
</head>
<body>
    @if(null==$name)
    <form method="GET" action="/xss">
        @csrf
        <label for="name">Hello .... Hmmmm What's your name?</label>
        </br>
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
    @else
    <p>Hello {!! $name !!}</p>
    @endif
</body>
</html>