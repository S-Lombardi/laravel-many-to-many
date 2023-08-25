@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class='mt-4'>Modifica dati progetto</h4>
        <div class="row">
            <div class="col-12">
    
                {{-- INIZIO FORM --}}
                <form action="{{route('admin.works.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" value="{{$project->title}}">
                    </div>
    
                    {{-- IMG --}}
                    <div class="form-group">
                        {{-- ASSET per visualizzare immagine selezionata dall'imput  --}}
                        <div>
                            <img src="{{asset('storage/'.$project->image)}}" alt="">
                        </div>
                        {{-- INPUT --}}
                        <label for="" class="control-label">Immagine</label>
                        <input type="file" class="form-control" id="image" name="image" value="{{$project->image}}">
                    </div>
    
                    {{-- LINK --}}
                    <div class="form-group">
                        <label for="" class="control-label">Link al progetto</label>
                        <input type="text"class="form-control" id="link" name="link" value="{{$project->link}}">
                    </div>
    
                    {{-- DESCRIZIONE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Descrizone</label>
                        <textarea type="text"class="form-control" id="description" name="description">
                            {{$project->description}}
                        </textarea>
                    </div>
    
                    {{-- FIGURE PROFESSIONALI --}}
                    {{-- Back-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome back-ender</label>
                        <input type="text"class="form-control" id="back_ender" name="back_ender" value="{{$project->back_ender}}">
                    </div>
    
                    {{-- Front-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome front-ender</label>
                        <input type="text"class="form-control" id="front_ender" name="front_ender" value="{{$project->front_ender}}">
                    </div>
    
                    {{-- UX --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UX</label>
                        <input type="text"class="form-control" id="ux" name="ux" value="{{$project->ux}}">
                    </div>
    
                    {{-- UI --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UI</label>
                        <input type="text"class="form-control" id="ui" name="ui" value="{{$project->ui}}">
                    </div>
    
                    {{-- Illustratore --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome Illustratore</label>
                        <input type="text"class="form-control" id="illustrator" name="illustrator" value="{{$project->illustrator}}">
                    </div>

                    {{---- TABELLA TYPES SELECT ----}}
                    <div class="form-group mt-5">
                        {{-- CATEGORIA --}}
                        <label for="">Categoria</label>
                        <select name="type_id" id="type_id" class="form-control">
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->category}}</option>
                            @endforeach
                        </select>
                        {{--FINE CATEGORIA --}}

                    </div>

                    {{--TABELLA TECNOLOGIE  --}}
                    <div class="form-group mt-4 d-flex ">
                        @foreach($technologies as $tech)
                            <label for=""> {{$tech->tech_name}}</label>
                            <input type="checkbox" name="technologies[]" value={{$tech->id}} class="form-check-input me-3"{{$project->technologies->contains($tech) ? 'checked' : ''}}>
                        @endforeach
                    </div>
                {{--FINE TABELLA TECNOLOGIE  --}}
                    
                {{---- FINE TABELLA TYPES SELECT ----}}
    
                    {{-- PULSANTE --}}
                    <div class="form-group">
                        <button class="btn btn-success mt-3" type="submit"class="form-control">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
