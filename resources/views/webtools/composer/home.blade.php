@extends('layouts/masterwebtool')

@section('title', 'Composers')
@section('container')
<div class="container">
    <ul>
        @foreach ($composers as $composer)
            <li>{{ $composer->composername }}</li>
        @endforeach
    </ul>
</div>
@endsection