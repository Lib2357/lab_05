<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 50px; }
        .container { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .info { color: #007bff; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <p>Thông tin từ Model: <span class="info"><?php echo $studentInfo; ?></span></p>
    </div>
</body>
</html>