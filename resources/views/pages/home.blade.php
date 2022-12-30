    
    @extends('app')

    @section('title')
    @section('content')
    
        <img src="{{ asset('images/kin.jpeg') }}" alt="Kinshasa Flag" class="mt-12 rounded shadow-md h32">

        <h1 class="mt-5 text-3xl sm:text-5xl text-semibold text-indigo-600"> Hello from Kinshasa </h1>

        <p class="text-lg text-gray-800">It's currently {{ date('h:i A') }} .</p> 
    @endsection
