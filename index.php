<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermoinevehlle Cristobal Jacinto - BSIT Portfolio</title>
    <link rel="stylesheet" href="C:\Vehlle\style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <h2>Hermoinevehlle</h2>
                <span class="section-tag">BSIT-204</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <section id="home" class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hi, I'm <span class="highlight">Hermoinevehlle Cristobal Jacinto</span> ✨</h1>
                    <p class="subtitle">🎓 BSIT-204 Student | 💻 Beginner Programmer</p>
                    <p class="description">
                        I'm a passionate beginner in the world of programming 🌟, currently exploring various 
                        technologies and building my foundation in computer science. Every day is a new 
                        learning adventure! 🚀
                    </p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn primary">View My Work</a>
                        <a href="#contact" class="btn secondary">Get In Touch</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="code-animation">
                        <div class="code-lines">
                            <span>&lt;?php</span>
                            <span>echo "Hello World!";</span>
                            <span>?&gt;</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">
                <h2 class="section-title">About Me 🌸</h2>
                <div class="about-content">
                    <div class="about-text">
                        <p>
                            I'm Hermoinevehlle Cristobal Jacinto, a BSIT-204 student who's just beginning 
                            my journey into the exciting world of programming. Though I'm new to coding, 
                            I'm incredibly enthusiastic about learning and discovering what I can create 
                            with technology.
                        </p>
                        <p>
                            As a beginner, I'm currently building my skills across multiple programming 
                            languages and technologies. I believe that every expert was once a beginner, 
                            and I'm committed to growing my knowledge one line of code at a time.
                        </p>
                        <div class="about-stats">
                            <div class="stat">
                                <i class="fas fa-graduation-cap"></i>
                                <h3>Student</h3>
                                <p>BSIT-204</p>
                            </div>
                            <div class="stat">
                                <i class="fas fa-code"></i>
                                <h3>Learning</h3>
                                <p>Multiple Languages</p>
                            </div>
                            <div class="stat">
                                <i class="fas fa-rocket"></i>
                                <h3>Goal</h3>
                                <p>Full-Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="skills">
            <div class="container">
                <h2 class="section-title">My Programming Skills 💖</h2>
                <p class="section-subtitle">Currently building my foundation across various technologies ✨</p>
                
                <div class="skills-grid">
                    <div class="skill-item">
                        <div class="skill-header">
                            <i class="fab fa-php"></i>
                            <span>PHP</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" data-width="45%"></div>
                        </div>
                        <span class="skill-percentage">45%</span>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <i class="fab fa-python"></i>
                            <span>Python</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" data-width="16%"></div>
                        </div>
                        <span class="skill-percentage">20%</span>
                    </div>

                    <div class="skill-item">
                        <div class="skill-header">
                            <i class="fab fa-html5"></i>
                            <span>HTML/CSS</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" data-width="65%"></div>
                        </div>
                        <span class="skill-percentage">65%</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="projects">
            <div class="container">
                <h2 class="section-title">My Projects 🎀</h2>
                <p class="section-subtitle">My learning journey through PHP programming exercises 💕</p>
                
                <div class="projects-grid">
                    <div class="project-card">
                        <div class="project-header">
                            <h3>Product Catalog Management System</h3>
                            <span class="project-tag">Project 1</span>
                        </div>
                        <div class="project-description">
                            <p>One comprehensive exercise that showcases PHP arrays in various forms from simple-indexed arrays to complex multidimensional structures. The project elaborates on managing a product catalog with the use of different array types.</p>
                        </div>
                        <div class="project-features">
                            <ul>
                                <li>Displaying product names and prices through indexed arrays</li>
                                <li>Describing product features with the help of Associative Arrays</li>
                                <li>Organizing the catalog with multidimensional arrays</li>
                                <li>Using foreach loops for dynamic data presentation</li>
                            </ul>
                        </div>
                        <div class="project-actions">
                            <a href="C:\Vehlle\act1.php" class="btn primary small">View Project</a>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="project-header">
                            <h3>User Dashboard & Profile Manager</h3>
                            <span class="project-tag">Project 2</span>
                        </div>
                        <div class="project-description">
                            <p>An interface that allows users to have access to their own information, manage their account, and check their activities on the website. A user-friendly tool in PHP that allows logged-in users to manage their data.</p>
                        </div>
                        <div class="project-features">
                            <ul>
                                <li>Personal profile information management</li>
                                <li>Account settings and preferences</li>
                                <li>Activity tracking and history</li>
                                <li>User-friendly dashboard interface</li>
                            </ul>
                        </div>
                        <div class="project-actions">
                            <a href="C:\Vehlle\index.php" class="btn primary small">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container">
                <h2 class="section-title">Get In Touch 🌺</h2>
                <p class="section-subtitle">I'd love to connect and learn from fellow developers! 💌</p>
                
                <div class="contact-content">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="fas fa-user"></i>
                            <div>
                                <h4>Name</h4>
                                <p>Hermoinevehlle Cristobal Jacinto</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-graduation-cap"></i>
                            <div>
                                <h4>Section</h4>
                                <p>BSIT-204</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-laptop-code"></i>
                            <div>
                                <h4>Status</h4>
                                <p>Beginner Programmer</p>
                            </div>
                        </div>
                        
                        <div class="contact-item">
                            <i class="fas fa-heart"></i>
                            <div>
                                <h4>Passion</h4>
                                <p>Learning & Growing in Tech</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Hermoinevehlle Cristobal Jacinto | BSIT-204 | Built with ❤️ and PHP</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        const observerOptions = {
            threshold: 0.3,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const progressFills = entry.target.querySelectorAll('.progress-fill');
                    progressFills.forEach(fill => {
                        const width = fill.getAttribute('data-width');
                        setTimeout(() => {
                            fill.style.width = width;
                        }, 300);
                    });
                }
            });
        }, observerOptions);

        const skillsSection = document.querySelector('.skills');
        if (skillsSection) {
            observer.observe(skillsSection);
        }

        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const progressFills = document.querySelectorAll('.progress-fill');
                progressFills.forEach(fill => {
                    const width = fill.getAttribute('data-width');
                    if (width) {
                        fill.style.width = width;
                    }
                });
            }, 800);
        });
    </script>
</body>
</html>