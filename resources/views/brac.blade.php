<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Broken Access Control</title>
</head>
<body>
    <h3>Notes</h3>
    <table>
        <thead>
            <tr>
                <th>Postname</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $note)
                <tr>
                    <td>{{ $note->postName }}</td>
                    <td>{{ $note->Author }}</td>
                    <td><a href="/brac/{{$note->PostID}}">Click to see note</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


<h3>Add your note! :D </h3>
<form action="/brac" method="post">
@csrf
<p>Postname</p>
<input type="text" name="postName">
<p>Author name</p>
<input type="text" name="author">
<p>Is Secret</p>
<select name="isSecret">
    <option value="1">True</option>
    <option value="0">False</option>
</select>
<p>Content Post </p>
<input type="text" name="content">
</br>
<input type="submit"></input>
</form>

</body>
</html>