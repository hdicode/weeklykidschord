@extends('layouts/masterwebtool')

@section('title', 'Composer ' . $composer->id)
@section('container')
<div class="container">
    @foreach( $composer->toArray() as $key => $value )
        <div class="singleData">
            <div class="field">{{ $key }}</div>
            <div class="data">{{ $value }}</div>
        </div>
    @endforeach
</div>
@endsection
@section('back_button')
<a class="backArrow" href="/webtools/composer"><i class="fa fa-arrow-left"></i></a>
@endsection