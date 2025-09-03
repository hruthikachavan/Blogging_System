<?php
session_start();
include 'db.php';


if (!isset($_GET['id'])) {
    die("Invalid request. Post ID is missing.");
}

$post_id = intval($_GET['id']); 


$post_query = $conn->query("SELECT * FROM posts WHERE post_id = $post_id");
$result=$conn->query("SELECT username FROM posts WHERE post_id=$post_id");
$row=$result->fetch_assoc();
$user=$row['username'];


if ($post_query->num_rows == 0) {
    die("Post not found.");
}

$post = $post_query->fetch_assoc();


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['username'])) {
    $comment = $conn->real_escape_string($_POST['comment']);
    $author = $_SESSION['username'];

    $conn->query("INSERT INTO comments (post_id, username, comment, created_at) VALUES ('$post_id', '$author', '$comment', NOW())");
    header("Location: post.php?id=" . $post_id);
    exit();
}


$comments = $conn->query("SELECT * FROM comments WHERE post_id = $post_id ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($post['title']); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 80px; 
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: left;
        }

        h2 {
            color: #2e4493;
            margin-bottom: 10px;
        }

        .content {
            font-size: 18px;
            color: #333;
            line-height: 1.6;
        }

        .comments-section {
            margin-top: 30px;
        }

        .comment {
            background: #f9f9f9;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 4px solid #2e4493;
            border-radius: 5px;
        }

        .comment strong {
            color: #2e4493;
        }

        textarea {
            width: 100%;
            height: 80px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn {
            display: inline-block;
            background: #2e4493;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .btn:hover {
            background: #1a2f70;
        }

        .delete-btn {
            background: red;
            margin-top: 10px;
        }

        .delete-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h2><?php echo $post['title']; ?></h2>
        <p class="author">Posted by: <strong><?php echo $user; ?></strong></p>

        <p class="content"><?php echo $post['content']; ?></p>

        <div class="comments-section">
            <h3>Comments</h3>
            <?php while ($row = $comments->fetch_assoc()): ?>
                <div class="comment">
                    <strong><?php echo $row['username']; ?>:</strong>
                    <?php echo $row['comment']; ?>
                </div>
            <?php endwhile; ?>

            <?php if (isset($_SESSION['username'])): ?>
                <form method="POST">
                    <textarea name="comment" required placeholder="Write your comment..."></textarea>
                    <button type="submit" class="btn">Add Comment</button>
                </form>
            <?php else: ?>
                <p><a href="login.php">Login</a> to add a comment.</p>
            <?php endif; ?>
        </div>

        <?php if (isset($_SESSION['username']) && $_SESSION['username'] == $post['username']): ?>
            <form action="delete_post.php" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                <button type="submit" class="btn delete-btn">Delete Post</button>
            </form>
        <?php endif; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>