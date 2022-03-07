<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


                <form method="post" action=" ">
                        <select name="flower[ ]" multiple>
                                <option value="flower">FLOWER</option>
                                <option value="rose">ROSE</option>
                                <option value="lilly">LILLY</option>
                                <option value="jasmine">JASMINE</option>
                                <option value="lotus">LOTUS</option>
                                <option value="tulips">TULIPS</option>
                        </select>
                        <input type="submit" name="submit" value=Submit>
                </form>

<?php
        foreach ($_POST['flower'] as $names)
        {
                echo "You are selected $names<br/>";
        }

?>




</body>
</html>