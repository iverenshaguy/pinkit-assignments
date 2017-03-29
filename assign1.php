<!DOCTYPE html>
<html>
<head>
<title>Convert Decimal to Binary</title>
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
    function decimal_binary($dec){
        $binary;
        while($dec >= 1){
            $rem = $dec % 2;
            $dec /= 2;
            $binary = $rem.$binary;
        }
        if($binary == null){
            $binary = 0;
        }
        return $binary;
    }
?>

<form method="post">
    <input type="number" name="num" placeholder="Enter the number" required><br><br>
    <input value="<?php $dec = 0;
        if(isset($_POST['submit'])) {
            $dec = $_POST['num'];
            echo decimal_binary($dec);}?>" readonly><br><br>
    <input type="submit" name="submit" id="button" value="SUBMIT">
</form>

</body>
</html>
