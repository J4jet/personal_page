<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Forgette - About Me</title>
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
            <section class="about-intro">
                <h1>About Me</h1>
            </section>
            <section class="about-list">
                <div class="about-item-wrapper">
                    <img src="img/allo.png" alt="Me with an Allosaurus" class="about-img-outside-allo">
                    <article class="about-item">
                        <p>Hi, I’m Justin! I’m an Associate Software Engineer and a graduate of the University at Buffalo. My interests in computer science span a wide range, including web development, distributed systems, robotics, and game development. Outside of work, I enjoy playing video games, hockey, and building things through metalworking and 3D printing.</p>
                    </article>
                    <img src="img/hockey.jpeg" alt="Me playing hockey" class="about-img-outside-hockey">
                </div>
                <article class="about-item">
                    <div class="about-header">
                        <h2>Education</h2>
                        <a href="https://meritpages.com/Justin-Forgette/9250816" target="_blank" rel="noopener noreferrer">
                            <img src="img/meritlogo.png" alt="Merit Pages">
                        </a>
                    </div>
                    <p>After graduating 
                        from Clarence High School in 2021, I enrolled at the University at Buffalo, where I would graduate with a 
                        bachelor's in computer science in 2025. Being such a large school, UB gave me the opportunity to meet and 
                        interact with a very wide variety of people. This, along with a majority of the courses having team-focused 
                        projects, allowed me to work with countless different types of not just comp sci majors, but computer 
                        engineers and other engineering majors due to some overlap in certain courses. The way that my curriculum 
                        was set up also allowed me to dip my toes into all sorts of different areas of computer science; from 
                        low-level architecture to web development, distributed systems, robotics, machine learning, and more. 
                        I truly feel like I got a rounded experience that allowed me to try out almost everything I had even a 
                        slight interest in.
                    </p>  
                </article>
                <div class="about-item-wrapper">
                    <div class="about-img-outside">
                        <img src="img/spartan.jpg" alt="Me in my spartan armor" class="about-img-outside-spartan">
                        <img src="img/atlas.png" alt="Atlas, my cornsnake." class="about-img-outside-atlas">
                    </div>
                    <article class="about-item">
                        <h2>Hobbies and Interests</h2>
                        <p>Outside of work, I have a wide variety of hobbies that let me combine creativity, problem-solving, and hands-on building. I enjoy playing video games such as For Honor, DOOM, Monster Hunter, and Halo. I’ve also been developing a mod for the video game Minecraft over the past few years. This project allowed me to utilize concepts I was learning in school, and gave me to opportunity to explore a bit of what game development is like. I’ve been fascinated by dinosaurs since childhood and still explore that passion today through projects like 3D printing a life-size Allosaurus skull or adding them into my Minecraft mod. <br><br> Hockey is another big part of my life. I play 1–2 times a week and enjoy both the exercise and teamwork that come with the game. I also spend time metalworking, where one of my biggest projects has been building an almost complete set of plate armor. My interest in 3D printing has led me to create everything from the previously mentioned dinosaur skull to a suit of armor from Halo. I also keep a leopard gecko and a corn snake, and I enjoy creating naturalistic enclosures that make their habitats enriching and engaging.</p>
                    </article>
                    <div class="about-img-outside">
                        <img src="img/knight.png" alt="Me in my knight armor" class="about-img-outside-knight">
                        <img src="img/nova.jpeg" alt="Nova, my leopard gecko." class="about-img-outside-nova">
                    </div>
                </div>
                <article class="about-item">
                    <h2>Current Employment</h2>
                    <p>Pending...</p>
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
