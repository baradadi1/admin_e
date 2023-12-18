<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page | Custom Design</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
            font-family: 'Roboto', sans-serif;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(
                #7d58d9,
                #5c3b9e
            );
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(
                to right,
                #f76c6c,
                #ff4b2b
            );
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 650px; /* Adjusted height for registration form */
            width: 400px;
            background-color: rgba(51, 51, 51, 0.9); /* Semi-transparent dark background */
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            padding: 40px 35px;
        }

        form * {
            color: #fff;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 28px;
            font-weight: 500;
            line-height: 32px;
            text-align: center;
            margin-bottom: 20px;
            color: #fff;
        }

        label {
            display: block;
            margin-top: 20px;
            font-size: 16px;
            font-weight: 500;
            color: #bbb;
        }

        input {
            display: block;
            height: 40px;
            width: 100%;
            background-color: #444; /* Darker input background color */
            border: 1px solid #555;
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 400;
            color: #fff;
        }

        ::placeholder {
            color: #777;
        }

        button {
            margin-top: 40px;
            width: 100%;
            background-color: #5c3b9e;
            color: #fff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .social {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .social div {
            background: #333;
            width: 150px;
            border-radius: 3px;
            padding: 5px 10px 10px 5px;
            margin: 0 10px;
            color: #fff;
            text-align: center;
            cursor: pointer;
        }

        .social div:hover {
            background-color: #555;
        }

        .social i {
            margin-right: 4px;
        }
    </style>
</head>
<body>
<div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
</div>
<form>
    <h3>Sign Up</h3>
    <label for="fullName">Full Name</label>
    <input type="text" placeholder="Full Name" id="fullName">
    <label for="email">Email</label>
    <input type="email" placeholder="Email" id="email">
    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password">
    <label for="confirmPassword">Confirm Password</label>
    <input type="password" placeholder="Confirm Password" id="confirmPassword">
    <button>Register
<a href="{{route('home')}}">Register</a>
    </button>
    <div class="social">
        <div>
            <i class="fab fa-facebook"></i> Facebook
        </div>
        <div>
            <i class="fab fa-twitter"></i> Twitter
        </div>
    </div>
</form>
</body>
</html>
