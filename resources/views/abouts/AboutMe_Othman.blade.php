@extends('layouts.app')

@section('title', 'About Me - Othman Abdulaziz')

@section('styles')
<style>
    .about-me-header {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        color: white;
        padding: 80px 0;
        text-align: center;
    }

    .about-me-section {
        padding: 60px 0;
    }

    .profile-photo {
        width: 180px;
        height: 180px;
        border-radius: 50%;
        object-fit: cover;
        border: 6px solid #fff;
        box-shadow: 0 6px 20px rgba(0,0,0,0.12);
        margin-bottom: 20px;
    }

    .about-card {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    }

    @media (max-width:768px) {
        .profile-photo { width: 140px; height:140px; }
    }
</style>
@endsection

@section('content')
<div class="about-me-header">
    <div class="container">
        <h1 class="display-4">Othman Abdulaziz</h1>
        <p class="lead">Team Member — Passionate about web development and creating innovative solutions.</p>
    </div>
</div>

<div class="about-me-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="about-card text-center">
                    {{-- Profile photo: drop in your photo to public/images/othman.jpg and update this path --}}
                    <img src="{{ asset('images/othman.jpg') }}" alt="Othman Abdulaziz" class="profile-photo">

                    <h3 class="mb-3">Hello — I'm Othman</h3>

                    {{-- Replace the content below with your biography and details --}}
                    <p class="text-muted">(This is a placeholder for Othman's about me content.)</p>

                    <hr>
                    <h5>Skills</h5>
                    <p class="text-muted">- Backend development <br> - PHP & Laravel <br> - API design</p>

                    <hr>
                    <h5>Contact & Links</h5>
                    <p class="text-muted">Email: <em>othman@example.com</em> — Add GitHub/LinkedIn links.</p>

                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary-custom">Back to Home</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
