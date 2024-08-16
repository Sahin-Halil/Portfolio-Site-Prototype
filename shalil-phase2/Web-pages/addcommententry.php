<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add comment Page</title>
    <link rel="stylesheet" href="../Web-page-css/reset.css">
    <link rel="stylesheet" href="../Web-page-css/addentry.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../Mobile-css/addentry.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@100..800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Basic&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <h1>Sahin Halil</h1>
                <li><a href="index.php">Home</a></li>
                <li><a href="viewblog.php">Blog</a></li>
                <?php
                    include '../Scripts/loginlogoutbtn.php';
                ?>
            </ul>
        </nav>
    </header>
    <form method="post" action="../Scripts/addcomment.php">
        <fieldset>
            <legend>Comment</legend>
            <p>
                <textarea name="comment" placeholder="Enter your text here"></textarea>
            </p>

            <p>
                <input type="hidden" name="blog_id" value="<?php echo $_GET['blog_id']; ?>">
            </p>
            
            <p>
                <button type = "submit">Add Comment</button>
                <button type = "button">Clear</button>
            </p>
        </fieldset>
    </form>
    <footer>
        <p>&copy; 2023 Sahin Halil</p>
    </footer>
    <script src="../Scripts/script.js"></script>
</body>
</html>