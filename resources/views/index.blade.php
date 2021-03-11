@extends('layouts.app')

@section('content')
<style>
    .background-image
{
    background-image: url('images/mike.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    height: 400px;
}
</style>
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-gray-900 uppercase text-5xl font-bold text-shadow-md pb-14">
                    Blog-In to <br> Mike Wahousekey
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="images/sully.png" width="500" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/8" block>
            <h2 class="text-4xl font-extrabold text-gray-600">
                Soldier in a movie
            </h2>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                waiting to fight the protagonist after he finishes beating the shit out of another soldier
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    {{-- <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I'm an expert in...
        </h2>
        <span class="font-extrabold block text-2xl py-1">
            UX Design
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Backend Development
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercaase text-s text-gray-400">
            BLOG
        </span>

            <h2 class="text-4xl font-bold py-10">
                Recent Posts
            </h2>

            <p class="m-auto w-4/5 text-gray-500">
                Lorem, ipsum dolor sit amet consctetur adpisicing elit. Voluptatibus.  Lorem, ipsum dolor sit amet consctetur adpisicing elit. Voluptatibus.
            </p>
        
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem, ipsum dolor sit amet consctetur adpisicing elit. Voluptatibus. Lorem, ipsum dolor sit amet consctetur adpisicing elit. Voluptatibus.
                </h3>

                <a 
                href=""
                class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Find Out More
                </a>
            </div>

        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="500" alt="">
        </div>
    </div> --}}
@endsection