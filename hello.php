<?php

$post = array();

echo "レビュー数:0";
echo "[0]レビューを書く";
echo "[1]レビューを読む";
echo "[2]アプリを終了する";
$input = trim(fgets(STDIN));

echo "ジャンルを入力してください\n";
$post['genre'] = trim(fgets(STDIN));
echo "タイトルを入力してください\n";
$post['title'] = trim(fgets(STDIN));
echo "感想を入力してください\n";
$post['review'] = trim(fgets(STDIN));
$line = "----------------";

echo "ジャンル：{$post['genre']}\n{$line}\n";
echo "タイトル:{$post['title']}\n{$line}\n";
echo "感想：\n{$post['review']}\n{$line}\n";

?>
