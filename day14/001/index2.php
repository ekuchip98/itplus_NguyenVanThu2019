<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .page-wrap {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<?php
        echo "<br> in  POST";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

    if(!empty($_POST) && isset($_POST["usd"]) && isset($_POST["tygia"]))
    {
        $usd = $_POST["usd"];
        $gia = $_POST["tygia"];
        $tinh = $usd * $gia;
        if($usd > 0 && $gia > 0)
            echo "Số tiền quy đổi ".$tinh;
        else
            echo "Nhập không đủ trường dl";
    }
?>
<div class="page-wrap">
    <form name="demo" action="" method="post">
        <p>
            <label>USD</label>
            <input type="text" name="usd" value="" placeholder="Nhập USD">
        </p>
        <p>
            <label>Tỷ giá</label>
            <input type="text" name="tygia" value="" placeholder="Nhập tỷ giá 1 USD = ? VND">
        </p>
        <p>
            <input type="submit" name="submit" value="Quy đổi">
        </p>
    </form>
</div>
</body>
</html>