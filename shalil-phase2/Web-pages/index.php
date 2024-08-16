<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahin</title>
    <link rel="stylesheet" href="../Web-page-css/reset.css">
    <link rel="stylesheet" href="../Web-page-css/index.css">
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="../Mobile-css/index.css">
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
 
    <article>
        <section class = "AboutMe">
            <div>
                <h1>About me</h1>
                    <p>My name is Sahin and I am a first-year studying Computer Science at Queen Mary University of London. My professional aim is to become a software engineer. In order to achieve this, I plan to complete my bachelors degree in Computer Science and build up my portfolio with a manifold of projects and internships. Fun fact about me I like to travel and experience different cultures.</p>
            </div>
            <figure>
                <img src="data:image/png;base64,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" alt="Queen Mary University of London">
                <figcaption>Aspiring Computer Scientist</figcaption>
            </figure>
        </section>
        <section class = "Education">
            <h1>Education</h1>
            <div>
                <h3>Queen Mary University of London:</h3>
                <p>Computer Science</p>
                <p>2023-2026</p>
            </div>
            <div>
                <h3>LAE Tottenham:</h3>
                <p>A-Levels</p>
                <p>2020-2022</p>
            </div>
        </section>
        <section class = "Projects">
            <h1>Projects</h1>
            <section>
                <div>
                    <h2>Project 1</h2>
                    <p>Project Description:</p>
                    <p>Welcome to my personal portfolio! This is a living document where I capture the essence of my creativity and technical expertise. Here, you'll find a curated collection of my projects, each telling a unique story of challenges tackled and skills honed.</p>
                </div>
                <figure>
                    <img src="../Pictures/PortFolioPage.png">
                    <figcaption>My first portfolio page</figcaption>
                </figure>
            </section>
        </section>
        <section class = "Experience">
            <h1>Experience</h1>
            <div>
                <h3>Support Staff at Highgate School</h3>
                <ul>
                    <li>Seconded to a sixth form and special school to tutor students in Maths and CS</li>
                    <li>Assessed student performance and provided feedback to improve understanding.</li>
                    <li>Managed multiple events simultaneously.</li>
                    <li>Worked in multiple teams to ensure project goals were met</li>
                    <li>Facilitated project planning and tracking to ensure timely delivery of projects</li>
                </ul>
            </div>
        </section>
    </article>
    <aside>
        <section class = "Contact">
            <h3>Contact</h3>
            <ul>
                <li>Email: ec23192@qmul.ac.uk</li>
                <li>Phone No: +44 1234 5678</li>
            </ul>
        </section>
        <section class = "Skills">
            <h3>Skills</h3>
            <ul>
                <li>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/121px-Python-logo-notext.svg.png">    
                    <p>Python</p>
                </li>
                <li>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/200px-HTML5_logo_and_wordmark.svg.png">
                    <p>HTML</p>
                </li>
                <li>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/200px-CSS3_logo_and_wordmark.svg.png">
                    <p>CSS</p>
                </li>
                <li>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/200px-Unofficial_JavaScript_logo_2.svg.png">
                    <p>JavaScript</p>
                </li>
                <li>
                    <img src = "https://upload.wikimedia.org/wikipedia/en/thumb/3/30/Java_programming_language_logo.svg/121px-Java_programming_language_logo.svg.png">
                    <p>Java</p>
                </li>
            </ul>
        </section>
    </aside>
    <footer>
        <p>&copy; 2023 Sahin Halil</p>
    </footer>
</body>
</html>