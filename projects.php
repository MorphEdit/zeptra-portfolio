<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - ZeptRa</title>
    <link rel="icon" type="image/png" href="logo-removebg-preview.png" sizes="32x32">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(45deg, #1a1d20, #2c3e50);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #fff;
        }
        
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .navbar-brand img {
            height: 40px;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .project-icon {
            width: 60px;
            height: 60px;
            background: #0d6efd;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .project-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .btn-view {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .btn-view:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border-color: rgba(255, 255, 255, 0.3);
        }

        .tech-stack {
            margin-top: 1rem;
        }

        .tech-badge {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 0.8rem;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            margin-right: 0.5rem;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        /* Theme Styles */
        [data-theme="light"] body {
            background: linear-gradient(45deg, #f8f9fa, #e9ecef);
            color: #1a1d20;
        }

        [data-theme="light"] .card {
            background: rgba(255, 255, 255, 0.9);
            color: #1a1d20;
        }

        [data-theme="light"] .btn-view {
            background: rgba(0, 0, 0, 0.1);
            color: #1a1d20;
            border-color: rgba(0, 0, 0, 0.2);
        }

        [data-theme="light"] .btn-view:hover {
            background: rgba(0, 0, 0, 0.2);
            color: #1a1d20;
        }

        [data-theme="light"] .tech-badge {
            background: rgba(0, 0, 0, 0.1);
            color: #1a1d20;
        }

        [data-theme="light"] .navbar-nav .nav-link {
            color: #1a1d20;
        }

        #theme-switcher {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        #theme-switcher .btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        [data-theme="light"] #theme-switcher .btn {
            background: #1a1d20;
            color: #fff;
        }

        [data-theme="dark"] #theme-switcher .btn {
            background: #fff;
            color: #1a1d20;
        }

        .fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        
        /* Modal Styling */
        .modal-content {
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        [data-theme="light"] .modal-content {
            background: #fff !important;
            color: #1a1d20 !important;
        }

        [data-theme="light"] .modal-content .card {
            background: #e9ecef !important;
        }

        [data-theme="light"] .btn-secondary {
            background: #1a1d20;
            color: #fff;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="logo-removebg-preview.png" alt="ZeptRa Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="projects.php">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Projects Section -->
    <div class="container py-5">
        <h1 class="text-center mb-5 fade-in">My Projects</h1>
        
        <div class="row g-4 fade-in">
            <!-- Project Card for Food Menu App (React) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-phone"></i>
                        </div>
                        <h3 class="h4 mb-3">QR Food Ordering System</h3>
                        <p class="text-muted mb-4">ระบบสั่งอาหารผ่าน QR Code รองรับการจัดการเมนู, ตะกร้าสินค้า, ยืนยันออเดอร์ และติดตามสถานะ พร้อมหน้าแดชบอร์ดสำหรับร้านอาหาร (โปรเจกต์นี้อยู่ระหว่างการพัฒนาเพื่อศึกษา React)</p>
                        <div class="tech-stack">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">HTML/CSS</span>
                            <span class="tech-badge">LocalStorage</span>
                            <span class="tech-badge">Context API</span>
                            <span class="tech-badge">QR Code</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://zeptra.online/build" class="btn btn-view" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- NEW! Project Card for VeeaChair -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-shield-fill-exclamation"></i>
                        </div>
                        <h3 class="h4 mb-3">VeeaChair - Smart Wheelchair</h3>
                        <p class="text-muted mb-4">ระบบรถวีลแชร์อัจฉริยะที่ควบคุมผ่านแอปพลิเคชันมือถือ มีความสามารถในการจับคู่อุปกรณ์ผ่านรหัส 6 หลัก และควบคุมทิศทางการเคลื่อนที่แบบเรียลไทม์</p>
                        <div class="tech-stack">
                            <span class="tech-badge">Android</span>
                            <span class="tech-badge">Kotlin</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">ESP32</span>
                            <span class="tech-badge">Arduino</span>
                            <span class="tech-badge">IoT</span>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-view" data-bs-toggle="modal" data-bs-target="#wheelchairModal">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card for Smart Emergency Button -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-shield-fill-exclamation"></i>
                        </div>
                        <h3 class="h4 mb-3">ElderCare - Smart Emergency Button</h3>
                        <p class="text-muted mb-4">ระบบปุ่มฉุกเฉินอัจฉริยะสำหรับผู้สูงอายุ ช่วยให้สามารถแจ้งเตือนผู้ดูแลในกรณีฉุกเฉินได้อย่างรวดเร็ว พร้อมระบบติดตามตำแหน่งและแจ้งเตือนอัตโนมัติ</p>
                        <div class="tech-stack">
                            <span class="tech-badge">Android</span>
                            <span class="tech-badge">Kotlin</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">ESP32</span>
                            <span class="tech-badge">GPS</span>
                            <span class="tech-badge">IoT</span>
                        </div>
                        <div class="mt-4">
                            <a href="#" class="btn btn-view" data-bs-toggle="modal" data-bs-target="#emergencyButtonModal">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h3 class="h4 mb-3">Restaurant Management System</h3>
                        <p class="text-muted mb-4">A comprehensive web-based restaurant management system with features for menu management, order processing, table reservations, and QR payment integration.</p>
                        <div class="tech-stack">
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://restaurant.zeptra.online/customer" class="btn btn-view" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-basket"></i>
                        </div>
                        <h3 class="h4 mb-3">Durian Reservation System</h3>
                        <p class="text-muted mb-4">ระบบจองทุเรียนออนไลน์ที่มีฟีเจอร์ครบครัน รองรับการสั่งจองล่วงหน้า การจัดการสินค้า ระบบตะกร้า และการจัดการออเดอร์สำหรับผู้ดูแล</p>
                        <div class="tech-stack">
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Bootstrap 5</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">jQuery</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://khungkhang.online" class="btn btn-view" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-person-hearts"></i>
                        </div>
                        <h3 class="h4 mb-3">Personality Test</h3>
                        <p class="text-muted mb-4">แบบทดสอบบุคลิกภาพที่จะช่วยให้คุณเข้าใจตัวเองมากขึ้น พร้อมการวิเคราะห์ผลแบบละเอียด และระบบแชร์ผลลัพธ์ผ่าน Social Media</p>
                        <div class="tech-stack">
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Tailwind CSS</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">SVG Animation</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://test.zeptra.online" class="btn btn-view">View Project</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Card 4 (TechQuest) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="project-icon">
                            <i class="bi bi-joystick"></i>
                        </div>
                        <h3 class="h4 mb-3">TechQuest - Educational Game</h3>
                        <p class="text-muted mb-4">เกมแนะนำหลักสูตรวิชาการคอมพิวเตอร์ที่ช่วยให้ผู้เล่นเข้าใจถึงสาขาเอกต่างๆ ได้แก่ Network, AI และ Multimedia พร้อมระบบจัดการเนื้อหาแบบ Back-end สำหรับผู้ดูแล</p>
                        <div class="tech-stack">
                            <span class="tech-badge">HTML</span>
                            <span class="tech-badge">CSS</span>
                            <span class="tech-badge">JavaScript</span>
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">Unity</span>
                        </div>
                        <div class="mt-4">
                            <a href="https://computerscience.zeptra.online" class="btn btn-view" target="_blank">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wheelchair Project Modal -->
    <div class="modal fade" id="wheelchairModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-0">
                    <h5 class="modal-title">VeeaChair - Smart Wheelchair System</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <img src="https://via.placeholder.com/600x400/2c3e50/ffffff?text=VeeaChair+App" class="img-fluid rounded" alt="VeeaChair App">
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/600x400/1a1d20/ffffff?text=VeeaChair+Hardware" class="img-fluid rounded" alt="VeeaChair Hardware">
                        </div>
                    </div> -->
                    
                    <h5>Project Overview</h5>
                    <p>VeeaChair เป็นระบบรถวีลแชร์อัจฉริยะที่พัฒนาขึ้นเพื่อช่วยเหลือผู้พิการและผู้สูงอายุในการเคลื่อนที่ได้อย่างสะดวกและปลอดภัยยิ่งขึ้น โดยระบบประกอบด้วย 3 ส่วนหลัก:</p>
                    
                    <div class="row my-4">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-phone mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">แอปพลิเคชันมือถือ</h6>
                                    <p class="card-text small">พัฒนาด้วย Android/Kotlin รองรับการเข้าสู่ระบบ, จับคู่อุปกรณ์, และควบคุมทิศทางของรถวีลแชร์</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-server mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">เซิร์ฟเวอร์</h6>
                                    <p class="card-text small">พัฒนาด้วย Node.js จัดการข้อมูลผู้ใช้, การจับคู่, และเป็นตัวกลางในการส่งคำสั่งควบคุม</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-motherboard mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">ESP32 บนรถวีลแชร์</h6>
                                    <p class="card-text small">ควบคุมการเคลื่อนไหวของรถตามคำสั่งที่ได้รับ พร้อมระบบการเชื่อมต่อ WiFi และการสร้างรหัสจับคู่</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>คุณสมบัติหลัก</h5>
                    <ul>
                        <li>ระบบลงทะเบียนและเข้าสู่ระบบที่ปลอดภัย</li>
                        <li>การจับคู่ระหว่างแอปและรถด้วยรหัส 6 หลัก</li>
                        <li>การควบคุมทิศทาง 5 ทิศทาง (เดินหน้า, ถอยหลัง, ซ้าย, ขวา, หยุด)</li>
                        <li>รองรับการใช้งานหลายผู้ใช้และหลายรถวีลแชร์</li>
                        <li>ระบบบริหารจัดการผ่านแดชบอร์ดสำหรับผู้ดูแล</li>
                    </ul>

                    <h5>เทคโนโลยีที่ใช้</h5>
                    <div class="tech-stack">
                        <span class="tech-badge">Android</span>
                        <span class="tech-badge">Kotlin</span>
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">Express</span>
                        <span class="tech-badge">Socket.IO</span>
                        <span class="tech-badge">ESP32</span>
                        <span class="tech-badge">Arduino</span>
                        <span class="tech-badge">Retrofit</span>
                        <span class="tech-badge">MVVM Architecture</span>
                        <span class="tech-badge">RESTful API</span>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Emergency Button Project Modal -->
    <div class="modal fade" id="emergencyButtonModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-0">
                    <h5 class="modal-title">ElderCare - Smart Emergency Button System</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="row mb-4">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <img src="https://via.placeholder.com/600x400/2c3e50/ffffff?text=ElderCare+App" class="img-fluid rounded" alt="ElderCare App">
                        </div>
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/600x400/1a1d20/ffffff?text=Emergency+Button" class="img-fluid rounded" alt="Emergency Button Hardware">
                        </div>
                    </div> -->
                    
                    <h5>Project Overview</h5>
                    <p>ElderCare เป็นระบบปุ่มฉุกเฉินอัจฉริยะที่พัฒนาขึ้นเพื่อช่วยเหลือผู้สูงอายุในสถานการณ์ฉุกเฉิน โดยสามารถแจ้งเตือนผู้ดูแลได้ทันทีผ่านแอปพลิเคชันมือถือเมื่อเกิดเหตุฉุกเฉิน ระบบประกอบด้วย 3 ส่วนหลัก:</p>
                    
                    <div class="row my-4">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-alarm mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">อุปกรณ์ปุ่มฉุกเฉิน</h6>
                                    <p class="card-text small">พัฒนาด้วย ESP32 พร้อมเซ็นเซอร์ตรวจจับการล้ม GPS และปุ่มฉุกเฉินที่กดได้ง่าย ติดตั้งได้ทั้งแบบพกพาและติดตั้งในบ้าน</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-phone mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">แอปพลิเคชันมือถือ</h6>
                                    <p class="card-text small">พัฒนาด้วย Android/Kotlin รองรับการแจ้งเตือนแบบเรียลไทม์ ติดตามตำแหน่ง และระบบจัดการผู้สูงอายุในความดูแล</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-server mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">เซิร์ฟเวอร์</h6>
                                    <p class="card-text small">พัฒนาด้วย Node.js จัดการข้อมูลผู้ใช้ ประวัติการแจ้งเตือน และเป็นตัวกลางในการส่งการแจ้งเตือนแบบเรียลไทม์</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>คุณสมบัติหลัก</h5>
                    <ul>
                        <li>ปุ่มฉุกเฉินที่สามารถกดได้ง่ายหรือแจ้งเตือนอัตโนมัติเมื่อตรวจจับการล้ม</li>
                        <li>ระบบติดตามตำแหน่งผ่าน GPS สำหรับการช่วยเหลือในกรณีฉุกเฉิน</li>
                        <li>การแจ้งเตือนแบบเรียลไทม์ผ่านแอปพลิเคชันไปยังรายชื่อผู้ดูแลที่กำหนดไว้</li>
                        <li>ระบบบันทึกประวัติการแจ้งเตือนและการตอบสนอง</li>
                        <li>การจัดการข้อมูลสุขภาพพื้นฐานและข้อมูลการติดต่อฉุกเฉิน</li>
                        <li>ระบบการเชื่อมต่อที่เสถียรและประหยัดพลังงาน</li>
                    </ul>

                    <h5>เทคโนโลยีที่ใช้</h5>
                    <div class="tech-stack">
                        <span class="tech-badge">Android</span>
                        <span class="tech-badge">Kotlin</span>
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">Express</span>
                        <span class="tech-badge">MongoDB</span>
                        <span class="tech-badge">ESP32</span>
                        <span class="tech-badge">Firebase FCM</span>
                        <span class="tech-badge">GPS</span>
                        <span class="tech-badge">Accelerometer</span>
                        <span class="tech-badge">MQTT</span>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Food Menu App Project Modal -->
    <div class="modal fade" id="foodMenuModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-dark text-light">
                <div class="modal-header border-0">
                    <h5 class="modal-title">QR Food Ordering System - React Learning Project</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Project Overview</h5>
                    <p>
                        นี่เป็นโปรเจคที่กำลังพัฒนาเพื่อศึกษาและฝึกฝนการใช้งาน React.js สำหรับการพัฒนาเว็บแอพพลิเคชันแบบ SPA (Single Page Application) โดยเป็นระบบสั่งอาหารผ่าน QR Code สำหรับร้านอาหาร
                    </p>
                    
                    <div class="alert alert-info text-dark" role="alert">
                        <i class="bi bi-info-circle me-2"></i>
                        <strong>Learning Project:</strong> โปรเจคนี้เป็นส่วนหนึ่งของการเรียนรู้เทคโนโลยี Frontend Framework แบบใหม่เพื่อเพิ่มทักษะในการพัฒนาเว็บแอพพลิเคชันแบบ Modern
                    </div>
                    
                    <div class="row my-4">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-card-list mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">ระบบเมนูอาหาร</h6>
                                    <p class="card-text small">แสดงรายการอาหาร แยกตามหมวดหมู่ พร้อมระบบค้นหา และหน้าจัดการเมนูสำหรับเจ้าของร้าน</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-cart-check mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">ระบบตะกร้าและสั่งซื้อ</h6>
                                    <p class="card-text small">จัดการตะกร้าสินค้า ปรับจำนวน กรอกข้อมูลผู้สั่ง และยืนยันการสั่งซื้อ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-secondary h-100">
                                <div class="card-body text-center">
                                    <i class="bi bi-speedometer2 mb-3" style="font-size: 2rem"></i>
                                    <h6 class="card-title">แดชบอร์ดร้านอาหาร</h6>
                                    <p class="card-text small">จัดการออเดอร์ อัพเดทสถานะการปรุงอาหาร และติดตามออเดอร์ทั้งหมด</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5>ทักษะที่กำลังศึกษาและฝึกฝน</h5>
                    <ul>
                        <li><strong>React Component Architecture:</strong> การออกแบบและแบ่งคอมโพเนนต์อย่างเหมาะสม</li>
                        <li><strong>React Hooks:</strong> การใช้ useState, useEffect, useContext และ custom hooks</li>
                        <li><strong>State Management:</strong> การจัดการ state ด้วย Context API แทนการใช้ props drilling</li>
                        <li><strong>React Router:</strong> การจัดการเส้นทางและการนำทางใน SPA</li>
                        <li><strong>Responsive Design:</strong> การสร้าง UI ที่รองรับการแสดงผลทุกขนาดหน้าจอ</li>
                        <li><strong>Form Handling:</strong> การจัดการฟอร์มและการตรวจสอบข้อมูล</li>
                    </ul>

                    <h5>แผนการพัฒนาต่อยอด</h5>
                    <ul>
                        <li>เพิ่ม Backend API ด้วย Node.js/Express</li>
                        <li>เชื่อมต่อกับฐานข้อมูล MongoDB</li>
                        <li>ระบบยืนยันตัวตนสำหรับเจ้าของร้าน</li>
                        <li>ระบบแจ้งเตือนแบบ Real-time ด้วย WebSocket</li>
                        <li>เพิ่มระบบจัดการสต็อกวัตถุดิบ</li>
                    </ul>

                    <h5>เทคโนโลยีที่ใช้</h5>
                    <div class="tech-stack">
                        <span class="tech-badge">React.js</span>
                        <span class="tech-badge">JavaScript (ES6+)</span>
                        <span class="tech-badge">HTML5</span>
                        <span class="tech-badge">CSS3</span>
                        <span class="tech-badge">React Router</span>
                        <span class="tech-badge">Context API</span>
                        <span class="tech-badge">LocalStorage</span>
                        <span class="tech-badge">Git/GitHub</span>
                        <span class="tech-badge">QRCode.react</span>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Theme Switcher -->
    <div id="theme-switcher">
        <button class="btn btn-light" onclick="toggleTheme()">
            <i class="bi bi-moon-stars-fill"></i>
        </button>
    </div>

    <script>
        // ตรวจสอบ theme จาก localStorage
        const theme = localStorage.getItem('theme') || 'dark';
        document.documentElement.setAttribute('data-theme', theme);

        // ฟังก์ชันสลับ theme
        function toggleTheme() {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            
            document.documentElement.setAttribute('data-theme', newTheme);
            localStorage.setItem('theme', newTheme);
            
            // เปลี่ยนไอคอน
            const icon = document.querySelector('#theme-switcher i');
            icon.className = newTheme === 'dark' ? 'bi bi-moon-stars-fill' : 'bi bi-sun-fill';
        }

        // ตั้งค่าไอคอนเริ่มต้น
        document.addEventListener('DOMContentLoaded', () => {
            const icon = document.querySelector('#theme-switcher i');
            icon.className = theme === 'dark' ? 'bi bi-moon-stars-fill' : 'bi bi-sun-fill';
        });
    </script>
</body>
</html>