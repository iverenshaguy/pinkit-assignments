<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
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
    // if (isset($_POST['submit'])) didn't work for me. 
    //I need an explanation
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //if the request method to the server is 'post' then echo the code below.
            //I used post so that the input won't show as part of my request url.
            //htmlspecialchars protects my form by converting any some unwanted characters like < to &lt etc.
            //(int) also protects my code by converting any input to integer.
            echo 'Hi '.htmlspecialchars($_POST['name']).'.'.'<br>';
            echo 'You are '.(int)$_POST['age'].' years old.'.'<br>';
            echo 'You live in '.htmlspecialchars($_POST['city']).'.';
        }
    ?>
    <form method="post">
        <input type="text" name="name" placeholder="Name" required><br><br>
        <input type="text" name="age" placeholder="Age" required><br><br>
        <input type="text" name="city" placeholder="City" required><br><br>
        <input type="submit" name="Submit" id="button" value="SUBMIT">
    </form>
    
</body>

</html>
