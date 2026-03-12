<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ro'yxatdan o'tish</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --ink:     #0f0e0d;
      --cream:   #f5f0e8;
      --gold:    #c8a96e;
      --gold-dk: #a07840;
      --line:    rgba(200,169,110,0.35);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      min-height: 100vh;
      background-color: var(--ink);
      background-image:
        radial-gradient(ellipse 80% 60% at 50% -10%, rgba(200,169,110,0.18) 0%, transparent 70%),
        url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23c8a96e' fill-opacity='0.04'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'DM Sans', sans-serif;
      padding: 2rem 1rem;
    }

    /* ---- CARD ---- */
    .register-card {
      width: 100%;
      max-width: 480px;
      background: var(--cream);
      border-radius: 4px;
      overflow: hidden;
      position: relative;
      box-shadow:
        0 0 0 1px var(--gold),
        0 32px 80px rgba(0,0,0,0.6),
        0 8px 24px rgba(200,169,110,0.12);
      animation: riseUp .7s cubic-bezier(.22,1,.36,1) both;
    }

    @keyframes riseUp {
      from { opacity: 0; transform: translateY(40px) scale(0.97); }
      to   { opacity: 1; transform: translateY(0)  scale(1); }
    }

    /* gold top bar */
    .card-bar {
      height: 5px;
      background: linear-gradient(90deg, var(--gold-dk), var(--gold), var(--gold-dk));
    }

    /* ---- HEADER ---- */
    .card-header-area {
      padding: 2.5rem 2.5rem 1.5rem;
      border-bottom: 1px solid var(--line);
    }

    .card-eyebrow {
      font-family: 'DM Sans', sans-serif;
      font-size: .68rem;
      font-weight: 500;
      letter-spacing: .18em;
      text-transform: uppercase;
      color: var(--gold);
      margin-bottom: .6rem;
    }

    .card-title {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      font-weight: 900;
      color: var(--ink);
      line-height: 1.1;
      letter-spacing: -.02em;
    }

    .card-title span {
      color: var(--gold-dk);
      font-style: italic;
    }

    /* ---- FORM BODY ---- */
    .card-body-area {
      padding: 2rem 2.5rem 2.5rem;
    }

    .form-group {
      margin-bottom: 1.4rem;
      position: relative;
      animation: fadeSlide .5s ease both;
    }
    .form-group:nth-child(1) { animation-delay: .1s; }
    .form-group:nth-child(2) { animation-delay: .18s; }
    .form-group:nth-child(3) { animation-delay: .26s; }
    .form-group:nth-child(4) { animation-delay: .34s; }

    @keyframes fadeSlide {
      from { opacity:0; transform: translateX(-12px); }
      to   { opacity:1; transform: translateX(0); }
    }

    .form-label {
      display: block;
      font-size: .72rem;
      font-weight: 500;
      letter-spacing: .12em;
      text-transform: uppercase;
      color: #6b6355;
      margin-bottom: .45rem;
    }

    .input-wrap {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 1rem;
      top: 50%;
      transform: translateY(-50%);
      width: 18px;
      height: 18px;
      color: var(--gold-dk);
      pointer-events: none;
      opacity: .8;
    }

    .form-control {
      width: 100%;
      height: 50px;
      padding: 0 1rem 0 2.8rem;
      border: 1.5px solid rgba(200,169,110,0.4);
      border-radius: 3px;
      background: #fff;
      font-family: 'DM Sans', sans-serif;
      font-size: .92rem;
      color: var(--ink);
      outline: none;
      transition: border-color .22s, box-shadow .22s, background .22s;
    }

    .form-control::placeholder { color: #b8ae9e; }

    .form-control:focus {
      border-color: var(--gold);
      background: #fffdf9;
      box-shadow: 0 0 0 3px rgba(200,169,110,0.15);
    }

    /* date fix */
    input[type="date"].form-control {
      color: var(--ink);
      cursor: pointer;
    }
    input[type="date"].form-control::-webkit-calendar-picker-indicator {
      opacity: .4;
      cursor: pointer;
    }

    /* password toggle */
    .toggle-pass {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #a09080;
      padding: 0;
      line-height: 1;
      transition: color .2s;
    }
    .toggle-pass:hover { color: var(--gold-dk); }

    /* ---- BUTTON ---- */
    .btn-register {
      display: block;
      width: 100%;
      height: 52px;
      margin-top: 1.8rem;
      background: linear-gradient(135deg, var(--ink) 0%, #2a2620 100%);
      border: 1.5px solid var(--gold);
      border-radius: 3px;
      font-family: 'DM Sans', sans-serif;
      font-size: .8rem;
      font-weight: 500;
      letter-spacing: .2em;
      text-transform: uppercase;
      color: var(--gold);
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: box-shadow .25s, transform .18s;
      animation: fadeSlide .5s .4s ease both;
    }

    .btn-register::before {
      content: '';
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, var(--gold-dk), var(--gold));
      opacity: 0;
      transition: opacity .28s;
    }

    .btn-register:hover {
      box-shadow: 0 8px 28px rgba(200,169,110,0.3);
      transform: translateY(-1px);
    }
    .btn-register:hover::before { opacity: 1; }
    .btn-register:active { transform: translateY(0); }

    .btn-register span {
      position: relative;
      z-index: 1;
      transition: color .28s;
    }
    .btn-register:hover span { color: var(--ink); }

    /* ---- FOOTER ---- */
    .card-foot {
      text-align: center;
      padding-bottom: 2rem;
      font-size: .82rem;
      color: #8a7f70;
      animation: fadeSlide .5s .5s ease both;
    }
    .card-foot a {
      color: var(--gold-dk);
      text-decoration: none;
      font-weight: 500;
    }
    .card-foot a:hover { text-decoration: underline; }

    /* corner ornament */
    .corner {
      position: absolute;
      width: 36px; height: 36px;
      border-color: var(--gold);
      border-style: solid;
      opacity: .45;
    }
    .corner-tl { top:14px; left:14px; border-width: 1px 0 0 1px; }
    .corner-tr { top:14px; right:14px; border-width: 1px 1px 0 0; }
    .corner-bl { bottom:14px; left:14px; border-width: 0 0 1px 1px; }
    .corner-br { bottom:14px; right:14px; border-width: 0 1px 1px 0; }
  </style>
</head>
<body>

<div class="register-card">
  <div class="card-bar"></div>

  <!-- decorative corners -->
  <div class="corner corner-tl"></div>
  <div class="corner corner-tr"></div>
  <div class="corner corner-bl"></div>
  <div class="corner corner-br"></div>

  <!-- HEADER -->
  <div class="card-header-area">
    <p class="card-eyebrow">Yangi hisob</p>
    <h1 class="card-title">Ro'yxatdan<br><span>o'tish</span></h1>
  </div>

  <!-- FORM -->
  <div class="card-body-area">
    <form action="add.php" method="POST" >
        <div class="form-group">
      <label class="form-label" for="fullname">To'liq ism</label>
      <div class="input-wrap">
        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
        </svg>
        <input name="full_name" type="text" class="form-control" id="fullname" placeholder="Ism Familiya Sharif">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="birthdate">Tug'ilgan sana</label>
      <div class="input-wrap">
        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
        <input name="brith_date" type="date" class="form-control" id="birthdate">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="login">Login</label>
      <div class="input-wrap">
        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="5" width="20" height="14" rx="2"/><polyline points="2 10 12 16 22 10"/>
        </svg>
        <input name="login" type="text" class="form-control" id="login" placeholder="foydalanuvchi_nomi">
      </div>
    </div>

    <div class="form-group">
      <label class="form-label" for="password">Parol</label>
      <div class="input-wrap">
        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>
        </svg>
        <input name="pass" type="password" class="form-control" id="password" placeholder="••••••••">
        <button class="toggle-pass" type="button" aria-label="Parolni ko'rsatish" onclick="
          var i=document.getElementById('password');
          i.type = i.type==='password' ? 'text' : 'password';
          this.querySelector('.eye-off').style.display = i.type==='text' ? 'none' : 'block';
          this.querySelector('.eye-on').style.display  = i.type==='text' ? 'block' : 'none';
        ">
          <svg class="eye-off" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/>
          </svg>
          <svg class="eye-on" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>
          </svg>
        </button>
      </div>
    </div>

    <button class="btn-register" type="submit">
      <span>Ro'yxatdan o'tish</span>
    </button>

    <div class="card-foot mt-3">
      Hisobingiz bormi? <a href="login.php">Kirish</a>
    </div>
    </form>
  </div>
</div>

</body>
</html>