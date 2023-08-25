@extends('layouts.admin')

@section('content')
    <div class="container">

        {{-- CREATE - Pulsante Form --}}
        <div class="d-flex justify-content-center">
            <button class="btn btn-sm btn-success mt-5">
                <a class="text-light text-decoration-none" href="{{route('admin.works.create')}}">
                    Aggiungi Progetto 
                </a>
            </button>
        </div>

        <div class="row">
            @foreach($works as $project)
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-wrap">

                    <div class="card mt-5 d-flex flex-column justify-content-between">

                        {{--ASSET IMMAGINE per comando Sfoglia immagine  --}}
                        <div class="card-img-top">
                            <img class="img-fluid" src="{{asset('storage/'.$project->image)}}" alt="{{$project->title}}">
                        </div>
                
                        {{-- TITOLO --}}
                        <div>
                            <h5 class="card-title text-uppercase">{{$project->title}}</h5>
                        </div>

                        {{-- DESCRIZIONE --}}
                        <div>
                            <p class="card-text">{{$project->description}}</p>
                        </div>

                        {{-- LINK --}}
                        <div class="mb-3">   
                            Link: 
                            <em><a href="#">{{$project->link}}</a></em>
                        </div>

                        {{-- CATEGORIA / SELECT --}}
                        <div>
                            <label class="fw-bold">Categoria:</label>
                            {{$project->type->category}}
                        </div>

                        {{-- FILE SHOW - Mostra dettagli del progetto --}}
                        <div>
                            <a href="{{route('admin.works.show', $project->id)}}">
                                Dettagli-->
                            </a>
                        </div>
                        

                        {{-- PULSANTI --}}
                        <div class="d-flex justify-content-center my-4">
                            {{-- FILE EDIT - Modifica form --}}
                            <button class="btn btn-sm btn-primary mt-3 me-2">
                                <a class="text-light text-decoration-none" href="{{route('admin.works.edit', $project->id)}}">
                                    <i class="fas fa-pencil"></i>
                                </a>
                            </button>

                            {{-- FORM DELETE - Elimina progetto --}}
                            <form action="{{route('admin.works.destroy', $project->id)}}" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="mt-3 btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                        {{-- FINE PULSANTI --}}
                    
                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
   

@endsection