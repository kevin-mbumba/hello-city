    
    @extends('app')

    @section('title')
    @section('content')
    
    <img src="{{ asset('images/kin.jpeg') }}" alt="Kinshasa Flag" class="">

        <h1>Hello from Kinshasa</h1>

        <p>It's currently {{ date('h:i A') }} .</p> 
    @endsection
