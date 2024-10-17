<?php

function isEven($number) {
    return $number % 2 == 0;
}
$number = isset($_GET['token']) ? intval($_GET['token']) : null;
echo "Giá trị của number: ".$number . "<br>"


?>


<?php
// Kiểm tra nếu có tham số 'number' trong URL
if(isset($_GET['number'])) {
    // Lấy giá trị của tham số 'number' từ URL
    $number = intval($_GET['number']);

    // Kiểm tra số chẵn hay lẻ
    if($number % 2 == 0) {
        echo "Số $number là số chẵn.";
    } else {
        echo "Số $number là số lẻ.";
    }
} else {
    echo "Vui lòng cung cấp một số trong URL, ví dụ: ?number=5";
}
?>
