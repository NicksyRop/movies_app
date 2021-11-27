@extends('layouts.main')
@section('content')
<div class="movie-info border-b border-gray-800">
    <div class="container mx-auto px-4 py-16 flex">

        <img src="{{ asset('images/parasite.jpeg')}}" style="width: 24rems" alt="">
        <div class="ml-24">
           <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
           <div class="flex items-center text-gray-400 ">

            <span><img src="{{asset('images/star.svg')}}" alt="star" class="h-4"></span>
            <span class="ml-1">85%</span>
            <span class="mx-2">|</span>
            <span>Feb 20 , 2021</span>
            <span class="mx-2">|</span>
            <span>Action| Trailer</span>

        </div>

        <p class="text-gray-300 mt-8">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. At provident ipsum quis? Totam impedit animi voluptates quis odit eius alias sunt molestias eligendi modi, nisi doloremque at libero perferendis nihil.
            Fugiat, reiciendis saepe. Nam, totam adipisci recusandae accusantium atque maxime saepe fugiat ullam illum eaque quia expedita mollitia rem repellat id laudantium esse aliquid? Placeat id repellat vel aspernatur quidem.
            Minima laboriosam animi cumque blanditiis sapiente
        </p>

        <div class="mt-12">
            <h4 class="text-white font-semibold">Featured Cast</h4>
            <div class="flex mt-4">
                <div>
                    <div>Bang Da joe</div>
                    <div class="text-sm text-gray-400">Screenplay , Director ,Story</div>
                </div>

                <div class="ml-8">
                    <div>Haris Da joe</div>
                    <div class="text-sm text-gray-400">Screenplay </div>
                </div>


            </div>



        </div>
        <div class="mt-12">
            <button class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-75">

                <span>Play Trailer</span>
            </button>
        </div>
        </div>
    </div>


</div>

@endsection
