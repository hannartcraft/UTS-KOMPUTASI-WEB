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

    .services {
      display: flex;
      justify-content: space-between;
      margin-top: 3rem;
    }

    .service-card {
      background-color: #111;
      padding: 2rem;
      width: 30%;
      border-radius: 10px;
      box-shadow: 0 0 10px var(--primary-color);
      transition: all 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 0 20px var(--primary-color);
    }

    .service-icon {
      font-size: 3rem;
      margin-bottom: 1rem;
      color: var(--primary-color);
    }

    .service-title {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .service-description {
      font-size: 0.9rem;
      color: #ccc;
      margin-bottom: 1rem;
    }

    .read-more {
      display: inline-block;
      padding: 0.5rem 1rem;
      background-color: var(--primary-color);
      color: var(--background-color);
      text-decoration: none;
      border-radius: 5px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .read-more:hover {
      background-color: #00cccc;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">Artic <span>bydawn</span></div>
    <nav>
      <ul class="nav-links">
        <li><a href="zaynehome.php">Home</a></li>
        <li><a href="service.php" class="active">Services</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>SERVICES</h1>
    <?php
    // Include file koneksi
    include 'connect.php';

    // Query untuk mengambil data dari tabel services
    $query = "SELECT * FROM services";
    $result = mysqli_query($conn, $query);
    ?>

    <div class="services">
      <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
          <div class="service-card">
            <div class="service-icon"><?php echo htmlspecialchars($row['icon']); ?></div>
            <h2 class="service-title"><?php echo htmlspecialchars($row['title']); ?></h2>
            <p class="service-description">
              <?php echo htmlspecialchars($row['description']); ?>
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        <?php endwhile; ?>
      <?php else: ?>
        <p>No services available.</p>
      <?php endif; ?>
    </div>

    <?php
    // Menutup koneksi
    mysqli_close($conn);
    ?>

  </main>
</body>

</html>