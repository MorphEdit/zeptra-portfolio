<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeptRa - Junior Full Stack Developer</title>
    <link rel="icon" type="image/png" href="logo-removebg-preview.png" sizes="32x32">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            height: 100vh;
            background: linear-gradient(45deg, #1a1d20, #2c3e50);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: #fff;
        }
        
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .logo {
            max-width: 150px;
            height: auto;
            margin: 0 auto 2rem;
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        [data-theme="light"] .logo {
            filter: brightness(0.2);
        }

        [data-theme="dark"] .logo {
            filter: brightness(1);
        }

        .nav-link {
            color: rgba(255,255,255,.75);
            border-bottom: 2px solid transparent;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }
        
        .nav-link:hover {
            color: #fff;
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: #fff;
            border-bottom-color: #fff;
        }
        
        .main-content {
            max-width: 42em;
        }

        .badge {
            padding: 0.5rem 1rem;
            margin: 0.25rem;
            border-radius: 25px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .btn {
            border-radius: 25px;
            transition: all 0.3s ease;
            padding: 0.8rem 2rem;
            font-weight: 500;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .btn-outline-light {
            border-width: 2px;
        }

        .btn-light:hover {
            background-color: #f8f9fa;
        }

        .social-links a {
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }
        
        .display-4 {
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .lead {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .text-light-50 {
            color: rgba(255,255,255,0.8);
        }

        @media (max-width: 768px) {
            .display-4 {
                font-size: 2.5rem;
            }
            .lead {
                font-size: 1.1rem;
            }
            .badge {
                font-size: 0.8rem;
                padding: 0.4rem 0.8rem;
            }
            .logo {
                max-width: 120px;
            }
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .greeting {
            color: rgba(255,255,255,0.9);
            font-weight: 300;
            letter-spacing: 1px;
        }

        .location {
            font-size: 1rem;
            color: rgba(255,255,255,0.7);
            margin-bottom: 2rem;
        }

        .location i {
            font-size: 0.9rem;
            margin-right: 0.5rem;
        }

        /* Theme Switcher */
        :root {
            --bg-gradient-dark: linear-gradient(45deg, #1a1d20, #2c3e50);
            --bg-gradient-light: linear-gradient(45deg, #f8f9fa, #e9ecef);
        }

        [data-theme="light"] body {
            background: var(--bg-gradient-light);
            color: #1a1d20;
        }

        [data-theme="light"] .greeting,
        [data-theme="light"] .location {
            color: rgba(0, 0, 0, 0.7);
        }

        [data-theme="light"] .badge {
            background: #1a1d20 !important;
            color: #fff !important;
        }

        [data-theme="light"] .btn-light {
            background: #1a1d20;
            color: #fff;
        }

        [data-theme="light"] .btn-outline-light {
            border-color: #1a1d20;
            color: #1a1d20;
        }

        [data-theme="light"] .social-links a {
            color: #1a1d20;
        }

        [data-theme="light"] .badge.bg-info {
            background-color: #0dcaf0 !important;
            color: #fff !important;
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
    </style>
</head>
<body class="d-flex flex-column">
    <main class="container px-3 my-auto text-center">
        <div class="main-content mx-auto fade-in">
            <div class="logo-container mb-4">
                <img src="logo-removebg-preview.png" alt="ZeptRa Logo" class="logo">
            </div>
            <p class="greeting mb-2">Hi, I'm ZeptRa 👋</p>
            <h1 class="display-4 fw-bold">Junior Full Stack<br>Developer</h1>
            <p class="location">
                <i class="bi bi-geo-alt"></i>Based in Thailand
            </p>
            <p class="lead mb-4">
                Passionate about creating web and mobile solutions with modern technologies.
                Experienced in building responsive web applications and Android development.
            </p>
            <!-- ทักษะที่มีประสบการณ์ -->
            <div class="mb-3">
                <p class="text-light-50 mb-2">My Skills</p>
                <div class="d-flex justify-content-center gap-3 mb-4 flex-wrap">
                    <span class="badge bg-light text-dark">HTML5</span>
                    <span class="badge bg-light text-dark">CSS3</span>
                    <span class="badge bg-light text-dark">JavaScript</span>
                    <span class="badge bg-light text-dark">PHP</span>
                    <span class="badge bg-light text-dark">Python</span>
                    <span class="badge bg-light text-dark">MySQL</span>
                    <span class="badge bg-light text-dark">Android</span>
                    <span class="badge bg-light text-dark">Kotlin</span>
                    <span class="badge bg-light text-dark">Node.js</span>
                    <span class="badge bg-light text-dark">Express</span>
                    <span class="badge bg-light text-dark">Git</span>
                </div>
            </div>

            <!-- ทักษะที่กำลังเรียนรู้ -->
            <div class="mb-4">
                <p class="text-light-50 mb-2">Currently Learning</p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <span class="badge bg-info text-white">React</span>
                    <span class="badge bg-info text-white">Vue.js</span>
                    <span class="badge bg-info text-white">Docker</span>
                </div>
            </div>
            <p class="lead mb-4">
                <a href="projects.php" class="btn btn-light px-4 me-3">View Projects</a>
                <a href="mailto:morphofficialedit@gmail.com" class="btn btn-outline-light px-4">Let's Work Together</a>
            </p>
            <div class="social-links">
                <a href="https://github.com/MorphEdit" class="text-light mx-2" target="_blank">
                    <i class="bi bi-github"></i>
                </a>
            </div>
        </div>
    </main>

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