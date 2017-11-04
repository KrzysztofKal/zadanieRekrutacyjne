@extends('includes.master')


@section('content')

    <div class="container">
        <h4>Lista produktów</h4>
    </div>
    <br>

    <div class="container">
        <table class="table table-striped">
            @if(session('info'))
                <div class="alert alert-success">
                    {{session('info')}}
                </div>
                @endif
            <thead>
            <tr>

                <th scope="col">Nazwa</th>
                <th scope="col">Opis</th>
                <th scope="col">Ceny</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @if(count($products) > 0)
                @foreach($products->all() as $product)
                    <tr>

                        <td>{{ $product -> nazwa_produktu }}</td>
                        <td>{{ $product -> opis_produktu }}</td>
                        <td>{{ $product -> ceny_produktu }}</td>
                        <td>
                            <a href='{{ url("/update/{$product -> id}") }}' class="btn btn-success btn-sm">Edytuj</a>

                            <a href="{{ url("/delete/{$product -> id}") }}" class="btn btn-danger btn-sm">Usuń</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>

@endsection