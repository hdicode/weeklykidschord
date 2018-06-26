@extends('layouts/masterwebtool')

@section('title', 'Composer ' . $composer->id)
@section('container')
<div class="container">
    <div>{{ $composer->composername }}</div>
    <div>{{ $composer->description }}</div>
</div>
@endsection