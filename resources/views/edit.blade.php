<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>blog</title>
</head>
<body class="container mx-auto bg-gradient-to-r from-indigo-800 to-purple-900 text-white">
<form method="post" class="space-y-4" action="{{route('posts.update',$post)}}">
    @csrf
    @method('PATCH')
    <div>
        <label for="itemName" class="block text-sm font-medium text-gray-400 mb-1">new post title</label>
        <input type="text" id="itemName" name="title" value='{{ $post->title }}'
               class="mt-1 px-4 py-2 w-full border rounded-md bg-gray-700 text-gray-200">
    </div>
    <div>
        <label for="itemID" class="block text-sm font-medium text-gray-400 mb-1">new post content</label>
        <input type="text" id="itemID" name="content" value='{{ $post->content }}'
               class="mt-1 px-4 py-2 w-full border rounded-md bg-gray-700 text-gray-200">
    </div>
    <button type="submit" name="submit" value="add"
            class="bg-indigo-600 text-gray-200 px-4 py-2 rounded hover:bg-indigo-700 focus:outline-none">
        update
    </button>
</form>

</body>
</html>
