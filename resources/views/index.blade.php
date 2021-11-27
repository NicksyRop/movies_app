@extends('layouts.main')
@section('content')
<div class="container mx-auto px-4 pt-16">

    <div class="popular-movies">
        <h2 class="uppercase text-orange-500 text-lg font-semibold">Popular movies</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        <div class="mt-8">
            <a href="">
                <img src="{{ asset('images/parasite.jpeg')}}" class="hover:opacity-75 transition ease-in-out duration-150" alt="parasite" class="">
            </a>
            <div class="mt-2">
                <a href="" class="mt-2 hover:text-gray-300" >Parasite</a>
                <div class="flex items-center text-gray-400 ">

                    <span><img src="{{asset('images/star.svg')}}" alt="star" class="h-4"></span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>Feb 20 , 2021</span>

                </div>
                <div class="text-gray-400">
                    Action , Thriller , Comedy

                </div>

            </div>

        </div>
        <div class="mt-8">
            <a href="">
                <img src="{{ asset('images/parasite.jpeg')}}" alt="parasite" class="">
            </a>

        </div>
        <div class="mt-8">
            <a href="">
                <img src="{{ asset('images/parasite.jpeg')}}" alt="parasite" class="">
            </a>


        </div>
        <div class="mt-8">
            <a href="">
                <img src="{{ asset('images/parasite.jpeg')}}" alt="parasite" class="">
            </a>

        </div>

    </div>
</div>

@endsection
