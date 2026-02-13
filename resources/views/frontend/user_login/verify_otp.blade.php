<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/user-login.css') }}">

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
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px; background:linear-gradient(135deg,rgba(255, 255, 255, 0.1),rgba(255, 255, 255, 0.05));">
            @if(session('success')) <div>{{ session('success') }}</div> @endif
            @if($errors->any()) <div>{{ $errors->first() }}</div> @endif
          <form action="{{ route('frontend.user_login.verify_otp') }}" method="POST">
            @csrf
            <div class="mb-3">
              {{-- <label for="name" class="form-label">Full Name</label> --}}
              <input type="hidden" name="email" value="{{ $email }}">
            </div>
            <div class="mb-3">
              <label for="otp" class="form-label text-white"> Enter OTP </label>
              <input type="password" class="form-control" id="otp" name="otp" placeholder="Enter OTP" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Verify OTP</button>
          </form>
          <hr>

          <form action="{{ route('frontend.user_login.resend_otp') }}" method="POST">
            @csrf
            <div class="mb-3">
              {{-- <label for="name" class="form-label">Full Name</label> --}}
              <input type="hidden" name="email" value="{{ $email }}">
            </div>
  
            <button type="submit" class="btn btn-primary w-100">Resend OTP</button>
          </form>
        </div>
    </div>
</body>
</html>