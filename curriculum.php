<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Curriculum — Rehan.Education</title>
<style>
  /* internal CSS */
  body{font-family:Inter,Arial; margin:0; background:#f8fbff;color:#071028}
  .wrap{max-width:1000px;margin:36px auto;padding:20px}
  header{display:flex;align-items:center;justify-content:space-between;padding:12px 20px;background:#fff;border-radius:12px}
  h1{margin:6px 0}
  .module{background:white;padding:18px;border-radius:12px;box-shadow:0 8px 20px rgba(10,20,50,0.04);margin-bottom:16px}
  .pill{display:inline-block;padding:6px 10px;border-radius:999px;background:linear-gradient(90deg,#eef6ff,#f7fbff);font-weight:700}
</style>
</head>
<body>
  <div class="wrap">
    <header>
      <div>
        <div style="font-weight:800">Rehan.Education</div>
        <div style="color:#667085">Curriculum — Digital Mastery</div>
      </div>
      <nav>
        <a href="index.php">Home</a> |
        <a href="facilitators.php">Facilitators</a> |
        <a href="contact.php">Contact</a>
      </nav>
    </header>

    <main style="margin-top:18px">
      <h1>Curriculum Overview</h1>
      <p style="color:#56637a">A practical, project-driven curriculum integrating digital skills, AI tools, and online teaching methodologies.</p>

      <div class="module">
        <div class="pill">Module 1</div>
        <h3>Foundations: Digital Skills</h3>
        <p>HTML, CSS, basic JS, content creation, design principles, and productivity workflows.</p>
      </div>

      <div class="module">
        <div class="pill">Module 2</div>
        <h3>AI Tools for Creators</h3>
        <p>Practical use of AI APIs, prompt engineering, automation, and building AI assisted projects.</p>
      </div>

      <div class="module">
        <div class="pill">Module 3</div>
        <h3>Teaching & Monetization</h3>
        <p>Course creation, curriculum writing, presentation skills, selling on platforms, and community building.</p>
      </div>

      <div class="module">
        <h3>Capstone</h3>
        <p>Students create a live course, publish it, and run a pilot cohort to practice teaching and earn.</p>
      </div>

    </main>
  </div>
</body>
</html>
