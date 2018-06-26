@extends('layouts/masterwebtool')

@section('title', 'Composers')
@section('container')
<div class="container">
    @foreach ($composers as $composer)
        <div><a href="{{$composer->id}}">{{ $composer->composername }}</a></div>
    @endforeach
</div>
@endsection