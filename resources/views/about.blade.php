@extends('layouts.app')

@section('title', 'About Me - Personal Profile')

@section('styles')
<style>
    .about-header {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        color: white;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .about-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></svg>');
        opacity: 0.3;
    }
    
    .about-header-content {
        position: relative;
        z-index: 1;
    }
    
    .about-section {
        padding: 80px 0;
        background-color: var(--background-light);
    }
    
    .section-card {
        background: white;
        border: 1px solid #e8e8e8;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border-radius: 12px;
        padding: 60px 40px;
    }
    
    .coming-soon-icon {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-light) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        margin: 0 auto 2rem;
        color: white;
    }
    
    .section-card h2 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 1rem;
    }
    
    .section-card p {
        color: var(--text-light);
        font-size: 1.1rem;
        margin-bottom: 2rem;
    }
    
    @media (max-width: 768px) {
        .about-header {
            padding: 60px 0;
        }
        
        .about-section {
            padding: 50px 0;
        }
        
        .section-card {
            padding: 40px 25px;
        }
    }
</style>
@endsection

@section('content')
<!-- About Header -->
<div class="about-header">
    <div class="container text-center about-header-content">
        <h1 class="display-4 fw-bold">About Us</h1>
        <p class="lead">Learn more about our backgrounds, skills, and interests</p>
    </div>
</div>

<!-- About Section -->
<div class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-card text-center">
                    <div class="coming-soon-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h2>Coming Soon!</h2>
                    <p>This page is under construction. Detailed information about our team members will be added soon.</p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="{{ url('/') }}" class="btn btn-primary-custom"><i class="fas fa-home me-2"></i>Back to Home</a>
                        <a href="{{ url('/contact') }}" class="btn btn-outline-primary-custom"><i class="fas fa-envelope me-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
