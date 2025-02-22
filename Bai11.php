
    <?php

        $dien = 120;
        $tiendien = 0;
        $gia_lan_1 = 1.678;
        $gia_lan_2 = 1.734;
        $gia_lan_3 = 2.014;
 if($dien <= 50) {
  $tiendien = $dien * $gia_lan_1;
}
else if($dien > 50 && $dien <= 100) {
  $tiendien = $dien * $gia_lan_2;
}
else if($dien > 100) {
  $tiendien = $dien * $gia_lan_3;
}
else {
  echo "Mức Điện không hợp lệ";
}
echo "Tiền điện phải trả: $tiendien VND";

?>
