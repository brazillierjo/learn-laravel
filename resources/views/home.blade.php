@extends('base')

@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <img src="{{ asset('https://images-na.ssl-images-amazon.com/images/I/71V0bB082yL._AC_SX425_.jpg') }}"
        alt="french flag" class="mt-12 rounded shadow-md h-32">

    <h1 class="mt-5 text-5xl font-semibold text-indigo-800">Hello from France</h1>
    <p class="text-lg text-gray-800">It's currently {{ date('h:i') }}</p>

@endsection
