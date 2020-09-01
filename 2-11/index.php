<form action="result.php" method="get">
  名前：<input type="text" name="my_name" />
  <br>
  メールアドレス：<input type="text" name="my_email">
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  <input type="submit" value="送信" />
</form>

<?php
echo '<br>';
echo "仕様書・設計書とは、ソフトウェアや情報システム、サービスなどを開発する際に、備えるべき機能やその性能、特性、満たすべき要件などを図表や文章で記述する文書のこと。";
echo '<br>';
echo "Gitとはオープンソースの分散バージョン管理システムの一つで、複数の開発者が共同で一つのソフトウェアを開発する際などに、ソースコードやドキュメントなどの編集履歴を統一的に管理するのに用いられる。";
echo '<br>';
echo "マージツールとは、FDLファイルやDTDファイルの変更内容をMDLファイルにマージできる機能のこと。"
?>