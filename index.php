<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," Gramedia"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Judul {
    // Access modifiers Public
    // properti
  public $judul,
            $genre,
            $harga;

  // contruktor
  function __construct ($judul, $genre, $harga) {
    $this->judul = $judul;
    $this->genre = $genre;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Judul Buku : Judul : {$this->judul} | Genre : {$this->genre} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Judul2 extends Judul implements Model{
    public  function Warna (){
        echo "<hr>Buku yang ready di toko kami yaitu";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $satu = 100, $dua = 150, $tiga = 200, $empat = 250, $lima = 300;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Bumi <br> Bulan <br> Matahari <br> Bintang <br> Ceros";
        echo "<hr>";
    }
}

// objek
$judul1 = new Judul2("Hujan,Pulang,Pergi,Bumi", "Slice of life", 130000);
$judul2 = new Judul2("Bulan", "Slice of life", 79000);
$judul2 -> Warna();
Stok::staticMethod();
echo "Untuk Buku Bumi Terjual : " . Terjual::$satu;
echo "<br> Untuk Buku Bulan Terjual : " . Terjual::$dua;
echo "<br> Untuk Buku Matahari Terjual : " . Terjual::$tiga;
echo "<br> Untuk Buku Bintang Terjual : " . Terjual::$empat;
echo "<br> Untuk Buku Ceros Terjual : " . Terjual::$lima;
echo "<hr>";