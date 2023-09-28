
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class=" container mx-auto mt-20 bg-blue-400">

@foreach($posts as $post)
    <div class="flex flex-col bg-blue-300 rounded-xl  gap-4 mt-14 p-2.5">
    <h1 class="text-2xl text-gray-100">{{$post->title}}</h1>

    <p class="text-gray-600">{{$post->content}}</p>
    </div>
@endforeach

</body>
</html>
