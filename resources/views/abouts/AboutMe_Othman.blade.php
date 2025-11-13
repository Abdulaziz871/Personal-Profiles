@extends('layouts.app')

@section('title', 'About Me - Othman Abdulaziz')

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
        .about-card, .skills-card, .contact-card {
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
        <h1 class="display-4 fw-bold">Othman Abdulaziz</h1>
        <p class="lead">Full Stack Developer & Designer</p>
    </div>
</div>

<div class="about-me-section">
    <div class="container">
        <!-- Profile & Bio Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="about-card">
                    <div class="text-center">
                        <img src="{{ asset('images/othman.jpg') }}" alt="Othman Abdulaziz" class="profile-photo">
                        <h2 class="mb-2" style="color: var(--primary-dark); font-weight: 700;">Hello, I'm Othman Abdulaziz</h2>
                        <div class="mb-4">
                            <span class="info-badge"><i class="fas fa-briefcase me-2"></i>Full Stack Developer</span>
                            <span class="info-badge"><i class="fas fa-briefcase me-2"></i>Data Analysis</span>
                            <span class="info-badge"><i class="fas fa-birthday-cake me-2"></i>23 Years Old</span>
                        </div>
                    </div>
                    
                    <div class="bio-section">
                        <h3><i class="fas fa-user-circle me-2"></i>About Me</h3>
                        <p>
                            I'm a passionate <strong>Full Stack Developer and Designer</strong> with nearly <strong>four years of experience</strong> 
                            in building websites and web applications. What makes my journey unique is that I'm entirely self-taught—I've 
                            developed my skills through hands-on practice and real-world projects, without any formal educational background 
                            from college or school in web development.
                        </p>
                        <p>
                            Currently, I'm pursuing my degree in <strong>SOFTWARE ENGINEERING</strong> at the <strong>University of Pahang, Malaysia</strong>, 
                            where I continue to expand my knowledge and expertise in software development. My experience spans across multiple 
                            technologies and frameworks, allowing me to create innovative and user-friendly digital solutions.
                        </p>
                        <p>
                            I believe in continuous learning and staying up-to-date with the latest technologies. My self-driven approach 
                            has enabled me to successfully deliver numerous web projects, combining both technical proficiency and creative design.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10">
                <div class="skills-card">
                    <h3><i class="fas fa-code me-2"></i>Skill-Set</h3>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <!-- PHP -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-php me-2" style="color: #777BB4;"></i>PHP</span>
                                    <span class="skill-percentage">90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%;"></div>
                                </div>
                            </div>

                            <!-- Laravel -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-laravel me-2" style="color: #FF2D20;"></i>Laravel</span>
                                    <span class="skill-percentage">85%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%;"></div>
                                </div>
                            </div>

                            <!-- HTML -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-html5 me-2" style="color: #E34F26;"></i>HTML</span>
                                    <span class="skill-percentage">95%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 95%;"></div>
                                </div>
                            </div>

                            <!-- CSS -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-css3-alt me-2" style="color: #1572B6;"></i>CSS</span>
                                    <span class="skill-percentage">90%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 90%;"></div>
                                </div>
                            </div>

                            <!-- JavaScript -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-js me-2" style="color: #F7DF1E;"></i>JavaScript</span>
                                    <span class="skill-percentage">80%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 80%;"></div>
                                </div>
                            </div>

                            <!-- jQuery -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-code me-2" style="color: #0769AD;"></i>jQuery</span>
                                    <span class="skill-percentage">75%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 75%;"></div>
                                </div>
                            </div>

                            <!-- Python -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-python me-2" style="color: #3776AB;"></i>Python</span>
                                    <span class="skill-percentage">70%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 70%;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Bootstrap -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-bootstrap me-2" style="color: #7952B3;"></i>Bootstrap</span>
                                    <span class="skill-percentage">88%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 88%;"></div>
                                </div>
                            </div>

                            <!-- MySQL -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-database me-2" style="color: #4479A1;"></i>MySQL</span>
                                    <span class="skill-percentage">85%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 85%;"></div>
                                </div>
                            </div>

                            <!-- Node.js -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fab fa-node-js me-2" style="color: #339933;"></i>Node.js</span>
                                    <span class="skill-percentage">75%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 75%;"></div>
                                </div>
                            </div>

                            <!-- C Programming -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-code me-2" style="color: #A8B9CC;"></i>C Programming</span>
                                    <span class="skill-percentage">72%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 72%;"></div>
                                </div>
                            </div>

                            <!-- Next.js -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-atom me-2" style="color: #000000;"></i>Next.js</span>
                                    <span class="skill-percentage">68%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 68%;"></div>
                                </div>
                            </div>

                            <!-- Excel & Data Entry -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-file-excel me-2" style="color: #217346;"></i>Excel & Data Entry</span>
                                    <span class="skill-percentage">82%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 82%;"></div>
                                </div>
                            </div>

                            <!-- OOP -->
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name"><i class="fas fa-cubes me-2" style="color: var(--primary-light);"></i>OOP</span>
                                    <span class="skill-percentage">80%</span>
                                </div>
                                <div class="skill-bar">
                                    <div class="skill-progress" style="width: 80%;"></div>
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
                                        <span class="skill-name"><i class="fas fa-users me-2" style="color: var(--primary-light);"></i>Leadership</span>
                                        <span class="skill-percentage">85%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 85%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-comments me-2" style="color: var(--primary-light);"></i>Communication</span>
                                        <span class="skill-percentage">88%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 88%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-chart-line me-2" style="color: var(--primary-light);"></i>Data Analysis</span>
                                        <span class="skill-percentage">78%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-tasks me-2" style="color: var(--primary-light);"></i>Project Management</span>
                                        <span class="skill-percentage">80%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 80%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-clock me-2" style="color: var(--primary-light);"></i>Time Management</span>
                                        <span class="skill-percentage">82%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 82%;"></div>
                                    </div>
                                </div>

                                <div class="skill-item">
                                    <div class="skill-header">
                                        <span class="skill-name"><i class="fas fa-puzzle-piece me-2" style="color: var(--primary-light);"></i>Problem Solving</span>
                                        <span class="skill-percentage">90%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: 90%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <a href="mailto:aswadies.87@gmail.com">aswadies.87@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Phone</strong><br>
                                    <a href="tel:0103800852">010-380-0852</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact-item">
                                <i class="fab fa-linkedin"></i>
                                <div>
                                    <strong>LinkedIn</strong><br>
                                    <a href="https://www.linkedin.com/in/abdulaziz-alaswdi-06659a244/" target="_blank">linkedin.com/in/abdulaziz-alaswdi-06659a244</a>
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
