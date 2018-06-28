@extends('layouts/masterwebtool')

@section('title', 'Composers')
@section('container')
<div class="container">
    <a class="buttonCreate" href="/webtools/composer/create"><i class="fa fa-plus"></i> Create</a>
    @foreach ($composers as $composer)
        <div class="homeData">
            <a class="data" href="/webtools/composer/{{$composer->id}}">{{ $composer->composername }}</a>
            <div>|</div>
            <a class="data" href="/webtools/composer/{{$composer->id}}/edit">Edit</a>
        </div>
    @endforeach
</div>
@endsection
@section('back_button')
<a class="backArrow" href="/webtools"><i class="fa fa-arrow-left"></i></a>
@endsection