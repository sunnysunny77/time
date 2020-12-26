<!DOCTYPE html>
<html>

<body>

  <?php


  $words = ["oh", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen", "twenty", "thirty", "fourty", "fifty"];

  $arr = [ date("H") , date("i") ];

  if ($arr[0] >= 1 && $arr[0] <= 11) {
    $arr[2] = "am";
    $arr[0] = $words[$arr[0]];
  } elseif ($arr[0] >= 13) {
    $arr[2] = "pm";
    $arr[0] = $words[$arr[0] - 12];
  } elseif ($arr[0] === 0) {
    $arr[2] = "am"; 
    $arr[0] = $words[12];
  } elseif ($arr[0] === 12) {
    $arr[2] = "pm"; 
    $arr[0] = $words[12];
  } 

  if ($arr[1] === 0 ) {
    echo $arr[0] . "&nbsp;" . $arr[2];
  } elseif ($arr[1] >= 1 && $arr[1] <= 9) {
    $arr[1] = $words[0] . "&nbsp;" . $words[ltrim($arr[1], '0')];
    echo $arr[0] . "&nbsp;" . $arr[1] . "&nbsp;" . $arr[2];
  } elseif ($arr[1] >= 10 && $arr[1] <= 19) {
    $arr[1] = $words[$arr[1]];
    echo $arr[0] . "&nbsp;" . $arr[1] . "&nbsp;" . $arr[2];
  } else if ($arr[1] >= 20) {
    if ($arr[1] % 10 === 0 ) {
      $t = $arr[1] / 10 - 2 + 20;
      $arr[1] = $words[$t];
      echo $arr[0] . "&nbsp;" . $arr[1] . "&nbsp;" . $arr[2];
      } else {
      $r = $arr[1] / 10 - 2 + 20;
      $t = $arr[1] % 10;
      $arr[1] = $words[$r] . "&nbsp;" . $words[$t];
      echo $arr[0] . "&nbsp;" . $arr[1] . "&nbsp;" . $arr[2];
      }
  } 




  ?>

</body>

</html>