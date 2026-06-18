<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        --key-bg: #F8FAFC;
        --accent: #FBBF24;
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
        max-width:420px;
        background: var(--surface);
        border:1px solid var(--border);
        border-radius:20px;
        padding:44px 36px;
        box-shadow: 0 20px 60px -20px rgba(15,23,42,0.18), 0 2px 8px rgba(15,23,42,0.04);
      }

      h1{
        font-size:21px;
        font-weight:600;
        line-height:1.4;
        margin:0 0 32px;
      }

      .field{
        margin-bottom:18px;
      }

      label{
        display:block;
        font-size:12px;
        font-weight:500;
        letter-spacing:0.08em;
        color: var(--muted);
        margin-bottom:8px;
      }

      input[type="text"],
      input[type="number"]{
        width:100%;
        font-family:'IBM Plex Mono', monospace;
        font-size:16px;
        color: var(--ink);
        background: var(--key-bg);
        border:1px solid var(--border);
        border-radius:10px;
        padding:12px 14px;
        box-shadow: inset 0 1px 2px rgba(15,23,42,0.04);
        transition: border-color .15s ease, box-shadow .15s ease;
      }

      input[type="text"]:focus,
      input[type="number"]:focus{
        outline:none;
        border-color: var(--accent);
        box-shadow: 0 0 0 3px rgba(251,191,36,0.25);
      }

      input[type="submit"]{
        width:100%;
        margin-top:14px;
        font-family:'IBM Plex Sans Thai', sans-serif;
        font-size:15px;
        font-weight:600;
        color: var(--accent);
        background: var(--ink);
        border:none;
        border-radius:999px;
        padding:13px 0;
        cursor:pointer;
        transition: transform .12s ease, box-shadow .12s ease;
      }

      input[type="submit"]:hover{
        box-shadow: 0 8px 20px -8px rgba(30,42,56,0.5);
      }

      input[type="submit"]:active{
        transform: scale(0.98);
      }

      input[type="submit"]:focus-visible{
        outline:2px solid var(--accent);
        outline-offset:3px;
      }

      @media (prefers-reduced-motion: reduce){
        input, input[type="submit"]{ transition:none; }
      }

      @media (max-width:480px){
        .card{ padding:32px 24px; }
      }
    </style>
</head>
<body>

    <main class="stage">
      <div class="card">
        <h1>งาน2 นิธิ bit2/4 เลขที่ 39 🤑</h1>

        <form action="result.php" method="post">
            <div class="field">
                <label for="">เส้นทแยง1</label>
                <input type="text" name="e_1"><br>
            </div>

            <div class="field">
                <label for="">เส้นทแยง2</label>
                <input type="number" name="e_2"><br>
            </div>

            
            <input type="submit" value="คำนวณ">
        </form>
      </div>
    </main>

</body>
</html>