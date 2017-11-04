@extends('includes.master')


@section('content')

    <div class="container">

        <form class="form-horizontal" method="post" action="{{ url('/edit', array($products->id)) }}">
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
                <input name="nazwa" type="text" class="form-control" id="nazwa" value="<?php echo $products->nazwa_produktu; ?>">
            </div>

            <div class="form-group">
                <label for="opis">Opis produktu</label>
                <textarea name="opis"   class="form-control" id="opis"><?php echo $products->opis_produktu; ?></textarea>
            </div>

            <div class="form-group">
                <label for="cena">Cena</label>
                <input name="cena" type="text" class="form-control" id="cena"  value="<?php echo $products->ceny_produktu; ?>">
            </div>

            <button type="reset" class="btn btn-info">Czyść</button>
            <button type="submit" class="btn btn-success">Edytuj</button>
        </form>

    </div>
    <br>


@endsection