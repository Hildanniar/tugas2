<?php
class Book {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo " the book is {$this->name} and the color is {$this->color}.";
  }
}

// Fiksi is inherited from Book
class Romance extends Book {
  public function message() {
    echo "Dilan";
  }
}
$romance = new Romance("Romance", "Blue");
$romance->message();
$romance->intro();
?>