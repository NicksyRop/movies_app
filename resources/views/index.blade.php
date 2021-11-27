@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4 pt-16">

    <div class="popular-movies">
        <h2 class="uppercase text-yellow-500 text-lg font-semibold">Popular movies</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
        @foreach ($populars as $movie)

        <div class="mt-8">
            <a href="">
                <img src="{{ 'https://image.tmdb.org/t/p/w500'.$movie['poster_path']}}" class="hover:opacity-75 transition ease-in-out duration-150" alt="parasite" class="">
            </a>
            <div class="mt-2">
                <a href="" class="mt-2 hover:text-gray-300" >{{$movie['title']}}</a>
                <div class="flex items-center text-gray-400 ">

                    <span><img src="{{asset('images/star.svg')}}" alt="star" class="h-4"></span>
                    <span class="ml-1">{{ $movie['vote_average'] * 10}}%</span>
                    <span class="mx-2">|</span>
                    <span>{{Carbon\Carbon::parse($movie['release_date'])->format('M d,Y')}} </span>

                </div>
                <div class="text-gray-400">

                    @foreach ($movie['genre_ids'] as $genre)
                         {{ $genres ->get($genre)}} @if (!$loop ->last) ,

                         @endif
                    @endforeach


                </div>

            </div>

        </div>
        @endforeach



    </div>
</div>

@endsection
