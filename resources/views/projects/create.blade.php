@extends('layouts/default')

@section('title', 'Projects')

@section('content')
    <div class="wrapper">
        <div>
            <h1> Create a Project </h1>

            <form action="{{ route('projects.store') }}" method="POST" autocomplete="off">
                @include('projects.form')

                <input type="submit" value="Hinzufügen">
            </form>
        </div>
    </div>
@endsection