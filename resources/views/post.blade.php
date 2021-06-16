<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="app.css">
</head>


<body>

    <h1>{{$post->title}}</h1>
    <h4>{{$post->excerpt}}</h4>
    <p>{{$post->body}}</p>


    <a href="/">go back</a>


</body>
</html>
