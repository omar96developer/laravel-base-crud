<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    <ul>
        <li>
            <a href="{{route('show', $comic->id)}}">{{$comic['title']}}</a>
            
        </li>
    </ul>
</body>
</html>