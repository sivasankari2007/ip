<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact | Sivasankari</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Navigation -->

    <header>

        <nav class="navbar">

            <div class="logo">
                Sivasankari
            </div>

            <ul class="nav-links">

                <li><a href="index.php">Home</a></li>

                <li><a href="about.php">About</a></li>

                <li><a href="academic.php">Academic</a></li>

                <li><a href="projects.php">Projects</a></li>

                <li><a href="achievements.php">Achievements</a></li>

                <li><a href="skills.php">Skills</a></li>

                <li><a href="internships.php">Internships</a></li>

                <li><a href="contact.php">Contact</a></li>

            </ul>

        </nav>

    </header>


    <!-- Contact Section -->

    <section class="contact">

        <h1>Contact Me</h1>

        <p>Feel free to contact me using the form below.</p>


        <form action="save_contact.php" method="POST">

            <label>Name</label>

            <input
                type="text"
                name="name"
                placeholder="Enter your name"
                required
            >


            <label>Email</label>

            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
            >


            <label>Subject</label>

            <input
                type="text"
                name="subject"
                placeholder="Enter subject"
                required
            >


            <label>Message</label>

            <textarea
                name="message"
                placeholder="Enter your message"
                rows="6"
                required
            ></textarea>


            <button type="submit">
                Send Message
            </button>

        </form>

    </section>


    <footer>

        <p>
            © 2026 Sivasankari. All Rights Reserved.
        </p>

    </footer>


    <script src="js/script.js"></script>

</body>

</html>