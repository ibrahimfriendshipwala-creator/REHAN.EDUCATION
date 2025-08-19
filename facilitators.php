<?php include 'db.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Facilitators — Rehan.Education</title>
<style>
  body{font-family:Inter,Arial;background:#f3f7ff;margin:0;color:#091024}
  .wrap{max-width:1000px;margin:36px auto;padding:18px}
  .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:16px}
  .card{background:white;padding:16px;border-radius:12px;box-shadow:0 8px 20px rgba(10,20,50,0.04)}
  .avatar{width:64px;height:64px;border-radius:12px;background:linear-gradient(135deg,#8fa8ff,#0b5cff);display:flex;align-items:center;justify-content:center;color:white;font-weight:800}
</style>
</head>
<body>
  <div class="wrap">
    <header style="display:flex;justify-content:space-between;align-items:center">
      <div><strong>Rehan.Education</strong><div style="color:#667085">Meet the facilitators</div></div>
      <nav><a href="index.php">Home</a> | <a href="curriculum.php">Curriculum</a></nav>
    </header>

    <main style="margin-top:18px">
      <div class="grid">
        <div class="card">
          <div style="display:flex;gap:12px;align-items:center">
            <div class="avatar">R</div>
            <div>
              <div style="font-weight:800">Rehan</div>
              <div style="color:#6b7280">Founder & Lead Educator</div>
            </div>
          </div>
          <p style="color:#56637a">Rehan leads curriculum design and mentors students to build real products and teach others online.</p>
          <div style="margin-top:8px"><a href="#">Twitter/X</a> • <a href="#">LinkedIn</a></div>
        </div>

        <div class="card">
          <div style="display:flex;gap:12px;align-items:center">
            <div class="avatar">A</div>
            <div>
              <div style="font-weight:800">Amina</div>
              <div style="color:#6b7280">AI & Data</div>
            </div>
          </div>
          <p style="color:#56637a">Focuses on practical AI tools and projects for creators.</p>
        </div>

        <div class="card">
          <div style="display:flex;gap:12px;align-items:center">
            <div class="avatar">S</div>
            <div>
              <div style="font-weight:800">Salman</div>
              <div style="color:#6b7280">Online Teaching</div>
            </div>
          </div>
          <p style="color:#56637a">Helps learners turn skills into teachable courses and earning streams.</p>
        </div>

      </div>
    </main>
  </div>
</body>
</html>
