<?php
interface Book {
  public function makeColor();
}

class Life implements Book {
  public function makeColor() {
    echo "Buku dilan berwarna biru sedangkan buku orang-orang biasa berwarna kuning";
  }
}

$animal = new Life();
$animal->makeColor();
?>