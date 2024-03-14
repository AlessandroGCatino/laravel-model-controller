@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('content')

    {{-- {{ dd($movies)}} --}}
    <div class="container d-flex flex-wrap row-gap-3 gap-5">

        @foreach ($movies as $film)
        <div class="card col-5">
            <div class="card-body text-center">
                <h4 class="card-title">{{$film["title"]}}</h4>
                <p class="card-text">{{$film["date"]}}</p>
            </div>
        </div>
        
        @endforeach
    </div>
@endsection
