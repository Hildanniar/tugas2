<?php
class greeting {
  public static function welcome() {
    echo "Novel Dilan : Dia Adalah Dilanku Tahun 1990 bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Mile";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();
?>