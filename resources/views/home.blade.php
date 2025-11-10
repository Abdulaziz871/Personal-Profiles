@extends('layouts.app')

@section('title', 'Home - Personal Profile')

@section('styles')
<style>
    /* Hero Section */
    .hero-section {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        color: white;
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
    }
    
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></svg>');
        opacity: 0.3;
    }
    
    .hero-content {
        position: relative;
        z-index: 1;
    }
    
    .hero-section h1 {
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1.5rem;
    }
    
    .hero-section p {
        font-size: 1.25rem;
        font-weight: 300;
        opacity: 0.95;
        max-width: 700px;
        margin: 0 auto 2rem;
    }
    
    /* Team Section */
    .team-section {
        padding: 80px 0;
        background-color: white;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 60px;
    }
    
    .section-header h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 0.75rem;
    }
    
    .section-header p {
        font-size: 1.1rem;
        color: var(--text-light);
    }
    
    /* Team Cards */
    .team-card {
        background: white;
        border: 1px solid #e8e8e8;
        border-radius: 12px;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        height: 100%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }
    
    .team-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(12, 43, 78, 0.15);
        border-color: var(--primary-light);
    }
    
    .team-card-header {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-light) 100%);
        padding: 40px 20px 30px;
        text-align: center;
    }
    
    .team-member-icon {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        color: var(--primary-dark);
        margin: 0 auto;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    .team-card-body {
        padding: 30px 25px;
        text-align: center;
    }
    
    .team-card-body h5 {
        font-size: 1.35rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 0.5rem;
    }
    
    .team-role {
        color: var(--primary-light);
        font-weight: 600;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 1rem;
    }
    
    .team-description {
        color: var(--text-light);
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    /* About Project Section */
    .about-project-section {
        padding: 80px 0;
        background-color: var(--background-light);
    }
    
    .info-card {
        background: white;
        border-radius: 12px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }
    
    .info-card-body {
        padding: 50px;
    }
    
    .info-card h3 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 1.5rem;
        text-align: center;
    }
    
    .info-card p {
        color: var(--text-light);
        font-size: 1.05rem;
        line-height: 1.8;
        text-align: center;
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-section {
            padding: 60px 0 50px;
        }
        
        .hero-section h1 {
            font-size: 2rem;
        }
        
        .hero-section p {
            font-size: 1.1rem;
        }
        
        .section-header h2 {
            font-size: 2rem;
        }
        
        .team-section {
            padding: 50px 0;
        }
        
        .about-project-section {
            padding: 50px 0;
        }
        
        .info-card-body {
            padding: 30px;
        }
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<div class="hero-section">
    <div class="container hero-content">
        <div class="text-center">
            <h1 class="display-3">Welcome to Our Personal Profile</h1>
            <p class="lead">A showcase of talent, dedication, and expertise built with Laravel & Bootstrap</p>
            <div class="mt-4">
                <a href="{{ url('/about') }}" class="btn btn-light btn-lg me-3 px-4"><i class="fas fa-info-circle me-2"></i>Learn More About Us</a>
                <a href="{{ url('/contact') }}" class="btn btn-outline-light btn-lg px-4"><i class="fas fa-envelope me-2"></i>Get In Touch</a>
            </div>
        </div>
    </div>
</div>

<!-- Team Members Section -->
<div class="team-section">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Team</h2>
            <p>Four dedicated professionals committed to excellence</p>
        </div>
        
        <div class="row g-4">
            <!-- Team Member 1: Othman Abdulaziz -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card-header">
                        <div class="team-member-icon">
                            <span>OA</span>
                        </div>
                    </div>
                    <div class="team-card-body">
                        <h5>Othman Abdulaziz</h5>
                        <p class="team-role">Team Member</p>
                        <p class="team-description">Passionate about web development and creating innovative solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 2: Hisham Mesaal -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card-header">
                        <div class="team-member-icon">
                            <span>HM</span>
                        </div>
                    </div>
                    <div class="team-card-body">
                        <h5>Hisham Mesaal</h5>
                        <p class="team-role">Team Member</p>
                        <p class="team-description">Dedicated to building responsive and user-friendly interfaces.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 3: Abdullah Bagaber -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card-header">
                        <div class="team-member-icon">
                            <span>AB</span>
                        </div>
                    </div>
                    <div class="team-card-body">
                        <h5>Abdullah Bagaber</h5>
                        <p class="team-role">Team Member</p>
                        <p class="team-description">Focused on clean code and efficient problem-solving approaches.</p>
                    </div>
                </div>
            </div>

            <!-- Team Member 4: Elyias -->
            <div class="col-md-6 col-lg-3">
                <div class="team-card">
                    <div class="team-card-header">
                        <div class="team-member-icon">
                            <span>EL</span>
                        </div>
                    </div>
                    <div class="team-card-body">
                        <h5>Elyias</h5>
                        <p class="team-role">Team Member</p>
                        <p class="team-description">Enthusiastic about modern web technologies and best practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Project Section -->
<div class="about-project-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="info-card">
                    <div class="info-card-body">
                        <h3>About This Project</h3>
                        <p>
                            This personal profile website demonstrates our proficiency in Laravel and Bootstrap. 
                            We've created a professional, responsive design that showcases modern web development practices. 
                            Navigate through our pages to learn more about us and feel free to reach out through the contact form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
