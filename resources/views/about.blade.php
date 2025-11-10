@extends('layouts.app')

@section('title', 'About - Removed')

@section('content')
    <div class="container py-5 text-center">
        <h1 class="display-4">About Page Removed</h1>
        <p class="lead">The original About page has been replaced by individual "About Me" pages for each member. Use the
            buttons below to view each profile.</p>

        <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
            <a href="{{ url('/about/AboutMe_Othman') }}" class="btn btn-primary-custom">Othman Abdulaziz</a>
            <a href="{{ url('/about/AboutMe_CB22019') }}" class="btn btn-primary-custom">Meshaal Hisham</a>
            <a href="{{ url('/about/AboutMe_Abdullah') }}" class="btn btn-primary-custom">Abdullah Bagaber</a>
            <a href="{{ url('/about/AboutMe_Elyias') }}" class="btn btn-primary-custom">Elyias</a>
        </div>

        <div class="mt-4">
            <a href="{{ url('/') }}" class="btn btn-outline-primary-custom">Back to Home</a>
        </div>
    </div>
@endsection
