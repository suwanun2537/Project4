<?php
//ราคาสินค้า  จำนวนสินค้า  ส่วนลด
//ถ้าราคารวม > 120 ลด 2%
//ถ้าราคารวม > 300 ลด 3%
echo  ""
$price = 100;
$quantity= 3;
$totalprice = $price * $quantity;
$nettotalprice = 0;

if($totalprice > 120 && $totalprice <= 300 ) {
    $nettotalprice = $totalprice - ($totalprice * 0.02) ;
}else if ($totalprice > 300){
    $nettotalprice = $totalprice - ($totalprice * 0.03) ;
}
    echo "ราคา : " .$price  ."บาท<br>";
    echo "จำนวน : " .$quantity . "ชิ้น<br>";
    echo "ราคารวม : " .$totalprice  ."บาท<br>";
    echo "ราคาสุทธิ : " .$nettotalprice . "บาท<br>";



?>