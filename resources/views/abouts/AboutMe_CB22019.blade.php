@extends('layouts.app')

@section('title', 'About Me - Meshaal Hisham')

@section('styles')
<style>
    .about-header {
        background: linear-gradient(135deg, var(--primary-dark), var(--primary-medium), var(--primary-light));
        color: #fff;
        padding: 80px 0 90px;
        text-align: center;
    }

    .about-header .lead {
        max-width: 720px;
        margin: 0 auto;
    }

    .about-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 32px rgba(0, 0, 0, 0.08);
        margin-bottom: 35px;
        border: 1px solid rgba(15, 43, 80, 0.04);
    }

    .profile-photo {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        border: 6px solid #fff;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
        margin-bottom: 20px;
    }

    .section-title {
        color: var(--primary-dark);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .badge-skill,
    .badge-project,
    .info-chip {
        background: linear-gradient(135deg, var(--primary-medium), var(--primary-light));
        padding: 8px 18px;
        margin: 6px;
        color: #fff;
        border-radius: 999px;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .badge-skill i,
    .info-chip i {
        opacity: 0.85;
        font-size: 0.95rem;
    }

    .project-card {
        border-left: 5px solid var(--primary-medium);
        padding-left: 18px;
        margin-bottom: 30px;
    }

    .project-card h5 {
        font-weight: 700;
        color: var(--primary-dark);
    }

    .project-card:last-of-type {
        margin-bottom: 0;
    }

    .list-group-item {
        border: none;
        padding: 0.65rem 0;
        font-weight: 500;
        color: #4a5568;
    }

    .list-group-item i {
        color: var(--primary-medium);
        margin-right: 10px;
    }

    .contact-section {
        margin-top: 35px;
    }

    .contact-card {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        border-radius: 16px;
        padding: 40px;
        color: #fff;
        box-shadow: 0 18px 40px rgba(8, 34, 58, 0.35);
    }

    .contact-card h4 {
        color: #fff;
    }

    .contact-card p {
        color: rgba(255, 255, 255, 0.85);
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px 22px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.08);
        color: #fff;
        text-decoration: none;
        transition: transform 0.25s ease, background 0.25s ease;
    }

    .contact-item:hover {
        transform: translateY(-4px);
        background: rgba(255, 255, 255, 0.16);
        color: #fff;
    }

    .contact-icon {
        width: 52px;
        height: 52px;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
    }

    .contact-meta {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .contact-label {
        font-weight: 600;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        font-size: 0.75rem;
        opacity: 0.8;
    }

    .contact-value {
        font-size: 1rem;
        font-weight: 500;
    }

    .contact-value a {
        color: inherit;
        text-decoration: none;
    }

    .contact-value a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .contact-card {
            padding: 28px;
        }
    }
</style>
@endsection

@section('content')

<div class="about-header">
    <div class="container">
        <h1 class="fw-bold mb-2 text-uppercase letter-spacing-2">Meshaal Hisham</h1>
        <p class="lead">
            Software Engineer passionate about intelligent automation, scalable architectures, and real-world AI solutions.
        </p>
    </div>
</div>

<div class="container" style="margin-top: 70px; margin-bottom: 90px;">

    <div class="about-card text-center">
        <img src="{{ asset('images/CB22019.jpeg') }}" class="profile-photo" alt="Meshaal Hisham">

        <h3 class="section-title justify-content-center mb-3">
            <i class="fas fa-user-astronaut"></i>
            About Me
        </h3>

        <p class="text-muted mb-3">
            I’m a Software Engineer passionate about building efficient, scalable solutions and applying artificial
            intelligence to solve real-world problems. I graduated with <strong>First-Class Honours (CGPA 3.73/4.00)</strong>
            from <strong>Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</strong>, where I developed strong foundations
            in software engineering, data analytics, and machine learning.
        </p>
        <p class="text-muted mb-0">
            I enjoy turning ideas into functioning software products—whether it's an AI-based system, a web application,
            or an automation tool. My work focuses on practical solutions that combine clean architecture, intelligent
            features, and smooth user experiences. I believe in continuous learning and I’m always exploring new tools,
            technologies, and techniques to improve my craft.
        </p>
    </div>

    <div class="row g-4">
        <div class="col-xl-6">
            <div class="about-card h-100">
                <h4 class="section-title mb-4">
                    <i class="fas fa-lightbulb"></i>
                    Core Skills
                </h4>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>Problem Solving</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>System Design</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>Algorithms &amp; Data Structures</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>Analytical Thinking</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>Project Management</li>
                    <li class="list-group-item"><i class="fas fa-check-circle"></i>Leadership &amp; Teamwork</li>
                </ul>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="about-card h-100">
                <h4 class="section-title mb-4">
                    <i class="fas fa-code"></i>
                    Technical Skills
                </h4>

                <div class="mb-3">
                    <span class="badge-skill"><i class="fab fa-python"></i>Python</span>
                    <span class="badge-skill"><i class="fab fa-php"></i>PHP</span>
                    <span class="badge-skill"><i class="fab fa-js-square"></i>JavaScript</span>
                    <span class="badge-skill"><i class="fab fa-java"></i>Java</span>
                    <span class="badge-skill"><i class="fas fa-code"></i>HTML &amp; CSS</span>
                    <span class="badge-skill"><i class="fab fa-laravel"></i>Laravel</span>
                    <span class="badge-skill"><i class="fas fa-rocket"></i>FastAPI</span>
                    <span class="badge-skill"><i class="fas fa-bolt"></i>React + Vite</span>
                    <span class="badge-skill"><i class="fab fa-flutter"></i>Flutter</span>
                    <span class="badge-skill"><i class="fas fa-mobile-alt"></i>Android Studio</span>
                    <span class="badge-skill"><i class="fas fa-database"></i>MySQL</span>
                    <span class="badge-skill"><i class="fas fa-fire"></i>Firebase</span>
                </div>

                <h5 class="fw-bold mt-4 mb-3" style="color: var(--primary-dark);">
                    <i class="fas fa-robot me-2"></i>AI &amp; Machine Learning
                </h5>
                <div>
                    <span class="info-chip"><i class="fas fa-brain"></i>Machine Learning Basics</span>
                    <span class="info-chip"><i class="fas fa-crosshairs"></i>YOLOv8</span>
                    <span class="info-chip"><i class="fas fa-layer-group"></i>Classification &amp; Detection Models</span>
                    <span class="info-chip"><i class="fas fa-project-diagram"></i>Roboflow</span>
                    <span class="info-chip"><i class="fas fa-server"></i>Model Deployment using FastAPI</span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-card">
        <h4 class="section-title mb-4">
            <i class="fas fa-project-diagram"></i>
            Highlight Projects
        </h4>

        <div class="project-card">
            <h5>Auto Report Filler using OCR &amp; Pattern Recognition</h5>
            <p class="text-muted mb-2">
                A Python-based automation tool that extracts names, IDs, dates, and operation types from Arabic Ministry
                of Justice PDF documents using OCR and rule-based text processing. It includes a Tkinter GUI and exports
                all results to Excel.
            </p>
            <span class="badge-project">Python</span>
            <span class="badge-project">Tesseract OCR</span>
            <span class="badge-project">pdf2image</span>
            <span class="badge-project">Regex</span>
            <span class="badge-project">Tkinter</span>
            <span class="badge-project">OpenPyXL</span>
        </div>

        <div class="project-card">
            <h5>Burnout Risk Prediction using Machine Learning</h5>
            <p class="text-muted mb-2">
                A machine learning classification project that predicts employee burnout using work habits and
                psychological indicators. Models used: Logistic Regression &amp; Random Forest.
            </p>
            <a href="https://github.com/Xhisham95/burnout-risk-app" target="_blank" class="badge-project">
                <i class="fab fa-github"></i> GitHub
            </a>
            <span class="badge-project">Python</span>
            <span class="badge-project">Pandas</span>
            <span class="badge-project">Scikit-Learn</span>
            <span class="badge-project">NumPy</span>
            <span class="badge-project">Matplotlib</span>
        </div>

        <div class="project-card">
            <h5>AirAware – Weather-Based Outdoor Activity Advisor</h5>
            <p class="text-muted mb-2">
                A mobile app developed for the UMPSA × Huawei AppGallery 2025 hackathon. The app uses weather data and an
                on-device AI model to generate personalized outdoor activity recommendations.
            </p>
            <span class="badge-project">Flutter</span>
            <span class="badge-project">TensorFlow Lite</span>
            <span class="badge-project">OpenWeatherMap API</span>
            <span class="badge-project">HMS Location Kit</span>
        </div>

        <div class="project-card">
            <h5>FYPGate – Final Year Project Management System</h5>
            <p class="text-muted mb-2">
                A Laravel-based FYP management system that assists students, lecturers, and coordinators with project
                tracking, appointments, proposal submissions, and user management. I developed the Manage Users module,
                including roles, access control, and bulk upload features.
            </p>
            <span class="badge-project">Laravel</span>
            <span class="badge-project">PHP</span>
            <span class="badge-project">MySQL</span>
            <span class="badge-project">Blade Templates</span>
        </div>

        <div class="project-card">
            <h5>SmartGuard – Real-Time Helmet Violation Detection using YOLOv8</h5>
            <p class="text-muted mb-2">
                A real-time AI system that detects motorcycle helmet violations using YOLOv8 and logs the results to
                Firebase. It uses FastAPI as the backend API and Laravel for the dashboard.
            </p>
            <span class="badge-project">YOLOv8</span>
            <span class="badge-project">FastAPI</span>
            <span class="badge-project">Python</span>
            <span class="badge-project">Firebase</span>
            <span class="badge-project">Laravel</span>
        </div>
    </div>

    <div class="contact-section">
        <div class="contact-card">
            <h4 class="section-title mb-2">
                <i class="fas fa-address-card"></i>
                Contact Information
            </h4>
            <p class="mb-4">
                I’m always excited to collaborate on impactful software, AI, or automation projects. Let’s connect!
            </p>
            <div class="row g-3">
                <div class="col-md-4">
                    <a href="mailto:meshaalhisham@hotmail.com" class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-meta">
                            <span class="contact-label">Email</span>
                            <span class="contact-value">meshaalhisham@hotmail.com</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="tel:+601136686098" class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-meta">
                            <span class="contact-label">Phone</span>
                            <span class="contact-value">+60 11-3668 6098</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://www.linkedin.com/in/hisham-meshaal-08a301397/" target="_blank" class="contact-item">
                        <div class="contact-icon"><i class="fab fa-linkedin-in"></i></div>
                        <div class="contact-meta">
                            <span class="contact-label">LinkedIn</span>
                            <span class="contact-value">linkedin.com/in/hisham-meshaal-08a301397/</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <a href="{{ url('/') }}" class="btn btn-primary-custom btn-lg px-5">
            <i class="fas fa-home me-2"></i>Back to Home
        </a>
    </div>
</div>

@endsection
