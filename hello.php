<?php

echo "レビュー数:0";
echo "[0]レビューを書く\n";
echo "[1]レビューを読む\n";
echo "[2]アプリを終了する\n";
$input = intval(trim(fgets(STDIN)));

if ($input === 0){
  $post = array();
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
}elseif($input === 1){
  echo "レビューを読む";
}elseif($input === 2){
  echo "アプリ終了";
}else{
  echo "無効な値";
}



?>
