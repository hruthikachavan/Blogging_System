<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Blog</title>
    <style>
        
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #2e4493;
            padding: 15px 30px;
            color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        
        .logo {
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 40px;
            margin-right: 10px;
        }

       
        .nav-container {
            flex: 1;
            display: flex;
            justify-content: center;
        }

      
        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        nav ul li a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        
        .user-info {
            font-size: 18px;
            font-weight: bold;
            margin-left: 20px;
        }

       
        .btn-primary {
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            background-color: #f8f9fa;
            color: #2e4493;
            transition: 0.3s;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: white;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.jpg" alt="Health Blog Logo">
        Health Blog
    </div>
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php if (isset($_SESSION['username'])): ?>
                    <li><a href="add_post.php">Add Blog</a></li>
                    <li><a href="view_posts.php">View Blogs</a></li>
                    <li><a href="logout.php" class="btn-primary">Logout</a></li>
                <?php else: ?>
                    <li><a href="login.php" class="btn-primary">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
    <?php if (isset($_SESSION['username'])): ?>
        <div class="user-info">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</div>
    <?php endif; ?>
</header>

</body>
</html>
