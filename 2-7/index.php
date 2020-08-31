<?php
$country_1 = "America";
$country_2 = "Japan";
$country_3 = "China";
$country_4 = "Korea";

echo $country_1;
echo $country_2;
echo $country_3;
echo $country_4;
?>

<?php
$countries = ["America", "Japan", "China", "Korea"];

echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
echo '<br>';
?>

<?php
$colors= ["red" => "赤", "blue" => "青", "green" => "緑"];
$color= ["red" => "赤", "blue" => "青", "green" => "緑"];
$color["yellow"] = "黄色";

var_dump($colors);
var_dump($color);
?>

<?php
echo "<br>";
echo "1.プルリクエストとはコードの変更をレビュワーに通知し、マージを依頼する機能のこと。";
echo "<br>";
echo "2.Get Flowとはブランチの作成やマージに決まりを設けることで、複数人での開発時にもブランチを分かりやすい状態に保つことができ、不用意なマージによる問題を避けることが可能である。";
echo "<br>";
echo "3.CRONとは常駐プログラムの一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもののこと。";

?>