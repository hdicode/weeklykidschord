@extends('layouts/masterwebtool')

@section('title', 'Create New Composer')
@section('container')
<div class="container">
    <div>@yield('title')</div>
    <form action="/webtools/composer/" method="post">
        <input type="text" name="composername" value="">
        <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <br>
        {{csrf_field()}}
        <input type="submit" name="submit" value="Create">
    </form>
</div>
@endsection
@section('back_button')
<a class="backArrow" href="/webtools/composer"><i class="fa fa-arrow-left"></i></a>
@endsection