@extends('base')

@section('title')
    {{ config('app.name') }} - About us
@endsection

@section('content')
    <img src="{{ asset('https://images-na.ssl-images-amazon.com/images/I/71V0bB082yL._AC_SX425_.jpg') }}"
        alt="french flag" class="my-12 rounded-full shadow-md h-32">

    <div>
        <p class="mb-5 text-gray-500">Built with <span class="text-pink-500">&hearts;</span> by Joh</p>
        <p><a href="/" class="text-indigo-500
                                    hover:text-indigo-600 underline">Return to Home page</a></p>
    </div>
@endsection
