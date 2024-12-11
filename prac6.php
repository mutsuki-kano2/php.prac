<?php
$a=1;
function tasuichi(){
   global $a;   //この一行を追加します
   print ($a+1);
}
tasuichi();
