<?php
session_start();
include 'db.php';


$selected_category = isset($_GET['category']) ? $_GET['category'] : 'All Categories';


if ($selected_category == "All Categories") {
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
} else {
    $sql = "SELECT * FROM posts WHERE category = '$selected_category' ORDER BY created_at DESC";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Page styling */
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 30px;
        }
        .blog-card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .blog-card h3 {
            margin-bottom: 10px;
        }
        .category-label {
            font-weight: bold;
            color: #007bff;
        }
        /* Styling for category dropdown */
        #categoryFilter {
            width: 250px;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #007bff;
            background-color: #ffffff;
            font-size: 16px;
            cursor: pointer;
        }
        html, body {
    height: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
}

.container {
    flex: 1;
}

footer {
    background: #2e4493;
    color: white;
    text-align: center;
    padding: 10px 0;
    position: relative;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h2 class="text-center">Latest Blogs</h2>

        
        <div class="text-center mb-4">
            <label for="categoryFilter" class="fw-bold">Filter by Category:</label>
            <select name="category" id="categoryFilter" class="form-select d-inline-block" style="width: 250px;">
                <option value="All Categories" <?php if ($selected_category == "All Categories") echo "selected"; ?>>All Categories</option>
                <option value="Fitness & Exercise" <?php if ($selected_category == "Fitness & Exercise") echo "selected"; ?>>Fitness & Exercise</option>
                <option value="Nutrition & Diet" <?php if ($selected_category == "Nutrition & Diet") echo "selected"; ?>>Nutrition & Diet</option>
                <option value="Mental Health & Wellness" <?php if ($selected_category == "Mental Health & Wellness") echo "selected"; ?>>Mental Health & Wellness</option>
                <option value="Disease Prevention & Awareness" <?php if ($selected_category == "Disease Prevention & Awareness") echo "selected"; ?>>Disease Prevention & Awareness</option>
                <option value="Medical News & Research" <?php if ($selected_category == "Medical News & Research") echo "selected"; ?>>Medical News & Research</option>
                <option value="Personal Health & Self-Care" <?php if ($selected_category == "Personal Health & Self-Care") echo "selected"; ?>>Personal Health & Self-Care</option>
            </select>
        </div>

        
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='blog-card'>";
                echo "<h3>" . $row['title'] . "</h3>";
                echo "<p><span class='category-label'>Category:</span> " . $row['category'] . "</p>";
                echo "<p>" . substr($row['content'], 0, 100) . "...</p>";
                echo "<a href='post.php?id=" . $row['post_id'] . "' class='btn'>Read More</a>";

                echo "</div>";
            }
        } else {
            echo "<p class='text-center'>No blogs found in this category.</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        
        document.getElementById("categoryFilter").addEventListener("change", function() {
            var selectedCategory = this.value;
            window.location.href = "view_posts.php?category=" + encodeURIComponent(selectedCategory);
        });
    </script>
</body>
</html>
