
    <?php
 $weight = 70;
 $height = 1.75;

    $bmi = $weight/($height*$height);
 if ($bmi <= 18.5) {
    $output = "Thiếu cân";

  } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
    $output = "Bình Thường";

  } else if ($bmi > 24.9 AND $num<=29.9) {
    $output = "Thừa Cân";

  } else if ($bmi > 30.0) {
    $output = "Béo Phì";
  }
  echo "Giá Trị BMI Của bạn là  ". $bmi . "  Và bạn là 1 người : $output "; 
?>
