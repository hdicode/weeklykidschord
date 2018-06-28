@extends('layouts/masterwebtool')

@section('title', 'Composer ' . $composer->id)
@section('container')
<div class="container">
    <form action="/webtools/composer/{{$composer->id}}" method="post">
        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="composername" value="{{ $composer->composername }}">
        <br>
        <textarea name="description" id="" cols="30" rows="10">{{$composer->description}}</textarea>
        <br>
        {{csrf_field()}}
        <input type="submit" name="submit" value="Edit">
    </form>
</div>
@endsection
@section('back_button')
<a class="backArrow" href="/webtools/composer"><i class="fa fa-arrow-left"></i></a>
@endsection