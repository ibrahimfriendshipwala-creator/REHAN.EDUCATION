<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Courses — Rehan.Education</title>
<style>
  body{font-family:Inter,Arial;background:#fff;margin:0}
  .wrap{max-width:1000px;margin:36px auto;padding:18px}
  .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px}
  .card{background:linear-gradient(180deg,#fff,#fbfdff);padding:16px;border-radius:12px;border:1px solid rgba(11,92,255,0.06)}
  .enroll{display:inline-block;margin-top:10px;padding:8px 12px;border-radius:8px;background:#0b5cff;color:white;text-decoration:none}
</style>
</head>
<body>
  <div class="wrap">
    <header style="display:flex;justify-content:space-between;align-items:center">
      <div><strong>Courses</strong><div style="color:#667085">Choose a learning path</div></div>
      <nav><a href="index.php">Home</a> | <a href="contact.php">Contact</a></nav>
    </header>

    <main style="margin-top:18px">
      <div class="grid">
        <div class="card">
          <h3>Intro to AI for Teens</h3>
          <p class="small">Learn the basics of AI and build simple projects.</p>
          <a class="enroll" href="contact.php">Apply</a>
        </div>
        <div class="card">
          <h3>Web Development — Frontend Basics</h3>
          <p class="small">HTML, CSS, JS and real projects to showcase.</p>
          <a class="enroll" href="contact.php">Apply</a>
        </div>
        <div class="card">
          <h3>Course Creation & Monetization</h3>
          <p class="small">Turn your skills into paid courses.</p>
          <a class="enroll" href="contact.php">Apply</a>
        </div>
      </div>
    </main>
  </div>
</body>
</html>
