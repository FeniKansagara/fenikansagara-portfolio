
<?php
$blogs = [
    [
        "image" => "../images/blog1.png",
        "date" => "October 31, 2026",
        "title" => "Learn Today, Lead Tomorrow: The Power of Professional Training.",
        "description" => "Discover how professional training builds practical skills, boosts confidence, and prepares you for a successful career.",
        "link" => "https://mdidminfowaytraining.blogspot.com/2026/10/learn-today-lead-tomorrow-power-of.html"
    ],
    [
        "image" => "../images/blog2.png",
        "date" => "November 02, 2026",
        "title" => "From Classroom to Career: Why Practical Training Changes Everything.",
        "description" => "Practical training helps students turn classroom knowledge into real-world skills and prepare for their careers..",
        "link" => "https://mdidminfowaytraining.blogspot.com/2026/11/from-classroom-to-career-why-practical.html"
    ],
    [
        "image" => "../images/blog3.png",
        "date" => "November 02, 2026",
        "title" => "Invest in Yourself: Why Professional Training Matters for Your Future",
        "description" => "Professional training helps you develop valuable skills, boost confidence, and invest in a brighter career future.",
        "link" => "https://mdidminfowaytraining.blogspot.com/2026/11/invest-in-yourself-why-professional.html"
    ],
    [
        "image" => "../images/blog4.png",
        "date" => "November 03, 2026",
        "title" => "From Learning to Earning: Your Path Through Digital Marketing Training.",
        "description" => "Discover how digital marketing training helps you build practical skills, gain confidence, and turn your learning into career opportunities.",
        "link" => "https://mdidminfowaytraining.blogspot.com/2026/11/from-learning-to-earning-your-path.html"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blogs | MyPortfolio</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: #fff;
    color: #171717;
}

.blog-container {
    max-width: 1390px;
    margin: 45px auto;
    padding: 0 25px;
}

.blog-heading {
    text-align: center;
    margin-bottom: 60px;
}

.blog-heading h1 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 18px;
}

.blog-heading p {
    color: #667085;
    font-size: 16px;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 27px;
}

.blog-card {
    border: 1px solid #ddd;
    background: #fff;
    display: flex;
    flex-direction: column;
    min-width: 0;
}

.blog-card img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    display: block;
}

.blog-content {
    padding: 22px 25px 30px;
    display: flex;
    flex-direction: column;
    flex: 1;
}

.blog-date {
    color: #667085;
    font-size: 13px;
    margin-bottom: 15px;
}

.blog-title {
    font-size: 19px;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 20px;
    min-height: 58px;
}

.blog-description {
    color: #667085;
    font-size: 14px;
    line-height: 1.8;
    margin-top: auto;
    margin-bottom: 25px;
}

.read-more {
    color: #111;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    align-self: flex-start;
}

.read-more:hover {
    color: #555;
}

@media(max-width: 1000px) {
    .blog-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media(max-width: 650px) {
    .blog-grid {
        grid-template-columns: 1fr;
    }

    .blog-heading h1 {
        font-size: 32px;
    }

    .blog-container {
        margin: 30px auto;
    }
}
</style>
</head>

<body>

<main class="blog-container">

    <div class="blog-heading">
        <h1>Blogs</h1>
        <p>Explore our latest insights, ideas, and digital marketing trends.</p>
    </div>

    <div class="blog-grid">

        <?php foreach ($blogs as $blog) { ?>
            <article class="blog-card">

                <img
                    src="<?php echo htmlspecialchars($blog['image']); ?>"
                    alt="<?php echo htmlspecialchars($blog['title']); ?>"
                >

                <div class="blog-content">

                    <div class="blog-date">
                        ▢ <?php echo htmlspecialchars($blog['date']); ?>
                    </div>

                    <h2 class="blog-title">
                        <?php echo htmlspecialchars($blog['title']); ?>
                    </h2>

                    <p class="blog-description">
                        <?php echo htmlspecialchars($blog['description']); ?>
                    </p>

                    <a
                        href="<?php echo htmlspecialchars($blog['link']); ?>"
                        class="read-more"
                    >
                        Read More <span>→</span>
                    </a>

                </div>
            </article>
        <?php } ?>

    </div>

</main>

</body>
</html>
