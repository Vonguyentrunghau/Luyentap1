
    <?php
$income = 15000000;
$thue = 0;
if ($income <= 10000000){
$thue = 5;}
elseif ($income > 10000000){
$thue = 10;}
elseif ($income > 20000000){
$thue = 20;}
$sthue = $income * ($thue / 100);
$sauthue = $income - $sthue;
echo "Thuế phải nộp là: $sthue<br>
Thu nhập ròng sau khi trừ thuế là: $sauthue"
?>
</body>
</html>