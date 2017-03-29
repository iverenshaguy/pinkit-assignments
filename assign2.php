<!DOCTYPE html>
<html>
<head>
<title>Grading System</title>
<style>
        form {
            width: 300px;
            margin: auto;
            padding-top: 100px;
        }
        
        input {
            padding: 8px 3px;
            width: 100%;
        }
        
        #button {
            width: 103%;
        }
</style>
</head>

<body>

	<?php
	//We simply use the switch or if...else--elseif statement.

	function getgrade($score) {
  	/*switch ($score) {
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
    
  		if ($score > 79 && $score <= 100) {
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

	?>

	<form method="post">
    <input type="number" name="num" placeholder="Enter the score" required><br><br>
    <input value="<?php
				if(isset($_POST['submit'])) {
            $score = $_POST['num'];
            echo getgrade($score);}?>" readonly><br><br>
    <input type="submit" name="submit" id="button" value="SUBMIT">
	</form>
</body>

</html>
