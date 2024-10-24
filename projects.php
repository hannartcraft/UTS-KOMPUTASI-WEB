<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hanna Auliya - Projects</title>
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

    header {
      padding: 1rem 5%;
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

    nav ul {
      display: flex;
      list-style: none;
    }

    nav ul li {
      margin-left: 2rem;
    }

    nav ul li a {
      color: var(--text-color);
      text-decoration: none;
      font-weight: 600;
    }

    nav ul li a.active {
      color: var(--primary-color);
    }

    main {
      padding: 2rem 5%;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      margin-bottom: 2rem;
      position: relative;
      display: inline-block;
    }

    h1::after {
      content: "";
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 50%;
      height: 3px;
      background-color: var(--primary-color);
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
      margin-top: 3rem;
    }

    .project-card {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 0 10px var(--primary-color);
      transition: all 0.3s ease;
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 20px var(--primary-color);
    }

    .project-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .project-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.7);
      overflow: hidden;
      width: 100%;
      height: 0;
      transition: 0.5s ease;
    }

    .project-card:hover .project-overlay {
      height: 100%;
    }

    .project-title {
      color: white;
      font-size: 20px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">Artic <span>bydawn</span></div>
    <nav>
      <ul class="nav-links">
        <li><a href="zaynehome.php">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="projects.php" class="active">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>PROJECTS</h1>
    <?php
    // Include file koneksi
    include 'connect.php';

    // Query untuk mengambil data dari tabel projects
    $query = "SELECT * FROM projects";
    $result = mysqli_query($conn, $query);
    ?>

    <div class="projects">
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="project-card">
            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" />
            <div class="project-overlay">
              <div class="project-title"><?php echo htmlspecialchars($row['title']); ?></div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No projects available.</p>
      <?php endif; ?>
    </div>

    <?php
    // Menutup koneksi
    mysqli_close($conn);
    ?>

    </div>
  </main>
</body>

</html>