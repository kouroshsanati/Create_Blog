<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>blog</title>
</head>
<body class="container mx-auto bg-gradient-to-r from-indigo-800 to-purple-900 text-white">

    @foreach($posts as $post)
        <h1>
            {{$post->title}}
        </h1>
        <p>
            {{$post->content}}
        </p>
    @endforeach


</body>
</html>


