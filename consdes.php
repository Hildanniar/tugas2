<?php
class Book {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "Buku ini berjudul {$this->name}.";
  }
}

$fiksi = new Book("Orang-orang biasa");
?>