<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .nav {
            background-color: #f4f4f4;
            padding: 10px;
            flex-grow: 1;
        }
        .nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .nav ul li {
            margin-bottom: 10px;
        }
        .nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            display: block;
            transition: background-color 0.3s;
        }
        .nav ul li a:hover {
            background-color: #ddd;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body> -->
    <?php
    include('header.php');
    
    ?>
    <div class="dashboard">
        <div class="header">
            <h2>Welcome to Dashboard</h2>
        </div>
        <div class="nav">
            <ul>
                <li><a href="#">Furniture</a></li>
                <li><a href="#">Import</a></li>
                <li><a href="#">Export</a></li>
                <li><a href="#">Report</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
        <div class="footer">
            <p>Powered by Your Company</p>
        </div>
    </div>

    <?php
    include('footer.php');
    
    ?>
<!-- </body>
</html> -->
