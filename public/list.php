<?php
require __DIR__ . '/../src/Data/products.php';
require __DIR__ . '/../src/Helpers/functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Danh sách dữ liệu</title>
</head>

<body>
    <nav>
        <a href="index.php">Trang Chủ</a> | <a href="list.php">Danh Sách</a>
    </nav>

    <h1>Chi tiết kho hàng</h1>
    <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: left;">
        <thead>
            <tr style="background: #eee;">
                <th>Mã</th>
                <th>Tên</th>
                <th>Loại</th>
                <th>Giá</th>
                <th>Kho</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $row): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['cat'] ?></td>
                    <td><?= toVND($row['price']) ?></td>
                    <td><?= $row['qty'] ?></td>
                    <td><?= displayLabel($row['qty']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>