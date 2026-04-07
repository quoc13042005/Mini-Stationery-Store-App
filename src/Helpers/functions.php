<?php
function toVND($number)
{
    return number_format($number, 0, ',', '.') . 'đ';
}

function displayLabel($qty)
{
    if ($qty <= 0) return "<b style='color:red;'>[Hết hàng]</b>";
    if ($qty < 10) return "<b style='color:orange;'>[Sắp hết]</b>";
    return "<b style='color:green;'>[Còn hàng]</b>";
}

function collectSummary($data)
{
    $sum_money = 0;
    foreach ($data as $item) {
        $sum_money += ($item['price'] * $item['qty']);
    }
    return [
        'total' => count($data),
        'value' => $sum_money
    ];
}

function getCategoryCapital($data)
{
    $report = [];
    foreach ($data as $item) {
        $type = $item['cat'] ?? 'Khác';
        if (!isset($report[$type])) {
            $report[$type] = 0;
        }
        $report[$type] += ($item['price'] * $item['qty']);
    }
    return $report;
}