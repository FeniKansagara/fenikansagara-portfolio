
<?php
$name = "Feni Kansagara";
$role = "Digital Marketing intern";
$company = "MDIDM Infoway";
$email = "your-email@example.com";
$linkedin = "https://www.linkedin.com/";

$projects = [
    ["SEO Audit & blog", "Website analysis, meta tags, headings and technical SEO.", "SEO"],
    ["Google Ads & meta ads Campaign", "Keyword research, ad copy and campaign planning.", "Google Ads"],
    ["AI reels & organic", "Website traffic, user behaviour and performance analysis.", "Ai reels"],
    ["Email Marketing", "Email campaigns, welcome emails and automation workflows.", "Email Marketing"],
    ["Affiliate Marketing", "Product promotion and affiliate content strategies.", "Affiliate"],
    ["Social Media Marketing", "Social media content planning and engagement strategies.", "Social Media"]
];

$skills = [
    "Search Engine Optimization",
    "Social Media Marketing",
    "Google Ads",
    "Meta Ads",
    "Content Writing",
    "Canva Design",
    "Email Marketing",
    "AI reels & organic",
    "WordPress",
    "Affiliate Marketing"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php echo htmlspecialchars($name); ?> | Portfolio</title>
<meta name="description" content="Digital marketing portfolio of Feni Kansagara.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
:root {
    --black: #171717;
    --dark-grey: #303030;
    --grey: #777777;
    --light-grey: #eeeeee;
    --off-white: #f8f8f8;
    --white: #ffffff;
    --border: #dedede;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    font-family: 'Poppins', sans-serif;
    background: var(--white);
    color: var(--dark-grey);
    line-height: 1.7;
}

a {
    text-decoration: none;
    color: inherit;
}

.container {
    width: 84%;
    max-width: 1200px;
    margin: auto;
}

section {
    padding: 90px 0;
}

h1, h2, h3 {
    color: var(--black);
    line-height: 1.3;
}

h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 4vw, 42px);
}

p {
    color: var(--grey);
}

/* HEADER */

header {
    background: var(--white);
    border-bottom: 1px solid var(--border);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.navbar {
    min-height: 82px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 25px;
}

.logo {
    font-family: 'Playfair Display', serif;
    font-size: 32px;
    font-weight: 700;
    color: var(--black);
}

.logo span {
    color: var(--grey);
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 28px;
}

.nav-links a {
    color: var(--dark-grey);
    font-size: 13px;
    font-weight: 600;
    transition: 0.3s;
}

.nav-links a:hover {
    color: #888888;
}

.nav-links .contact-link {
    background: var(--black);
    color: var(--white);
    padding: 11px 18px;
    border-radius: 5px;
}

.nav-links .contact-link:hover {
    background: #555555;
}

/* BUTTONS */

.btn {
    display: inline-block;
    padding: 13px 23px;
    background: var(--black);
    border: 1px solid var(--black);
    border-radius: 5px;
    color: var(--white);
    font-size: 13px;
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    transition: 0.3s;
    cursor: pointer;
}

.btn:hover {
    background: #555555;
    border-color: #555555;
    transform: translateY(-2px);
}

.btn-outline {
    background: transparent;
    color: var(--black);
}

.btn-outline:hover {
    background: var(--black);
    color: var(--white);
}

/* HOME SECTION */

.hero {
    min-height: 620px;
    display: flex;
    align-items: center;
    background: linear-gradient(120deg, #f1f1f1, #ffffff);
}

.hero-content {
    display: grid;
    grid-template-columns: 1.4fr 0.8fr;
    align-items: center;
    gap: 65px;
}

.hero-label {
    display: inline-block;
    padding: 7px 13px;
    background: #e4e4e4;
    color: var(--dark-grey);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-radius: 3px;
}

.hero h1 {
    font-size: clamp(38px, 5vw, 63px);
    font-weight: 700;
    margin: 22px 0;
    letter-spacing: -1.5px;
}

.hero h1 span {
    color: #777777;
}

.hero-description {
    max-width: 620px;
    font-size: 15px;
    line-height: 1.9;
}

.hero-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 28px;
}

.profile-card {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 12px;
    text-align: center;
    padding: 35px 25px;
    box-shadow: 0 18px 45px rgba(0,0,0,0.07);
}

.profile-circle {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto 24px;
    border: 7px solid #e7e7e7;
    flex-shrink: 0;
}

.profile-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

.profile-card h3 {
    font-size: 22px;
    margin-bottom: 6px;
}

.profile-card p {
    font-size: 12px;
}

.small-label {
    display: inline-block;
    border-top: 1px solid var(--border);
    margin-top: 18px;
    padding-top: 14px;
    font-size: 10px;
    letter-spacing: 2px;
    font-weight: 700;
    color: var(--dark-grey);
}

/* SECTION HEADINGS */

.section-heading {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.eyebrow {
    display: inline-block;
    font-size: 11px;
    letter-spacing: 3px;
    font-weight: 700;
    text-transform: uppercase;
    color: #777777;
    margin-bottom: 12px;
}

.section-heading h2 {
    margin-bottom: 14px;
}

.section-heading p {
    font-size: 14px;
}

/* ABOUT */

.about {
    background: var(--white);
}
.about h2 {
    font-size: 40px;
}
.about-content {
    display: grid;
    grid-template-columns: 0.8fr 1.2fr;
    gap: 45px;
}

.about-highlight {
    background: var(--black);
    color: var(--white);
    padding: 38px 32px;
    border-radius: 8px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.about-highlight h3 {
    color: var(--white);
    font-family: 'Playfair Display', serif;
    font-size: 26px;
    margin-bottom: 18px;
}

.about-highlight p {
    color: #cccccc;
    font-size: 14px;
    line-height: 1.9;
}

.about-text h3 {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    margin-bottom: 15px;
}

.about-text p {
    font-size: 14px;
    margin-bottom: 14px;
}

.about-points {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 12px;
    margin-top: 22px;
}

.about-point {
    padding: 12px;
    background: var(--off-white);
    border: 1px solid var(--border);
    border-radius: 5px;
    color: var(--dark-grey);
    font-size: 12px;
    font-weight: 600;
}

.about-point span {
    color: #777777;
    margin-right: 6px;
}

/* PROJECTS */

.projects {
    background: var(--off-white);
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 23px;
}

.project-card {
    background: var(--white);
    padding: 28px 25px;
    border: 1px solid var(--border);
    border-radius: 8px;
    transition: 0.3s;
}

.project-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
    border-color: #aaaaaa;
}

.project-number {
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--black);
    color: var(--white);
    border-radius: 6px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 22px;
}

.project-card h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 18px;
    margin-bottom: 12px;
}

.project-card p {
    font-size: 13px;
    line-height: 1.8;
    margin-bottom: 20px;
}

.project-tag {
    display: inline-block;
    background: #eeeeee;
    color: #444444;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
}

/* SKILLS */

.skills {
    background: var(--white);
}

.skills-panel {
    max-width: 950px;
    margin: auto;
    padding: 35px;
    background: var(--off-white);
    border: 1px solid var(--border);
    border-radius: 8px;
}

.skills-panel h3 {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    text-align: center;
    margin-bottom: 28px;
}

.skills-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 14px;
}

.skill {
    background: var(--white);
    border: 1px solid var(--border);
    border-left: 4px solid #555555;
    border-radius: 5px;
    padding: 14px 17px;
    font-size: 13px;
    font-weight: 600;
    color: var(--dark-grey);
    transition: 0.3s;
}

.skill:hover {
    background: var(--black);
    color: var(--white);
    transform: translateX(4px);
}



/* CONTACT SECTION */

.contact-section {
    background: #ffffff;
    padding: 80px 0;
}

.contact-heading {
    text-align: center;
    margin-bottom: 52px;
}

.contact-heading h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 4vw, 42px);
    font-weight: 700;
    color: #171717;
    line-height: 1.3;
    margin-bottom: 20px;
}

.contact-heading h2 span {
    color: #171717;
}

.contact-heading p {
    font-size: 16px;
    color: #666666;
}

/* CONTACT GRID */

.contact-grid {
    max-width: 1110px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 23px;
}

/* CONTACT CARD */

.contact-card {
    display: flex;
    align-items: center;
    gap: 22px;
    min-height: 120px;
    padding: 24px 27px;
    background: #ffffff;
    border: 1px solid #dce3ef;
    border-radius: 14px;
    transition: 0.3s ease;
}

.contact-card:hover {
    border-color: #315b9d;
    box-shadow: 0 8px 24px rgba(49, 91, 157, 0.08);
    transform: translateY(-3px);
}

/* ICON BOX */

.contact-icon {
    width: 62px;
    height: 62px;
    min-width: 62px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #edf2fa;
    color: #101012;
    border-radius: 12px;
    font-size: 25px;
}

/* CONTACT TEXT */

.contact-info {
    min-width: 0;
}

.contact-info h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    font-weight: 600;
    color: #171717;
    margin-bottom: 7px;
}

.contact-info p,
.contact-info a {
    font-size: 14px;
    line-height: 1.7;
    color: #666666;
    overflow-wrap: anywhere;
}

.contact-info a:hover {
    color: #315b9d;
}


.profile-circle {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    overflow: hidden;
    border: 5px solid #e5e5e5;
    margin: 0 auto 25px;
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
    border-radius: 50%;
}

@media (max-width: 1000px) {
    .profile-circle {
        width: 165px;
        height: 165px;
    }
}




/* FOOTER */

footer {
    background: var(--black);
    padding: 25px 0;
    text-align: center;
}

footer p {
    color: #cccccc;
    font-size: 12px;
}

footer span {
    color: var(--white);
    font-weight: 700;
}

/* RESPONSIVE */

@media (max-width: 1000px) {
    .container {
        width: 90%;
    }

    .nav-links {
        gap: 15px;
    }

    .hero-content {
        gap: 30px;
    }

    .profile-circle {
        width: 165px;
        height: 165px;
        font-size: 50px;
    }

    .projects-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (max-width: 760px) {
    section {
        padding: 65px 0;
    }

    .navbar {
        padding: 15px 0;
        flex-direction: column;
        gap: 14px;
    }

    .nav-links {
        justify-content: center;
        flex-wrap: wrap;
        gap: 12px 17px;
    }

    .nav-links a {
        font-size: 11px;
    }

    .hero {
        padding: 65px 0;
    }

    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .hero-description {
        margin: auto;
    }

    .hero-buttons {
        justify-content: center;
    }

    .profile-card {
        max-width: 390px;
        width: 100%;
        margin: auto;
    }

    .about-content,
    .contact-container {
        grid-template-columns: 1fr;
    }

    .section-heading {
        margin-bottom: 35px;
    }
}

@media (max-width: 480px) {
    .hero h1 {
        font-size: 38px;
    }

    .hero-buttons {
        flex-direction: column;
    }

    .hero-buttons .btn {
        width: 100%;
    }

    .projects-grid,
    .skills-grid,
    .about-points {
        grid-template-columns: 1fr;
    }

    .skills-panel,
    .contact-info,
    .contact-form {
        padding: 23px 18px;
    }
}
</style>
</head>

<body>

<header>
    <div class="container navbar">
        <a href="#home" class="logo">Feni<span>.</span></a>

        <nav class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About Me</a>
            <a href="#projects">My Projects</a>
            <a href="#skills">My Skills</a>
            <a href="#contact" class="contact-link">Contact Me</a>
        </nav>
    </div>
</header>

<!-- HOME -->
<section class="hero" id="home">
    <div class="container hero-content">

        <div>
            <div class="hero-label">
                <?php echo htmlspecialchars($role); ?>
            </div>

            <h1>
                Hello, I'm<br>
                <span><?php echo htmlspecialchars($name); ?></span>
            </h1>

            <p class="hero-description">
                I am learning digital marketing at
                <?php echo htmlspecialchars($company); ?>.
                I enjoy exploring SEO, social media, online advertising
                and creative strategies that help brands grow.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="btn">Explore My Work &rarr;</a>
                <a href="#contact" class="btn btn-outline">Let's Connect</a>
            </div>
        </div>

        <div class="profile-card">
           <div class="profile-circle">
    <img src="images/feni.jpg" alt="Feni Kansagara">
</div>
            <h3><?php echo htmlspecialchars($name); ?></h3>
            <p>Digital Marketing | SEO | Social Media</p>
            <div class="small-label">LEARN • CREATE • GROW</div>
        </div>

    </div>
</section>


<!-- ABOUT -->
<section class="about" id="about">
    <div class="container">

        <div class="section-heading">
            <span class="eyebrow">About Me</span>
            <h2>My Journey in Digital Marketing</h2>
            <p>Building my knowledge through learning, creativity and practice.</p>
        </div>

        <div class="about-content">

            <div class="about-highlight">
                <h3>My Career Goal</h3>
                <p>
                    My goal is to become a skilled digital marketing
                    professional, gain practical experience and help
                    businesses strengthen their online presence.
                </p>
            </div>

            <div class="about-text">
                <h3>Nice to Meet You!</h3>

                <p>
                    I'm <?php echo htmlspecialchars($name); ?>, a TYBCA student
                    and Digital Marketing Intern at
                    <?php echo htmlspecialchars($company); ?>.
                </p>

                <p>
                    I am developing my skills in SEO, Google Ads,
                    social media marketing, email campaigns and analytics.
                    I enjoy learning new tools and working on practical
                    training assignments.
                </p>

                <div class="about-points">
                    <div class="about-point"><span>✦</span> Creative Thinking</div>
                    <div class="about-point"><span>✦</span> Continuous Learning</div>
                    <div class="about-point"><span>✦</span> Practical Projects</div>
                    <div class="about-point"><span>✦</span> Career Growth</div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROJECTS -->
<section class="projects" id="projects">
    <div class="container">

        <div class="section-heading">
            <span class="eyebrow">My Projects</span>
            <h2>Learning & Practical Work</h2>
            <p>Digital marketing topics I have practised during my training.</p>
        </div>

        <div class="projects-grid">
           
<?php foreach ($projects as $index => $project): ?>
    <?php
       $projectLinks = [
    "projects/seo-audit-blog.php",
    "projects/google-ads-meta-ads.php",
    "projects/ai-reels-organic.php",
    "projects/email-marketing.php",
    "projects/affiliate-marketing.php",
    "projects/social-media.php"
];
    ?>

    <a href="<?php echo $projectLinks[$index]; ?>" class="project-card">

        <div class="project-number">
            <?php echo str_pad($index + 1, 2, "0", STR_PAD_LEFT); ?>
        </div>

        <h3><?php echo htmlspecialchars($project[0]); ?></h3>
        <p><?php echo htmlspecialchars($project[1]); ?></p>

        <span class="project-tag">
            <?php echo htmlspecialchars($project[2]); ?>
        </span>

        <p>View Project →</p>

    </a>
<?php endforeach; ?>



    </div>
</section>

<!-- SKILLS -->
<section class="skills" id="skills">
    <div class="container">

        <div class="section-heading">
            <span class="eyebrow">My Skills</span>
            <h2>Tools & Skills I'm Learning</h2>
            <p>My growing digital marketing skill set.</p>
        </div>

        <div class="skills-panel">
            <h3>Digital Marketing Skills</h3>

            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill">
                        <?php echo htmlspecialchars($skill); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>


<!-- CONTACT SECTION -->
<section class="contact-section" id="contact">

    <div class="container">

        <!-- Heading -->
        <div class="contact-heading">
            <h2>Get In <span>Touch</span></h2>
            <p>
                Feel free to connect with me and let's share ideas!
            </p>
        </div>

        <!-- Contact Cards -->
        <div class="contact-grid">

            <!-- Name -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="contact-info">
                    <h3>Name</h3>
                    <p>Feni Kansagara</p>
                </div>
            </div>

            <!-- Email -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info">
                    <h3>Email</h3>
                    <a href="malito:fenikansagara110@gmail.com">
                        fenikansagara110@gmail.com
                    </a>
                </div>
            </div>

            <!-- Mobile -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-info">
                    <h3>Mobile</h3>
                    <a href="tel:+917041271356">
                        +91 7041271356
                    </a>
                </div>
            </div>

            <!-- LinkedIn -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="contact-info">
                    <h3>LinkedIn</h3>
                    <a href="https://www.linkedin.com/feed/"
                       target="_blank"
                       rel="noopener noreferrer">
                        View My Profile
                    </a>
                </div>
            </div>

            <!-- Location -->
            <div class="contact-card">
                <div class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info">
                    <h3>Location</h3>
                    <p>Rajkot, Gujarat, India</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- FOOTER -->
<footer>
    <div class="container">
        <p>
            &copy; <?php echo date("Y"); ?>
            <span><?php echo htmlspecialchars($name); ?></span>.
            Digital Marketing Portfolio.
        </p>
    </div>
</footer>

</body>
</html>

 




 