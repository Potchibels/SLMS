<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background: #2c3e50;
            color: white;
            padding: 15px;
        }
        nav {
            margin: 30px;
        }
        nav a button {
            background: #3498db;
            border: none;
            color: white;
            padding: 12px 20px;
            margin: 8px;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
        }
        nav a button:hover {
            background: #2980b9;
        }
        h1 {
            color: #2c3e50;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 90%;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }
        th {
            background: #3498db;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        button.borrow-btn {
            background: #27ae60;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        button.borrow-btn:hover {
            background: #1e8449;
        }
        button.return-btn {
            background: #e67e22;
            border: none;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
            cursor: pointer;
        }
        button.return-btn:hover {
            background: #ca6f1e;
        }
        p {
            font-weight: bold;
            text-align: center;
            color: #c0392b;
        }
    </style>
</head>
<body> 
<header>
    <h2>Welcome, <?php echo $username; ?>!</h2>
</header>

<nav>
    <a href="button.php"><button>Button 1</button></a>
    <a href="button.php"><button>Button 2</button></a>
    <a href="borrow.php"><button>Go to Borrow Books</button></a>
    <a href="login.php?logout=1p"><button>Logout</button></a>
</nav>
</body>
</html>