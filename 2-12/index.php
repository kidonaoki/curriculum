<form action="result.php" method="post">
    お名前:<input type="text" name="my_name" /><br>
    ご希望景品:
    <input type="radio" name="prize" value="A賞">A賞
    <input type="radio" name="prize" value="B賞">B賞
    <input type="radio" name="prize" value="C賞">C賞
    <br>
    個数:
    <select name="number">
        <?php for ($i=1;$i<=10;$i++){ ?>
            <option value="<?php echo $i; ?>">
                <?php echo $i; ?>
            </option>
    <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込"/>
</form>

<?php
echo "モジュールとは、ハードウェアやソフトウェアにおける、ひとまとまりの機能・要素のこと。";
echo '<br>';
echo "バージョン管理システムとはファイルの変更履歴の保存や管理を行うソフトウェアのことである。";
echo '<br>';
echo "サブクエリとは、データベースなどのクエリ文の内部に含まれる、別の問い合わせ文のこと。";
?>
