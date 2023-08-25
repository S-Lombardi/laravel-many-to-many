@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4 class='mt-4'>Compila la form e aggiungi un progetto nuovo</h4>
        <div class="row">
            <div class="col-12">
    
                {{-- Messaggi di errore --}}
                {{-- @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach    
                        </ul>
                    </div>
                @endif --}}
    
            {{---- TABELLA PORTFOLIOS ----}}
                {{-- INIZIO FORM --}}
                <form action="{{route('admin.works.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- TITOLO --}}
                    <div class="form-group">
                        <label for="" class="control-label">Titolo</label>
                        <input type="text"class="form-control" id="title" name="title" placeholder="titolo">
                    </div>
                    {{-- IMG --}}
                    <div class="form-group">
                        <label for="" class="control-label">Immagine</label>
                        <input type="file" class="form-control" id="image" name="image" placeholder="Immagine progetto">
                    </div>
                    {{-- LINK --}}
                    <div class="form-group">
                        <label for="" class="control-label">Link al progetto</label>
                        <input type="text"class="form-control" id="link" name="link" placeholder="link">
                    </div>
                    {{-- DESCRIZIONE --}}
                    <div class="form-group">
                        <label for="" class="control-label">Descrizone</label>
                        <input type="text"class="form-control" id="description" name="description" placeholder="Inserisci descrizione...">
                    </div>
                    {{-- FIGURE PROFESSIONALI --}}
                    {{-- Back-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome back-ender</label>
                        <input type="text"class="form-control" id="back_ender" name="back_ender" placeholder="back_ender">
                    </div>
                    {{-- Front-ender --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome front-ender</label>
                        <input type="text"class="form-control" id="front_ender" name="front_ender" placeholder="front_ender">
                    </div>
                    {{-- UX --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UX</label>
                        <input type="text"class="form-control" id="ux" name="ux" placeholder="ux">
                    </div>
                    {{-- UI --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome UI</label>
                        <input type="text"class="form-control" id="ui" name="ui" placeholder="ui">
                    </div>
                    {{-- Illustratore --}}
                    <div class="form-group">
                        <label for="" class="control-label">Nome Illustratore</label>
                        <input type="text"class="form-control" id="illustrator" name="illustrator" placeholder="illustrator">
                    </div>
                {{---- FINE TABELLA PORTFOLIOS ----}}

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

                        {{-- SUPPORTI --}}
                        <h5 class="mt-5">
                            Supporti
                        </h5>
                        <div>
                            <label for="">Mobile</label>
                            <input name='categories[mobile]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Tablet</label>
                            <input name='categories[tablet]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Pc</label>
                            <input name='categories[pc]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Smart TV</label>
                            <input name='categories[smart_tv]' type="checkbox" value="true">
                        </div>
                        {{--FINE SUPPORTI --}}

                        {{-- SISTEMI OPERATIVI --}}
                        <h5 class="mt-5">
                            Sistemi operativi
                        </h5>
                        <div>
                            <label for="">Android</label>
                            <input name='categories[android]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">IOS</label>
                            <input name='categories[ios]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Windows</label>
                            <input name='categories[windows]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Mac</label>
                            <input name='categories[mac]' type="checkbox" value="true">
                        </div>
                        <div>
                            <label for="">Linux</label>
                            <input name='categories[linux]' type="checkbox" value="true">
                        </div>
                        {{--FINE SISTEMI OPERATIVI --}}

                        {{--RESTRIZIONE ETà  --}}
                        <h5 class="mt-5">
                            Limite di età
                        </h5>
                        <div>
                            <label for="">+18</label>
                            <input name='categories[linux]' type="checkbox" value="true">
                        </div>
                        {{--FINE RESTRIZIONE ETà  --}}
                    </div>
                    
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