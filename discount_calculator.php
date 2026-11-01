<?php
$original_price = 5000;
$discount_rate = 0.20;

//割引後の価格を計算
$discount_price = $original_price * $discount_rare;
$final_price = $original_price - $discount_amount;

//表示
echo "元の価格: " . $original_price . "円<br>";
echo "割引率: " . $discount_rate . "率<br>";
echo "割引後の価格: " . $final_price . "円<br>";
?>

<?php
$number = 11;

if ($number % 2 == 0) {
    echo "$number は偶数です";
} else {
    echo "$numaber は奇数です";
}
?>

<?php
$age = 34;
$is_member = true;
$is_student = false;

//条件１：　１８歳かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
}

if ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}
?>

<?php
$score = 100;
echo "初期スコア: $score点<br>";

$score += 50;
echo "ボーナスステージクリア: $score点<br>";

$score -= 30;
echo "ダメージを受けた: $score点<br>";

$score *= 2;
echo "スコア2倍アイテムを使用: $score点<br>";

echo "最終スコア: $score点<br>";
?>