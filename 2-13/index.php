<?php
$x = 6.4;
echo ceil($x);
?>

<?php
$x = 6.2;
echo floor($x);
?>

<?php
$x = 6.5;
echo round($x);
?>

<?php
echo pi();

function circleArea($r) {
    $circle_area = $r * $r * pi();
    echo $circle_area; 
}

circleArea(3);
echo '<br>';
?>

<?php
echo mt_rand(1,50);
?>

<?php
$str = "dokidoki";
echo strlen($str);
?>

<?php
$str = "kidonaoki";
echo strpos($str, "a");
?>

<?php
$str = "kidonaoki";
echo substr($str, -2, 2);
?>

<?php
$str = "kidonaoki";
echo str_replace("kido", "KIDO", $str);
?>

<?php
$str = "あいうえお";
echo mb_strlen($str);
?>

<?php
$name = "木戸直輝";
$limit_number = 40;

printf("%sの残りの時間はあと%dです", $name, $limit_number);
?>

<?php
echo '<br>';
$limit_hour = 10;
$limit_minute = 5;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';
$limit_hour = 3;
$limit_minute = 5;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);
?>

<?php
echo '<br>';
$limit_hour = 5;
$loimit_minute = 10;
printf("残り%02d時間%02d分", $limit_hour, $limit_minute);

echo '<br>';
$limit_time = sprintf("残り%02d時間%02d分", $limit_hour, $limit_minute);
 echo $limit_time;
 ?>

 <?php
 echo '<br>';
 echo "PostgreSQLとは拡張性とSQL準拠を強調するフリーでオープンソースのリレーナショナルデータベース管理システムのことであり、oracleSQLとはOracleという会社の開発データベース管理システムに関して使用されるSQL言語のこと。";
 echo '<br>';
 echo "TortoiseGitとはGitをより扱いやすくするために開発されたWindows用ソフトウェアのことで、TortoiseSVNとはApacheSubversionのバージョン管理システムの無料でオープンソースのWindows版クライアントのこと。";
 echo '<br>';
 echo "外部設計とは基本設計とも呼ばれ、一般的には外部設計までが上流工程となる。基本的にユーザーに向けた仕様を設計するのが外部設計である。一方、内部設計は外部設計を基にシステム内部の動作や機能などのユーザーから見えにくい詳細な部分の設計を行う。つまり、外部設計の結果をプログラミングしやすくするのが内部設計の役割と言える。";
 ?>
