<?php
// Kiểm tra nếu có tham số 'token' trong URL
if (isset($_GET['token'])) {
    // Lấy giá trị từ URL và ép kiểu sang số nguyên
    $number = filter_var($_GET['token'], FILTER_VALIDATE_INT);

    // Kiểm tra nếu số là hợp lệ
    if ($number === false) {
        echo "<p>Giá trị của 'token' không hợp lệ. Vui lòng nhập một số nguyên hợp lệ.</p>";
    } else {
        // Kiểm tra nếu số là chẵn hay lẻ
        if ($number % 2 == 0) {
            // Nếu số là chẵn, chuyển hướng tới 1.php
            header("Location: 1.html");
            exit(); // Dừng thực thi mã sau khi chuyển hướng
        } else {
            // Nếu số là lẻ, in ra kết quả
            header("Location: số lẽ : lỗi ");
            
        }
    }
} else {
    // Nếu không có tham số token, thực hiện chuyển hướng
    header("Location: 1.html");
    exit(); // Dừng thực thi mã sau khi chuyển hướng
}
?>
