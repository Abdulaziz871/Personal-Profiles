@extends('layouts.app')

@section('title', 'About Me - Elyas')

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
    <div class="hero-section text-center py-5">
        <h1 class="display-4">Elyas</h1>
        <p class="lead">Team Member — Enthusiastic about modern web technologies and best practices.</p>
    </div>
</div>

<div class="about-me-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="about-card text-center">
                    {{-- Profile photo: drop in your photo to public/images/CD22080.jpg and update this path --}}
                    <img src="{{ asset('images/CD22080.jpg') }}" alt="Elyas" class="profile-photo">

                    <h3 class="mb-3">Hello — I'm Elyas</h3>

                    {{-- Replace the content below with your biography and details --}}
                    <p class="text-muted">(This is a placeholder for Elyas's about me content.)</p>

                    <hr>
                    <h5>Skills</h5>
                    <p class="text-muted">- Frontend & UX <br> - Modern JS frameworks <br> - Accessibility</p>

                    <hr>
                    <h5>Contact & Links</h5>
                    <div class="d-flex gap-3 align-items-center justify-content-center">
                        <a href="mailto:eliasalwashli@gmil.com" class="text-decoration-none" title="Email">
                            <i class="fas fa-envelope fa-lg"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/elias-al-washli/" target="_blank" class="text-decoration-none" title="LinkedIn">
                            <i class="fab fa-linkedin fa-lg"></i>
                        </a>
                        <a href="https://www.instagram.com/elias_alwashli" target="_blank" class="text-decoration-none" title="Instagram">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="https://www.behance.net/eliasalwashli" target="_blank" class="text-decoration-none" title="Behance">
                            <i class="fab fa-behance fa-lg"></i>
                        </a>
                    </div>

                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary-custom">Back to Home</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
