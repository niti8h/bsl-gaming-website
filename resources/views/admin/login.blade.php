<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BSL Gaming</title>
    <style>
        :root {
            --royal-gold: #D4AF37;
            --dark-bg: #111;
            --dark-surface: #222;
        }
        body {
            background-color: var(--dark-bg);
            color: #fff;
            font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            background-color: var(--dark-surface);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 400px;
            border-top: 4px solid var(--royal-gold);
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            max-height: 60px;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: var(--royal-gold);
            font-weight: 600;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #ccc;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            background-color: #333;
            border: 1px solid #444;
            color: #fff;
            border-radius: 6px;
            box-sizing: border-box;
            transition: all 0.3s;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: var(--royal-gold);
            box-shadow: 0 0 0 2px rgba(212, 175, 55, 0.2);
        }
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            color: #ccc;
        }
        .submit-btn {
            width: 100%;
            padding: 14px;
            background-color: var(--royal-gold);
            color: #000;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .submit-btn:hover {
            background-color: #c49f2b;
        }
        .error-msg {
            color: #ff6b6b;
            font-size: 13px;
            margin-top: 5px;
            display: block;
        }
        .alert {
            background-color: rgba(255, 107, 107, 0.1);
            border-left: 4px solid #ff6b6b;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>BSL Gaming Admin</h2>
        
        @if ($errors->any())
            <div class="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            
            <div class="form-group">
                <label class="remember-me">
                    <input type="checkbox" name="remember">
                    Remember me
                </label>
            </div>
            
            <button type="submit" class="submit-btn">Sign In</button>
        </form>
    </div>

</body>
</html>
