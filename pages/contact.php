<?php
    $server = "sql300.infinityfree.com";
    $username = "if0_39024925";
    $password = "6Q4LCe5jAHqmc3";
    $database = "if0_39024925_shopease";

    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "shopease";

    // Create connection
    $conn = new mysqli($server, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // echo "database connected";

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `shopease` (`Name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $isSubmit = true;
        } else {
            echo "ERROR: $sql <br> " . $con->error;
        }

        $conn->close();
    }
?>



    <main class="contact-container" style="padding:25px">
  <section class="contact-hero">
    <h1>Contact Us</h1>
    <p>Have questions, suggestions, or just want to say hello? We'd love to hear from you.</p>
  </section>

  <section class="contact-main">
    <div class="contact-form">
      <form action="#" method="POST">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Your Email</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit">Send Message</button>
      </form>
    </div>

    <div class="contact-info">
      <h2>Our Contact Info</h2>
      <p><strong>Email:</strong> support@yourstore.com</p>
      <p><strong>Phone:</strong> +91 98765 43210</p>
      <p><strong>Location:</strong> 123 Fashion Street, Mumbai, India</p>

      <!-- Optional: Google Map iframe -->
      <div class="map">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241317.1160972365!2d72.74110175831698!3d19.08252231706047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63a3e1c5a4d%3A0x3f0a15d4d2198f45!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1617012323336!5m2!1sen!2sin" 
          width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </section>
</main>
