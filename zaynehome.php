<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hanna Auliya- Project</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");

    :root {
      --primary-color: #00ffff;
      --background-color: #000000;
      --text-color: #ffffff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: var(--background-color);
      color: var(--text-color);
      line-height: 1.6;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      overflow: hidden;
    }

    header {
      padding: 1rem 0;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
    }

    .logo span {
      color: var(--primary-color);
    }

    .nav-links {
      display: flex;
      list-style: none;
    }

    .nav-links li {
      margin-left: 2rem;
    }

    .nav-links a {
      color: var(--text-color);
      text-decoration: none;
      font-weight: 600;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: var(--primary-color);
    }

    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: calc(100vh - 80px);
    }

    .hero-image {
      flex: 1;
      text-align: center;
    }

    .hero-image img {
      width: 300px;
      height: 300px;
      border-radius: 50%;
      object-fit: cover;
      box-shadow: 0 0 50px rgba(0, 255, 255, 0.3);
      transition: box-shadow 0.3s ease;
      /* Add transition for smooth effect */
    }

    /* Add glow effect on hover and touch */
    .hero-image img:hover,
    .hero-image img:active {
      box-shadow: 0 0 50px rgba(0, 255, 255, 0.8);
    }

    .hero-content {
      flex: 1;
      padding-left: 2rem;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    h1 span {
      color: var(--primary-color);
    }

    h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: var(--primary-color);
    }

    p {
      margin-bottom: 2rem;
    }

    .cta-buttons {
      display: flex;
      gap: 1rem;
    }

    .btn {
      padding: 0.75rem 2rem;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color: var(--primary-color);
      color: var(--background-color);
    }

    .btn-secondary {
      background-color: transparent;
      color: var(--primary-color);
      border: 2px solid var(--primary-color);
    }

    .btn:hover {
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-image {
        margin-bottom: 2rem;
      }

      .hero-image img {
        width: 250px;
        height: 250px;
      }

      .hero-content {
        padding-left: 0;
      }

      .cta-buttons {
        justify-content: center;
      }
    }
  </style>
</head>

<body>
  <header>
    <div class="container">
      <nav>
        <div class="logo">Artic <span>bydawn</span></div>
        <ul class="nav-links">
          <li><a href="zaynehome.php" class="active">Home</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="education.php">Education</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <div class="hero">
        <div class="hero-image">
          <img src="foto\zayne.jpg" alt="Zayne's profile picture" />
        </div>
        <div class="hero-content">
          <h1>Hi, It's <span>Zayne</span></h1>
          <h2>I'm a Doctor Cardiologist</h2>
          <p>
            highly-accolated doctor and is known for his research in
            Congenital Heart Abnormalities in neonates. As the youngest
            recipient of the Starcatcher Award, Zayne has contributed to
            lowering the prevalence of congenital heart defects in newborns
            with his discovery that Evol genes affect the mutation rate of
            cells during heart development.
          </p>
          <div class="cta-buttons">
            <button class="btn btn-primary">Hire Me</button>
            <button class="btn btn-secondary">Download CV</button>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>