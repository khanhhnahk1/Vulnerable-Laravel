<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>XXE</title>
</head>
<body>


    <form method="POST" action="/xxe">
        @csrf
        <input type="text" name="payload">
        <button type="submit">Submit</button>
    </form>
    <a href="https://pastebin.pl/view/raw/f18a7ad9">Example XXE payload</a>
    @if(null!=$result)
        {{$result}}
    @else
        <p>Still waiting </p>
    @endif
</body>
</html>