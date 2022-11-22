<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakura Project</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <style>
        #main{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    
    <nav id="main">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="index2.php">Previous</a></li>
            <li class="page-item"><a class="page-link" href="index.php">Home</a></li>
            <li class="page-item"><a class="page-link" href="index1.php">FirstPage</a></li>
            <li class="page-item"><a class="page-link" href="index2.php">SecondPage</a></li>
            <li class="page-item"><a class="page-link" href="index1.php">Next</a></li>
        </ul>
    </nav>
    
<?php
    $t = date("H");
        echo "<p>The hour (of the server) is " . $t; 

    if ($t < "10") {
        echo "<br>Have a good morning!";
    } elseif ($t < "20") {
        echo "<br>Have a good day!";
    } else {
        echo "<br>Have a good night!";
    }
?>

<?php  
for ($x = 0; $x <= 10; $x++) {
  echo "<br> The number is: $x <br>";
}
?> 
    
</body>
</html>