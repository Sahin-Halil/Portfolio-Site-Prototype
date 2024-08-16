<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Page</title>
    <link rel="stylesheet" href="../Web-page-css/reset.css">
    <link rel="stylesheet" href="../Web-page-css/viewblog.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../Mobile-css/viewblog.css">
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
    <div>
        <h2>Comments</h2>
    </div>
    <article>
            <table>
                <tr>
                    <th> Comment </th>
                    <th> Date </th>
                </tr>

                <?php
                include '../Scripts/database_connection.php';

                $blog_id = $_GET['blog_id'];

                $sql = "SELECT * FROM COMMENTS WHERE blog_id = '$blog_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    $posts = array();
                
                    while ($row = $result->fetch_assoc()) {
                        $posts[] = $row;
                    }
                
                    include '../Scripts/bubblesort.php';

                    foreach ($posts as $post) {
                        printf("<tr align='center'>%s%s</tr>\n",
                        "<td><a href='../Scripts/removecomment.php?comment_id=" . $post['comment_id'] . "'>" . $post['comment_text'] . "</a></td>",
                        "<td><a href='../Scripts/removecomment.php?comment_id=" . $post['comment_id'] . "'>" . $post['datetime'] . "</a></td>"
                    );
                    }
                }
                closeConnection($conn);
                ?>
            </table>
    </article>
    <section>
            <a href="addcommententry.php?blog_id=<?php echo $blog_id; ?>">Add Comment</a>
            <a href="../Scripts/removepost.php?blog_id=<?php echo $blog_id; ?>">Delete Post</a>
    </section>
    <footer>
        <p>&copy; 2023 Sahin Halil</p>
    </footer>
</body>
</html>