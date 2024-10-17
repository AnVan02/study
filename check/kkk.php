<?php
// Hàm kiểm tra số chẵn hay lẻ
function isEven($number) {
    return $number % 2 == 0;
}

// Lấy tham số từ URL (GET)
$number = isset($_GET['token']) ? intval($_GET['token']) : null;

if ($number !== null) {
    if (isEven($number)) {
        // Nếu số là chẵn, chuyển hướng đến trang result.php
        header("Location: result.php?number=$number");
        exit(); // Dừng việc thực thi để không chạy tiếp
    }
    // Nếu số lẻ, không làm gì cả, không hiển thị kết quả
} else {
    // Nếu không có tham số 'token' trong URL
    echo "Vui lòng nhập một số!";
}
?>
