<?php
class Book {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

}

$fiksi = new Book();
$fiksi->set_name('Orang-orang biasa');
$fiksi->set_color('Yellow');
echo "Name: " . $fiksi->get_name();
echo "<br>";
echo "Color: " . $fiksi->get_color();
?>