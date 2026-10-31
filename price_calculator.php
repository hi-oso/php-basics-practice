<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $product_name = "ノートパソコン";
    $price = 80000;
    $quantity = 2;
    $tax_rate = 0.1;

    echo "商品名: $product_name<br>";
    echo "単価: " . number_format($price) . "円<br>";
    echo "数量: " . $quantity . "個<br>";
    $subtotal = $price * $quantity;
    echo "小計: " . number_format($subtotal) . "円<br>";
    $tax_amount = $subtotal * $tax_rate;
    echo "消費税(10%): " . number_format($tax_amount) . "円<br>";
    $total = $subtotal + $tax_amount;
    echo "<b>合計金額: " . number_format($total) . "円</b><br>";
    ?>
</body>

</html>