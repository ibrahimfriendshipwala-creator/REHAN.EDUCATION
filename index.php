<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Rehan.Education — Digital Mastery for a Connected World</title>
  <style>
    /* Internal CSS — modern, clean, responsive, "real" look */
    :root{ --accent:#0b5cff; --muted:#667085; --glass:rgba(255,255,255,0.06);} 
    *{box-sizing:border-box;font-family:Inter,system-ui,Segoe UI,Roboto,'Helvetica Neue',Arial}
    body{margin:0;background:linear-gradient(180deg,#f7fbff 0%, #eef6ff 100%);color:#0b1b2b}
    header{backdrop-filter: blur(6px);background:rgba(255,255,255,0.6);border-bottom:1px solid rgba(11,92,255,0.06);padding:18px 28px;display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;align-items:center;gap:12px}
    .logo{width:48px;height:48px;background:linear-gradient(135deg,var(--accent),#6a8bff);border-radius:12px;display:flex;align-items:center;justify-content:center;color:white;font-weight:700}
    nav a{margin-left:18px;text-decoration:none;color:var(--muted);font-weight:600}
    .container{max-width:1100px;margin:32px auto;padding:0 20px}
    .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center}
    .card{background:white;border-radius:16px;padding:28px;box-shadow:0 10px 30px rgba(20,30,60,0.06)}
    h1{font-size:28px;margin:0 0 10px}
    p.lead{color:var(--muted);line-height:1.6}
    .features{display:flex;flex-wrap:wrap;gap:14px;margin-top:18px}
    .feature{flex:1 1 180px;background:linear-gradient(180deg,#fbfdff, #f3f8ff);padding:12px;border-radius:12px;border:1px solid rgba(11,92,255,0.05)}
    .cta{display:inline-block;margin-top:16px;padding:12px 18px;border-radius:10px;background:var(--accent);color:white;text-decoration:none;font-weight:700}
    .small{font-size:13px;color:var(--muted)}
    footer{margin-top:40px;padding:28px;text-align:center;color:var(--muted)}

    /* Responsive */
    @media (max-width:900px){.hero{grid-template-columns:1fr}nav a{margin-left:12px}}
  </style>
</head>
<body>
  <header>
    <div class="brand">
      <div class="logo">RE</div>
      <div>
        <div style="font-weight:800">Rehan.Education</div>
        <div class="small">Digital Mastery for a Connected World</div>
      </div>
    </div>
    <nav>
      <a href="index.php">Home</a>
      <a href="curriculum.php">Curriculum</a>
      <a href="courses.php">Courses</a>
      <a href="facilitators.php">Facilitators</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <main class="container">
    <section class="hero">
      <div class="card">
        <h1>Digital Mastery for a Connected World</h1>
        <p class="lead">A program tailored for teens to unlock digital skills, learn AI tools, and gain the confidence to teach online. Our mission: empower students to positively impact 10 million lives and achieve financial independence.</p>

        <div class="features">
          <div class="feature"><strong>AI-Enabled Education</strong><div class="small">Hands-on tools & projects</div></div>
          <div class="feature"><strong>Digital Skills</strong><div class="small">Web, design, content & more</div></div>
          <div class="feature"><strong>Online Teaching</strong><div class="small">Learn to teach & earn online</div></div>
          <div class="feature"><strong>Community</strong><div class="small">Peer support & mentorship</div></div>
        </div>

        <a class="cta" href="courses.php">Explore Courses</a>
        <p class="small" style="margin-top:8px">Call/WhatsApp: +44 7418 359852</p>
      </div>

      <aside>
        <div class="card">
          <h3 style="margin-top:0">Why Rehan.Education?</h3>
          <p class="small">We combine practical digital skills with AI tools and teaching techniques so students can both learn and start teaching online — fast.</p>
          <hr style="margin:18px 0;border:none;border-top:1px solid #f0f3ff">
          <div style="display:flex;gap:10px;align-items:center">
            <div style="flex:1">
              <strong>Upcoming Cohort</strong>
              <div class="small">Limited seats — apply now</div>
            </div>
            <button onclick="redirectTo('contact.php')" style="padding:10px 12px;border-radius:9px;border:none;background:#eef5ff;font-weight:700;cursor:pointer">Apply</button>
          </div>
        </div>
      </aside>
    </section>

    <section style="margin-top:26px;display:grid;grid-template-columns:1fr 1fr;gap:20px">
      <div class="card">
        <h3 style="margin-top:0">Featured Courses</h3>
        <ul>
          <li>Intro to AI for Teens</li>
          <li>Web Development — Frontend Basics</li>
          <li>Online Teaching & Course Creation</li>
        </ul>
      </div>
      <div class="card">
        <h3 style="margin-top:0">Founder’s Message</h3>
        <p class="small">Our goal is simple: teach practical skills that help students create income and scale impact. We value curiosity, discipline, and creativity.</p>
      </div>
    </section>

    <footer>
      <div>Follow us: <a href="#">Facebook</a> • <a href="#">Instagram</a> • <a href="#">Twitter/X</a></div>
      <div style="margin-top:8px">© Rehan.Education</div>
    </footer>
  </main>

  <script>
    function redirectTo(path){ window.location.href = path; }
  </script>
</body>
</html>
