<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Forgette - Home</title>
    <link rel="stylesheet" href="style.css" id="theme-style">
</head>
<body>
    <header>
        <a href="index.php" class="header-name">Justin Forgette</a>
        <nav>
            <ul>
                <li><a href="about.php">About Me</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <a href="https://github.com/J4jet" target="_blank" rel="noopener noreferrer" class="header-github">GitHub</a>
            <button id="theme-toggle" class="header-theme-toggle">Dark Mode</button>
        </nav>
    </header>
    <main>
            <section class="index-banner">
                <div class="index-banner-center">
                <h2>
                    Justin Forgette
                </h2>
                <h1>
                    An Associate Software Engineer and University at Buffalo graduate with broad interests in computer science, from web development and distributed systems to robotics and game development.
                </h1>
                </div>
            </section>
        <div class = "wrapper">
            <section class="index-boxes">
                <a href="projects.php">
                <div class="index-boxlink-square">
                    <h3>Projects</h3>
                </div>
                </a>
                <a href="about.php">
                <div class="index-boxlink-rectangle">
                    <h3>About Me</h3>
                </div>
                </a>
                <a href="contact.php">
                <div class="index-boxlink-square">
                    <h3>Contact</h3>
                </div>
                </a>
            </section>
        </main>
        </div>
    <div class="wrapper">
        <footer>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="footer-social">
                <a href="https://github.com/J4jet" target="_blank" rel="noopener noreferrer"><img src="img/github.png" alt="GitHub"></a>
                <a href="https://www.linkedin.com/in/justin-forgette/" target="_blank" rel="noopener noreferrer"><img src="img/linked.png" alt="LinkedIn"></a>
                <a href="https://www.instagram.com/j4jet26/" target="_blank" rel="noopener noreferrer"><img src="img/insta.png" alt="Instagram"></a>
            </div>
        </footer>
    </div>
    <script>
const themeLink = document.getElementById('theme-style');
const themeToggle = document.getElementById('theme-toggle');

// Load theme preference on page load
window.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme === 'dark') {
        themeLink.setAttribute('href', 'style-dark.css');
        themeToggle.textContent = 'Light Mode';
    } else {
        themeLink.setAttribute('href', 'style.css');
        themeToggle.textContent = 'Dark Mode';
    }
});

// Toggle theme and save preference
themeToggle.addEventListener('click', function() {
    if (themeLink.getAttribute('href') === 'style.css') {
        themeLink.setAttribute('href', 'style-dark.css');
        this.textContent = 'Light Mode';
        localStorage.setItem('theme', 'dark');
    } else {
        themeLink.setAttribute('href', 'style.css');
        this.textContent = 'Dark Mode';
        localStorage.setItem('theme', 'light');
    }
});
</script>
</body>
</html>
