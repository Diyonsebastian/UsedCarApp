<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Login Page</title>
    <style>
        body {
            background-image: url('logo.jpg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
            width: 350px;
            backdrop-filter: blur(10px);
            margin-left:1090px;
            margin-top: 150px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #fff;
        }
        .input-group {
            margin-bottom: 15px;
            position: relative;
        }
        .input-group input {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }
        .input-group input:focus {
            box-shadow: 0 0 8px rgba(255, 255, 255, 0.5);
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #555;
        }
        .login-btn {
            width: 100%;
            padding: 12px;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        .login-btn:hover {
            background: #ff4757;
        }
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #fff;
            margin-bottom: 15px;
        }
        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .signup-link {
            margin-top: 15px;
            font-size: 14px;
            color: #fff;
        }
        .signup-link a {
            color: #ffeb3b;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container"> 
        <h2>Sign Up</h2>
        <form action="sign2.php" method="post">
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="text" name="email" placeholder="EmailId" required>
            </div>
            <div class="input-group">
                <input type="text" name="phone" placeholder="Phone" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            <
            
            <button class="login-btn" type="submit">Sigin Up</button>
        </form>
        <div class="signup-link">
            Already have an account? <a href="login.html">Login</a>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>
</html>
