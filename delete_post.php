<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    die("You must be logged in to delete a post. <a href='login.php'>Login here</a>");
}


if (!isset($_POST['post_id'])) {
    die("Invalid request.");
}

$post_id = intval($_POST['post_id']);
$username = $_SESSION['username'];


$post_query = $conn->query("SELECT * FROM posts WHERE post_id = $post_id");
if ($post_query->num_rows == 0) {
    die("Post not found.");
}

$post = $post_query->fetch_assoc();


if ($post['username'] !== $username) {
    die("You are not authorized to delete this post.");
}


$conn->query("DELETE FROM comments WHERE post_id = $post_id"); 
$conn->query("DELETE FROM posts WHERE post_id = $post_id");

header("Location: view_posts.php");
exit();
?>
