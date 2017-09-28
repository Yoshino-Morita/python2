<?php
class Review{
 public static function get_review_count(){
  return 0 ;
 }
}
$review = new Review();
var_dump($review);

echo Review::get_review_count(),PHP_EOL;
?>
