<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTsN 7 Tasikmalaya - Website Sekolah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="20" cy="30" r="10" fill="rgba(255,255,255,0.05)"/><circle cx="80" cy="70" r="15" fill="rgba(255,255,255,0.05)"/></svg>') repeat;
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            position: relative;
            z-index: 10;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            margin-right: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-menu a:hover {
            background: rgba(255,255,255,0.2);
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 4rem 0;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
            position: relative;
            z-index: 10;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: slideInUp 1s ease-out;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #667eea;
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            animation: slideInUp 1s ease-out 0.4s both;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .profile-section {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            margin-bottom: 3rem;
            position: relative;
            overflow: hidden;
        }

        .profile-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(102, 126, 234, 0.1), transparent);
            transform: rotate(45deg);
            animation: shine 3s ease-in-out infinite;
        }

        @keyframes shine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
            100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        }

        .section-title {
            font-size: 2.5rem;
            color: #667eea;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .profile-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .profile-card {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f0fe 100%);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(102, 126, 234, 0.1);
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(102, 126, 234, 0.2);
        }

        .profile-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
        }

        .profile-card h3 {
            color: #667eea;
            margin-bottom: 1rem;
        }

        .profile-card p {
            color: #666;
            line-height: 1.6;
        }

        /* Features Section */
        .features {
            background: linear-gradient(135deg, #f8f9ff 0%, #e8f0fe 100%);
            padding: 4rem 0;
            margin: 4rem 0;
        }

        .features-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 50%;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        /* Footer */
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 3rem 0;
            margin-top: 4rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer p {
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .profile-section {
                padding: 2rem;
            }
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            animation: fadeOut 2s ease-in-out 1s forwards;
        }

        .loading-spinner {
            width: 60px;
            height: 60px;
            border: 4px solid rgba(255,255,255,0.3);
            border-top: 4px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes fadeOut {
            to {
                opacity: 0;
                visibility: hidden;
            }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading">
        <div class="loading-spinner"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <div class="logo-icon">🏫</div>
                MTsN 7 Tasikmalaya
            </div>
            <ul class="nav-menu">
                <li><a href="#beranda">Beranda</a></li>
                <li><a href="#profil">Profil Sekolah</a></li>
                <li><a href="#ekstrakurikuler">Ekstrakurikuler</a></li>
                <li><a href="#galeri">Galeri</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat Datang di MTsN 7 Tasikmalaya</h1>
            <p>Membentuk generasi yang beriman, berilmu, dan berakhlak mulia untuk masa depan yang gemilang</p>
            <a href="#profil" class="cta-button">Pelajari Lebih Lanjut</a>
        </div>
    </section>

     <main class="main-content">
        <section class="profile-section" id="profil">
            <h2 class="section-title">Ekstrakurikuler</h2>

            <div class="profile-grid">
                <div class="profile-card">
                    <div class="profile-icon">👥</div>
                    <h3>Pramuka</h3>
                    <p>Melatih kedisiplinan dan kepemimpinan.</p>
                </div>

                <div class="profile-card">
                    <div class="profile-icon">💉</div>
                    <h3>PMR</h3>
                    <p>Palang Merah Remaja, kegiatan sosial dan kesehatan.</p>
                </div>

                <div class="profile-card">
                    <div class="profile-icon">⚽</div>
                    <h3>Futsal</h3>
                    <p>Ekstrakurikuler olahraga futsal.</p>
                </div>

                <div class="profile-card">
                    <div class="profile-icon">🎤</div>
                    <h3>Paduan Suara</h3>
                    <p>Mengembangkan bakat seni musik.</p>
                </div>
            </div>
        </section>
    <!-- Main Content -->
    <main class="main-content">
        <section class="profile-section" id="profil">
            <h2 class="section-title">Profil Sekolah</h2>

            <div class="profile-grid">
                <div class="profile-card">
                    <div class="profile-icon">🎓</div>
                    <h3>Nama Sekolah</h3>
                    <p>MTsN 7 Tasikmalaya adalah sekolah madrasah yang berkomitmen dalam memberikan pendidikan berkualitas dengan menggabungkan ilmu pengetahuan dan nilai-nilai islami.</p>
                </div>

                <div class="profile-card">
                    <div class="profile-icon">📚</div>
                    <h3>Visi & Misi</h3>
                    <p>Menjadi madrasah unggul yang menghasilkan lulusan beriman, bertakwa, berilmu, dan berakhlak mulia serta mampu bersaing di era global.</p>
                </div>

                <div class="profile-card">
                    <div class="profile-icon">🏆</div>
                    <h3>Prestasi</h3>
                    <p>Berbagai prestasi telah diraih siswa-siswi kami dalam bidang akademik, olahraga, dan seni baik tingkat lokal maupun nasional.</p>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="features-container">
                <h2 class="section-title">Keunggulan Sekolah</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">👥</div>
                        <h3>Tenaga Pengajar Berkualitas</h3>
                        <p>Guru-guru berpengalaman dan berkompeten dalam bidangnya</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🏢</div>
                        <h3>Fasilitas Lengkap</h3>
                        <p>Ruang kelas modern, laboratorium, perpustakaan, dan fasilitas olahraga</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">🌟</div>
                        <h3>Ekstrakurikuler Beragam</h3>
                        <p>Berbagai kegiatan untuk mengembangkan bakat dan minat siswa</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">💻</div>
                        <h3>Teknologi Terkini</h3>
                        <p>Pembelajaran berbasis teknologi untuk mempersiapkan masa depan</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <h3>MTsN 7 Tasikmalaya</h3>
            <p>Jl. Pendidikan No. 123, Tasikmalaya, Jawa Barat</p>
            <p>Telp: (0265) 123456 | Email: info@mtsn7tasikmalaya.sch.id</p>
            <p>&copy; 2025 MTsN 7 Tasikmalaya. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to cards
        function animateOnScroll() {
            const cards = document.querySelectorAll('.profile-card, .feature-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'slideInUp 0.6s ease-out forwards';
                    }
                });
            }, { threshold: 0.1 });

            cards.forEach(card => {
                observer.observe(card);
            });
        }

        // Initialize animations when page loads
        window.addEventListener('load', () => {
            animateOnScroll();

            // Add parallax effect to hero
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero');
                if (hero) {
                    hero.style.transform = `translateY(${scrolled * 0.5}px)`;
                }
            });
        });

        // Add interactive hover effects
        document.querySelectorAll('.profile-card, .feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px) scale(1.02)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>
