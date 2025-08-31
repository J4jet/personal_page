<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Forgette - Contact</title>
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
        <div class="wrapper">
            <section class="contact-intro">
                <h1>Contact</h1>
            </section>
            <section class="contact-list">
                <article class="contact-item">
                    <h2>Email: justin.forgette119@gmail.com</h2>
                    <h2>LinkedIn: <a href="https://www.linkedin.com/in/justin-forgette/" target="_blank" rel="noopener noreferrer" class="contact-linked">Justin Forgette</a></h2>
                    <h2>GitHub: <a href="https://github.com/J4jet" target="_blank" rel="noopener noreferrer" class="contact-linked">J4jet</a></h2>
                    <article class="contact-images">
                        <div class="contact-imgs-nova">
                            <img src="img/hello_nova.png" alt="Hello, Nova">
                        </div>
                        <div class="contact-imgs-atlas">
                            <img src="img/hello_atlas.png" alt="Hello, Atlas">
                        </div>
                    </article>
                </article>
            </section>
        </div>
    </main>
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
