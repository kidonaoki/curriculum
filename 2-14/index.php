<?php
$members = ["kido", "sasaki", "kimura", "yoshida", "uchida"];
echo count($members);
echo '<br>';
?>

<?php
$members = ["kido", "sasaki", "kimura", "yoshida", "uchida"];
sort($members);
var_dump($members);
echo '<br>';
?>

<?php
$members = ["kido", "sasaki", "kimura", "yoshida", "uchida"];
if (in_array("kido", $members)) {
    echo "木戸さんがいるよ！";
} else {
    echo "木戸さんはいないよ！";
}
echo '<br>';
?>

<?php
$members = ["kido", "sasaki", "kimura", "yoshida", "uchida"];
$atstr = implode("@", $members);
var_dump($atstr);
echo '<br>';

$re_members = explode("@", $atstr);
var_dump($re_members);
echo '<br>';
?>

<?php
echo '<br>';
echo "要件定義とはシステムやソフトウェアの開発において、実装すべき機能や満たすべき性能などを明確にしていく作業のこと。";
echo '<br>';
echo "単体テストとはプログラムを検証する作業の中でも、プログラムを手続や関数といった個々の機能ごとに分割し、そのそれぞれについて動作検証を行う手法のこと。結合テストとは、開発中のソフトウェアのテスト手法の一つで、複数のモジュールを組み合わせて行うテストである。個々のモジュールの単体テスト後に行う。";
echo '<br>';
echo "テスト仕様書とはシステムやソフトウェアがクライアントのヒアリングをもとに、創り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメントである。";
?>