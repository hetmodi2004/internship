<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Task-01 | Prodigy Infotech Internship</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f2f3f5, #d1e0e0);
      color: #2c3e50;
      scroll-behavior: smooth;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: transparent;
      transition: background-color 0.3s ease, box-shadow 0.3s ease;
      z-index: 999;
    }

    .navbar.scrolled {
      background-color: #2c3e50;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: #00c9a7;
    }

    .nav-links {
      display: flex;
      gap: 2rem;
    }

    .nav-links a {
      text-decoration: none;
      color: #ffffff;
      font-weight: 500;
      position: relative;
      transition: color 0.3s ease;
    }

    .navbar.scrolled .nav-links a {
      color: #ffffff;
    }

    .nav-links a:hover {
      color: #00c9a7;
    }

    .nav-links a::after {
      content: '';
      height: 2px;
      width: 0;
      background: #00c9a7;
      position: absolute;
      left: 0;
      bottom: -4px;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    header {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      background: url('https://source.unsplash.com/1600x900/?technology') no-repeat center center/cover;
      color: #fff;
      padding-top: 80px;
      position: relative;
    }

    header::after {
      content: '';
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.5);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 700px;
      padding: 20px;
    }

    .hero-content h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .hero-content p {
      font-size: 1.25rem;
    }

    section {
      padding: 5rem 2rem;
      max-width: 1000px;
      margin: auto;
      text-align: center;
    }

    .section-title {
      font-size: 2.5rem;
      color: #2c3e50;
      margin-bottom: 2rem;
    }

    .card {
      background: #ffffff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      margin: 2rem 0;
    }

    footer {
      background: #2c3e50;
      color: #eee;
      padding: 2rem;
      text-align: center;
    }

    @media (max-width: 768px) {
      .nav-links {
        flex-direction: column;
        background-color: #2c3e50;
        position: absolute;
        top: 100%;
        right: 0;
        padding: 1rem;
        display: none;
      }

      .nav-links.active {
        display: flex;
      }

      .menu-toggle {
        cursor: pointer;
        font-size: 1.5rem;
        color: white;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar" id="navbar">
    <div class="logo">PRODIGY INFOTECH</div>
    <div class="nav-links" id="navLinks">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#task">Task</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <header id="home">
    <div class="hero-content">
      <h1>Task 01: Responsive Landing Page</h1>
      <p>Given by Prodigy Infotech as part of the internship program. A step into the tech journey!</p>
    </div>
  </header>

  <!-- About Section -->
  <section id="about">
    <h2 class="section-title">👨‍💻 About Me</h2>
    <div class="card">
      <p>Hello! I'm <strong>Het Modi</strong>, a student and aspiring web developer. I’m honored to be part of the internship program at <strong>Prodigy Infotech</strong>, where I'm building skills in frontend development by taking on exciting tasks.</p>
      <p>My passion for technology began at an early age, and I aim to continue growing my expertise in web development and explore new trends in the industry. I'm excited about the opportunities ahead in this internship program, where I can learn, implement, and improve my skills.</p>
    </div>
  </section>

  <!-- Task Section -->
  <section id="task">
    <h2 class="section-title">📝 Internship Task 01</h2>
    <div class="card">
      <h3>Responsive Landing Page</h3>
      <p>This task involves creating a modern, responsive landing page using HTML, CSS, and JavaScript. It includes a fixed navigation bar with scroll and hover interactivity, as well as a clean user interface. The goal is to ensure it works perfectly across different devices, enhancing the user experience.</p>
      <p>The key elements of the page are:</p>
      <ul>
        <li>Responsive Navbar</li>
        <li>Hero Section with a Background Image</li>
        <li>Interactive Scroll Effects</li>
        <li>Mobile-Friendly Design</li>
      </ul>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact">
    <h2 class="section-title">📬 Contact</h2>
    <div class="card">
      <p><strong>Email:</strong> hetmodi206@gmail.com</p>
      <p><strong>LinkedIn:</strong> <a href="https://www.linkedin.com/in/het-modi-97a2a6271/">linkedin.com</a></p>
      <p>Feel free to reach out to me for collaborations, questions, or any web development projects!</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Het Modi | Internship @ Prodigy Infotech. Crafted with ❤️</p>
  </footer>

  <!-- JavaScript for Scroll Effect -->
  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });

    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('active');
    }
  </script>

</body>
</html>
