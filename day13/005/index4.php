<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Các hàm thông dụng của mảng
    count(), unset(), is_array(), empty(), imlode(), explode()
    ...
    serialize(), unserialize();
</pre>
<?php
    $tiente = ["USD", "AUD", "EURO", "HKD"];
    echo "<pre>";
    print_r($tiente);
    echo "</pre>";

    //explode() chuyển mảng thành 1 chuỗi
    $demo = "Hà Nội, Bắc Giang, Thái Bình";
    $demo1 = explode(", ",$demo);
    echo "<pre>";
    print_r($demo1);
    echo "</pre>";

    //Lưu trữ mảng trong csdl
    $tiente1 = serialize($tiente);
    var_dump($tiente1);
    //Giải lưu trữ mảng trong csdl
    $tiente2 = unserialize($tiente1);
    echo "<pre>";
    print_r($tiente2);
    echo "</pre>";
?>
</body>
</html>