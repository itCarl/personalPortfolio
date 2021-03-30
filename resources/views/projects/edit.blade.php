@extends('layouts/default')

@section('title', 'Projects')

@section('content')
    <div class="wrapper">
        <div class="form-container">
            <h1> Edit "{{ $project->title }}" </h1>
            <form action="{{ route('projects.update', ['project' => $project]) }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                
                {{ method_field('PUT') }}
                @include('projects.form')

                <input type="submit" value="Bearbeiten">
            </form>
        </div>
    </div>
@endsection