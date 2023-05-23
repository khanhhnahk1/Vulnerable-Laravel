<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="file">Select File</label>
            <input type="file" name="file">
        </div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>