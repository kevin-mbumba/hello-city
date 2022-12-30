    @extends('app', ['title'=>'About Us']) 
    @section('content')
         <img src="{{ asset('images/TeacherDuNet.png')}}" alt="Kinshasa flag" class="my-12 rounded-full shadow-md">

        <h2 class='mb-5'>built with <span class="text-pink-500" >&hearts;</span>   
            Kevin Mbumba du net 
        </h2> 

        <p><a href="{{Route('home')}}" class="text-indigo-500  hover:text-indigo-600 underline">Revenir à la page d'Accueil</a>
        
        </p>

    @endsection

