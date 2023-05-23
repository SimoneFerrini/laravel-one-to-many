@extends('layouts/admin')

@section('content')

    <div class="container mt-5">
        <span> Benvenuto, clicca nel link per accedere ai progetti: </span>
        <a href="{{route('admin.projects.index')}}">Vedi i progetti</a>

    </div>
    
@endsection