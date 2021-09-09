<?php
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["Novel terbitan Andrea Hirata ini menceritakan mengenai kehidupan orang-orang biasa. Sepuluh anak kecil tumbuh sederhana tanpa gelimang harta di Kota Belantik. Naif dan jauh dari kejahatan, begitulah Andrea menceritakan Kota Belantik"];
printIterable($arr);
?>