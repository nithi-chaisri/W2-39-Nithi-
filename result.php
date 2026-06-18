<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ผลการคำนวณ</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600&family=IBM+Plex+Sans+Thai:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --bg: #F4F6F9;
    --grid-line: rgba(30,41,59,0.05);
    --surface: #FFFFFF;
    --ink: #1E2A38;
    --muted: #64748B;
    --border: #E2E8F0;
    --screen-bg: #1E2A38;
    --screen-ink: #FBBF24;
  }

  *{ box-sizing: border-box; }

  body{
    margin:0;
    min-height:100vh;
    font-family:'IBM Plex Sans Thai', sans-serif;
    color: var(--ink);
    background-color: var(--bg);
    background-image:
      linear-gradient(var(--grid-line) 1px, transparent 1px),
      linear-gradient(90deg, var(--grid-line) 1px, transparent 1px);
    background-size: 28px 28px;
  }

  .stage{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:24px;
  }

  .card{
    width:100%;
    max-width:460px;
    background: var(--surface);
    border:1px solid var(--border);
    border-radius:20px;
    padding:48px 40px;
    box-shadow: 0 20px 60px -20px rgba(15,23,42,0.18), 0 2px 8px rgba(15,23,42,0.04);
    text-align:center;
  }

  .eyebrow{
    display:block;
    font-size:12px;
    font-weight:500;
    letter-spacing:0.18em;
    text-transform:uppercase;
    color: var(--muted);
    margin-bottom:28px;
  }

  .screen{
    background: var(--screen-bg);
    border-radius:14px;
    padding:28px 20px;
    margin-bottom:32px;
    box-shadow: inset 0 2px 6px rgba(0,0,0,0.35);
    animation: reveal .5s ease-out .1s both;
  }

  .screen,
  .screen *{
    font-family:'IBM Plex Mono', monospace !important;
    font-size:24px;
    font-weight:500;
    color: var(--screen-ink) !important;
    letter-spacing:0.04em;
  }

  @keyframes reveal{
    from{ opacity:0; transform: translateY(4px) scale(.97); }
    to{ opacity:1; transform: translateY(0) scale(1); }
  }

  .back{
    display:inline-flex;
    align-items:center;
    gap:8px;
    font-size:14px;
    font-weight:500;
    color: var(--ink);
    text-decoration:none;
    border:1px solid var(--border);
    border-radius:999px;
    padding:10px 22px;
    transition: border-color .15s ease, background .15s ease;
  }

  .back:hover{ border-color:#CBD5E1; background:#F8FAFC; }
  .back:focus-visible{ outline:2px solid var(--screen-ink); outline-offset:2px; }

  .arrow{ transition: transform .15s ease; }
  .back:hover .arrow{ transform: translateX(-3px); }

  @media (prefers-reduced-motion: reduce){
    .screen{ animation:none; }
    .back, .arrow{ transition:none; }
  }

  @media (max-width:480px){
    .card{ padding:36px 24px; }
    .screen,
    .screen *{ font-size:19px; }
  }
</style>
</head>
<body>

  <main class="stage">
    <div class="card">
      <span class="eyebrow">ผลการคำนวณ</span>

      <div class="screen">
        <?php
            $e_1 = $_POST["e_1"];
            $e_2 = $_POST["e_2"];

            echo "1/2*".$e_1."";

            $e = 1/2 * $e_1 * $e_2;
            echo "*".$e_2."";

            echo " = ".$e."<br>";

            
        ?>
      </div>

      <a href="index.php" class="back">
        <span class="arrow">←</span> กลับไปหน้าแรก
      </a>
    </div>
  </main>

</body>
</html>