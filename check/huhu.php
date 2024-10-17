<?php
// Lấy tham số từ URL (GET)
$number = isset($_GET['number']) ? intval($_GET['number']) : null;

if ($number !== null) {
    // Hiển thị kết quả nếu số là chẵn
    echo "Số bạn đã nhập là: " . $number . ". Đây là một số chẵn.";
} else {
    // Nếu không có tham số 'number' trong URL
    echo "Không có số hợp lệ để hiển thị!";
}
?>
