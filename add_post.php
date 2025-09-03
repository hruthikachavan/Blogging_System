

<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    die("You must be logged in to add a post. <a href='login.php'>Login here</a>");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category']; 
    $author = $_SESSION['username'];

    $sql = "INSERT INTO posts (title, content, category, username) VALUES ('$title', '$content', '$category', '$author')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='success-message'>Post added successfully. <a href='view_posts.php'>View Posts</a></div>";
    } else {
        echo "<div class='error-message'>Error: " . $conn->error . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog Post</title>
    <style>

       
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 80px 0 20px; 
    background-color: #f4f4f4;
    text-align: center;
}


.container {
    width: 50%;
    margin: auto;
    background: white;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
}


h2 {
    color: #2e4493;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

input, textarea, select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

textarea {
    height: 150px;
    resize: none;
}


button {
    background-color: #2e4493;
    color: white;
    border: none;
    padding: 12px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    transition: 0.3s;
}

button:hover {
    background-color: #1a2f70;
}


.success-message, .error-message {
    background-color: #dff0d8;
    color: #3c763d;
    padding: 10px;
    margin: 15px auto;
    width: 50%;
    border-radius: 5px;
    font-size: 16px;
}

.error-message {
    background-color: #f2dede;
    color: #a94442;
}

    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <div class="container">
        <h2>Add a New Blog Post</h2>
        <form action="add_post.php" method="POST">

            <label>Category:</label>
            <select name="category" required>
                <option value="Fitness & Exercise">Fitness & Exercise</option>
                <option value="Nutrition & Diet">Nutrition & Diet</option>
                <option value="Mental Health & Wellness">Mental Health & Wellness</option>
                <option value="Disease Prevention & Awareness">Disease Prevention & Awareness</option>
                <option value="Medical News & Research">Medical News & Research</option>
                <option value="Personal Health & Self-Care">Personal Health & Self-Care</option>
            </select>

            <label>Title:</label>
            <input type="text" name="title" placeholder="Enter blog title" required>

            <label>Content:</label>
            <textarea name="content" placeholder="Write your blog content here..." required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
