<?php
class Review{
 public static function get_review_count(){
  return 0 ;
 }

 public function show_review(){
  echo "ジャンル:" . "映画\n";
  echo "-----------------------\n";
  echo "タイトル:" . "るろうに剣心\n";
  echo "-----------------------\n";
  echo "感想:\n";
  echo "アクションがすごい\n";
  echo "-----------------------\n";
 }
}
$review = new Review();
$review->show_review();

echo Review::get_review_count(),PHP_EOL;
?>
