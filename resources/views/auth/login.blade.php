<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome Back | Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    
    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    
    .login-container {
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px);
    }
    
    .input-field {
      transition: all 0.3s ease;
    }
    
    .input-field:focus {
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }
    
    .btn-login {
      background: linear-gradient(to right, #667eea, #764ba2);
      transition: all 0.3s ease;
    }
    
    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 7px 14px rgba(102, 126, 234, 0.3);
    }
    
    .social-btn {
      transition: all 0.3s ease;
    }
    
    .social-btn:hover {
      transform: translateY(-2px);
    }
    
    .floating-label {
      transition: all 0.3s ease;
    }
    
    .input-field:focus + .floating-label,
    .input-field:not(:placeholder-shown) + .floating-label {
      top: -10px;
      left: 10px;
      font-size: 12px;
      color: #667eea;
      background: white;
      padding: 0 5px;
    }
  </style>
</head>

<body class="gradient-bg flex items-center justify-center min-h-screen p-4">
  <div class="login-container bg-white rounded-2xl overflow-hidden w-full max-w-md">
    <!-- Decorative Header -->
    <div class="relative h-32 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
      <div class="absolute inset-0 bg-black opacity-10"></div>
      <div class="relative z-10 text-center">
        <h1 class="text-3xl font-bold text-white">Welcome Back</h1>
        <p class="text-blue-100 mt-1">Sign in to your account</p>
      </div>
      <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2">
        <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
          <i class="fas fa-user text-purple-600 text-xl"></i>
        </div>
      </div>
    </div>
    
    <!-- Form Content -->
    <div class="pt-10 px-8 pb-8">
      <!-- Error Messages -->
      @if (session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded mb-6 flex items-start">
          <i class="fas fa-exclamation-circle text-red-500 mt-1 mr-3"></i>
          <div>
            <p class="text-red-700 font-medium">{{ session('error') }}</p>
          </div>
        </div>
      @endif
      
      @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded mb-6">
          <div class="flex items-start">
            <i class="fas fa-exclamation-circle text-red-500 mt-1 mr-3"></i>
            <div>
              <p class="text-red-700 font-medium mb-2">Please fix the following errors:</p>
              <ul class="list-disc pl-5 text-red-600">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      @endif
      
      <!-- Social Login Options -->
      <div class="mb-6">
        <p class="text-center text-gray-600 mb-4">Or continue with</p>
        <div class="flex justify-center space-x-4">
          <button class="social-btn bg-blue-600 text-white p-3 rounded-full w-12 h-12 flex items-center justify-center">
            <i class="fab fa-facebook-f"></i>
          </button>
          <button class="social-btn bg-red-500 text-white p-3 rounded-full w-12 h-12 flex items-center justify-center">
            <i class="fab fa-google"></i>
          </button>
          <button class="social-btn bg-gray-800 text-white p-3 rounded-full w-12 h-12 flex items-center justify-center">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </div>
      
      <div class="relative mb-6">
        <div class="absolute inset-0 flex items-center">
          <div class="w-full border-t border-gray-300"></div>
        </div>
        <div class="relative flex justify-center text-sm">
          <span class="px-2 bg-white text-gray-500">Or with email</span>
        </div>
      </div>
      
      <!-- Login Form -->
      <form action="{{ route('login.submit') }}" method="post">
        @csrf
        
        <!-- Email Field -->
        <div class="mb-6 relative">
          <input type="email" name="email" placeholder=" " 
                 class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
          <label class="floating-label absolute left-4 top-3 text-gray-500 pointer-events-none">Email Address</label>
          <div class="absolute right-3 top-3 text-gray-400">
            <i class="fas fa-envelope"></i>
          </div>
        </div>
        
        <!-- Password Field -->
        <div class="mb-2 relative">
          <input type="password" name="password" placeholder=" " 
                 class="input-field w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-500">
          <label class="floating-label absolute left-4 top-3 text-gray-500 pointer-events-none">Password</label>
          <div class="absolute right-3 top-3 text-gray-400">
            <i class="fas fa-lock"></i>
          </div>
        </div>
        
        <!-- Remember Me & Forgot Password -->
        <div class="flex justify-between items-center mb-6">
          <div class="flex items-center">
            <input type="checkbox" id="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
          </div>
          <a href="#" class="text-sm text-blue-600 hover:text-blue-800 transition">Forgot password?</a>
        </div>
        
        <!-- Submit Button -->
        <button type="submit" class="btn-login w-full text-white py-3 rounded-lg font-medium text-lg">
          Sign In
        </button>
      </form>
      
      <!-- Footer Links -->
      <div class="mt-8 text-center">
        <p class="text-gray-600">
          Don't have an account?
          <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition ml-1">
            Create Account
          </a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>