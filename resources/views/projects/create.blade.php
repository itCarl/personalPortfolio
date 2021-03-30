@extends('layouts/default')

@section('title', 'Projects')

@section('content')
    <div class="wrapper">
        <div class="form-container">
            <h1> Create a Project </h1>

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @include('projects.form')

                <input type="submit" value="Hinzufügen">
            </form>
        </div>
    </div>
@endsection