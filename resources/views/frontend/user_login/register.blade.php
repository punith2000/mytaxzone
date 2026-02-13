<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #ff7f32, #0056b3, #ffffff);
      background-size: 300% 300%;
      animation: gradientMove 10s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .register-container {
      width: 420px;
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 6px 20px rgba(0,0,0,0.15);
      animation: fadeIn 1.2s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 600;
      color: #fff;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      background: #0056b3;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background: #ff7f32;
      transform: scale(1.05);
    }

    a {
      color: #fff;
      font-weight: 500;
      text-decoration: none;
    }

    a:hover {
      color: #ff7f32;
    }
  </style>
</head>
<body>
  <div class="register-container" style="background:linear-gradient(135deg,rgba(255, 255, 255, 0.1),rgba(255, 255, 255, 0.05));">
    <h2 class="form-title">Register</h2>

    @if(session('success')) 
      <div class="alert alert-success">{{ session('success') }}</div> 
    @endif
    @if($errors->any()) 
      <div class="alert alert-danger">{{ $errors->first() }}</div> 
    @endif

    <form action="{{ route('frontend.user_login.register') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label text-white">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Full name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label text-white">Email Address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label text-white">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label text-white">Confirm Password</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
      </div>
      <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>

    <p class="text-center mt-3" style="color: #ff7f32;">
      Already have an account? <a href="{{ route('frontend.user_login.login') }}">Login here</a>
    </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>