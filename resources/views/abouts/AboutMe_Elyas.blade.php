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

<div class="about-me-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="about-me-header text-center mb-5">
                    {{-- Profile photo: drop in your photo to public/images/CD22080.jpg and update this path --}}
                    <img src="{{ asset('images/CD22080.jpg') }}" alt="Elyas" class="profile-photo">

                    <h3 class="mb-1">ELYAS MUTHANNA ABDULLAH QASEM ALWASHALI</h3>
                    <p class="lead mb-3" style="color: #f5f5f5;">Multimedia Designer & VR/3D Visual Creator</p>
                </div>

                <div class="about-card text-start">
                    <hr>
                    <h5><strong><i class="fas fa-user-circle me-2"></i>About Me</strong></h5>
                    <p>I'm a passionate Multimedia Designer and Photographer with experience in creating high-quality visual content, including product, food, event photography, and cinematic reels. What makes my creative path unique is that I've developed my skills through continuous practice—capturing, editing, and producing visuals that reflect both storytelling and artistic expression.</p>

                    <p>Currently, I'm pursuing my degree in Graphics & Multimedia Design, where I continue to expand my abilities across digital media, visual communication, and immersive technologies. I've also developed strong skills in videography, video editing, color grading, and VR/3D design, enabling me to work across multiple creative mediums.</p>

                    <p>I believe in staying up-to-date with modern tools and creative trends, which allows me to consistently produce engaging and visually compelling projects. My passion for visuals, combined with technical curiosity, drives me to create work that is both impactful and innovative.</p>

                </div>

                <div class="about-card text-start mt-4">
                    <h5><strong><i class="fas fa-star me-2"></i>Skills</strong></h5>
                    
                    <!-- Skills Section -->
                    <h6 class="mt-3 mb-3"><strong><i class="fas fa-star me-2"></i>Skills</strong></h6>
                    
                    <!-- Creative & Technical Skills Header -->
                    <p class="text-muted mb-2"><small><strong>Creative & Technical Skills</strong></small></p>
                    <div class="row g-3 mb-3">
                        <div class="col-lg-6 col-md-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-camera me-2"></i>Photography</td>
                                            <td><span class="badge bg-success">92%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-film me-2"></i>Videography</td>
                                            <td><span class="badge bg-success">90%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-cut me-2"></i>Video Editing (DaVinci Resolve / Premiere)</td>
                                            <td><span class="badge bg-success">88%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-video me-2"></i>Video Production</td>
                                            <td><span class="badge bg-info">85%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-images me-2"></i>Adobe Lightroom</td>
                                            <td><span class="badge bg-success">90%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-paintbrush me-2"></i>Adobe Photoshop</td>
                                            <td><span class="badge bg-info">83%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-headset me-2"></i>VR Engineering</td>
                                            <td><span class="badge bg-info">82%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-cube me-2"></i>VR Systems Storyboard Structuring</td>
                                            <td><span class="badge bg-info">85%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-diagram-project me-2"></i>VR Systems Flowchart Structuring</td>
                                            <td><span class="badge bg-success">88%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-cube me-2"></i>Unity (XR Interaction Toolkit / VR Dev)</td>
                                            <td><span class="badge bg-info">80%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-code me-2"></i>Game Programming (C#)</td>
                                            <td><span class="badge bg-warning">78%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-cube me-2"></i>Autodesk Maya (3D Basics)</td>
                                            <td><span class="badge bg-warning">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-cube me-2"></i>Blender (Basic)</td>
                                            <td><span class="badge bg-warning">65%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-palette me-2"></i>Canva (Design & Branding)</td>
                                            <td><span class="badge bg-success">90%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-mobile-alt me-2"></i>Video Reels Creation (Social Media)</td>
                                            <td><span class="badge bg-success">92%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Soft Skills Header -->
                    <p class="text-muted mb-2"><small><strong>Soft Skills</strong></small></p>
                    <div class="row g-3 mb-4">
                        <div class="col-lg-6 col-md-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-spark me-2"></i>Creativity & Visual Storytelling</td>
                                            <td><span class="badge bg-success">95%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-crosshairs me-2"></i>Attention to Detail</td>
                                            <td><span class="badge bg-success">92%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-comments me-2"></i>Communication</td>
                                            <td><span class="badge bg-success">90%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-clock me-2"></i>Time Management</td>
                                            <td><span class="badge bg-info">88%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="table-responsive">
                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-brain me-2"></i>Problem Solving</td>
                                            <td><span class="badge bg-info">85%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-headset me-2"></i>Client Communication / Work Delivery</td>
                                            <td><span class="badge bg-info">87%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-crown me-2"></i>Leadership</td>
                                            <td><span class="badge bg-info">80%</span></td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-handshake me-2"></i>Team Collaboration</td>
                                            <td><span class="badge bg-info">82%</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-card text-start mt-4">
                    <h5><strong><i class="fas fa-briefcase me-2"></i>Works</strong></h5>
                    
                    <!-- Photography Gallery -->
                    <h6 class="mt-3 mb-4"><strong><i class="fas fa-camera me-2"></i>Photography Gallery</strong></h6>
                    
                    <!-- Food Photography -->
                    <div class="gallery-section mb-4">
                        <div class="gallery-header mb-2">
                            <h6 class="mb-0"><i class="fas fa-utensils me-2" style="color: #FF6B6B;"></i>Food Photography <span class="text-muted">(20 photos)</span></h6>
                        </div>
                        <div class="horizontal-gallery">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/2020-03-30 17.03.17-01.jpeg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_2980.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_2981.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_3998.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_6438.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_7143.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_8376.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_8521.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_8522.JPG') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_9200.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_9311.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_9318.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/IMG_9494.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/T401598324559614.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/T401602245051375.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/T401604063001063.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/T401610153741746.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/T401681032611442.png') }}" alt="Food Photo" class="gallery-img" data-category="food">
                            <img src="{{ asset('images/ElyasPortfolio/Food photography/٢٠٢٠٠٤١١١٤٠٦٤١_IMG_3565.jpg') }}" alt="Food Photo" class="gallery-img" data-category="food">
                        </div>
                    </div>

                    <!-- Flower Photography -->
                    <div class="gallery-section mb-4">
                        <div class="gallery-header mb-2">
                            <h6 class="mb-0"><i class="fas fa-leaf me-2" style="color: #4CAF50;"></i>Flower Photography <span class="text-muted">(23 photos)</span></h6>
                        </div>
                        <div class="horizontal-gallery">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_0834.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_0835.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_0836.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_0837.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1152.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1156.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1157.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1358.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1359.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_1361.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_7633.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_7634.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_7680.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_7685.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_7711.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_9009.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_9133.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_9138.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/IMG_9152.JPG') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/٢٠٢١٠٦١٦١٨١٢٢٤_IMG_2756-01.jpeg') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/٢٠٢١٠٦١٦٢٠٠٠١٠_IMG_2815-01.jpeg') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                            <img src="{{ asset('images/ElyasPortfolio/Flower photography/٢٠٢١٠٦١٦٢٠٤٢١٧_IMG_2863-01.jpeg') }}" alt="Flower Photo" class="gallery-img" data-category="flower">
                        </div>
                    </div>

                    <!-- Product Photography -->
                    <div class="gallery-section mb-4">
                        <div class="gallery-header mb-2">
                            <h6 class="mb-0"><i class="fas fa-cube me-2" style="color: #2196F3;"></i>Product Photography <span class="text-muted">(11 photos)</span></h6>
                        </div>
                        <div class="horizontal-gallery">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/IMG_1041-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/IMG_7144.JPG') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/LRM_EXPORT_20221004_204452.jpg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/T401595127628155.jpg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢٠٠٧٠٧٢١٢٣٤٢_IMG_5018 (5)-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢٠٠٨٢٠٠٢٣٥٣٥_IMG_6117-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢١٠٤٢٥٢٣١٣١٣_IMG_1404-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢١٠٤٢٥٢٣٤٣٢٧_IMG_1422-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢١٠٤٢٦٠٠٤٧١٥_IMG_1458-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢١٠٤٢٦٠٠٥٩٤٤_IMG_1464-01.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                            <img src="{{ asset('images/ElyasPortfolio/Product photography/٢٠٢١٠٥٠٨٢٣٢١٢٩_IMG_1800-02.jpeg') }}" alt="Product Photo" class="gallery-img" data-category="product">
                        </div>
                    </div>

                    <!-- Event Photography -->
                    <div class="gallery-section mb-4">
                        <div class="gallery-header mb-2">
                            <h6 class="mb-0"><i class="fas fa-calendar me-2" style="color: #FF9800;"></i>Event Photography <span class="text-muted">(13 photos)</span></h6>
                        </div>
                        <div class="horizontal-gallery">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_0833.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_1037.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_1038.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_1892.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_2030.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_4711.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_5880.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_6128.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_6129.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_6223.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_6239.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_9956.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                            <img src="{{ asset('images/ElyasPortfolio/Event photography/IMG_9957.JPG') }}" alt="Event Photo" class="gallery-img" data-category="event">
                        </div>
                    </div>

                    <!-- Video Gallery removed -->

                    <!-- Image Lightbox Modal -->
                    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-fullscreen" role="document">
                            <div class="modal-content bg-dark">
                                <div class="modal-body p-0 d-flex align-items-center justify-content-center" style="background-color: #000; min-height: 100vh;">
                                    <img id="modalImage" src="" alt="Full size image" class="img-fluid" style="max-width: 95%; max-height: 95vh; object-fit: contain;">
                                </div>
                                <div class="modal-footer bg-dark border-secondary">
                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times; Close</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .gallery-section {
                            border-top: 1px solid #e8e8e8;
                            padding-top: 15px;
                        }
                        
                        .gallery-header {
                            display: flex;
                            align-items: center;
                            justify-content: space-between;
                        }
                        
                        .horizontal-gallery {
                            display: flex;
                            gap: 12px;
                            overflow-x: auto;
                            padding-bottom: 10px;
                            padding-right: 10px;
                            scroll-behavior: smooth;
                        }
                        
                        .horizontal-gallery::-webkit-scrollbar {
                            height: 6px;
                        }
                        
                        .horizontal-gallery::-webkit-scrollbar-track {
                            background: #f1f1f1;
                            border-radius: 10px;
                        }
                        
                        .horizontal-gallery::-webkit-scrollbar-thumb {
                            background: #888;
                            border-radius: 10px;
                        }
                        
                        .horizontal-gallery::-webkit-scrollbar-thumb:hover {
                            background: #555;
                        }
                        
                        .gallery-img {
                            flex: 0 0 auto;
                            height: 250px;
                            width: auto;
                            max-width: 400px;
                            object-fit: cover;
                            cursor: pointer;
                            border-radius: 8px;
                            transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
                            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                        }
                        
                        .gallery-img:hover {
                            transform: scale(1.03);
                            box-shadow: 0 4px 16px rgba(0,0,0,0.2);
                            filter: brightness(1.05);
                        }
                        
                        @media (max-width: 768px) {
                            .gallery-img {
                                height: 200px;
                                max-width: 300px;
                            }
                        }
                        
                        @media (max-width: 576px) {
                            .gallery-img {
                                height: 150px;
                                max-width: 250px;
                            }
                        }
                        
                        #imageModal .modal-content {
                            background-color: #000;
                            border: none;
                        }
                        
                        #imageModal .modal-body {
                            background-color: #000;
                        }

                        /* Video styles removed */
                    </style>

                    <script>
                        document.querySelectorAll('.gallery-img').forEach(img => {
                            img.addEventListener('click', function() {
                                const fullImageSrc = this.src;
                                document.getElementById('modalImage').src = fullImageSrc;
                                $('#imageModal').modal('show');
                            });
                        });
                    </script>

                                    <script>
                                        // Clear image modal src when closed
                                        $('#imageModal').on('hidden.bs.modal', function () {
                                            const img = document.getElementById('modalImage');
                                            if (img) { img.src = ''; }
                                        });
                                    </script>
                </div>

                <div class="about-card text-center mt-4">
                    <style>
                        .contact-panel {
                            background: linear-gradient(90deg, #072a45 0%, #123a57 50%, #1e516f 100%);
                            border-radius: 12px;
                            padding: 26px;
                            box-shadow: inset 0 6px 18px rgba(255,255,255,0.03), 0 10px 30px rgba(2,18,32,0.35);
                            color: #fff;
                        }

                        .contact-panel h5 { color: #fff; font-weight:700; }

                        .contact-row {
                            display: flex;
                            gap: 18px;
                        }

                        .contact-card {
                            background: rgba(255,255,255,0.04);
                            border-radius: 10px;
                            padding: 14px 16px;
                            display: flex;
                            gap: 14px;
                            align-items: flex-start;
                            flex: 1 1 0;
                            text-align: left;
                            color: #fff;
                            text-decoration: none;
                        }

                        .contact-icon {
                            width: 48px;
                            height: 48px;
                            border-radius: 8px;
                            background: rgba(255,255,255,0.06);
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            font-size: 20px;
                        }

                        .contact-title { font-weight: 700; font-size: 14px; }
                        .contact-value { font-size: 14px; opacity: 0.95; }

                        .contact-stack { display: flex; flex-direction: column; gap: 12px; margin-top: 14px; }

                        .back-home-btn {
                            background: #0b2742;
                            color: #fff;
                            border-radius: 10px;
                            padding: 12px 28px;
                            display: inline-flex;
                            align-items: center;
                            gap: 10px;
                            box-shadow: 0 6px 18px rgba(2,18,32,0.4);
                            border: none;
                            text-decoration: none;
                        }

                        @media (max-width: 768px) {
                            .contact-row { flex-direction: column; }
                        }
                    </style>

                    <div class="contact-panel">
                        <h5 class="mb-3"><i class="fas fa-id-card me-2"></i>Contact Information</h5>

                        <div class="contact-row">
                            <a href="mailto:eliasalwashli@gmil.com" class="contact-card">
                                <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <div class="contact-title">Email</div>
                                    <div class="contact-value">eliasalwashli@gmil.com</div>
                                </div>
                            </a>

                            <a href="tel:00966506482600" class="contact-card">
                                <div class="contact-icon"><i class="fas fa-phone"></i></div>
                                <div>
                                    <div class="contact-title">Phone</div>
                                    <div class="contact-value">00966506482600</div>
                                </div>
                            </a>
                        </div>

                        <div class="contact-stack">
                            <a href="https://www.linkedin.com/in/elias-al-washli/" target="_blank" class="contact-card">
                                <div class="contact-icon"><i class="fab fa-linkedin"></i></div>
                                <div>
                                    <div class="contact-title">LinkedIn</div>
                                    <div class="contact-value">linkedin.com/in/elias-al-washli/</div>
                                </div>
                            </a>

                            <a href="https://www.instagram.com/elias_alwashli" target="_blank" class="contact-card">
                                <div class="contact-icon"><i class="fab fa-instagram"></i></div>
                                <div>
                                    <div class="contact-title">Instagram</div>
                                    <div class="contact-value">@elias_alwashli</div>
                                </div>
                            </a>

                            <a href="https://api.whatsapp.com/send/?phone=966506482600&text&type=phone_number&app_absent=0" target="_blank" class="contact-card">
                                <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                                <div>
                                    <div class="contact-title">WhatsApp</div>
                                    <div class="contact-value">00966506482600</div>
                                </div>
                            </a>

                            <a href="https://www.behance.net/eliasalwashli" target="_blank" class="contact-card">
                                <div class="contact-icon"><i class="fab fa-behance"></i></div>
                                <div>
                                    <div class="contact-title">Behance</div>
                                    <div class="contact-value">behance.net/eliasalwashli</div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ url('/') }}" class="back-home-btn"><i class="fas fa-home"></i> Back to Home</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
