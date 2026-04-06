<?php
require __DIR__ . '/../src/Data/products.php';
require __DIR__ . '/../src/Helpers/functions.php';
$summary = collectSummary($products);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Stationery Home</title>
    <style>
        .box {
            border: 1px solid #ccc;
            padding: 20px;
            display: inline-block;
            margin-right: 10px;
            border-radius: 5px;
            background: #eef;
        }

        nav {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php">Trang Chủ</a> | <a href="list.php">Danh Sách</a>
    </nav>

    <h1>Chào mừng đến với Quản lý Văn phòng phẩm Quốc</h1>

    <h3>Khu vực thống kê tổng quan:</h3>
    <div class="box">
        <p>Số dòng sản phẩm</p>
        <h2><?= $summary['total'] ?></h2>
    </div>
    <div class="box">
        <p>Tổng giá trị tồn kho</p>
        <h2><?= toVND($summary['value']) ?></h2>
    </div>
</body>

</html>