<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hanna Auliya</title>
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

    main {
      padding: 2rem 0;
    }

    h1 {
      font-size: 3rem;
      text-align: center;
      margin-bottom: 3rem;
    }

    .timeline {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
    }

    .timeline::after {
      content: "";
      position: absolute;
      width: 4px;
      background-color: var(--primary-color);
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
      box-shadow: 0 0 10px var(--primary-color);
    }

    .timeline-item {
      padding: 10px 40px;
      position: relative;
      background-color: inherit;
      width: 50%;
    }

    .timeline-item::after {
      content: "";
      position: absolute;
      width: 20px;
      height: 20px;
      right: -10px;
      background-color: var(--primary-color);
      border: 4px solid var(--primary-color);
      top: 15px;
      border-radius: 50%;
      z-index: 1;
      box-shadow: 0 0 10px var(--primary-color);
    }

    .left {
      left: 0;
    }

    .right {
      left: 50%;
    }

    .right::after {
      left: -10px;
    }

    .content {
      padding: 20px 30px;
      background-color: var(--background-color);
      position: relative;
      border-radius: 6px;
      border: 2px solid var(--primary-color);
      box-shadow: 0 0 15px var(--primary-color);
    }

    .content h2 {
      color: var(--primary-color);
      margin-bottom: 10px;
    }

    .content .date {
      position: absolute;
      top: -30px;
      right: 20px;
      color: var(--primary-color);
      font-weight: bold;
    }

    @media screen and (max-width: 600px) {
      .timeline::after {
        left: 31px;
      }

      .timeline-item {
        width: 100%;
        padding-left: 70px;
        padding-right: 25px;
      }

      .timeline-item::after {
        left: 21px;
      }

      .right {
        left: 0%;
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
          <li><a href="zaynehome.php">Home</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="education.php" class="active">Education</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
      <h1>Education</h1>
      <?php
      // Include file koneksi
      include 'connect.php';

      // Query untuk mengambil data dari tabel timeline
      $query = "SELECT * FROM timeline ORDER BY year";
      $result = mysqli_query($conn, $query);
      ?>

      <div class="timeline">
        <?php if (mysqli_num_rows($result) > 0): ?>
          <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <div class="timeline-item <?php echo htmlspecialchars($row['position']); ?>">
              <div class="content">
                <span class="date"><?php echo htmlspecialchars($row['year']); ?></span>
                <h2><?php echo htmlspecialchars($row['title']); ?></h2>
                <p><?php echo htmlspecialchars($row['description']); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p>No timeline entries available.</p>
        <?php endif; ?>
      </div>

      <?php
      // Menutup koneksi
      mysqli_close($conn);
      ?>

  </main>
</body>

</html>