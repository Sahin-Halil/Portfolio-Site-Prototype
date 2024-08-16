<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Page</title>
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
        <h2>Blog Reviews</h2>
    </div>
    <article>
            <form action="viewblog.php" method="get">
                <label for="month">Choose a month:</label>
                <select name="month">
                    <option value="01">January</option>
                    <option value="02">February</option>
                    <option value="03">March</option>
                    <option value="04">April</option>
                    <option value="05">May</option>
                    <option value="06">June</option>
                    <option value="07">July</option>
                    <option value="08">August</option>
                    <option value="09">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
                <input type="submit" value="View Entries">
            </form>
            <table>
                <tr>
                    <th> Title </th>
                    <th> Post </th>
                    <th> Date </th>
                </tr>

                <?php
                include '../Scripts/database_connection.php';

                if (isset($_GET['month'])) {

                    $selectedMonth = $_GET['month'];
                    $sql = "SELECT * FROM BLOGS WHERE MONTH(datetime) = $selectedMonth";
                    echo "Table for " . $selectedMonth . ":";
                }
                else{
                    $sql = "SELECT * FROM BLOGS";
                }

                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    $posts = array();

                    while ($row = $result->fetch_assoc()) {
                        $posts[] = $row;
                    }
                
                    include '../Scripts/bubblesort.php';

                    foreach ($posts as $post) {
                        printf("<tr align='center'>%s%s%s</tr>\n",
                        "<td><a href='viewcomment.php?blog_id=" . $post['ID'] . "'>" . $post['title'] . "</a></td>",
                        "<td><a href='viewcomment.php?blog_id=" . $post['ID'] . "'>" . $post['body'] . "</a></td>",
                        "<td><a href='viewcomment.php?blog_id=" . $post['ID'] . "'>" . $post['datetime'] . "</a></td>"
                        );
                    }
                }
                closeConnection($conn);
                ?>
            </table>
    </article>
    <section>
            <a href="addentry.php">Add Post</a>
    </section>
    <footer>
        <p>&copy; 2023 Sahin Halil</p>
    </footer>
</body>
</html>