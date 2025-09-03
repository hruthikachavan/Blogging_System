<?php
session_start();
include 'header.php'; // Include the navigation bar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* General Page Styling */
        body {
            background-color: #eaf4fc;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Hero Section */
        .hero {
            text-align: center;
            padding: 60px 20px;
            background-color: #eaf4fc;
        }
        .hero h1 {
    font-size: 36px;
    font-weight: bold;
    color: #0b3d91;
    margin-top: 40px; /* Increased margin for better spacing */
}
        .hero p {
            font-size: 18px;
            color: #555;
        }

        /* Latest Articles Section */
        .articles-section {
            text-align: center;
            padding: 40px 20px;
        }
        .articles-section h2 {
            font-size: 28px;
            font-weight: bold;
            color: #0b3d91;
        }

        /* Blog Cards */
        .blog-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .blog-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .blog-card:hover {
            transform: translateY(-5px);
        }
        .blog-card img {
            width: 250px;
            height:180px;
            margin-bottom: 10px;
            border-radius: 10px;
        }
        .blog-card h4 {
            font-size: 18px;
            font-weight: bold;
        }
        .blog-card p {
            font-size: 14px;
            color: #555;
        }

        /* About Section */
        .about-section {
            text-align: center;
            padding: 40px 20px;
            background: white;
            margin-top: 30px;
        }
        .about-section h2 {
            font-size: 26px;
            font-weight: bold;
            color: #0b3d91;
        }
        .about-section p {
            font-size: 16px;
            color: #555;
            max-width: 800px;
            margin: auto;
        }

        /* Footer */
        .footer {
            background: #0b3d91;
            color: white;
            text-align: center;
            padding: 15px 10px;
            margin-top: auto;
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero">
    <h1>Welcome to the Health Blog</h1>
    <p>Get expert insights, wellness tips, and share your health experiences.</p>
</div>

<!-- Latest Articles Section -->
<div class="articles-section">
    <h2>About Our Website</h2>
    <div class="blog-container">
        <!-- Article 1 -->
        <div class="blog-card">
            <img src="commun1.jpg" alt="Healthy Diet">
            <h4>Connect with Like- Minded Individuals</h4>
            <p> Connect with like-minded individuals! Share, learn, and grow together on your health journey. </p>
        </div>
        <!-- Article 2 -->
        <div class="blog-card">
            <img src="comm2.jpg" alt="Exercise Benefits">
            <h4>Share Your Health Journey</h4>
            <p>Write and publish your own health blogs to inspire others and share knowledge.</p>
        </div>
        <!-- Article 3 -->
        <div class="blog-card">
            <img src="comm3.jpg" alt="Mental Wellness">
            <h4>Engage & Discuss</h4>
            <p>Comment on posts, interact with other users, and exchange valuable insights.</p>
        </div>
    </div>
</div>

<!-- About Section -->
<div class="about-section">
    <h2>About Our Blog</h2>
    <p>
        The Health Blog is a community-driven platform where health enthusiasts, professionals, and wellness lovers come together 
        to share valuable insights. Whether you're looking for tips on nutrition, fitness, mental health, or general well-being, 
        we've got you covered.
    </p>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
