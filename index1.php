<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra Số Chẵn hoặc Lẻ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Kiểm tra số chẵn hoặc lẻ từ URL</h1>

    <?php
    // Kiểm tra nếu có tham số 'token' trong URL
    if (isset($_GET['token'])) {
        // Lấy giá trị từ URL
        $number = (int)$_GET['token']; // Ép kiểu sang số nguyên

        // Kiểm tra nếu số là chẵn hay lẻ
        if ($number % 2 == 0) {
            echo "<p>Kết quả: Số $number là số chẵn.</p>";
        } else {
            echo "<p>Kết quả: Số $number là số lẻ.</p>";
        }
    } else {
        echo "<p>Không có số nào được nhập trong URL.</p>";
    }
    ?>
</body>
</html>
