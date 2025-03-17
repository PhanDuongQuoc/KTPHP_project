<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Sinh Viên</title>
    <link rel="stylesheet" href="assets/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f9;
        }

        .navbar {
            display: flex;
            justify-content: center;
            background: #007bff;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            margin: 0 10px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.3s;
        }

        .navbar a:hover {
            background: #0056b3;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="views/index.php" target="contentFrame">📋 Quản lý Sinh Viên</a>
        <a href="views/hocphan.php" target="contentFrame">📚 Quản lý Học Phần</a>
        <a href="views/login.php" target="contentFrame">📝 Đăng ký Học Phần</a>
        <a href="views/login.php" target="contentFrame">Đăng nhập</a>
    </div>

    <div class="container">
        <iframe name="contentFrame" src="views/index.php"></iframe>
    </div>

</body>
</html>
