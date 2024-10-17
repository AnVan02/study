<?php
// Hàm kiểm tra số chẵn hay lẻ
function isEven($number) {
    return $number % 2 == 0;
}

// Lấy số từ URL (GET)
$number = isset($_GET['token']) ? intval($_GET['token']) : null;

// Khởi tạo thông báo kết quả
$resultMessage = "";

// Kiểm tra số và hiển thị thông báo tương ứng
if ($number !== null) {
    if (!isEven($number)) {
        // Nếu số là lẻ, chuyển hướng về trang index.html
        header("Location: meme.php");
        exit(); // Dừng việc thực thi code để không chạy tiếp
    } else {
        // Nếu số là chẵn, hiển thị thông báo lỗi
        $resultMessage = "Số chẵn: Có lỗi!";
    }
} else {
    // Nếu không có tham số token trong URL
    $resultMessage = "Vui lòng nhập một số!";
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả kiểm tra số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h3 {
            color: #333;
        }
        p {
            font-size: 18px;
            color: #007bff;
        }
        a {
            text-decoration: none;
            font-size: 16px;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h3>Kết quả kiểm tra số</h3>
    <!-- Chỉ hiển thị thông báo khi có giá trị thông báo -->
    <?php if ($resultMessage): ?>
        <p><?php echo $resultMessage; ?></p>
    <?php endif; ?>
    <a href="index1.html">Trở lại</a>
</body>
</html>
