<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body class="auth-body">
  <div class="auth-container">
    <div class="auth-card">
      <div class="auth-header">
        
        <a href="/" class="kepi-logo">
            <img src="{{ asset('img/logo-removebg-preview.png') }}" alt="" width="100" height="90" class="logo-img">
            <h1 class="kepi-title">
                Kepi
            </h1>
        </a>
        


        <p class="auth-subtitle">Введіть свої дані для продовження</p>
      </div>

      <form class="auth-form">
        <div class="form-group">
          <label class="form-label">E-mail або Логін</label>
          <input type="email" class="form-input" placeholder="name@example.com" required>
        </div>

        <div class="form-group">
          <label class="form-label">Пароль</label>
          <input type="password" class="form-input" placeholder="••••••••" required>
        </div>

        <div class="auth-options">
          <label class="checkbox-label">
            <input type="checkbox"> Запам'ятати мене
          </label>
          <a href="#" class="auth-link">Забули пароль?</a>
        </div>

        <button type="submit" class="btn-auth-primary">Увійти</button>
      </form>

      <div class="auth-footer">
        Ще не маєте акаунту? <a href="/registration" class="auth-link">Зареєструватися</a>
      </div>
    </div>
  </div>
</body>
</html>