@extends('layouts/default')

@section('title', 'Projects')

@section('content')
    <div class="wrapper">
        <div class="form-container">
            <h1> Add a Project </h1>

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                
                @include('projects.form')

                <button type="submit">
                    <i class="fas fa-plus"></i>
                    Add Project
                </button>
            </form>
        </div>
    </div>
@endsection