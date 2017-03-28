<!DOCTYPE html>
<html>
<head>
<title>Grading System</title>
</head>

<body>

<?php
//We simply use the switch or if...else--elseif statement.

function getgrade($score) {
  	/*switch ($score) {
      case (!is_int($score)):
        echo ""Please enter a valid number";
        break;
  		case $score > 79 && $score <= 100:
  			echo "A";
  			break;
  		case $score > 69 && $score <= 79:
  			echo "B";
  			break;
  		case $score > 59 && $score <= 69:
  			echo "C";
  			break;
  		case $score > 49 && $score <= 59:
  			echo "D";
  			break;
      case $score > 39 && $score <= 49:
  			echo "E";
  			break;
      case $score >= 0 && $score <= 39:
  			echo "F";
  			break;
  		default:
  			echo "Please enter a valid number";
  	}*/
    
  		if (!is_int($score)) {
  			echo "Please enter a valid number";
      } else if ($score > 79 && $score <= 100) {
  			echo "A";
      } else if ($score > 69 && $score <= 79) {
  			echo "B";
      } else if ($score > 59 && $score <= 69) {
  			echo "C";
      } else if ($score > 49 && $score <= 59) {
  			echo "D";
      } else if ($score > 39 && $score <= 49) {
  			echo "E";
      } else if ($score >= 0 && $score <= 39) {
  			echo "F";
      } else {
  			echo "Please enter a valid number";
      }   
  }

  getgrade(81);

?>

</body>


</html>