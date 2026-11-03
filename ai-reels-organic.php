
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AI Reel & Organic | MyPortfolio</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f7f7f7;
    color: #171717;
}

header {
    background: #fff;
    border-bottom: 1px solid #ddd;
    padding: 22px 0;
}

.header-container {
    max-width: 1160px;
    margin: auto;
    padding: 0 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    font-family: Georgia, serif;
    font-size: 30px;
    font-weight: bold;
}

.back-btn {
    background: #171717;
    color: #fff;
    text-decoration: none;
    padding: 15px 23px;
    border-radius: 6px;
}

.container {
    max-width: 1160px;
    margin: 70px auto;
    padding: 0 15px;
}

.page-title {
    text-align: center;
    margin-bottom: 45px;
}

.page-title h1 {
    font-family: Georgia, serif;
    font-size: 42px;
    margin-bottom: 15px;
}

.page-title p {
    color: #777;
    font-size: 16px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.card {
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 45px 30px;
    text-align: center;
    text-decoration: none;
    color: #171717;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.card .number {
    color: #888;
    font-size: 14px;
    margin-bottom: 20px;
}

.card h2 {
    font-family: Georgia, serif;
    font-size: 30px;
    margin-bottom: 15px;
}

.card p {
    color: #777;
    font-size: 15px;
    line-height: 1.7;
}

footer {
    text-align: center;
    color: #888;
    padding: 25px;
    font-size: 14px;
}

@media(max-width: 700px) {
    .cards {
        grid-template-columns: 1fr;
    }

    .page-title h1 {
        font-size: 32px;
    }

    .logo {
        font-size: 24px;
    }
}
.view-btn {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 24px;
    background: #171717;
    color: #fff;
    border-radius: 6px;
    font-size: 14px;
    transition: 0.3s;
}

.card:hover .view-btn {
    background: #444;
}
</style>
</head>

<body>

<header>
    <div class="header-container">
        <div class="logo">MyPortfolio.</div>
        <a href="../index.php#projects" class="back-btn">← Back</a>
    </div>
</header>

<main class="container">

    <div class="page-title">
        <h1>AI Reel & Organic</h1>
        <p>Explore my creative video and organic marketing projects</p>
    </div>

    <div class="cards">

       
<a href="ai-reel.php" class="card">
    <div class="number">01</div>
    <h2>AI Reel</h2>
    <p>AI-powered video content and creative reels.</p>
    <span class="view-btn">View Reel →</span>
</a>

<a href="organic.php" class="card">
    <div class="number">02</div>
    <h2>Organic</h2>
    <p>Organic content and social media marketing projects.</p>
    <span class="view-btn">View Reel →</span>
</a>


    </div>

</main>

<footer>
    © 2026 MyPortfolio. All Rights Reserved.
</footer>

</body>
</html>
