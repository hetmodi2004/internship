<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Name - Web Developer Portfolio</title>
    <style>
    /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background: linear-gradient(135deg, #1a1a1a, #4d4d4d);
    color: #f0f0f0;
    overflow-x: hidden;
}

h1, h2, h3 {
    color: #f0f0f0;
    font-weight: 600;
}

a {
    text-decoration: none;
    color: #00ffcc;
    transition: color 0.3s, transform 0.3s;
}

a:hover {
    color: #ff4081;
    transform: scale(1.1);
}

/* Navbar styles */
header {
    background-color: rgba(0, 0, 0, 0.8);
    padding: 20px 0;
    color: #fff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
}

nav ul {
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0;
}

nav ul li {
    margin: 0 20px;
}

nav ul li a {
    color: #fff;
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 10px 20px;
    display: inline-block;
    transition: background-color 0.3s, border-radius 0.3s;
}

nav ul li a:hover {
    background-color: rgba(255, 64, 129, 0.7);
    border-radius: 5px;
}

/* Home Section */
.home-section {
    background: linear-gradient(to right, #00c6ff, #0072ff);
    padding: 100px 20px;
    color: #fff;
    text-align: center;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
}

.home-section h1 {
    font-size: 4rem;
    margin-bottom: 20px;
    font-weight: bold;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
}

.home-section p {
    font-size: 1.5rem;
    margin-bottom: 40px;
    line-height: 1.8;
}

/* Profile Image */
.profile-img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin-top: 20px;
    border: 5px solid #fff;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
}

/* Section Styles */
.about-section, .skills-section, .projects-section, .contact-section {
    padding: 60px 20px;
    text-align: center;
    background-color: rgba(255, 255, 255, 0.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    border-radius: 12px;
    margin: 20px 0;
    transition: all 0.3s ease;
}

.about-section:hover, .skills-section:hover, .projects-section:hover, .contact-section:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.7);
}

.about-section h2, .skills-section h2, .projects-section h2, .contact-section h2 {
    font-size: 2.8rem;
    margin-bottom: 30px;
}

/* Skills Section */
.skills-section ul {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
}

.skills-section li {
    background: rgba(255, 255, 255, 0.2);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-size: 1.2rem;
    font-weight: 600;
}

.skills-section li:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,  0, 0, 0, 0.7);
}

/* Projects Section */
.projects {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 40px;
}

.project {
    width: 45%;
    background: rgba(255, 255, 255, 0.2);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.project:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
}

.project h3 {
    font-size: 2rem;
    margin-bottom: 15px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}

.project a {
    color: #00ffcc;
    font-size: 1.1rem;
    margin-top: 15px;
    display: inline-block;
    font-weight: bold;
}

/* Contact Section */
.contact-section form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.contact-section input, .contact-section textarea {
    padding: 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 1rem;
    width: 100%;
    background-color: rgba(255, 255, 255, 0.2);
    transition: border-color 0.3s, background-color 0.3s;
}

.contact-section input:focus, .contact-section textarea:focus {
    border-color: #00ffcc;
    background-color: rgba(255, 255, 255, 0.3);
    outline: none;
}

.contact-section button {
    background-color: #00ffcc;
    color: #1a1a1a;
    padding: 15px;
    border: none;
    border-radius: 8px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

.contact-section button:hover {
    background-color: #00cc99;
    transform: translateY(-5px);
}

/* Footer */
footer {
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    text-align: center;
    padding: 20px 0;
    position: relative;
    bottom: 0;
    width: 100%;
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.5);
}
</style>
</head>
<body>
    <!-- Navbar -->
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section id="home" class="home-section">
        <div>
            <h1>Hi, I'm Hrith</h1>
            <p>I'm a passionate web developer building beautiful and functional websites.</p>
        </div>
    </section>

    <!-- About Me Section -->
    <section id="about" class="about-section">
        <h2>About Me</h2>
        <p>I am a self-taught web developer with a passion for creating responsive and user-friendly websites. I have a strong background in front-end development and enjoy turning complex problems into simple and elegant solutions.</p>
        <ul>
            <li><strong>Education:</strong> Bachelor of Computer Applications (BCA) - MKICS University</li>
            <li><strong>Experience:</strong> 2+ years of freelance web development experience</li>
            <li><strong>Hobbies:</strong> Traveling, Photography, Playing Cricket</li>
        </ul>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills-section">
        <h2>Skills</h2>
        <ul>
            <li><strong>HTML & CSS</strong></li>
            <li><strong>JavaScript & React</strong></li>
            <li><strong>Node.js & Express</strong></li>
            <li><strong>PHP & MySQL</strong></li>
            <li><strong>Git & GitHub</strong></li>
            <li><strong>UI/UX Design</strong></li>
        </ul>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <h2>Projects</h2>
        <div class="projects">
            <div class="project">
                <h3>Portfolio Website</h3>
                <p>A personal portfolio website showcasing my skills and projects.</p>
                <a href="https://link-to-project" target="_blank">View Project</a>
            </div>
            <div class="project">
                <h3>Task Manager</h3>
                <p>A simple task management web app built with React and Node.js.</p>
                <a href="https://link-to-project" target="_blank">View Project</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <h2>Contact Me</h2>
        <p>If you'd like to get in touch, feel free to reach out!</p>
        <form id="contact-form">
            <input type="text" id="name" placeholder="Your Name" required />
            <input type="email" id="email" placeholder="Your Email" required />
            <textarea id="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Hrith. All rights reserved.</p>
    </footer>

    <script>
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            if (name && email && message) {
                alert(`Thank you, ${name}! Your message has been sent.`);
                document.getElementById('contact-form').reset();
            } else {
                alert('Please fill in all fields!');
            }
        });
    </script>
</body>
</html>
