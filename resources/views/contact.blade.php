@extends('layouts.app')

@section('title', 'Contact Us - Personal Profile')

@section('styles')
<style>
    /* Contact Header */
    .contact-header {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        color: white;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    .contact-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></svg>');
        opacity: 0.3;
    }
    
    .contact-header-content {
        position: relative;
        z-index: 1;
    }
    
    .contact-header h1 {
        font-weight: 700;
        margin-bottom: 1rem;
    }
    
    .contact-header p {
        font-size: 1.15rem;
        opacity: 0.95;
        font-weight: 300;
    }
    
    /* Contact Section */
    .contact-section {
        padding: 80px 0;
        background-color: var(--background-light);
    }
    
    /* Contact Form */
    .contact-form-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        border: 1px solid #e8e8e8;
        padding: 40px;
    }
    
    .contact-form-card h2 {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--primary-dark);
        margin-bottom: 1.5rem;
    }
    
    .form-label {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .form-control, .form-select {
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: var(--primary-light);
        box-shadow: 0 0 0 3px rgba(29, 84, 108, 0.1);
        outline: none;
    }
    
    textarea.form-control {
        resize: vertical;
        min-height: 150px;
    }
    
    /* Contact Info Card */
    .contact-info-card {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-light) 100%);
        color: white;
        border-radius: 12px;
        padding: 40px 30px;
        height: 100%;
        box-shadow: 0 4px 20px rgba(12, 43, 78, 0.15);
    }
    
    .contact-info-card h3 {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }
    
    .contact-info-item {
        margin-bottom: 2rem;
    }
    
    .contact-icon {
        width: 55px;
        height: 55px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 1rem;
        backdrop-filter: blur(10px);
    }
    
    .contact-info-item h5 {
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }
    
    .contact-info-item p {
        margin: 0;
        opacity: 0.9;
        font-size: 0.95rem;
    }
    
    .social-links {
        padding-top: 1.5rem;
        margin-top: 1.5rem;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .social-links h5 {
        font-weight: 600;
        margin-bottom: 1rem;
    }
    
    .social-icon {
        width: 45px;
        height: 45px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        transition: all 0.3s ease;
        text-decoration: none;
        color: white;
        backdrop-filter: blur(10px);
    }
    
    .social-icon:hover {
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-3px);
        color: white;
    }
    
    /* Alert */
    .alert-info {
        background-color: white;
        border: 1px solid var(--primary-light);
        border-left: 4px solid var(--primary-dark);
        border-radius: 8px;
        color: var(--text-dark);
    }
    
    .alert-heading {
        color: var(--primary-dark);
        font-weight: 700;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .contact-info-card {
            margin-top: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .contact-header {
            padding: 60px 0;
        }
        
        .contact-section {
            padding: 50px 0;
        }
        
        .contact-form-card {
            padding: 30px 20px;
        }
        
        .contact-info-card {
            padding: 30px 20px;
        }
    }
</style>
@endsection

@section('content')
<!-- Contact Header -->
<div class="contact-header">
    <div class="container text-center contact-header-content">
        <h1 class="display-4">Get In Touch</h1>
        <p class="lead">We'd love to hear from you! Send us a message and we'll respond as soon as possible.</p>
    </div>
</div>

<!-- Contact Section -->
<div class="contact-section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h2>Send Us a Message</h2>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="form-label">Your Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="What is this about?">
                        </div>
                        
                        <div class="mb-4">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" placeholder="Write your message here..." required></textarea>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary-custom btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <h3>Contact Information</h3>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5>Email</h5>
                        <p>team@personalprofile.com</p>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <h5>Phone</h5>
                        <p>+123 456 7890</p>
                    </div>
                    
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5>Location</h5>
                        <p>Pahang, Malaysia</p>
                    </div>
                    
                    <div class="social-links">
                        <h5>Follow Us</h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="social-icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="alert alert-info" role="alert">
                    <h5 class="alert-heading"><i class="fas fa-info-circle me-2"></i>Note</h5>
                    <p class="mb-0">This is a demonstration contact form. No backend functionality is implemented, so messages will not be processed or stored.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
