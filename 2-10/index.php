<?php
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    print "三角形の面積は".$area."だよ。";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
echo '<br>';
?>


<?php
function THT($base, $width, $height){
    $area = $base * $width * $height;
    print "直方体の面積は".$area."です。";
}

THT(5,10,8);
echo '<br>';
?>

<?php
echo "ハッシュ化とは、元のデータから一定の計算手順に従ってハッシュ値と呼ばれる規則性のない固定長の値を求めてその値によって元のデータを置き換えること。パスワードによく使用される。";
echo '<br>';
echo "総合テストとはソフトウェアおよびシステムの検証手法の一つ。構築したシステムが全体で予定通りの機能を満たしているかなどを検証する。";
echo '<br>';
echo "デバッグとはプログラムが使用や開発者の意図に照らして誤った動作をする際に、その様な動作を引き起こすプログラム上の欠陥、誤りのこと。";