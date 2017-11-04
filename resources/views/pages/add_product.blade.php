@extends('includes.master')


@section('content')

    <div class="container">

        <form class="form-horizontal" method="post" action="{{ url('/create') }}">
            {{ csrf_field() }}

            @if(count($errors)>0)
                @foreach($errors -> all() as $error)
                    <div class="alert alert-danger">
                        {{$error}}

                    </div>
                @endforeach
            @endif

            <div class="form-group">
                <label for="nazwa">Nazwa produktu</label>
                <input name="nazwa" type="text" class="form-control" id="nazwa">
            </div>

            <div class="form-group">
                <label for="opis">Opis produktu</label>
                <textarea name="opis" type="text" class="form-control" id="opis"></textarea>
            </div>

            <div class="form-group">
                <label for="cena">Cena</label>
                <input name="cena" type="text" class="form-control" id="cena">
            </div>

            <button type="reset" class="btn btn-info">Czyść</button>
            <button type="submit" class="btn btn-success">Zapisz</button>
        </form>

    </div>
    <br>


@endsection