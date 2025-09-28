<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System Login</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background: linear-gradient(135deg, #3a7bd5, #3a6073);
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        .login-container { 
            background: #fff; 
            padding: 25px; 
            border-radius: 10px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            width: 320px; 
            animation: fadeIn 0.7s ease-in-out;
        }
        h2 { 
            text-align: center; 
            color: #333; 
            margin-bottom: 15px;
        }
        label { 
            display: block; 
            margin-bottom: 5px; 
            font-weight: bold; 
            color: #555; 
        }
        input[type="text"], input[type="password"] { 
            width: 100%; 
            padding: 10px; 
            margin-bottom: 15px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
            transition: border 0.3s;
        }
        input:focus { border-color: #3a7bd5; outline: none; }
        button { 
            width: 100%; 
            padding: 12px; 
            background-color: #3a7bd5; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            font-size: 16px; 
            transition: background 0.3s;
        }
        button:hover { background-color: #2a5ca8; }
        .error { 
            color: red; 
            text-align: center; 
            margin-bottom: 10px; 
            font-size: 14px;
        }
        p.credentials { 
            text-align: center; 
            font-size: 0.85em; 
            color: #666; 
            background: #f8f8f8; 
            padding: 8px; 
            border-radius: 5px; 
            margin-bottom: 15px;
        }
        code { 
            background: #eee; 
            padding: 2px 5px; 
            border-radius: 4px; 
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Library Login</h2> 
</body>
</html>
