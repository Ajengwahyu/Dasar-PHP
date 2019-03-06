<?php
  $arrwarna = array("Blue", "Black","Red","Yellow","Green");

  echo "Menampilkan isi array denga for : <br>";
  for ($i=0; $i<count($arrwarna) ; $i++) {
    echo "Do you like <font color=$arrwarna[$i]>". $arrwarna[$i]."</font> ?<br>";
  }

  echo "<br>Menampilkan isi array dengan foresch : <br>";
  foreach ($arrwarna as $warna) {
    echo "Do you like <font color=$warna>". $warna ."</font>
    ?<br>";
  }
?>
