<?php
// Include file koneksi
include 'connect.php';

// Memeriksa apakah metode permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Mengambil input dari formulir
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Query untuk menyisipkan data ke dalam tabel contact_form
  $query = "INSERT INTO contact_form (name, email, subject, message) VALUES (?, ?, ?, ?)";
  $stmt = mysqli_prepare($conn, $query);
  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $subject, $message);

  // Eksekusi pernyataan
  if (mysqli_stmt_execute($stmt)) {
    echo json_encode(["status" => "success", "message" => "Your message has been sent successfully."]);
  } else {
    echo json_encode(["status" => "error", "message" => "Error: Unable to send message."]);
  }

  // Menutup pernyataan dan koneksi
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  exit; // Keluar setelah eksekusi
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hanna Aulia</title>
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
      min-height: calc(100vh - 180px);
    }

    .contact-form {
      max-width: 600px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.5rem;
      border: 1px solid var(--primary-color);
      background-color: transparent;
      color: var(--text-color);
      border-radius: 4px;
    }

    .form-group textarea {
      height: 150px;
      resize: vertical;
    }

    .submit-btn {
      background-color: var(--primary-color);
      color: var(--background-color);
      border: none;
      padding: 0.75rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #00cccc;
    }
  </style>
  <script
    src="https://kit.fontawesome.com/your-fontawesome-kit.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <div class="logo">Artic <span>bydawn</span></div>
    <nav>
      <ul class="nav-links">
        <li><a href="zaynehome.php">Home</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="education.php">Education</a></li>
        <li><a href="projects.php">Projects</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <form class="contact-form" id="contactForm" action="contact.php" method="POST">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" id="subject" name="subject" required />
      </div>
      <div class="form-group">
        <label for="message">Your Message</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>

    <script>
      $(document).ready(function() {
        $('.contact-form').on('submit', function(e) {
          e.preventDefault(); // Mencegah pengiriman formulir default

          // Mengambil data dari formulir
          var formData = $(this).serialize();

          // Mengirim data menggunakan AJAX
          $.ajax({
            type: 'POST',
            url: 'contact.php',
            data: formData,
            success: function(response) {
              var jsonResponse = JSON.parse(response);
              // Menampilkan notifikasi sukses
              Toastify({
                text: jsonResponse.message,
                duration: 3000,
                gravity: 'top',
                position: 'right',
                backgroundColor: jsonResponse.status === "success" ? 'linear-gradient(to right, #00b09b, #96c93d)' : '#FF5722',
              }).showToast();
              // Mengosongkan formulir setelah sukses
              if (jsonResponse.status === "success") {
                $('#contactForm')[0].reset();
              }
            },
            error: function() {
              // Menampilkan notifikasi error jika terjadi kesalahan AJAX
              Toastify({
                text: 'Error: Unable to send message.',
                duration: 3000,
                gravity: 'top',
                position: 'right',
                backgroundColor: '#FF5722',
              }).showToast();
            }
          });
        });
      });
    </script>
  </main>
</body>

</html>