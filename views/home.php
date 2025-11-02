<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['name']; ?> - Portfolio</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#home"><?php echo $data['name']; ?></a>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#qualifications" class="nav-link">Qualifications</a>
                </li>
                <li class="nav-item">
                    <a href="#projects" class="nav-link">Projects</a>
                </li>
                <li class="nav-item">
                    <a href="#research" class="nav-link">Research</a>
                </li>
                <li class="nav-item">
                    <a href="#extracurricular" class="nav-link">Activities</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="home" class="section">
        <div class="container">
            <div class="home-content">
                <div class="home-text">
                    <h1 class="home-title"><?php echo $data['name']; ?></h1>
                    <h2 class="home-subtitle"><?php echo $data['title']; ?></h2>
                    <p class="home-description"><?php echo $data['about']; ?></p>
                    <div class="home-buttons">
                        <a href="#projects" class="btn btn-primary">View My Work</a>
                        <a href="#contact" class="btn btn-secondary">Contact Me</a>
                    </div>
                </div>
                <div class="home-image">
                    <div class="image-placeholder">
                        <i class="fas fa-user-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Qualifications Section -->
    <section id="qualifications" class="section">
        <div class="container">
            <h2 class="section-title">Qualifications</h2>
            <div class="qualifications-content">
                <?php foreach($data['qualifications'] as $qualification): ?>
                <div class="qualification-item">
                    <div class="qualification-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="qualification-text">
                        <p><?php echo $qualification; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title">Projects</h2>
            <div class="projects-grid">
                <?php foreach($data['projects'] as $project): ?>
                <div class="project-card">
                    <div class="project-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="project-title"><?php echo $project['title']; ?></h3>
                    <p class="project-description"><?php echo $project['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Research Section -->
    <section id="research" class="section">
        <div class="container">
            <h2 class="section-title">Research Works</h2>
            <div class="research-content">
                <?php foreach($data['research'] as $research): ?>
                <div class="research-card">
                    <div class="research-header">
                        <h3 class="research-title"><?php echo $research['title']; ?></h3>
                        <div class="research-icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                    </div>
                    <p class="research-description"><?php echo $research['description']; ?></p>
                    <div class="research-conference">
                        <i class="fas fa-calendar-alt"></i>
                        <span><?php echo $research['conference']; ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Extracurricular Activities Section -->
    <section id="extracurricular" class="section">
        <div class="container">
            <h2 class="section-title">Extracurricular Activities</h2>
            <div class="activities-timeline">
                <?php foreach($data['extracurricular'] as $activity): ?>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h3 class="timeline-role"><?php echo $activity['role']; ?></h3>
                        <p class="timeline-organization"><?php echo $activity['organization']; ?></p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-info">
                    <h3><?php echo $data['name']; ?></h3>
                    <p>AI & Machine Learning Enthusiast</p>
                </div>
                <div class="footer-social">
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $data['name']; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>