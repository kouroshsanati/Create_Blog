<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>blog</title>
    <script src="index.js"></script>
</head>
<body class="container mx-auto bg-gradient-to-r from-indigo-800 to-purple-900 text-white flex  justify-center">

<div class="flex flex-col w-1/2 ">
    @foreach($posts as $post )

        <div class="flex flex-col mt-14 bg-gray-800 p-2.5  rounded-2xl gap-2.5">
            <h1 class="text-2xl">
                {{$post->title}}
            </h1>
            <p class="font-light ">
                {{$post->content}}
            </p>
            <div class="flex justify-end">
                <button class="showModal hover:bg-gray-700  bg-indigo-400 text-white p-2.5 rounded-2xl" value="{{$post->id}}"
                        name="delete">Delete
                </button>
            </div>
        </div>
        <div id="popup-modal-{{$post->id}}" tabindex="-1"
             class="fixed top-1/2 left-1/2  z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button"
                            class="closeModal absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you
                            want to delete this product?</h3>
                        <form method="post" action="{{route('posts.destroy',$post)}}">
                            @method('DELETE')
                            @csrf
                            <button data-modal-hide="popup-modal" type="submit" value="{{$post->id}}"
                                    class="closeModal text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure (delete {{$post->title}})
                            </button>
                            <button data-modal-hide="popup-modal" type="button" value="{{$post->id}}"
                                    class="closeModal text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                No, cancel
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>

<script>

    const showModals = document.querySelectorAll('.showModal');
    const closers = document.querySelectorAll('.closeModal');

    showModals.forEach(show => {
        show.addEventListener('click', function () {
            const id = show.value;
            const modal = document.querySelector('#popup-modal-'+id);
            modal.classList.remove('hidden');
        })
    })
    shows = document.getElementsByClassName('showModal');

    closers.forEach(closer => {
        closer.addEventListener('click', function () {
            const id = closer.value;
            const modal = document.querySelector('#popup-modal-'+id);
            modal.classList.add('hidden');
        })
    })
</script>
{{--    action="{{route('seller.restaurant.update',$restaurant->id)}}"--}}
</body>
</html>


