    @extends('app')

    @section('title','About Us | '.config('app.name'))    
    @section('content')
         <h1>Hello from Kinshasa</h1>
         <img src="{{ asset('images/TeacherDuNet.png')}}" alt="Kinshasa flag" class="">

        <p>built with &hearts; Kevin Mbumba du net </p> 
        <p><a href="{{Route('home')}}">Revenir à la page d'Accueil</a></p>

    @endsection

