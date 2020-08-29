<?php
$num = 0;
while($num < 10) {
    echo $num;
    $num++;
}
?>

<?php
$num = 0;
do {
    echo $num;
    $num++;
} while($num < 10);
?>

<?php
for($i=0;$i<10;$i++){
    echo $i;
}
echo '<br>';
?>

<?php
$num = 1;
while($num < 101){
    echo $num;
    $num++;
    echo '<br>';
}
?>

<?php
echo "1.サブクエリとはデータベースの問い合わせ文の内部に含まれる別の問い合わせ文のこと。";
echo '<br>';
echo "2.Bootstrapとはコンピュータシステムの電源を入れてからOSを起動して利用可能な状態になるまで自動的に実行される処理のこと。";
echo '<br>';
echo "3.ライブラリとは複数のプログラムを再利用できるようにまとめたもので、フレームワークは枠組みを準備することで開発作業を楽にしてくれるものである。";
?>