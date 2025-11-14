@extends('layouts.app')

@section('title', 'About Me - Bagaber Abdullah')

@section('styles')
<style>
    .about-me-header {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-medium) 50%, var(--primary-light) 100%);
        color: white;
        padding: 80px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
    }
    
    .about-me-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><rect width="100" height="100" fill="none"/><circle cx="50" cy="50" r="1" fill="white" opacity="0.1"/></svg>');
        opacity: 0.3;
    }

    .about-me-section {
        padding: 80px 0;
        background-color: var(--background-light);
    }

    .profile-photo {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
        border: 6px solid white;
        box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        margin-bottom: 25px;
        image-rendering: -webkit-optimize-contrast;
        image-rendering: crisp-edges;
        backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        transform: translateZ(0);
        -webkit-transform: translateZ(0);
    }

    .about-card {
        background: white;
        border-radius: 12px;
        padding: 50px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
        border: 1px solid #e8e8e8;
        margin-bottom: 30px;
    }
    
    .bio-section {
        text-align: left;
        margin-top: 30px;
    }
    
    .bio-section h3 {
        color: var(--primary-dark);
        font-weight: 700;
        margin-bottom: 20px;
        font-size: 1.75rem;
    }
    
    .bio-section p {
        color: var(--text-light);
        font-size: 1.05rem;
        line-height: 1.8;
        margin-bottom: 20px;
    }
    
    .info-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--primary-light), var(--primary-medium));
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 600;
        margin-right: 10px;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }

    /* Skills Section */
    .skills-card {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
        border: 1px solid #e8e8e8;
        margin-bottom: 30px;
    }
    
    .skills-card h3 {
        color: var(--primary-dark);
        font-weight: 700;
        margin-bottom: 30px;
        font-size: 1.75rem;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }
    
    .skills-card h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-dark), var(--primary-light));
        border-radius: 2px;
    }
    
    .skill-item {
        margin-bottom: 25px;
    }
    
    .skill-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 8px;
    }
    
    .skill-name {
        font-weight: 600;
        color: var(--text-dark);
        font-size: 1rem;
    }
    
    .skill-percentage {
        font-weight: 600;
        color: var(--primary-light);
        font-size: 0.95rem;
    }
    
    .skill-bar {
        height: 12px;
        background-color: #e8e8e8;
        border-radius: 10px;
        overflow: hidden;
        position: relative;
    }
    
    .skill-progress {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-dark), var(--primary-light));
        border-radius: 10px;
        transition: width 1.5s ease-in-out;
        position: relative;
        box-shadow: 0 2px 8px rgba(29, 84, 108, 0.3);
    }
    
    .skill-progress::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }
    
    @keyframes shimmer {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }

    /* Projects Section */
    .projects-card {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
        border: 1px solid #e8e8e8;
        margin-bottom: 30px;
    }

    .projects-card h3 {
        color: var(--primary-dark);
        font-weight: 700;
        margin-bottom: 30px;
        font-size: 1.75rem;
        text-align: center;
        position: relative;
        padding-bottom: 15px;
    }

    .projects-card h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--primary-dark), var(--primary-light));
        border-radius: 2px;
    }

    .project-item {
        background: #f8f9fa;
        border-left: 4px solid var(--primary-light);
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .project-item:hover {
        transform: translateX(5px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .project-item h5 {
        color: var(--primary-dark);
        font-weight: 600;
        margin-bottom: 10px;
    }

    .project-item p {
        color: var(--text-light);
        margin-bottom: 0;
        line-height: 1.6;
    }

    /* Contact Section */
    .contact-card {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-light) 100%);
        color: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 6px 24px rgba(0,0,0,0.08);
    }
    
    .contact-card h3 {
        font-weight: 700;
        margin-bottom: 25px;
        font-size: 1.75rem;
    }
    
    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 15px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .contact-item:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateX(5px);
    }
    
    .contact-item i {
        font-size: 1.5rem;
        margin-right: 15px;
        width: 30px;
    }
    
    .contact-item a {
        color: white;
        text-decoration: none;
        word-break: break-all;
    }
    
    .contact-item a:hover {
        text-decoration: underline;
    }

    @media (max-width:768px) {
        .profile-photo { 
            width: 160px; 
            height: 160px; 
        }
        .about-card, .skills-card, .projects-card, .contact-card {
            padding: 30px 20px;
        }
        .about-me-section {
            padding: 50px 0;
        }
    }
</style>
@endsection

@section('content')
<div class="about-me-header">
    <div class="container" style="position: relative; z-index: 1;">
        <h1 class="display-4 fw-bold">Bagaber Abdullah</h1>
        <p class="lead">Software Engineering Student | CGPA: 3.67</p>
    </div>
</div>

<div class="about-me-section">
    <div class="container">
        <!-- Profile & Bio Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="about-card">
                    <div class="text-center">
                        <img src="{{ asset('images/abdullah.jpg') }}" alt="Bagaber Abdullah" class="profile-photo">
                        <h2 class="mb-2" style="color: var(--primary-dark); font-weight: 700;">Hello, I'm Bagaber Abdullah</h2>
                        <div class="mb-4">
                            <span class="info-badge"><i class="fas fa-id-card me-2"></i>CB22015</span>
                            <span class="info-badge"><i class="fas fa-graduation-cap me-2"></i>CGPA: 3.67</span>
                            <span class="info-badge"><i class="fas fa-laptop-code me-2"></i>Software Engineering</span>
                        </div>
                    </div>
                    
                    <div class="bio-section">
                        <h3><i class="fas fa-user-circle me-2"></i>About Me</h3>
                        <p>
                            I am a dedicated <strong>Software Engineering student</strong> at the <strong>University of Pahang, Malaysia</strong>, 
                            maintaining a strong academic record with a <strong>CGPA of 3.67</strong>. My passion lies in developing 
                            robust software solutions and exploring innovative technologies that solve real-world problems.
                        </p>
                        <p>
                            Throughout my academic journey, I have focused on building a solid foundation in software development 
                            principles, algorithms, and modern programming paradigms. I believe in writing clean, maintainable code 
                            and following best practices in software engineering.
                        </p>
                        <p>
                            I am committed to continuous learning and staying updated with the latest trends in software development. 
                            My goal is to contribute to meaningful projects that make a positive impact while growing as a professional 
                            software engineer.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="skills-card">
                    <h3><i class="fas fa-code me-2"></i>Technical Skills</h3>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Java -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-java me-2" style="color: #007396;"></i>Java</span>
                                    <span class="skill-percentage">88%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 88%;"></div>
                                </div>
                            </div>

                            <!-- Python -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-python me-2" style="color: #3776AB;"></i>Python</span>
                                    <span class="skill-percentage">85%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%;"></div>
                                </div>
                            </div>

                            <!-- C++ -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-code me-2" style="color: #00599C;"></i>C++</span>
                                    <span class="skill-percentage">82%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 82%;"></div>
                                </div>
                            </div>

                            <!-- SQL & Database -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-database me-2" style="color: #4479A1;"></i>SQL & Database Design</span>
                                    <span class="skill-percentage">80%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 80%;"></div>
                                </div>
                            </div>

                            <!-- Git & Version Control -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-git-alt me-2" style="color: #F05032;"></i>Git & Version Control</span>
                                    <span class="skill-percentage">78%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 78%;"></div>
                                </div>
                            </div>

                            <!-- Software Testing -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-check-circle me-2" style="color: #28a745;"></i>Software Testing</span>
                                    <span class="skill-percentage">75%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Data Structures & Algorithms -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-project-diagram me-2" style="color: var(--primary-light);"></i>Data Structures & Algorithms</span>
                                    <span class="skill-percentage">90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%;"></div>
                                </div>
                            </div>

                            <!-- Object-Oriented Programming -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-cubes me-2" style="color: var(--primary-light);"></i>Object-Oriented Programming</span>
                                    <span class="skill-percentage">87%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 87%;"></div>
                                </div>
                            </div>

                            <!-- Software Architecture -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-sitemap me-2" style="color: var(--primary-light);"></i>Software Architecture</span>
                                    <span class="skill-percentage">80%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 80%;"></div>
                                </div>
                            </div>

                            <!-- REST APIs -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-exchange-alt me-2" style="color: var(--primary-light);"></i>REST APIs</span>
                                    <span class="skill-percentage">77%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 77%;"></div>
                                </div>
                            </div>

                            <!-- Agile Methodologies -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-sync me-2" style="color: var(--primary-light);"></i>Agile Methodologies</span>
                                    <span class="skill-percentage">73%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 73%;"></div>
                                </div>
                            </div>

                            <!-- Linux/Unix -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-linux me-2" style="color: #000000;"></i>Linux/Unix</span>
                                    <span class="skill-percentage">70%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div class="mt-5">
                        <h4 class="mb-3" style="color: var(--primary-dark); font-weight: 600;"><i class="fas fa-lightbulb me-2"></i>Soft Skills</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-brain me-2" style="color: var(--primary-light);"></i>Problem Solving</span>
                                        <span class="skill-percentage">92%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 92%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-users me-2" style="color: var(--primary-light);"></i>Team Collaboration</span>
                                        <span class="skill-percentage">85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 85%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-search me-2" style="color: var(--primary-light);"></i>Analytical Thinking</span>
                                        <span class="skill-percentage">88%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 88%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-comments me-2" style="color: var(--primary-light);"></i>Communication</span>
                                        <span class="skill-percentage">83%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 83%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-clock me-2" style="color: var(--primary-light);"></i>Time Management</span>
                                        <span class="skill-percentage">80%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 80%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-book-reader me-2" style="color: var(--primary-light);"></i>Quick Learning</span>
                                        <span class="skill-percentage">87%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 87%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Projects Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="projects-card">
                    <h3><i class="fas fa-project-diagram me-2"></i>Key Projects</h3>
                    
                    <div class="project-item">
                        <h5><i class="fas fa-calculator me-2"></i>Calculator Application</h5>
                        <p>
                            Built a simple calculator application using Java with GUI interface. Implemented basic arithmetic 
                            operations including addition, subtraction, multiplication, and division. Applied object-oriented 
                            programming principles and event-driven programming concepts.
                        </p>
                    </div>

                    <div class="project-item">
                        <h5><i class="fas fa-list me-2"></i>To-Do List Manager</h5>
                        <p>
                            Created a basic to-do list application using Python. Features include adding, deleting, and marking 
                            tasks as complete. Used file handling to save and load task data, demonstrating data persistence 
                            and basic CRUD operations.
                        </p>
                    </div>

                    <div class="project-item">
                        <h5><i class="fas fa-user me-2"></i>Student Registration System</h5>
                        <p>
                            Developed a student registration system using C++ that manages student records including enrollment, 
                            course registration, and grade tracking. Implemented using arrays and structures to organize data 
                            efficiently with input validation.
                        </p>
                    </div>

                    <div class="project-item">
                        <h5><i class="fas fa-book me-2"></i>Library Management System</h5>
                        <p>
                            Designed a simple library management system in Java for tracking books, members, and borrowing records. 
                            Implemented basic database operations using MySQL and created a console-based interface for user 
                            interaction and data management.
                        </p>
                    </div>

                    <div class="project-item">
                        <h5><i class="fas fa-gamepad me-2"></i>Tic-Tac-Toe Game</h5>
                        <p>
                            Created a two-player Tic-Tac-Toe game using Python with a graphical interface. Implemented game logic, 
                            win condition checking, and turn-based gameplay. Applied fundamental programming concepts including 
                            loops, conditionals, and functions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="contact-card">
                    <h3><i class="fas fa-address-book me-2"></i>Contact Information</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email</strong><br>
                                    <a href="mailto:qwas2x@outlook.sa">qwas2x@outlook.sa</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Phone</strong><br>
                                    <a href="tel:+60123456789">+60 12-345 6789</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <a href="{{ url('/') }}" class="btn btn-primary-custom btn-lg px-5">
                    <i class="fas fa-home me-2"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
