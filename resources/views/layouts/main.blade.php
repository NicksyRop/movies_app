<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movie App</title>
</head>
<body class="font-sans bg-gray-900 text-white">

    <nav class="border-b border-grey-800 ">
        <div class="container mx-auto flex items-center justify-between px-4 py-6 flex-col md:flex-row">
            <ul class="flex items-center flex-col md:flex-row">
                <li>
                    <a href="#"><img src="{{ asset('images/movie.svg')}}" alt=""></a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Movies</a>

                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Tv Shores</a>

                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-300">Actors</a>

                </li>
            </ul>

            <div class="flex items-center flex-col md:flex-row">
                <div class="relative">
                    <input type="text" class="bg-gray-600 rounded-full w-64 px-4 pl-8 text-sm py-1 ml- focus:outline-none focus:ring focus:border-blue-300 " placeholder="search">
                </div>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="">
                        <img src="{{ asset('images/avatar.jpeg')}}" class="h-8 w-8 rounded-full" alt="">
                    </a>
                </div>
            </div>

        </div>
    </nav>

    @yield('content')

</body>
</html>
