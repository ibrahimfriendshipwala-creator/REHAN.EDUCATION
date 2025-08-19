<?php include 'db.php';
// simple message table create-on-the-fly (id, name, email, message, created_at)
$createSQL = "CREATE TABLE IF NOT EXISTS contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(120) NOT NULL,
  email VARCHAR(150) DEFAULT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
$pdo->exec($createSQL);

$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if ($name !== '' && $message !== '') {
        $stmt = $pdo->prepare('INSERT INTO contacts (name,email,message) VALUES (:n,:e,:m)');
        $stmt->execute([':n'=>$name,':e'=>$email,':m'=>$message]);
        $sent = true;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contact — Rehan.Education</title>
<style>
  body{font-family:Inter,Arial;background:#f7fbff;margin:0}
  .wrap{max-width:800px;margin:36px auto;padding:20px}
  .card{background:white;padding:18px;border-radius:12px;box-shadow:0 10px 30px rgba(10,20,50,0.06)}
  label{display:block;margin-top:12px;font-weight:700}
  input,textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #e6eefc;margin-top:6px}
  button{margin-top:12px;padding:10px 14px;border-radius:10px;border:none;background:#0b5cff;color:white;font-weight:700}
</style>
</head>
<body>
  <div class="wrap">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px">
      <div><strong>Contact Us</strong><div style="color:#667085">Call/WhatsApp: +44 7418 359852</div></div>
      <nav><a href="index.php">Home</a> | <a href="curriculum.php">Curriculum</a></nav>
    </div>

    <div class="card">
      <?php if ($sent): ?>
        <h3>Thanks — we received your message.</h3>
        <p>We'll respond soon. Redirecting you to the homepage...</p>
        <script>setTimeout(()=>{window.location.href='index.php'},2000)</script>
      <?php else: ?>
        <form method="post" id="contactForm">
          <label for="name">Name</label>
          <input id="name" name="name" required>

          <label for="email">Email</label>
          <input id="email" name="email" type="email">

          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>

          <button type="submit">Send Message</button>
        </form>
      <?php endif; ?>
    </div>

    <div style="margin-top:14px;text-align:center;color:#6b7280">Address: Rehan.Education HQ • Email: info@rehan.education</div>

  </div>
</body>
</html>
