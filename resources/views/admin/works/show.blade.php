@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-5">
            {{-- COL LEFT - IMMAGINE--}}
            <div class="col-6">
                
                {{-- ASSET IMMAGINE --}}
                <div class="card-img-top">
                    <img class="img-fluid" src="{{asset('storage/'.$project->image)}}" alt="{{$project->title}}">
                </div>

            </div>

            {{-- COL RIGHT - DESCRIZIONE--}}
            <div class="col-6">
                {{-- TITOLO --}}
                <h5 class="card-title text-uppercase mb-2">{{$project->title}}</h5>

                {{-- DESCRIZIONE --}}
                <p class="card-text">{{$project->description}}</p>

                {{-- LINK --}}
                <div class="mb-3">   
                    Link: 
                    <em><a href="#">{{$project->link}}</a></em>
                </div>

                {{--FIGURE PROFESSIONALI del progetto--}}

                <div>Back-ender: {{$project->back_ender}}</div>

                <div>Front-ender: {{$project->front_ender}}</div>

                <div>UX: {{$project->ux}}</div>

                <div>UI: {{$project->ui}}</div>

                <div>Illustratore: {{$project->illustrator}}</div>

                
                {{-- CATEGORIA / SELECT --}}
                
                    

                



            </div>

        </div>


    </div>

@endsection