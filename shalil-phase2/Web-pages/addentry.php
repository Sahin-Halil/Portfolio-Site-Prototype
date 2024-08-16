<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post Page</title>
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
    <form method="post" action="../Scripts/addpost.php">
        <fieldset>
            <legend>Add Blog</legend>
            <p>
                <input type="text" name="blogTitle" placeholder="Title">
            </p>
            <p>
                <textarea name="blogContent" placeholder="Enter your text here"></textarea>
            </p>
            <p>
                <button type = "submit">Add Post</button>
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