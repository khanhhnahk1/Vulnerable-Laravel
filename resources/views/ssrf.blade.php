<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='../css/styles.css'>
        <title>SSRF</title>
</head>
<body>
    <form action="/ssrf" method="get">
    <label for="enter-url">Enter URL <input name="url" type="text" placeholder="file:///etc/passwd"> <label>
    <button type="submit">Submit</button> 
    </form>
    @if(isset($response))
        {{$response}}
    @else
    @endif
</body>
</html>